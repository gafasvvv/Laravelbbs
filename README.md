# docker-laravel5

## Description

Build Laravel's development environment using docker.  
PHP7.3/MySQL8.0/nginx/composer/redis/node

## Usage

### Git clone

```
$ git clone https://github.com/gafasvvv/Laravelbbs.git
$ cd Laravelbbs
```

### Docker compose build & up

```
$ docker-compose build
$ docker-compose up -d
```

### Install Laravel 5 using Composer

```
$ docker-compose exec app ash
$ composer install
```

### Copy .env
```
$ cp .env.example .env
```

### Running Migrations

```
$ docker-compose exec app ash 
$ php artisan migrate
```

http://127.0.0.1:3500
上記のアドレスにアクセスしてLaravelのウェルカムページが表示されれば、Laravel環境構築の完成です。

## As necessary

### MySQL connection

```
$ docker-compose exec db bash
$ mysql -u${MYSQL_USER} -p${MYSQL_PASSWORD} ${MYSQL_DATABASE}
```

### Node(npm, yarn)

```
$ docker-compose run node ash
$ npm install # OR yarn install
$ npm run dev # OR yarn run dev
```

### Redis for Laravel

```
$ docker-compose exec app ash
$ composer require predis/predis
$ sed -i -e 's/CACHE_DRIVER=.*/CACHE_DRIVER=redis/' .env
$ sed -i -e 's/SESSION_DRIVER=.*/SESSION_DRIVER=redis/' .env
```

### Redis cli

```
$ docker-compose exec redis ash
$ redis-cli
```
