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
APP_NAME="Nome do Projeto"<br />
APP_SIGLA="Sigla do Projeto"<br />

DB_DATABASE=Nome_DB<br />
DB_USERNAME=Nome_User<br />
DB_PASSWORD=Senha<br />

## Define Portas para os containers

NGINX_PORT=8580<br />
MYSQL_PORT=3306<br />
PHPMYADMIN_PORT=8081<br />
```

## LARAVEL SANCTUM

https://laravel.com/docs/11.x/sanctum#main-content

## Instalação

```bash
php artisan install:api
```
