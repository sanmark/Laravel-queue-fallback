<?php

namespace Sanmark\QueueFallback;

use Illuminate\Support\ServiceProvider;

class QueueFallbackServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/config.php' => config_path('queue-fallback.php'),
        ], 'laravel-fallback-queue');

        $this->mergeConfigFrom(
            __DIR__.'/config/config.php', 'config'
        );
    }

    public function register()
    {
    }
}
