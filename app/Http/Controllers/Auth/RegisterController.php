<?php

namespace App\Http\Controllers\Auth;

use App\Photo;
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
    protected $redirectTo = '/user-courses';

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
            'name' => 'required|string|max:255',
            'is_male' => 'required|numeric|max:1|min:0',
            'email' => 'required|string|email|max:255|unique:users',
            'mobile' => 'required|string|max:20',
//            'student_number' => '',
            'national_code' => 'required|string|max:12|min:3',
            'password' => 'required|string|min:6|confirmed',
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
         $user = User::create([
            'name' => $data['name'],
            'is_male' => $data['is_male'],
            'email' => $data['email'],
            'mobile' => $data['mobile'],
            'student_number' => $data['student_number'],
            'national_code' => $data['national_code'],
            'password' => Hash::make($data['password']),
        ]);


        if($data['is_male'] == 1){
          $file_path = Photo::USER_MALE_AVATAR_PATH;
        }else{
          $file_path = Photo::USER_FEMALE_AVATAR_PATH;
        }

        $photo = Photo::create([
          'imageable_id' => $user->id,
          'imageable_type' => 'App\User',
          'path' => $file_path,
          'url' => env('APP_URL') . '/'. $file_path,
        ]);


         return $user;



    }
}
