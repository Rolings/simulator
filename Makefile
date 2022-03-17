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
	docker-compose exec affiliate_app composer install
npm-install:
	docker-compose exec affiliate_app npm ci
	docker-compose exec affiliate_app /bin/sh -c "npm run development"
init-migrations:
	docker-compose exec affiliate_app php artisan migrate
seed:
	docker-compose exec affiliate_app php artisan db:seed
init-app:
	docker-compose exec affiliate_app php artisan key:generate
nginx-list-update:
	docker-compose exec affiliate_app /usr/bin/python3 ./deploy/deploy_nginx.py
	docker-compose exec affiliate_app nginx -t
	docker-compose exec affiliate_app nginx -s reload