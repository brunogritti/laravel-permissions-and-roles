## About this project

Simple laravel application to setup and test spatie/laravel-permission package

### Install

`composer install`
`php artisan key:generate`
`php artisan migrate:fresh --seed`
`npm install`
`npm run build`

Run artisan tinker and inside run the factory to create test users

`User::factory()->count(50)->create()`