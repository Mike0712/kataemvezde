<?php

namespace App\Modules\Main\Controllers;

use App\Http\Controllers\Controller;
use App\Core\Facades\StravaOAuth;


class IndexController extends Controller
{
    public function index()
    {
        return view('main::index');
    }
    
    public function about()
    {
        return view('main::about');
    }

    public function calendar()
    {
        return view('main::calendar');
    }
}
