<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Models\Account;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

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
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

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
        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        if(isset($data['picture'])){    
            $user = User::create([
                'lastname'      => $data['lastname'],
                'firstname'     => $data['firstname'],
                'picture'       => $data['picture']->store('avatars'),
                'date_birth'    => $data['date_birth'],
                'gender'        => $data['gender'],
                'city_name'     => $data['city_name'],
                'state'         => $data['state'],
                'address'       => $data['address'],
                'zip_code'      => $data['zip_code'],
                'profession'    => $data['profession'],
                'phone_no'      => $data['phone_no'],
                'email'         => $data['email'],
                'password'      => Hash::make($data['password']),
                'profile_id'    => $data['profile_id'],
                'code'          => mt_rand(1111111111, 9999999999)
           ]);
        }
        
        if(User::where(['id'  => $user->id])->first()){
            Account::create([
                'user_id'        => $user->id,
                'accounttype_id' => $data['accounttype_id'],
                'account_no'     => mt_rand(1111111111, 9999999999)
            ]);
        }
      
        return $user;
    }
}


