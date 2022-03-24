init: docker-down docker-build docker-up composer-install npm-install init-migrations seed init-app nginx-list-update
up: docker-up
stop: docker-stop
down: docker-down
restart: down up


docker-stop:
	docker-compose stop
docker-build:
	docker-compose build
docker-up:
	docker-compose up -d
docker-down:
	docker-compose down --remove-orphans
composer-install:
	docker-compose exec simulator_app composer install
npm-install:
	docker-compose exec simulator_app npm ci
	docker-compose exec simulator_app npm install sass sass-loader
	docker-compose exec simulator_app /bin/sh -c "npm i @popperjs/core"
	docker-compose exec simulator_app /bin/sh -c "npm run development"
init-migrations:
	docker-compose exec simulator_app php artisan migrate
seed:
	docker-compose exec simulator_app php artisan db:seed
init-app:
	docker-compose exec simulator_app php artisan key:generate