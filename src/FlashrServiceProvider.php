<?php

namespace Linking\Flashr;

use Illuminate\Support\ServiceProvider;

class FlashrServiceProvider extends ServiceProvider
{

    protected $defer = false;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__."/../views", "flashr");
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('flashr', FlashrNotifier::class);
    }
}
