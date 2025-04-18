# 🎧 Podcast Platform API

A RESTful Laravel API backend for managing a podcast platform — supports categories, podcasts, and episodes. Built with Docker, documented with Swagger, and structured with clean architecture principles.

---

## 🚀 Features

- Laravel 10+ (PHP 8.2)
- MySQL (Dockerized)
- Swagger API Documentation
- Modular Architecture (Controllers, Services, Resources)
- Pagination, Filtering, Sorting
- Docker-ready for local and CI deployments
- Redis support (optional)
- Seeders, Migrations, Factories

---

## 🛠 Tech Stack

- **Backend**: Laravel 10 (PHP 8.2)
- **Database**: MySQL 8.x
- **Docs**: Swagger (L5-Swagger)
- **Containerization**: Docker + Docker Compose
- **Caching/Queue (optional)**: Redis
- **Testing**: PHPUnit

---

## 📁 Folder Structure

.
├── Dockerfile
├── README.md
├── app
│   ├── Http
│   │   ├── Controllers
│   │   ├── Requests
│   │   └── Resources
│   ├── Models
│   │   ├── Category.php
│   │   ├── Episode.php
│   │   ├── Podcast.php
│   │   └── User.php
│   ├── Providers
│   │   └── AppServiceProvider.php
│   └── Services
│       ├── CategoryService.php
│       ├── EpisodeService.php
│       └── PodcastService.php
├── artisan
├── bootstrap
│   ├── app.php
│   ├── cache
│   │   ├── packages.php
│   │   └── services.php
│   └── providers.php
├── composer.json
├── composer.lock
├── config
│   ├── app.php
│   ├── auth.php
│   ├── cache.php
│   ├── database.php
│   ├── filesystems.php
│   ├── l5-swagger.php
│   ├── logging.php
│   ├── mail.php
│   ├── queue.php
│   ├── services.php
│   └── session.php
├── database
│   ├── database.sqlite
│   ├── factories
│   │   └── UserFactory.php
│   ├── migrations
│   │   ├── 0001_01_01_000000_create_users_table.php
│   │   ├── 0001_01_01_000001_create_cache_table.php
│   │   ├── 0001_01_01_000002_create_jobs_table.php
│   │   ├── 2025_04_16_020612_create_categories_table.php
│   │   ├── 2025_04_16_020612_create_podcasts_table.php
│   │   └── 2025_04_16_020613_create_episodes_table.php
│   └── seeders
│       └── DatabaseSeeder.php
├── docker
│   └── nginx
│       └── default.conf
├── docker-compose.yml
├── package.json
├── phpunit.xml
├── public
│   ├── favicon.ico
│   ├── index.php
│   └── robots.txt
├── resources
│   ├── css
│   │   └── app.css
│   ├── js
│   │   ├── app.js
│   │   └── bootstrap.js
│   └── views
│       ├── vendor
│       └── welcome.blade.php
├── routes
│   ├── api.php
│   ├── console.php
│   └── web.php
├── storage
│   ├── api-docs
│   ├── app
│   │   ├── private
│   │   └── public
│   ├── framework
│   │   ├── cache
│   │   ├── sessions
│   │   ├── testing
│   │   └── views
│   └── logs
│       └── laravel.log
├── tests
│   ├── Feature
│   │   └── ExampleTest.php
│   ├── TestCase.php
│   └── Unit
│       └── ExampleTest.php
├── vendor
│   ├── autoload.php
│   ├── bin
│   │   ├── carbon
│   │   ├── openapi
│   │   ├── patch-type-declarations
│   │   ├── php-parse
│   │   ├── phpunit
│   │   ├── pint
│   │   ├── psysh
│   │   ├── sail
│   │   ├── var-dump-server
│   │   └── yaml-lint
│   ├── brick
│   │   └── math
│   ├── carbonphp
│   │   └── carbon-doctrine-types
│   ├── composer
│   │   ├── ClassLoader.php
│   │   ├── InstalledVersions.php
│   │   ├── LICENSE
│   │   ├── autoload_classmap.php
│   │   ├── autoload_files.php
│   │   ├── autoload_namespaces.php
│   │   ├── autoload_psr4.php
│   │   ├── autoload_real.php
│   │   ├── autoload_static.php
│   │   ├── installed.json
│   │   ├── installed.php
│   │   └── platform_check.php
│   ├── darkaonline
│   │   └── l5-swagger
│   ├── dflydev
│   │   └── dot-access-data
│   ├── doctrine
│   │   ├── annotations
│   │   ├── inflector
│   │   └── lexer
│   ├── dragonmantank
│   │   └── cron-expression
│   ├── egulias
│   │   └── email-validator
│   ├── fakerphp
│   │   └── faker
│   ├── filp
│   │   └── whoops
│   ├── fruitcake
│   │   └── php-cors
│   ├── graham-campbell
│   │   └── result-type
│   ├── guzzlehttp
│   │   ├── guzzle
│   │   ├── promises
│   │   ├── psr7
│   │   └── uri-template
│   ├── hamcrest
│   │   └── hamcrest-php
│   ├── laravel
│   │   ├── framework
│   │   ├── pail
│   │   ├── pint
│   │   ├── prompts
│   │   ├── sail
│   │   ├── serializable-closure
│   │   └── tinker
│   ├── league
│   │   ├── commonmark
│   │   ├── config
│   │   ├── flysystem
│   │   ├── flysystem-local
│   │   ├── mime-type-detection
│   │   ├── uri
│   │   └── uri-interfaces
│   ├── mockery
│   │   └── mockery
│   ├── monolog
│   │   └── monolog
│   ├── myclabs
│   │   └── deep-copy
│   ├── nesbot
│   │   └── carbon
│   ├── nette
│   │   ├── schema
│   │   └── utils
│   ├── nikic
│   │   └── php-parser
│   ├── nunomaduro
│   │   ├── collision
│   │   └── termwind
│   ├── phar-io
│   │   ├── manifest
│   │   └── version
│   ├── phpoption
│   │   └── phpoption
│   ├── phpunit
│   │   ├── php-code-coverage
│   │   ├── php-file-iterator
│   │   ├── php-invoker
│   │   ├── php-text-template
│   │   ├── php-timer
│   │   └── phpunit
│   ├── psr
│   │   ├── cache
│   │   ├── clock
│   │   ├── container
│   │   ├── event-dispatcher
│   │   ├── http-client
│   │   ├── http-factory
│   │   ├── http-message
│   │   ├── log
│   │   └── simple-cache
│   ├── psy
│   │   └── psysh
│   ├── ralouphie
│   │   └── getallheaders
│   ├── ramsey
│   │   ├── collection
│   │   └── uuid
│   ├── sebastian
│   │   ├── cli-parser
│   │   ├── code-unit
│   │   ├── code-unit-reverse-lookup
│   │   ├── comparator
│   │   ├── complexity
│   │   ├── diff
│   │   ├── environment
│   │   ├── exporter
│   │   ├── global-state
│   │   ├── lines-of-code
│   │   ├── object-enumerator
│   │   ├── object-reflector
│   │   ├── recursion-context
│   │   ├── type
│   │   └── version
│   ├── staabm
│   │   └── side-effects-detector
│   ├── swagger-api
│   │   └── swagger-ui
│   ├── symfony
│   │   ├── clock
│   │   ├── console
│   │   ├── css-selector
│   │   ├── deprecation-contracts
│   │   ├── error-handler
│   │   ├── event-dispatcher
│   │   ├── event-dispatcher-contracts
│   │   ├── finder
│   │   ├── http-foundation
│   │   ├── http-kernel
│   │   ├── mailer
│   │   ├── mime
│   │   ├── polyfill-ctype
│   │   ├── polyfill-intl-grapheme
│   │   ├── polyfill-intl-idn
│   │   ├── polyfill-intl-normalizer
│   │   ├── polyfill-mbstring
│   │   ├── polyfill-php80
│   │   ├── polyfill-php83
│   │   ├── polyfill-uuid
│   │   ├── process
│   │   ├── routing
│   │   ├── service-contracts
│   │   ├── string
│   │   ├── translation
│   │   ├── translation-contracts
│   │   ├── uid
│   │   ├── var-dumper
│   │   └── yaml
│   ├── theseer
│   │   └── tokenizer
│   ├── tijsverkoyen
│   │   └── css-to-inline-styles
│   ├── vlucas
│   │   └── phpdotenv
│   ├── voku
│   │   └── portable-ascii
│   ├── webmozart
│   │   └── assert
│   └── zircote
│       └── swagger-php
└── vite.config.js



---

## ⚙️ Local Setup (Dockerized)

## 📦 Requirements

- Docker + Docker Compose

## 📥 Clone the Repo

```bash
git clone https://github.com/your-username/podcast-platform-api.git
cd podcast-platform-api
cp .env.example .env
## 🐳 Start the Services
```bash 
docker-compose up -d --build

## 📦 Install Composer Dependencies
```bash
docker exec -it laravel-app composer install

## 🔑 Generate Application Key
```bash
docker exec -it laravel-app php artisan key:generate
 ## 🗃️ Database Migration & Seeding
```bash
docker exec -it laravel-app php artisan migrate --seed

## 🔍 API Documentation (Swagger)
Once containers are running:

## 📄 Swagger UI available at:
```bash
http://localhost:8000/api/documentation

## To manually regenerate docs:
```bash
docker exec -it laravel-app php artisan l5-swagger:generate
## 🔗 API Routes Summary

Method	Endpoint	Description
GET	/api/v1/categories	List all categories
GET	/api/v1/podcasts	List podcasts (paginated)
GET	/api/v1/podcasts/{id}	Get podcast + episodes
GET	/api/v1/episodes/{id}	Get episode details
## 🧪 Running Tests
```bash
docker exec -it laravel-app php artisan test

