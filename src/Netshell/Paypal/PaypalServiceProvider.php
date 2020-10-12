<?php

namespace Netshell\Paypal;

use Illuminate\Support\ServiceProvider;

class PaypalServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {
        $this->app->singleton('Paypal', function($app) {
            return new Paypal();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides() {
        return array('Paypal');
    }

}
