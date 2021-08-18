<?php

namespace Arungruang\Purwantara;

use Illuminate\Support\ServiceProvider;

class PurwantaraServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // dd($this->loadRoutesFrom(__DIR__.'/../app/Http/Controllers/web.php'));
        // dd($this->loadViewsFrom(__DIR__.'/../resources/views', 'blogpackage'));
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'purwantara');
        $this->publishes([
            __DIR__.'/../config/database.php' =>  config_path('database.php'),
         ], 'config');
    }

    public function register()
    {
    }
}
