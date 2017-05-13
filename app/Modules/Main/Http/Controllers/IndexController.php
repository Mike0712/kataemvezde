<?php

namespace App\Modules\Main\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\Models\Club;
use App\Core\Facades\StravaApi;
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
