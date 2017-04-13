<?php

namespace App\Modules\Main\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\Models\Club;
use Torann\GeoIP\Facades\GeoIP;


class IndexController extends Controller
{
    public function index(Club $club)
    {
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
