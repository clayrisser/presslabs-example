include silicon.mk

all: build

install:
	@composer install

start: install docker-up

docker-%:
	@$(MAKE) -s -C docker $(shell echo $@ | sed "s/docker-//")

.PHONY: build start ssh
build: docker-build
pull: docker-pull
push: docker-push
ssh: docker-ssh

.PHONY: clean
clean: docker-clean
	-@$(GIT) clean -fXd \
		-e $(BANG)/vendor \
		-e $(BANG)/vendor/**/* \
		-e $(BANG)/web/wp \
		-e $(BANG)/web/wp/**/* \
		-e $(BANG)/web/app \
		-e $(BANG)/web/app/**/* \
		-e $(BANG)/composer.lock $(NOFAIL)
	-@$(RM) -rf vendor/.make $(NOFAIL)

.PHONY: purge
purge: clean
	-@$(GIT) clean -fXd $(NOFAIL)

%:
	@
