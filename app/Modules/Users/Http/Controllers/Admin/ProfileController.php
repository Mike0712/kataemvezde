<?php

namespace App\Modules\Users\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function members()
    {
        return view('front.page.index');
    }
}
