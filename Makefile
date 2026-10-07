SHELL := /bin/sh

COMPOSE := docker compose
ENV_FILE := .env.production
ENV_EXAMPLE := .env.production.example
APP_SERVICE := app

.PHONY: help init check-env build up down restart deploy migrate optimize logs status shell

help:
	@printf '%s\n' \
		'make init      Create .env.production from the example' \
		'make build     Build the FrankenPHP production image' \
		'make up        Start the production stack' \
		'make deploy    Build, start, migrate and optimize the application' \
		'make migrate   Run database migrations' \
		'make optimize  Rebuild application caches' \
		'make logs      Follow application logs' \
		'make status    Show service status' \
		'make shell     Open a shell in the application container' \
		'make restart   Restart the production stack' \
		'make down      Stop the production stack'

init:
	@if [ -f "$(ENV_FILE)" ]; then \
		echo "$(ENV_FILE) already exists"; \
	else \
		cp "$(ENV_EXAMPLE)" "$(ENV_FILE)"; \
		chmod 600 "$(ENV_FILE)"; \
		echo "Created $(ENV_FILE). Configure secrets before deployment."; \
	fi

check-env:
	@test -f "$(ENV_FILE)" || (echo "Missing $(ENV_FILE). Run 'make init' first." >&2; exit 1)

build: check-env
	$(COMPOSE) build

up: check-env
	$(COMPOSE) up -d

migrate: check-env
	$(COMPOSE) run --rm $(APP_SERVICE) php pool migrate

optimize: check-env
	$(COMPOSE) run --rm $(APP_SERVICE) php pool boost

deploy: build up migrate optimize
	@echo "Production deployment completed."

logs:
	$(COMPOSE) logs -f $(APP_SERVICE)

status:
	$(COMPOSE) ps

shell: check-env
	$(COMPOSE) exec $(APP_SERVICE) sh

restart: check-env
	$(COMPOSE) restart

down:
	$(COMPOSE) down
