#!/bin/bash -x
set -x #echo on

cp api/.env.example api/.env

docker-compose down
docker-compose build
docker-compose up -d

sleep 15

docker-compose exec webapp composer install

docker-compose exec webapp php artisan key:generate
docker-compose exec webapp php artisan migrate:fresh --seed
docker-compose exec webapp php artisan passport:install
docker-compose exec webapp php artisan storage:link
