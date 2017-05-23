<?php


namespace App\Core\Facades;

use Illuminate\Support\Facades\Facade;

class Polyline extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'polyline';
    }
}