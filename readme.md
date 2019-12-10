# SHOP

## Init docker

> Git
> Required Docker && docker-compose

```sh

$ git clone git@github.com:hoangtm1601/larabase.git
$ cd shop

$ docker-compose up -d
```
## Start Project
Get into docker container
```sh
$ docker-compose exec workspace bash

// Inside docker
$ composer install --no-interaction
$ chmod 777 -R storage
$ chmod 777 -R bootstrap/cache
$ cp .env.example .env
$ php artisan key:generate
$ php artisan migrate:refresh --seed

$ yarn install
```

## Create the symbolic link to storage

```
php artisan storage:link
```

## Web

Go to `http://shop.localhost`

## Adminer

Go to `http://localhost:8000`

*Configs*
```
server: mysql
username: shop
password: secret
Database: shop
```
