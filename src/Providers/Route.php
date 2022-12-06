<?php

namespace Alza\Providers;

use Alza\Kernel\ServiceProvider;

class Route extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     * @throws
     */
    public function register()
    {
        $this->app->singleton('route', \Alza\Router\Route::class);
    }
}
