<?php

namespace Alza\Providers;

use Alza\Kernel\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Alza\Http\Request;

class Database extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     * @throws
     */
    public function register()
    {
        $this->app->singleton('builder', \Alza\Database\Builder::class);

        // Paginator::viewFactoryResolver(function () {
        //     return $this->app['view'];
        // });
        Paginator::currentPathResolver(function () {
            return $this->app[Request::class]->url();
        });
        Paginator::currentPageResolver(function ($pageName = 'page') {
            $page = $this->app[Request::class]->input($pageName);
            if (filter_var($page, FILTER_VALIDATE_INT) !== false && (int) $page >= 1) {
                return (int) $page;
            }
            return 1;
        });
    }
}
