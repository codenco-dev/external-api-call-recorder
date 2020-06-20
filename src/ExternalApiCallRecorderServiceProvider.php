<?php

namespace CodencoDev\ExternalApiCallRecorder;

use Illuminate\Support\ServiceProvider;

class ExternalApiCallRecorderServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'external-api-call-recorder');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'external-api-call-recorder');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->app->make('Illuminate\Database\Eloquent\Factory')
            ->load(__DIR__.'/../database/factories');

        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('external-api-call-recorder.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/external-api-call-recorder'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/external-api-call-recorder'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/external-api-call-recorder'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'external-api-call-recorder');

        // Register the main class to use with the facade
        $this->app->singleton('external-api-call-recorder', function () {
            return new ExternalApiCallRecorder;
        });
    }
}
