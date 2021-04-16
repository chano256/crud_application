<p align="center"><img src="public/img/logo.jpg"></p>

<p align="center">
Staff Panel
</p>

## About App

The App is built using laravel 5.7 for the backend and bootstrap for the frontend. MySQL is used for the database. 
<p>
    On this WebApp - Staff portal, staff can create products, customers, and invoices as well as view, update and delete them.
</p>

- [Add products] with product name, price, description and service fields.
- [Add customers] with first name, last name, email, contact and address fields.
- [Add Invoice] with date, customer and product fields.
- Staff can update and delete the given resources.

Laravel is accessible, yet powerful, providing tools needed for large, robust applications.

## Getting Started

- Install Composer from (https://getcomposer.org/). 
- Install laravel 5.7 using composer. (composer global require "laravel/laravel=~5.7")
- Install MySQL Database for storage.
- Start Application using php artisan serve.
- Migrate the database with php artisan migrate.
- Seed the demo data. ex. (php artisan db:seed CustomerSeeder).
- Enjoy the App.

You can also read the laravel documentation from (https://laravel.com/docs/5.7).

## Contributing

App is still under continous development to add Hashes for emails and phone numbers, user authentication so that only logged in staff can view and create resources. Send to email whenever a resource is created as well as information of the staff currently accessing the portal with staff actions.
