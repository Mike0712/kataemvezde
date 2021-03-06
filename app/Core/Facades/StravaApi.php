<?php


namespace App\Core\Facades;

use Illuminate\Support\Facades\Facade;

class StravaApi extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'api_strava';
    }
}