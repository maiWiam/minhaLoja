<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\FakeStoreService;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Registre o FakeStoreService no container
        $this->app->singleton(FakeStoreService::class, function ($app) {
            return new FakeStoreService();
        });
    }

    public function boot()
    {
        //
    }
}
