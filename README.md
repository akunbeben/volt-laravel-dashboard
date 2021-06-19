# [Volt - Bootstrap 5 Admin Dashboard (Laravel Version)](https://demo.themesberg.com/volt/)

[![Volt Bootstrap 5 Dashboard Preview](https://raw.githubusercontent.com/akunbeben/volt-laravel-dashboard/master/public/images/volt-laravel-dashboard-preview.jpg)](https://volt-laravel.herokuapp.com/)

Volt is a free and open source Bootstrap 5 Admin Dashboard featuring over 100 components, 11 example pages and 3 customized plugins. Volt **does not require jQuery** as a dependency meaning that every library and script's are jQuery free.

**All of the assets inside this repository is belongs to [themesberg](https://github.com/themesberg)**

## Bootstrap 5 and Vanilla JavaScript

Volt is built using the latest version of Bootstrap 5 and because [jQuery is no longer required as a dependency](https://themesberg.com/blog/tutorial/bootstrap-5-tutorial), Volt has been built using only Vanilla JS.

## 11 Example pages

We created no less than 11 advanced example pages such as the overview page, transactions, user settings, sign in and sign up and many more.

This project assets is built using the following technologies:

- Webpacks - Laravel-Mix

## Versions

[<img src="https://github.com/creativetimofficial/public-assets/blob/master/logos/html-logo.jpg?raw=true" width="60" height="60" />](https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard)[<img src="https://github.com/creativetimofficial/public-assets/blob/master/logos/react-logo.jpg?raw=true" width="60" height="60" />](https://themesberg.com/product/dashboard/volt-react)[<img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="60" height="60" />](https://github.com/akunbeben/volt-laravel-dashboard)

## Installation

- Fork and Clone this repository.
- Go to the cloned repository folder `cd volt-laravel-dashboard` .
- Run this following commands:

Install the composer dependencies
```
composer install
```

Generate the Application Key
```
php artisan key:generate
```

Install and compile NPM dependencies
```
npm install && npm run dev
```
or if you using Yarn
```
yarn && yarn run dev
```

Finally. Ready to serve.
```
php artisan serve
```