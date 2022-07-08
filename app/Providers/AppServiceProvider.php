<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use App\Models\User;
Use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Customization authorize use GATE
        Gate::define('admin', function(User $user){
        //   return  $user->username === 'elbiz';
          return  $user->is_admin;
        });
    }
}
