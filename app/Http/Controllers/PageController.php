<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Person;
use App\Models\Club;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(Club $club)
    {   $club = $club::findOrFail(2);
        pr($club->person->toArray()); die;
        return view('page.index');
    }
}
