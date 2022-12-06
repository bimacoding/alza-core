<?php

namespace Alza\Providers;

use Alza\Kernel\ServiceProvider;

class Response extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     * @throws
     */
    public function register()
    {
        $this->app->singleton(\Alza\Http\Response::class, \Alza\Http\Response::class);
    }
}
