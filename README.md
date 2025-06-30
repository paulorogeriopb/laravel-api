## Requisitos

-   PHP 8.2 ou superior
-   MySQL 8 ou superior
-   Composer

---

## como rodar o projeto baixado

## Criar o proejto com Laravel

## sequencia para criar o Projeto

```bash
composer create-project --prefer-dist laravel/laravel laravel-api "11.\*"
```

## Alterar no .env

```bash
APP_NAME="Nome do Projeto"
APP_SIGLA="Sigla do Projeto"

DB_DATABASE=Nome_DB
DB_USERNAME=Nome_User
DB_PASSWORD=Senha

## Define Portas para os containers

NGINX_PORT=8580
MYSQL_PORT=3306
PHPMYADMIN_PORT=8081
```

## LARAVEL SANCTUM

https://laravel.com/docs/11.x/sanctum#main-content

## Instalação

```bash
php artisan install:api
```
