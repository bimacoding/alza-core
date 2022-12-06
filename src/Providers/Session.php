<?php

namespace Alza\Providers;

use Alza\Kernel\ServiceProvider;

class Session extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     * @throws
     */
    public function register()
    {
        $this->app->singleton(\Alza\Http\Session::class, \Alza\Http\Session::class);
    }
}
