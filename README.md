# Blog:


## Requirements
```
php -v // (PHP 8.1.8)
node -v // v18.6.0
npm -v  // 8.14.0
```

## Installation
```
cp .env.example .env
composer install
npm install
php artisan storage:link
php artisan migrate:fresh --seed
```

## Default credentials
**User:** admin@example.com

**Password:** password

## Run with
```
php artisan serve
```
