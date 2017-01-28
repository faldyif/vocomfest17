# Vocomfest 2017

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Vocomfest web is made from laravel 5, Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## What needed?

If you are using Windows, the easiest way to manage all is with (Laragon)[https://laragon.org/]. It's similar to xampp but has all the requirements to run laravel included to the package (cmder, git, composer, php, mysql, etc).

But if you are using another operating system or decide to do it manually on windows, you must have this:
1. (git)[https://git-scm.com/]
2. (Composer)[https://getcomposer.org/]
And add two of thoose with adiition of php binary folder to your PATH system environment variable if you are using windows.

## How to Install

1. Clone this repository with git command on your working directory (C:\xampp\htdocs on xampp or C:\laragon\www on laragon): `git clone https://github.com/faldyif/vocomfest17.git`
2. Edit the .env.example file. Change the DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME and DB_PASSWORD parameter as your database configuration.
3. Save the file as .env
4. Install the dependencies: `composer install --no-scripts`
5. Generate a random key with artisan command `php artisan key:generate`
6. Migrate the tables to database `php artisan migrate`

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
