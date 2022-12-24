<?php

namespace Budgetlens\LaravelBuckaroo;

use Buckaroo\BuckarooClient;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Bootstrap the application services.
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('buckaroo.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     * @return void
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'buckaroo');

        // Register the main class to use with the facade
        $this->app->singleton('Buckaroo', function () {
            return new BuckarooClient(
                config('buckaroo.website_key'),
                config('buckaroo.secret_key'),
                config('buckaroo.test')
            );
        });
    }
}
