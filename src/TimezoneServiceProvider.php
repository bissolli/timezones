<?php

namespace Bissolli\Timezones;

use Illuminate\Support\ServiceProvider;

class TimezoneServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/views', 'timezones');

        $this->publishes([
            __DIR__ . '/views' => base_path('resources/views/vendor/bissolli/timezones')
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        require __DIR__ . '/routes.php';
        $this->app->make('Bissolli\Timezones\TimezonesController');
    }
}
