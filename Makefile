all: test

test: typecheck

typecheck: gen
	hh_client
	echo "\033[1mTYPECHECKER PASSED\033[0m"

gen:
	rm -rf ./gen-src
	mkdir gen-src
	go run gen.go
