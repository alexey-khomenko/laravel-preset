docker-up: memory
	docker-compose up -d

docker-down:
	docker-compose down

docker-build: memory
	docker-compose up --build -d
	docker-compose exec php-cli composer install
	docker-compose exec node yarn install
	docker-compose exec node yarn run dev
	docker-compose exec php-cli php artisan migrate
	docker-compose exec php-cli php artisan module:migrate User
	docker-compose exec php-cli php artisan db:seed
	sudo chgrp -R www-data storage bootstrap/cache
	sudo chmod -R ug+rwx storage bootstrap/cache

test:
	docker-compose exec php-cli vendor/bin/phpunit

assets:
	yarn run watch

assets-i:
	docker-compose exec node yarn install

assets-rebuild:
	docker-compose exec node npm rebuild node-sass --force

assets-dev:
	docker-compose exec node yarn run dev

assets-prod:
	docker-compose exec node yarn run prod

queue:
	docker-compose exec php-cli php artisan queue:work

cache:
	docker-compose exec php-cli php artisan config:cache
	docker-compose exec php-cli php artisan route:trans:cache
	docker-compose exec php-cli php artisan view:cache

autoload:
	docker-compose exec php-cli composer dump-autoload -o

clear:
	docker-compose exec php-cli php artisan config:clear
	docker-compose exec php-cli php artisan route:trans:clear
	docker-compose exec php-cli php artisan view:clear
	docker-compose exec php-cli php artisan telescope:prune

horizon:
	docker-compose exec php-cli php artisan horizon

horizon-pause:
	docker-compose exec php-cli php artisan horizon:pause

horizon-continue:
	docker-compose exec php-cli php artisan horizon:continue

horizon-terminate:
	docker-compose exec php-cli php artisan horizon:terminate

memory:
	sudo sysctl -w vm.max_map_count=262144

perm:
	sudo chgrp -R www-data storage bootstrap/cache
	sudo chmod -R ug+rwx storage bootstrap/cache