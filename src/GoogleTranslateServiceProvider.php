<?php

namespace GNAHotelSolutions\LaravelGoogleTranslate;

use Illuminate\Support\ServiceProvider;

class GoogleTranslateServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('laravel-google-translate.php'),
            ], 'config');

        }
    }

    /**
     * Register the application services.
     */
    public function register(): void
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'google-translate');

        // Register the main class to use with the facade
        $this->app->singleton('google-translate', function () {
            return new GoogleTranslate;
        });
    }
}
