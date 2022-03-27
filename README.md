# Getting started with Laravel

This is a simple example of how Laravel and Yajra's 
Laravel DataTables might get integrated. Primitive approach,
but enlightening.

## Requirements

* PHP 8.1
* NodeJS 16
* MySQL 5.7

Simple `winget-install.bat` script added (experimental)
for you to easily set up this project

Just remember to add path to your PHP script (C:\xampp\php) to your Environment Variable called "Path"

## Install

Once you have all the dependencies installed:

### PHP

Composer might complain about `ext-gd` extension. To enable it, go to `C:\xampp\php` and edit `php.ini` file
by uncommenting (remving ";" - semicolon) line like: `;extension=gd`

### Libraries

Please install both frontend and backend libraries:

```shell
composer install;
npm install;
```

### Migration

Ensure migration is performed. Create new database, fill
values in `.env` file (with database name and host set).

Then run `php artisan migrate`

### Add fake data

Run `php artisan tinker` and type:

```php
Product::factory()->count(25)->create();
```

It should fill your database with fake data on Products.
Please check it with phpMyAdmin or inside `php artisan tinker`

```php
Product::where([])->get();
```

Should return a list of 25 items

## Run

Now you can start server. Firstly build assets with

```shell
npm run dev
```

Then run server with

```shell
php artisan serve
```

## Browse

Go to `localhost:8000` and follow links
