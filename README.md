# Laravel Project

---
## 🛠️ Application Containers

#### 1. [**Laravel 8**](https://laravel.com/)
#### 2. [**Composer**](https://getcomposer.org/)
#### 3. [**MySQL 8**](https://www.mysql.com/)
#### 4. [**NPM**](https://www.npmjs.com/)
#### 5. [**PHP 7.4**](https://www.php.net/releases/7_4_0.php)

---

## 🚀 Local Setup

> **Requires [Docker 18+](https://docs.docker.com/release-notes/)**

To avoid the headache running this project locally. I use **Docker** to easily spin up containers on development. Run **npm**, **composer** or even the **artisan** console command in containers. No need to install the proper version on the local machine we containerize it 🙂 . See below command to explore different commands.

### Bring Up all the containers
> `docker-compose up -d --build`

If the above command is successfull you can now visit the project at 👉 &nbsp; [localhost:8080](http://localhost:8080/)

### Bring Down all containers
> `docker-compose down --rmi=local -v`

---

## ARTISAN, NPM, COMPOSER

It is better to use the container for artisan command.
### Run a **artisan** console command
> `docker-compose run --rm artisan {artisan-commands}`

Node + NPM is in container also so that you automatically get the right version of Node + NPM for the application.
## Run a **npm** command
> `docker-compose run --rm npm {npm-commands}`

Composer is also in container the same benefits to insure that the composer command was no conflict.
## Run the **composer** command
> `docker-compose run --rm composer {composer-commands}`

---

## 📝 NOTES
## Make sure your in the .local/ directory before running the above docker command in order to properly work.
