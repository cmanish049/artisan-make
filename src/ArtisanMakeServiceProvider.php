<?php

namespace cmanish049\ArtisanMake;

use Illuminate\Support\ServiceProvider;

class ArtisanMakeServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                Console\Commands\MakeTrait::class,
                Console\Commands\MakeService::class,
            ]);
        }
    }

    public function register()
    {

    }
}
