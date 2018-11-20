<?php

namespace App\Http\Controllers;

use App\Course;
use App\Http\Controllers\helpers\FileHelper;
use App\Photo;
use App\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;


class UserDashboardController extends Controller
{
    public function __construct() {
      $this->middleware('auth');
    }



    public function show(){
      $user = Auth::user();
      $courses = $user->studentCourses;
      $tickets = $user->tickets;

      return view('user.dashboard', compact(['courses', 'tickets']));
    }


    public function courses(){
      $user = Auth::user();
      $courses = $user->studentCourses;
      return view('user.courses', compact(['courses']));
    }


    public function profile(){
      return view('user.profile');
    }

    public function tickets(){
      $user = Auth::user();

      //set seen to tickets
      $tickets = $user->tickets()->where('is_user_sent', '=', '0')
        ->where('is_seen', '=', '0')->get();
      foreach ($tickets as $ticket){
        $ticket->is_seen = 1;
        $ticket->save();
      }


      $tickets = $user->tickets()->take(50)->get();
      return view('user.tickets', compact('tickets'));
    }

    public function sendTicket(Request $request){
    $this->validate($request,[
      'text' => 'required|string|max:3000',
    ]);

    $user = Auth::user();

    $ticket = Ticket::create([
      'user_id' => $user->id,
      'is_user_sent' => 1,
      'text' => $request->text,
      'is_seen' => 0,
    ]);

    return redirect(route('user-tickets'));

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
      //remove photo file
      if(
        $photo->path !== Photo::MASTER_FEMALE_AVATAR_PATH
        && $photo->path !== Photo::MASTER_MALE_AVATAR_PATH
        && $photo->path !== Photo::USER_FEMALE_AVATAR_PATH
        && $photo->path !== Photo::USER_MALE_AVATAR_PATH
      ){
        File::delete($photo->path);
      }
      //remove photo from database
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
