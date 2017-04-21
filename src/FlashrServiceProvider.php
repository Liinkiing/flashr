<?php

namespace Linking\Flashr;

use Illuminate\Support\ServiceProvider;

class FlashrServiceProvider extends ServiceProvider
{

    protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('flashr', function() {
            return new FlashrNotifier($this->app->make('session.store'));
        });
    }
}
