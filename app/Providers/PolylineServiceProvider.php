<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Core\Libs\PolylineEncoder;


class PolylineServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('polyline', function(){
            return new PolylineEncoder();
        });
    }
}
