<?php

namespace App\Core\Facades;

use Illuminate\Support\Facades\Facade;

class Resizer extends Facade {

    protected static function getFacadeAccessor() { return 'resizer'; }
    
}
