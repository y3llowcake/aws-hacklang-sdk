package main

import (
	"bytes"
	"encoding/json"
	"fmt"
	"io"
	"io/ioutil"
	"path/filepath"
	"sort"
	"strings"

	"github.com/iancoleman/strcase"
)

func check(err error) {
	if err != nil {
		panic(err)
	}
}

func main() {
	paths, err := filepath.Glob("./models/apis/*/*/api-2.json")
	check(err)
	for _, path := range paths {
		fmt.Printf("generating %s\n", path)
		b, err := ioutil.ReadFile(path)
		check(err)
		m := &Model{}
		check(json.Unmarshal(b, m))
		buf := bytes.NewBuffer(nil)
		w := &writer{buf, 0}
		genModel(m, w)
		fname := fmt.Sprintf("./gen-src/%s.php", m.Metadata.EndpointPrefix)
		check(ioutil.WriteFile(fname, buf.Bytes(), 0660))
	}
}

type (
	named struct {
		defaultValue string
	}
	namespace map[string]*named
)

func defaultValue(t string) string {
	switch t {
	case "string", "blob":
		return `""`
	case "boolean":
		return "false"
	case "integer", "long":
		return "0"
	case "double", "float":
		return "0.0"
	case "structure":
		return "null"
	case "list", "map":
		return "[]"
	case "timestamp":
		return "0"
	default:
		panic(fmt.Sprintf("unable to determine default value for type: %v", t))
	}
}

func genModel(m *Model, w *writer) {
	w.p("<?hh // strict")
	w.p("namespace slack\\aws\\%s;", m.Metadata.EndpointPrefix)
	w.ln()
	w.p("interface %s {", m.Metadata.ServiceID)

	// Operations
	sorted := []string{}
	for k, _ := range m.Operations {
		sorted = append(sorted, k)
	}
	sort.Strings(sorted)

	for _, k := range sorted {
		op := m.Operations[k]
		out := op.Output.Shape
		if out == "" {
			out = "Awaitable<Errors\\Error>"
		} else {
			out = fmt.Sprintf("Awaitable<Errors\\Result<%s>>", out)
		}
		w.p("public function %s(%s): %s;", op.Name, op.Input.Shape, out)
	}
	w.p("}")
	w.ln()

	// Shapes
	ns := namespace{}
	sorted = []string{}
	for k, s := range m.Shapes {
		ns[k] = &named{defaultValue(s.Type)}
		sorted = append(sorted, k)
	}
	sort.Strings(sorted)

	for _, name := range sorted {
		shape := m.Shapes[name]
		genTopLevelShape(name, shape, ns, w)
	}
}

func genTopLevelShape(name string, s Shape, ns namespace, w *writer) {
	switch s.Type {
	case "structure":
		genTopLevelStructure(name, s, ns, w)
	case "string", "blob":
		w.p("type %s = string;", name)
		w.ln()
	case "integer", "timestamp", "long":
		w.p("type %s = int;", name)
		w.ln()
	case "double", "float":
		w.p("type %s = float;", name)
		w.ln()
	case "boolean":
		w.p("type %s = bool;", name)
		w.ln()
	case "list":
		w.p("type %s = vec<%s>;", name, s.Member.Shape)
		w.ln()
	case "map":
		w.p("type %s = dict<%s, %s>;", name, s.Key.Shape, s.Value.Shape)
		w.ln()
	default:
		panic(fmt.Sprintf("unable to determine type for shape: %v", s.Type))
	}
}

func memberShapeToHackType(t string) string {
	switch t {
	case "String":
		return "string"
	case "Boolean":
		return "boolean"
	case "Integer":
		return "int"
	default:
		return t
	}
}

type member struct {
	shapeName    string
	varName      string
	hackTypeName string
}

func (s Shape) sortedMembers() []member {
	sorted := []string{}
	for k, _ := range s.Members {
		sorted = append(sorted, k)
	}
	sort.Strings(sorted)

	members := []member{}
	for _, mname := range sorted {
		members = append(members, member{
			s.Members[mname].Shape,
			strcase.ToSnake(mname),
			memberShapeToHackType(s.Members[mname].Shape),
		})
	}
	return members
}

func genTopLevelStructure(name string, s Shape, ns namespace, w *writer) {
	members := s.sortedMembers()
	w.p("class %s {", name)
	for _, m := range members {
		w.p("public %s $%s;", m.hackTypeName, m.varName)
	}
	w.ln()
	w.p("public function __construct(shape(")
	for _, m := range members {
		w.p("?'%s' => %s,", m.varName, m.hackTypeName)
	}
	w.p(") $s = shape()) {")
	for _, m := range members {
		w.p("$this->%s = $%s ?? %s;", m.varName, m.varName, ns[m.shapeName].defaultValue)
	}
	w.p("}")

	w.p("}")
	w.ln()
}

type (
	Shape struct {
		Type     string   `json:"type"`
		Required []string `json:"required"`
		Member   struct { // type = list
			Shape        string `json:"shape"`
			LocationName string `json:"locationName"`
		} `json:"member"`
		Members map[string]struct { // type = structure
			Shape string `json:"shape"`
		} `json:"members"`
		Key struct { // type = map
			Shape string `json:"shape"`
		} `json:"key"`
		Value struct { // type = map
			Shape string `json:"shape"`
		} `json:"value"`
		Error struct {
			Code           string `json:"code"`
			HTTPStatusCode int    `json:"httpStatusCode"`
			SenderFault    bool   `json:"senderFault"`
		} `json:"error"`
		Flattened bool `json:"flattened"`
		Exception bool `json:"exception"`
	}

	Model struct {
		Metadata struct {
			EndpointPrefix string `json:"endpointPrefix"`
			ServiceID      string `json:"serviceId"`
		} `json:"metadata"`
		Operations map[string]struct {
			Name string `json:"name"`
			Http struct {
				Method     string `json:"method"`
				RequestURI string `json:"requestUri"`
			} `json:"http"`
			Input struct {
				Shape string `json:"shape"`
			} `json:"input"`
			Output struct {
				Shape         string `json:"shape"`
				ResultWrapper string `json:"resultWrapper"`
			} `json:"output"`
			Errors []struct {
				Shape string `json:"shape"`
			} `json:"errors"`
		} `json:"operations"`
		Shapes map[string]Shape `json:"shapes"`
	}
)

const genDebug = false

// writer is a little helper for output printing. It indents code
// appropriately among other things.
type writer struct {
	w io.Writer
	i int
}

func (w *writer) p(format string, a ...interface{}) {
	if strings.HasPrefix(format, "}") {
		w.i--
	}
	i := w.i
	if i < 0 {
		i = 0
	}
	indent := strings.Repeat("  ", i)
	fmt.Fprintf(w.w, indent+format, a...)
	w.ln()
	if strings.HasSuffix(format, "{") {
		w.i++
	}
}

func (w *writer) ln() {
	fmt.Fprintln(w.w)
}

func (w *writer) pdebug(format string, a ...interface{}) {
	if !genDebug {
		return
	}
	w.p(fmt.Sprintf(`echo "DEBUG: %s\n";`, format), a...)
}
