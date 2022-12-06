<?php

namespace Alza\Providers;

use Alza\Kernel\ServiceProvider;
use Illuminate\Events\Dispatcher;
use Illuminate\Contracts\Queue\Factory as QueueFactoryContract;
use Alza\Event\Event as AlzaEvent;

class Event extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('events', function ($app) {
            return (new Dispatcher($app))->setQueueResolver(function () use ($app) {
                return $app->make(QueueFactoryContract::class);
            });
        });

        // Register Event-Listener Component of Alza
        $this->app->singleton(AlzaEvent::class, AlzaEvent::class);
    }
}
