<?php

namespace App\Modules\Users\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;


class AuthController extends Controller
{
    public function __construct()
    {

    }

    public function showLogin()
    {
        return view('users::auth.login');
    }

    public function authenticate(Request $request)
    {
        $arr = $request->all();
        $remember = $request->has('remember');
        if(Auth::attempt(['email' => $arr['email'],
                         'password' => $arr['password']
        ], $remember))
        {
            return redirect()->intended('/profile');
        }
        return redirect()->back()
            ->withInput($request->only('email', 'remember'))
            ->withErrors(['email' => 'Данные неверны']);
    }

    public function register()
    {

    }

    public function logout()
    {
        if(Auth::check()){
            $user= Auth::user();
//            Auth::loginUsingId($userId);
            Auth::guard('web')->logout($user);
            return redirect()->intended();
        }
    }

}
