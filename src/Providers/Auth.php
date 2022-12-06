<?php

namespace Alza\Providers;

use Alza\Auth\Auth as BaseAuth;
use Alza\Auth\Jwt\Jwt;
use Alza\Kernel\ServiceProvider;

class Auth extends ServiceProvider
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
    public function register(): void
    {
        $this->app->singleton(BaseAuth::class, BaseAuth::class);

        if ($this->app->get('config')['auth']['jwt']['enabled'] === true) {
            $this->app->singleton(Jwt::class, Jwt::class);
        }
    }
}
