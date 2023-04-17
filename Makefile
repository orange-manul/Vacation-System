.RECIPEPREFIX +=
.DEFAULT_GOAL := help

help:
	@echo "Welcome to IT Support, have you tried turning it off and on again?"

install:
	@composer install

modules:
	@composer install

start:
	@docker compose up -d

migrate:
	@docker exec app php artisan migrate

seed:
	@docker exec app php artisan db:seed --class=UsersTableSeeder; php artisan db:seed --class=VacationsTableSeeder

analyse:
	./vendor/bin/phpstan analyse

nginx:
	@docker exec -it app_nginx bash

php:
	@docker exec -it app bash

mysql:
	@docker exec -it vacation_system_mysql bash
