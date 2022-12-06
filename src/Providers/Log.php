<?php

namespace Alza\Providers;

use Alza\Kernel\ServiceProvider;

class Log extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register the service provider.
     *
     * @return void
     * @throws
     */
    public function register()
    {
        $this->app->singleton('log', \Alza\Log\Log::class);
    }
}
