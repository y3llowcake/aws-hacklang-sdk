all: typecheck

typecheck: 
	hh_client
	echo "\033[1mTYPECHECKER PASSED\033[0m"
