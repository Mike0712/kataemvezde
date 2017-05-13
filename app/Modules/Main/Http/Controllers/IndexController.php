<?php

namespace App\Modules\Main\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\Models\Club;
use App\Recrival\Facades\StravaApi;
use App\Recrival\Facades\StravaOAuth;


class IndexController extends Controller
{
    public function index(Club $club)
    {
        pr(StravaApi::get('athletes/9448277/koms', ['per_page' => 100]));
        return view('front.page.index');
    }
    
    public function about()
    {
        return view('front.page.about');
    }

    public function calendar()
    {
        return view('front.page.calendar');
    }
}
