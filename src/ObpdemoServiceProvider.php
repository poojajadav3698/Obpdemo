<?php
namespace Obp\Obpdemo;

use Illuminate\Support\ServiceProvider;

class ObpdemoServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('timezone', function ($app){
            return new timezone;
        });
    }

    public function boot()
    {
        require __DIR__ . '/Route/web.php';
    }
}
