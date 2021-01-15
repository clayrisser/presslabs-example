NAME := presslabs-example
REGISTRY := codejamninja
VERSION := 0.0.1
IMAGE := $(REGISTRY)/$(NAME)

include docker.mk

SSH_COMMAND := /bin/bash

.PHONY: start
start:
	@$(MAKE) -s +start
+start:
	@docker-compose -f docker-compose-start.yaml up $(ARGS)

.PHONY: clean
clean:
	-@docker-compose kill
	-@docker-compose down -v --remove-orphans
	-@docker-compose rm -v
	-@docker-compose -f docker-compose-start.yaml kill
	-@docker-compose -f docker-compose-start.yaml down -v --remove-orphans
	-@docker-compose -f docker-compose-start.yaml rm -v

%:
	@
