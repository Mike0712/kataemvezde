<?php

namespace App\Modules\Users\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Auth;
use Image;
use App\Modules\Users\Models\User;


class ProfileController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth');
    }

    public function profile()
    {
        if(!Auth::check()){
            return redirect('/login/form');
        }

        $user = Auth::user();

        return view('users::profile.profile')->with('user', $user);
    }

    public function getProfile($id)
    {
        $user = User::findOrFail($id);

        return view('users::profile.profile')->with('user', $user);
    }
}
