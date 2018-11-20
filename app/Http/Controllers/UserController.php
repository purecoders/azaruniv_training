<?php

namespace App\Http\Controllers;

use App\Http\Controllers\helpers\FileHelper;
use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{

  public function __construct() {
    $this->middleware('auth');
  }



  public function changeInfo(Request $request){
    $this->validate($request,[
      'name'       => 'required|string|min:2|max:60',
      'mobile' => 'required|string|email|max:20',
      'national_code' => 'required|string|max:11|min:9',
    ]);

    $user = Auth::user();
    $user->name = $request->name;
    $user->mobile = $request->mobile;
    $user->national_code = $request->national_code;
    $user->save();

    //return to dashboard
  }


  public function changePassword(Request $request){
    $this->validate($request,[
      'old_password'       =>'required|string|min:6|max:60',
      'new_password' =>'required|string|min:6|max:60',
    ]);
    $user = Auth::user();
    $oldPassHash = $user->password;

    $oldPassword = $request->old_password;
    $newPassword = $request->new_password;

    if(Hash::check($oldPassword, $oldPassHash)){
      $user->password = Hash::make($newPassword);
      $user->save();
      //success
    }else{
      //password is incorrect
    }

    //return to dashboard
  }







}
