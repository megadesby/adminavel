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
