<?php
namespace MajuTo\LaravelJasper;

use Illuminate\Support\ServiceProvider;

class JasperServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/config.php' => config_path('jasper.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('jasper', function ($app, $parameters) {
            return new Jasper($parameters['host'], $parameters['username'], $parameters['password'], $parameters['organisationId']);
        });
    }
}
