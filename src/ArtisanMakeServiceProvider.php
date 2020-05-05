<?php

namespace cmanish049\ArtisanMake;

use cmanish049\ArtisanMake\Console\Commands\MakeTrait;
use cmanish049\ArtisanMake\Console\Commands\MakeService;
use Illuminate\Support\ServiceProvider;

class ArtisanMakeServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                MakeTrait::class,
                MakeService::class,
            ]);
        }
    }

    public function register()
    {

    }
}
