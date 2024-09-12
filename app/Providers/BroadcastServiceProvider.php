<?php

namespace App\Providers;

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider;

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerRoutes();

        /*
         * Authenticate the user's personal channel...
         */
        Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
            return (int) $user->id === (int) $id;
        });
    }

    /**
     * Register the broadcast routes.
     *
     * @return void
     */
    public function registerRoutes()
    {
        Broadcast::routes();
    }
}
