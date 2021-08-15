<?php

namespace Arungruang\Purwantara;

use Illuminate\Support\ServiceProvider;

class PurwantaraServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }

    public function register()
    {

    }
}
