<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Person;
use App\Models\Club;
use Illuminate\Http\Request;

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
