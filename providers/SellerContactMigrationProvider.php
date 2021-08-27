<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class SellerContactMigrationProvider
 * @package App\Providers
 */
class SellerContactMigrationProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');
    }
}
