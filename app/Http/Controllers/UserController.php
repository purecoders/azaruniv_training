<?php

namespace App\Http\Controllers;

use App\Http\Controllers\helpers\FileHelper;
use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\ImageManagerStatic as Image;

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


  public function changeAvatar(Request $request){
    $this->validate($request,[
      'image' => 'required|image',
    ]);

    $image = $request->file('image');

    $file_extension = $image->getClientOriginalExtension();
    $dir = FileHelper::getFileDirName('images/users');
    $file_name = FileHelper::getFileNewName();
    $image_name = $file_name . '.' . $file_extension;
    $file_path = $dir . '/' . $file_name . '.'.$file_extension;
    $image->move($dir, $image_name);
    $image = Image::make($file_path);
    $image->resize(Photo::USER_AVATAR_WIDTH, Photo::USER_AVATAR_HEIGHT);
    $image->save();

    $user = Auth::user();
    $photo = $user->photo;
    if($photo !== null){
      File::delete($photo->path);
      $photo->delete();
    }

    $photo = Photo::create([
      'imageable_id' => $user->id,
      'imageable_type' => 'App\User',
      'path' => $file_path,
      'url' => env('APP_URL') . '/'. $file_path,
    ]);

    return redirect(route('user-profile'));
  }




}
