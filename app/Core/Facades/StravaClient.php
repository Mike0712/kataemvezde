<?php


namespace App\Core\Facades;

use Illuminate\Support\Facades\Facade;

class StravaClient extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'client_strava';
    }
}