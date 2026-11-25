# Real Estate Admin Dashboard

A Laravel 10 admin dashboard for a real estate site, with role-based access for admin, agent and user.

## What is done
- Authentication with Laravel Breeze and Sanctum
- Role middleware: separate admin and agent areas
- Admin profile management and property type management (CRUD)

## Tech stack
PHP 8.1, Laravel 10, Blade, Pest.

## Setup
```
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

## Roadmap (edit freely)
- [ ] Properties CRUD (listings, images, price, location)
- [ ] Agent dashboard
- [ ] Public listing pages with search and filters
- [ ] Add screenshots
