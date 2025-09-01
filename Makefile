default: build
.PHONY: clean-generated
clean-generated:
	rm -rf generated/

.PHONY: build
build: clean-generated
	php bin/jane-openapi generate -c jane/open_api.php

.PHONY: pull-schema
pull-schema:
	curl --output jane/schema.yaml https://docs.medusajs.com/api/download/admin
	yq jane/schema.yaml -o json > jane/schema.json
	rm jane/schema.yaml
