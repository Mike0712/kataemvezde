<?php

namespace App\Core\Facades;

use Illuminate\Support\Facades\Facade;

class Date extends Facade {

    protected static function getFacadeAccessor() { return 'date'; }
    
}
