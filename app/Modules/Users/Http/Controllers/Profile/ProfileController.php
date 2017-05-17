<?php

namespace App\Modules\Users\Http\Controllers\Profile;

use App\Http\Controllers\Controller;

use Auth;

class ProfileController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth');
    }

    public function members()
    {
        if(!Auth::check()){
            return redirect('/login');
        }

        if(Auth::viaRemember()){

        }
        return view('users::profile.profile');
    }
}
