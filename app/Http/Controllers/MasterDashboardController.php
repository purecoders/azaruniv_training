<?php

namespace App\Http\Controllers;

use App\Course;
use App\Http\Controllers\helpers\FileHelper;
use App\MasterExtraInfo;
use App\Message;
use App\Photo;
use App\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;

class MasterDashboardController extends Controller
{

    public function __construct() {
    $this->middleware('auth');
    $this->middleware('master');
  }


    public function show(){
      $user = Auth::user();
      $courses = $user->masterCourses;

      return view('professor.dashboard');
    }


    public function courses(){
      $user = Auth::user();
      $courses = $user->masterCourses;

      return view('professor.courses', compact(['courses']));
    }


    public function classManagment($id){
      $course = Course::find($id);
      $user = Auth::user();
      if($course->master_id !== $user->id){
        return redirect('/home');
      }

      $students = $course->students;
      return view('professor.course', compact(['course', 'students']));
    }


    public function sendMessage(Request $request, $id){
      $this->validate($request,[
        'inputfield' =>'required|string|max:6000',
      ]);

      $text = $request->inputfield;
      $course = Course::find($id);
      $user = Auth::user();
      if($course->master_id !== $user->id){
        return redirect('/home');
      }

      $message = Message::create([
        'course_id' => $course->id,
        'type' => 'public',
        'user_id' => $user->id,
        'is_student_sent' => 0,
        'text' => $text,
        'is_seen' => 1,
        ]);


      return redirect(route('professor-course', ['id' => $course->id]));

    }


    public function profile(){
      $user = Auth::user();
      $cv = $user->masterInfo;
      if($cv === null){
        $cv = MasterExtraInfo::create([
          'master_id' => $user->id,
          'content' => ' ',
          'docs_path' => '',
        ]);
      }
      return view('professor.profile', compact(['user', 'cv']));
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

      return redirect(route('professor-profile'));
    }




    public function updateCv(Request $request){
      $this->validate($request,[
        'inputfield' =>'required|string|max:6000',
        'docs' =>'file',
      ]);

      $user = Auth::user();

      $content = $request->inputfield;
      $file = $request->file('docs');
      $hasFile = false;
      if($file !== null){
        $hasFile = true;
        $file_extension = $file->getClientOriginalExtension();
        $dir = FileHelper::getFileDirName('files/master_docs');
//        $file_name = FileHelper::getFileNewName();
        $file_name = $user->name;
        $file_full_name = $file_name . '.' . $file_extension;
        $file_path = $dir . '/' . $file_name . '.' . $file_extension;
        $file->move($dir, $file_full_name);
      }


      $cv = $user->masterInfo;
      $cv->content = $content;
      if($hasFile == true){
        $cv->docs_path = $file_path;
      }
      $cv->save();

      return redirect(route('professor-profile'));
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

      return view('professor.tickets', compact('tickets'));
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

      return redirect(route('professor-tickets'));
    }





}
