<?php

namespace App\Modules\Users\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\MessageBag;
use Illuminate\Support\ViewErrorBag;

class AuthController extends Controller
{
    public function __construct()
    {

    }

    public function showLogin(Request $request)
    {
        $errors = new ViewErrorBag();
        $old_input = ['email' => null];
        if(isset($request->only('errors')['errors'])){
            $data = $request->only('errors')['errors'];
            $errors->put('default', new MessageBag($data));
            parse_str($request->only('old')['old'], $old_input);
        }
        $extTpl = 'app';
        if($request->ajax()){
            $extTpl = 'front._modal';
        }
        return view('users::auth.login', ['errors' => $errors, 'old_input' => $old_input, 'extTpl' => $extTpl]);
    }

    public function authenticate(Request $request)
    {
        $arr = $request->all();
        $remember = $request->has('remember');
        if(Auth::attempt(['email' => $arr['email'],
                         'password' => $arr['password']
        ], $remember))
        {
            if($request->ajax()){
                return json_encode(['auth' => 'success']);
            }
            return redirect(route('profile'));
        }
        return ['errors' => ['email' => 'Данные неверны']];
    }

    public function register(Request $request)
    {
        $errors = new ViewErrorBag();
        $old_input = ['name' => null, 'email' => null];
        if(isset($request->only('errors')['errors'])){
            $data = $request->only('errors')['errors'];
            $errors->put('default', new MessageBag($data));
            parse_str($request->only('old')['old'], $old_input);
        }
        return view('users::auth.register', ['errors' => $errors, 'old_input' => $old_input]);
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

    public function showLinkRequestForm()
    {
        return view('users::auth.passwords.email');
    }

    public function showResetForm($token)
    {
        return view('users::auth.passwords.reset', ['token' => $token]);
    }

}
