<?php


namespace App\Core\Facades;

use Illuminate\Support\Facades\Facade;

class StravaOAuth extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'oauth_strava';
    }
}