<?php

namespace Alexchitoraga\Apiok;

use Illuminate\Support\ServiceProvider;

class ApiokServiceProvider extends ServiceProvider
{
    public function boot()
    {

    }

    public function register()
    {
        $this->app->singleton('apiok', function ($app) {
            return new Apiok($app['config']->get('services.apiok'));
        });
    }
}