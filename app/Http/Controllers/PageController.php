<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
//        dd(User::find(1)->person->toArray());
        return view('page.index');
    }
}
