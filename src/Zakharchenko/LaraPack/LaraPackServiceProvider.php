<?php

namespace Zakharchenko\LaraPack;

use Illuminate\Support\ServiceProvider;

class LaraPackServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot() {
        $this->package('zakharchenko/lara-pack');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {
        $this->app['lara-pack'] = $this->app->share(function($app) {
            return new LaraPack;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides() {
        
    }

}
