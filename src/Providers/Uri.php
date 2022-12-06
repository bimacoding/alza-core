<?php

namespace Alza\Providers;

use Alza\Kernel\ServiceProvider;

class Uri extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     * @throws
     */
    public function register()
    {
        $this->app->singleton('uri', \Alza\Uri\Uri::class);
    }
}
