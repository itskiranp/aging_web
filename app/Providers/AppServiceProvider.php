<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Typesense\StaffSchema;
use Typesense\LaravelTypesense\Typesense;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(StaffSchema::class, function ($app) {
            return new StaffSchema();
        });
    }

    public function boot()
    {
        
    }
}