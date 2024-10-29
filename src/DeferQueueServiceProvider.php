<?php

namespace Rahmanramsi\DeferQueue;

use Illuminate\Support\ServiceProvider;
use Rahmanramsi\LaravelAsyncQueue\Middleware\AsyncMiddleware;

class DeferQueueServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        // 
    }

    public function boot(\Illuminate\Contracts\Http\Kernel $kernel): void
    {
        $manager = $this->app['queue'];
        $manager->addConnector('defer', function () {
            return new DeferConnector;
        });
    }
}
