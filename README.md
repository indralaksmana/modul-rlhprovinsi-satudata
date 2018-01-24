# modul-rlhprovinsi-satudata
This package is modul from satudata banten web application.

This Package is part of Satudata
================================

## Install
Via composer
``` bash
$ composer require indralaksmana/modul-rlhprovinsi-satudata "1.0.0"
```

## 1. In your config/app.php add for laravel 5.4:

``` php
'providers' => array(
    ...
    Satudata\Rlsprovinsi\RlhprovinsiServiceProvider::class,
    Maatwebsite\Excel\ExcelServiceProvider::class,
),
```

``` php
 'aliases' => [
 	...
    'Excel' => Maatwebsite\Excel\Facades\Excel::class,
    ...
    ],
```

## 2. php artisan
``` bash
$ php artisan satudata:rlhprovinsi
$ php artisan vendor:publish --tag=views
$ php artisan vendor:publish --tag=migrations
$ php artisan vendor:publish --provider="Maatwebsite\Excel\ExcelServiceProvider"
```

in your `database/seeds/DatabaseSeeder.php` add this code in `run` function
``` php
$this->call('MasterKotaSeeder');
$this->command->info('MasterKota table seeded!');

$this->call('MasterProvinsiSeeder');
$this->command->info('MasterProvinsi table seeded!');
```

in your `resources/assets/routes.js` add this code in `const routes`
``` php

const routes = [
    ....
	{
        path: '/',
        name: 'list',
        component: require('./components/RlhList.vue')
    },
    {
        path: '/create',
        name: 'create',
        component: require('./components/RlhCreate.vue')
    },
    ....
]    
```

## 3. Migrate Database and npm run dev
``` bash
$ composer dump-autoload
$ php artisan migrate --seed
$ npm run dev
```
