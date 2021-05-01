<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

//Clase Auth para registrar el nuevo user provider
use Illuminate\Support\Facades\Auth;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //Nuevo user provider para sacar la información de la API por HTTP
        Auth::provider('ldaw_api', function($app, array $config){
            // Return an instance of Illuminate\Contracts\Auth\UserProvider...
            return new ApiUserProvider();
        });


    }
}
