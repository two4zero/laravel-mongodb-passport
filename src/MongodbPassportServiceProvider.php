<?php

namespace Two4zero\Mongodb;

use Illuminate\Support\ServiceProvider;
use Two4zero\Mongodb\Passport\ClientRepository;

class MongodbPassportServiceProvider extends ServiceProvider
{
    public function register()
    {
        if (class_exists('Illuminate\Foundation\AliasLoader')) {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('Laravel\Passport\ClientRepository', ClientRepository::class);
        } else {
            class_alias('Laravel\Passport\ClientRepository', ClientRepository::class);
        }
    }
}
