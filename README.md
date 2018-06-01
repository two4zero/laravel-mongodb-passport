laravel-mongodb-passport
===============

[![Latest Stable Version](https://poser.pugx.org/two4zero/laravel-mongodb-passport/v/stable)](https://packagist.org/packages/two4zero/laravel-mongodb-passport) [![Total Downloads](https://poser.pugx.org/two4zero/laravel-mongodb-passport/downloads)](https://packagist.org/packages/two4zero/laravel-mongodb-passport) [![License](https://poser.pugx.org/two4zero/laravel-mongodb-passport/license)](https://packagist.org/packages/two4zero/laravel-mongodb-passport)

laravel mongodb passport
for laravel/passport v6.0.2

Installation
------------

Installation using composer:

```
composer require two4zero/laravel-mongodb-passport
```

And add the trait in `app/User.php`:
(https://laravel.com/docs/5.6/passport)

```
<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Jenssegers\Mongodb\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;
```
