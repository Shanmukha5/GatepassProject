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
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('guards-only', function($user ){
            if($user->role=="guard"){
                return true;
            }
            return false;
        });

        Gate::define('tcos-only', function($user ){
            if($user->role=="tco"){
                return true;
            }
            return false;
        });

        Gate::define('admins-only', function($user ){
            if($user->role=="admin"){
                return true;
            }
            return false;
        });
    }
}
