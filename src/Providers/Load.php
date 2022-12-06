<?php

namespace Alza\Providers;

use Alza\Kernel\ServiceProvider;

class Load extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     * @throws
     */
    public function register()
    {
        $this->app->singleton('load', \Alza\Load\Load::class);
    }
}
