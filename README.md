# docker-laravel5

## Description

Build Laravel's development environment using docker.  
PHP7.3/MySQL8.0/nginx/composer/redis/node

## Usage

### GitHub　SSHkey
```
$ ssh-keygen -t ed25519 -N "" -f ~/.ssh/github -C sample@example.com
```
sample@example.com は、 GitHubに設定したメールアドレスを指定するのが一般的

クリップボードに公開鍵をコピー
```
$ pbcopy < ~/.ssh/github.pub
```

~/.ssh/configに以下のように追記
```
$ vim ~/.ssh/config
Host *
  StrictHostKeyChecking no
  UserKnownHostsFile=/dev/null
  ServerAliveInterval 15
  ServerAliveCountMax 30
  AddKeysToAgent yes
  UseKeychain yes
  IdentitiesOnly yes

Host github.com
  HostName github.com
  IdentityFile ~/.ssh/github
  User git
  LogLevel QUIET
```

successfullyのメッセージが表示されればいいです。
```
$ ssh -T github.com
Hi xxx! You've successfully authenticated, but GitHub does not provide shell access.
```

### Git clone

```
$ git clone git@github.com:ucan-lab/docker-laravel5.git
$ cd docker-laravel5
```

### Docker compose build & up

```
$ docker-compose build
$ docker-compose up -d
```

### Install Laravel 5 using Composer

```
$ docker-compose exec app ash
$ composer create-project laravel/laravel --prefer-dist .
```
http://127.0.0.1:3500
上記のアドレスにアクセスしてLaravelのウェルカムページが表示されれば、
マイグレーションを実行し、Laravel環境構築の完成です。

### Running Migrations

```
$ docker-compose exec app ash 
$ php artisan migrate
```

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
