<?php

namespace Two4zero\Mongodb;

use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Passport;
use Two4zero\Mongodb\Passport\AuthCode;
use Two4zero\Mongodb\Passport\Client;
use Two4zero\Mongodb\Passport\ClientRepository;
use Two4zero\Mongodb\Passport\PersonalAccessClient;
use Two4zero\Mongodb\Passport\Token;

class MongodbPassportServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Passport::useAuthCodeModel(AuthCode::class);
        Passport::useClientModel(Client::class);
        Passport::usePersonalAccessClientModel(PersonalAccessClient::class);
        Passport::useTokenModel(Token::class);
    }

    /**
     * Register services.
     *
     * @return void
     */
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
