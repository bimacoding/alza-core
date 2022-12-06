<?php

namespace Alza\Providers;

use Alza\Kernel\ServiceProvider;
use Alza\Mail\Mail as AlzaMail;

class Mail extends ServiceProvider
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
        $this->app->singleton('mail', function ($app) {
            $config = $app['config']['mail'];
            return new AlzaMail($config, false);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides(): array
    {
        return ['mail'];
    }
}
