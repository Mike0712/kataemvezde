<?php

namespace App\Modules\Users\Http\Controllers\Auth;

use App\Modules\Users\Models\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Auth;
use Session;
use App\Modules\Strava\Models\Strava;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $rules = [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ];
        if(Session::has('strava.access_token') &&
            Strava::where('access_token', '=', Session::get('strava.access_token'))->first()){
            $rules['email'] = 'required|max:255|unique:users';
        }
        return Validator::make($data, $rules);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
    public function register(Request $request)
    {
        if (csrf_token() == $request->only('_token')['_token']){
            $data = $request->only('name', 'email', 'password', 'password_confirmation');
            if($data['password'] == 'strava'){
                $data['password'] = env('STRAVA_REG_PASSWORD');
                $data['password_confirmation'] = env('STRAVA_REG_PASSWORD');
            }
            $validation = $this->validator($data);
            if($validation->fails()){
                return ['errors' => $validation->errors()->getMessages()];
            }
            if ($this->create($data)){
                if(Auth::attempt(['email'    => $data['email'],
                                  'password' => $data['password']
                ], true)){
                    if($request->ajax()){
                        return ['auth' => true];
                    }else{
                        $strava_item = Strava::where('access_token', '=', Session::get('strava.access_token'))->first();
                        $user_id = Auth::user()->id;
                        $strava_item->user_id = $user_id;
                        $strava_item->register = true;
                        $strava_item->save();
                        return redirect(url('/profile'));
                    }
                }
            }
        }
        return false;
    }
}
