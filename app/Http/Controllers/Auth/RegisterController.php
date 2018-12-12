<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/home';

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
            'user_f_name' => ['required', 'string', 'max:255'],
            'user_email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'user_password' => ['required', 'string', 'min:6', 'confirmed'],
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
        return User::create([
            'user_f_name' => $data['user_f_name'],
            'user_l_name' => $data['user_l_name'],
            'user_username' => $data['user_username'],
            'user_email' => $data['user_email'],
            'user_password' => Hash::make($data['user_password']),
            'user_is_active' => $data['user_is_active'],
            'user_is_deleted' => $data['user_is_deleted'],
            'user_last_modified_password' => $data['user_last_modified_password'],
            'user_modified_date' => $data['user_modified_date'],
            'user_dob' => $data['user_dob'],
            'user_cell_no' => $data['user_cell_no'],
            'user_home_phone' => $data['user_home_phone'],
            'user_city' => $data['user_city'],
            'user_zip_code' => $data['user_zip_code'],
            'user_state' => $data['user_state'],
            'user_country' => $data['user_country'],
            'user_street_address' => $data['user_street_address'],
            'user_security_group_id' => $data['user_security_group_id'],
            'user_home_url' => $data['user_home_url'],
            'user_created_by' => $data['user_created_by'],
            'user_modified_by' => $data['user_modified_by'],
        ]);
    }
}