<?php

namespace App\Providers;

use App\Core\Libs\Resizer;
use Illuminate\Support\ServiceProvider;
use App\Core\Libs\Date;

class CoreServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('date', Date::class);
        $this->app->bind('resizer', Resizer::class);
    }
}
