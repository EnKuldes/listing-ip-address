<?php

namespace EnKuldes\ListingIPAddress;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

class ListingIPAddressServiceProvider extends ServiceProvider
{
    /**
     * routeMiddleware to register
     * 
     * @var Array
     */
    protected $routeMiddleware = [
        'listing-ip-address' => ListingIPAddress::class,
    ];


    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'listing-ip-address');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'listing-ip-address');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('listing-ip-address.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/listing-ip-address'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/listing-ip-address'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/listing-ip-address'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }

        // Add each $routeMiddleware into App Router Middleware
        foreach ($this->routeMiddleware as $alias => $class) {
            $router->aliasMiddleware($alias, $class);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'listing-ip-address');

        // Register the main class to use with the facade
        /*$this->app->singleton('listing-ip-address', function () {
            return new ListingIPAddress;
        });*/
    }
}
