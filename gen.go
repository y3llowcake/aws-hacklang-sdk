package main

import (
	"bytes"
	"encoding/json"
	"fmt"
	"io"
	"io/ioutil"
	"strings"

	"github.com/iancoleman/strcase"
)

func check(err error) {
	if err != nil {
		panic(err)
	}
}

func main() {
	fmt.Println("good lord")
	b, err := ioutil.ReadFile("models/apis/sqs/2012-11-05/api-2.json")
	check(err)
	m := &Model{}
	check(json.Unmarshal(b, m))
	//fmt.Println(m)
	buf := bytes.NewBuffer(nil)
	w := writer{buf, 0}
	w.p("<?hh // strict")
	w.p("namespace slack\\aws\\%s;", m.Metadata["endpointPrefix"])
	w.ln()
	w.p("interface %s {", m.Metadata["serviceId"])
	for _, op := range m.Operations {
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
	for name, shape := range m.Shapes {
		w.p("class %s {", name)
		for mname, member := range shape.Members {
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
			mname = strcase.ToSnake(mname)
			w.p("public %s $%s;", ttype, mname)
		}
		w.p("}")
		w.ln()
	}
	fmt.Println(buf.String())
}

type Model struct {
	Metadata   map[string]string `json:"metadata"`
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
	Shapes map[string]struct {
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
	} `json:"shapes"`
}

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
