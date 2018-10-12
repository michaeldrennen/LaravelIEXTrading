<?php

namespace MichaelDrennen\LaravelIEXTrading;




class ServiceProvider extends \Illuminate\Support\ServiceProvider {


    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() {

        // There are a number of tables that need to be created for our Geonames package.
        // Feel free to create your own additional migrations to create indexes that are appropriate for your application.
        $this->loadMigrationsFrom( __DIR__ . '/Migrations' );

        $this->publishes( [
                              __DIR__ . '/../Migrations/' => database_path( 'migrations' ),
                          ], 'migrations' );
    }


    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {

    }
}