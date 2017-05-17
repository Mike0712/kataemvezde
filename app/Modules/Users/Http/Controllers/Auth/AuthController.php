<?php

namespace App\Modules\Users\Http\Controllers\Auth;

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
            return json_encode(['auth' => 'success']);
//                redirect()->intended('/profile');
        }
        return json_encode(['email' => 'Данные неверны', 'error' => 'login']);
/*            redirect()->back()
            ->withInput($request->only('email', 'remember'))
            ->withErrors(['email' => 'Данные неверны']);*/
    }

    public function register(Request $request)
    {
        $errors = new ViewErrorBag();
        if(isset($request->only('errors')['errors'])){
            $data = $request->only('errors')['errors'];
            $errors->put('default', new MessageBag($data));
            return view('users::auth.register', ['errors' => $errors])->renderSections('content');
        }
        return view('users::auth.register', ['errors' => $errors]);
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
