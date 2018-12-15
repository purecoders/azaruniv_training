<?php

namespace App\Http\Controllers;

use App\Course;
use App\Http\Controllers\helpers\FileHelper;
use App\Photo;
use App\RecommendedCourse;
use App\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\ImageManagerStatic as Image;


class UserDashboardController extends Controller
{
    public function __construct() {
      $this->middleware('auth');
      $this->middleware('student');
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
      $change_password_status = null;
      return view('user.profile', compact('change_password_status'));
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
      'text' => 'required|string|max:3000|min:1',
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

    public function changePassword(Request $request){
      $this->validate($request,[
        'new_password' => 'required|string|min:6',
        'old_password' => 'required|string|min:6',
      ]);

      $user = Auth::user();
      if(Hash::check($request->old_password, $user->password)){
        $user->password = Hash::make($request->new_password);
        $user->save();
        $change_password_status = 1;
      }else{
        $change_password_status = 0;
      }

      return view('user.profile', compact('change_password_status'));
    }




    public function offerCourse(){
      return view('user.offer');
    }

    public function recommendCourse(Request $request){
      $this->validate($request,[
        'new_offer' => 'required|string|max:52',
      ]);

      $user = Auth::user();

      $recommend = RecommendedCourse::create([
        'user_id' => $user->id,
        'name' => $request->new_offer,
      ]);

      return redirect(route('user-course-offer'));
    }













}
