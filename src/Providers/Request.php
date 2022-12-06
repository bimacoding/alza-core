<?php

namespace Alza\Providers;

use Alza\Kernel\ServiceProvider;
use Alza\Http\Request as BaseRequest;
use Alza\Http\Validation;

class Request extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     * @throws
     */
    public function register()
    {
        // Request
        $this->app->singleton(BaseRequest::class, BaseRequest::class);

        // Validation
        $this->app->singleton(Validation::class, Validation::class);
    }
}
