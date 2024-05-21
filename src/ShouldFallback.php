<?php

namespace Sanmark\QueueFallback;

use Illuminate\Support\Facades\Config;

trait ShouldFallback
{
    public static function dispatchWithFallback(...$payload)
    {
        try {
            self::dispatch(...$payload);
        } catch (\Throwable $th) {
            self::dispatch(...$payload)->onConnection(Config::get('queue-fallback.failback_connection'));
        }
    }
}
