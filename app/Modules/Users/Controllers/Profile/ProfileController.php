<?php

namespace App\Modules\Users\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Modules\Users\Models\Person;
use Auth;
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

        if(request()->ajax()){
            if(request('get_field')){
                return view('users::profile._field', ['name' => request('name'), 'person' => $user->person]);
            }
            $params = request(['first_name', 'last_name', 'sex', 'birthday']);
            foreach ($params as $key => $param){
                if($param){
                    if($user->person){
                        $user->person->$key = $param;
                        $user->person->save();
                    }else{
                        $person = new Person([$key => $param]);
                        $user->person()->save($person);
                    }
                }
            }
            die;
        }

        return view('users::profile.profile')->with('user', $user);
    }

    public function getProfile($id)
    {
        $user = User::findOrFail($id);

        return view('users::profile.profile')->with('user', $user);
    }
}
