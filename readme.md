# Book manager Laravel 5.4 

## Installation

We need composer to install all packages.
Here the complete instruction to install composer https://getcomposer.org/doc/00-intro.md

Rename configuration file
```
.env.example to .env
```

Database, you can create sqlite database or use mysql

```
touch database/database.sqlite

```

Let's install all packages, by running this command from Terminal

```
composer install
```

Let's do some migration

```
php artisan migrate
```

And run the web server

```
php artisan serve
```

Routes

```
http://localhost:8000/book 
http://localhost:8000/user
http://localhost:8000/category 
```

Now, visit http://localhost:8000.

## Notes

This demo use SQLite database by default.
If you want to use another database, you can set configuration in `.env`.