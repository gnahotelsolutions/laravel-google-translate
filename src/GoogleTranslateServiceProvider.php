<?php

namespace GNAHotelSolutions\LaravelGoogleTranslate;

use Google\Cloud\Translate\V2\TranslateClient;
use Illuminate\Support\ServiceProvider;

class GoogleTranslateServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('laravel-google-translate.php'),
            ], 'config');

        }
    }

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'google-translate');

        $this->app->singleton('google-translate', function () {
            return new GoogleTranslate;
        });

        $this->app->singleton(TranslateClient::class, function () {
            return new TranslateClient(['key' => config('google-translate.key')]);
        });
    }
}
