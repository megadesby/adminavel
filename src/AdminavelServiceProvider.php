<?php

namespace Megadesby\Adminavel;

use Illuminate\Support\ServiceProvider;


class AdminavelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

        $this->loadViewsFrom(__DIR__.'/resources/views', 'megadesby/adminavel');

        $this->publishes([
            __DIR__.'/public/assets' => public_path('vendor/megadesby/adminavel'),
        ], 'public');

        require __DIR__ . '/Http/routes.php';

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('adminavel', function($app) {
            return new Adminavel;
        });
    }

}
