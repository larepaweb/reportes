<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

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


         /* define a admin user role */
        Gate::define('isAdmin', function ($user) {
              return $user->role_name == 'admin';
        });

        /* define a manager user role */
        Gate::define('isTecni', function ($user) {
              return $user->role_name == 'tecnico';
        });

        /* define a customer role */
        Gate::define('isCustomer', function ($user) {
              return $user->role_name == 'cliente';
        });

        // Gate::before(
        //     function ($user, $ability) {
        //         if ($user->role === 'admin') {
        //             return true;
        //         }
        //     }
        // );

        // foreach (self::$permissions as $action=> $roles) {
        //     Gate::define(
        //         $action,
        //         function (User $user) use ($roles) {
        //             if (in_array($user->role, $roles)) {
        //                 return true;
        //             }
        //         }
        //     );
        // }

    }

    // public static $permissions = [

    //        'index-user' => ['admin'],
    //     'show-user' => ['admin'],
    //     'create-user' => ['admin'],
    //     'store-user' => ['admin'],
    //     'edit-user' => ['admin'],
    //     'update-user' => ['admin'],
    //     'destroy-user' => ['admin'],

    //     'index-quote' => ['admin'],
    //     'show-quote' => ['admin'],
    //     'create-quote' => ['admin'],
    //     'store-quote' => ['admin'],
    //     'edit-quote' => ['admin'],
    //     'update-quote' => ['admin'],
    //     'destroy-quote' => ['admin'],

    //     'index-product' => ['admin'],
    //     'show-product' => ['admin'],
    //     'create-product' => ['admin'],
    //     'store-product' => ['admin'],
    //     'edit-product' => ['admin'],
    //     'update-product' => ['admin'],
    //     'destroy-product' => ['admin'],

    //     'index-task' => ['admin'],
    //     'show-task' => ['admin'],
    //     'create-task' => ['admin'],
    //     'store-task' => ['admin'],
    //     'edit-task' => ['admin'],
    //     'update-task' => ['admin'],
    //     'destroy-task' => ['admin'],

    //     'index-service' => ['admin'],
    //     'show-service' => ['admin'],
    //     'create-service' => ['admin'],
    //     'store-service' => ['admin'],
    //     'edit-service' => ['admin'],
    //     'update-service' => ['admin'],
    //     'destroy-service' => ['admin'],

    //     'index-mantain' => ['admin'],
    //     'show-mantain' => ['admin'],
    //     'create-mantain' => ['admin'],
    //     'store-mantain' => ['admin'],
    //     'edit-mantain' => ['admin'],
    //     'update-mantain' => ['admin'],
    //     'destroy-mantain' => ['admin'],

    //     'index-config' => ['admin'],
    //     'show-config' => ['admin'],
    //     'create-config' => ['admin'],
    //     'store-config' => ['admin'],
    //     'edit-config' => ['admin'],
    //     'update-config' => ['admin'],
    //     'destroy-config' => ['admin'],




    // ];

}
