package main

import (
	"bytes"
	"fmt"
	"io"
	"io/ioutil"
	"strings"

	"github.com/aws/aws-sdk-go/private/model/api"
	"github.com/iancoleman/strcase"
)

func check(err error) {
	if err != nil {
		panic(err)
	}
}

func main() {
	// https://github.com/aws/aws-sdk-go/blob/v1.36.7/private/model/api/load.go
	l := &api.Loader{}
	apis, err := l.Load([]string{"./models/apis/dynamodb/2012-08-10/api-2.json"})
	check(err)
	for name, api := range apis {
		fmt.Printf("generating %s\n", name)
		buf := bytes.NewBuffer(nil)
		w := &writer{buf, 0}
		genApi(name, api, w)
		fname := fmt.Sprintf("./gen-src/%s.php", name)
		check(ioutil.WriteFile(fname, buf.Bytes(), 0660))
		// break
	}
}

// API: https://github.com/aws/aws-sdk-go/blob/v1.36.7/private/model/api/api.go
// Operations: https://github.com/aws/aws-sdk-go/blob/v1.36.7/private/model/api/operation.go
// Shapes: https://github.com/aws/aws-sdk-go/blob/v1.36.7/private/model/api/shape.go
func genApi(apiName string, a *api.API, w *writer) {
	w.p("<?hh // strict")
	w.p("namespace slack\\aws\\%s;", apiName)
	w.ln()

	// Operations
	w.p("interface %s {", apiName)
	for _, op := range a.OperationList() {
		w.p("public function %s(%s $in): %s;", op.Name, op.InputRef.ShapeName, op.OutputRef.ShapeName)
	}
	w.p("}")
	w.ln()

	// Shapes
	for _, s := range a.ShapeList() {
		// w.p("// shape: %s is a %s", s.ShapeName, s.Type)
		if s.Type == "structure" {
			genStructure(s, w)
		}
	}
}

func genStructure(s *api.Shape, w *writer) {
	w.p("class %s {", s.ShapeName)
	members := hackMembers(s)

	for _, m := range members {
		w.p("public %s%s $%s;", m.nullablePrefix(), hackType(m.ref.Shape), m.name)
	}

	w.p("public function __construct(shape(")
	defaultShape := " = shape()"
	for _, m := range members {
		if m.required {
			defaultShape = ""
		}
		w.p("%s'%s' => %s,", m.nullablePrefix(), m.name, hackType(m.ref.Shape))
	}
	w.p(") $s%s) {", defaultShape) // constructor decl
	for _, m := range members {
		nullable := ""
		if !m.required {
			nullable = " ?? null"
		}
		w.p("$this->%s = $s['%s']%s;", m.name, m.name, nullable)
	}
	w.p("}") // constructor
	w.p("}") // class
	w.ln()
}

func hackMemberName(s string) string {
	return strcase.ToSnake(s)
}

type hackMember struct {
	name     string
	ref      *api.ShapeRef
	required bool
}

func (h hackMember) nullablePrefix() string {
	if h.required {
		return ""
	}
	return "?"
}

func hackMembers(s *api.Shape) []hackMember {
	r := []hackMember{}
	for _, mname := range s.MemberNames() {
		r = append(r, hackMember{
			name:     hackMemberName(mname),
			ref:      s.MemberRefs[mname],
			required: s.IsRequired(mname),
		})
	}
	return r
}

// https://github.com/aws/aws-sdk-go/blob/v1.36.7/private/model/api/shape.go#L372
func hackType(s *api.Shape) string {
	switch s.Type {
	case "structure":
		return s.ShapeName
	case "map":
		return "dict<string, " + hackType(s.ValueRef.Shape) + ">"
	//case "jsonvalue":
	//	return "aws.JSONValue"
	case "list":
		return "vec<" + hackType(s.MemberRef.Shape) + ">"
	case "boolean":
		return "bool"
	case "string", "character", "blob":
		return "string"
	case "byte", "short", "integer", "long":
		return "int"
	case "float", "double":
		return "float"
	case "timestamp":
		return "int"
	//case "timestamp":
	//	s.API.imports["time"] = true
	//	return "*time.Time"
	default:
		panic("Unsupported shape type: " + s.Type)
	}
}

// writer is a little helper for output printing. It indents code
// appropriately among other things.
type writer struct {
	w io.Writer
	i int
}

func (w *writer) p(format string, a ...interface{}) {
	if strings.HasPrefix(format, "}") || strings.HasPrefix(format, ")") {
		w.i--
	}
	i := w.i
	if i < 0 {
		i = 0
	}
	indent := strings.Repeat("  ", i)
	fmt.Fprintf(w.w, indent+format, a...)
	w.ln()
	if strings.HasSuffix(format, "{") || strings.HasSuffix(format, "(") {
		w.i++
	}
}

func (w *writer) ln() {
	fmt.Fprintln(w.w)
}

const genDebug = false

func (w *writer) pdebug(format string, a ...interface{}) {
	if !genDebug {
		return
	}
	w.p(fmt.Sprintf(`echo "DEBUG: %s\n";`, format), a...)
}
