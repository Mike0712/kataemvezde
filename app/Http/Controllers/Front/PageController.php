<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Person;
use App\Models\Club;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(Club $club)
    {   
        return view('page.index');
    }
}
