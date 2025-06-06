<?php

namespace Tahaazare\LaravelUuidTool;
use Illuminate\Support\ServiceProvider;

class LaravelUuidToolServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('uuidtool', function () {
            return new UuidGenerator();
        });
    }

    public function boot()
    {
        // Nothing to boot now
    }
}