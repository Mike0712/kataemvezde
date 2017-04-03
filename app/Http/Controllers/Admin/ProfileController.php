<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function members()
    {
        echo 123;die;
        return view('front.page.index');
    }
}
