.PHONY: up down build logs shell install key

up:
	docker compose up -d

down:
	docker compose down

build:
	docker compose build

logs:
	docker compose logs -f

shell:
	docker compose exec app sh

install:
	docker compose run --rm --no-deps app composer install --no-interaction --prefer-dist

key:
	docker compose run --rm --no-deps app php artisan key:generate
