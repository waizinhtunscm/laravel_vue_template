## environment

- Backend
  - PHP 7.2
  - Laravel 6.2
- Frontend
  - nuxt.js
  - vue.js
- Infra
  - Docker

## config
```
$ git config --global core.autocrlf false
```
## clone project
```bash
$ git clone https://github.com/waizinhtunscm/laravel_vue_template.git
```
## development preparation

```bash
# env file
$ cp api/.env.example api/.env
$ cp client/.env.example client/.env

# Docker Image
$ docker-compose build

# start app
$ docker-compose up -d

# install PHP dependencies
docker-compose exec app composer install --no-scripts

# generate Laravel APP_KEY
$ docker-compose exec app php artisan key:generate

```
`http://localhost:8090`



