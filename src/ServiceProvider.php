<?php

namespace Yo;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Yo\Commands\Yo;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function registerCommands() {
        $this->commands([
            Yo::class,
        ]);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->registerCommands();
        }
    }
}
