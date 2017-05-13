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
        $this->app->bind('oauth_strava', function(){
            $options = array(
                'clientId'     => env('STRAVA_CLIENT_ID'),
                'clientSecret' => env('STRAVA_CLIENT_SECRET'),
                'redirectUri'  => env('APP_URL'),
            );
            return new OAuth($options);
        });
        $this->app->bind('client_strava', function (){
            $adapter = new \Pest('https://www.strava.com/api/v3');
            $service = new REST(env('STRAVA_ACCESS_TOKEN'), $adapter);
            return new Client($service);
        });
    }
}
