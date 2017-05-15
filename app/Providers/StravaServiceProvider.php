<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Iamstuartwilson\StravaApi;
use Strava\API\Client;
use Strava\API\OAuth;
use Strava\API\Service\REST;


class StravaServiceProvider extends ServiceProvider
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
        $this->app->bind('api_strava', function(){
            return new StravaApi(
                env('STRAVA_CLIENT_ID'),
                env('STRAVA_CLIENT_SECRET')
            );
        });
    }
}
