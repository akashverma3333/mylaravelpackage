<?php

namespace Akash\Mylaravelpackage;

use Illuminate\Support\ServiceProvider;

class MylaravelpackageServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }
}
