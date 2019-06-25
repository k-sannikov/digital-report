<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class DigitalReportServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('DigitalReport', 'App\Services\DigitalReport');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
