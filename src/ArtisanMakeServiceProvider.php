<?php

namespace cmanish049\ArtisanMake;

use Illuminate\Support\ServiceProvider;

class ArtisanMakeServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                \cmanish049\ArtisanMake\Console\Commands\MakeTrait::class,
                \cmanish049\ArtisanMake\Console\Commands\MakeService::class,
            ]);
        }
    }

    public function register()
    {

    }
}
