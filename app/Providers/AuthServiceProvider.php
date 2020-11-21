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
        Gate::define('manage-user',function ($user){
            if ($user->hasRole('admin')){
                return $user->hasRole('admin');
            }

            if ($user->hasRole('arbiter')){
                return $user->hasRole('arbiter');
            };
        });
        Gate::define('rate-users',function ($user){
            return $user->hasRole('arbiter');
        });
        Gate::define('add-users',function ($user){
            return $user->hasRole('admin');
        });

        Gate::define('edit-users',function ($user){
            return $user->hasRole('admin');
        });
        Gate::define('delete-users',function ($user){
            return $user->hasRole('admin');
        });
    }
}
