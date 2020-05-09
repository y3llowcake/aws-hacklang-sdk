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

func genModel(m *Model, w *writer) {
	w.p("<?hh // strict")
	w.p("namespace slack\\aws\\%s;", m.Metadata.EndpointPrefix)
	w.ln()
	w.p("interface %s {", m.Metadata.ServiceID)

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
		w.p("public function %s(%s) %s;", op.Name, op.Input.Shape, out)
	}
	w.p("}")
	w.ln()

	sorted = []string{}
	for k, _ := range m.Shapes {
		sorted = append(sorted, k)
	}
	sort.Strings(sorted)

	for _, name := range sorted {
		shape := m.Shapes[name]
		genTopLevelShape(name, shape, w)
		w.ln()
	}
}

func genTopLevelShape(name string, s Shape, w *writer) {
	w.p("class %s {", name)
	sorted := []string{}
	for k, _ := range s.Members {
		sorted = append(sorted, k)
	}
	sort.Strings(sorted)

	for _, mname := range sorted {
		member := s.Members[mname]
		ttype := member.Shape
		switch member.Shape {
		case "String":
			ttype = "string"
		case "Boolean":
			ttype = "boolean"
		case "Integer":
			ttype = "int"
		default:
		}
		mname := strcase.ToSnake(mname)
		w.p("public %s $%s;", ttype, mname)
	}
	w.p("}")
}

type (
	Shape struct {
		Type     string   `json:"type"`
		Required []string `json:"required"`
		Member   struct {
			Shape        string `json:"shape"`
			LocationName string `json:"locationName"`
		} `json:"member"`
		Members map[string]struct {
			Shape string `json:"shape"`
		} `json:"members"`
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
