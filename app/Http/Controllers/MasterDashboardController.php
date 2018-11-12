<?php

namespace App\Http\Controllers;

use App\Course;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MasterDashboardController extends Controller
{

    public function __construct() {
    $this->middleware('auth');
    $this->middleware('master');
  }


    public function show(){
      $user = Auth::user();
      $photo = $user->photo;
      $courses = $user->masterCourses;
      foreach ($courses as $course) {
        $course->coverImage;
        $course->master;
        $course->messages;
      }
      $tickets = $user->tickets;
      $messages = $user->messages;
    }



    public function updateCv(Request $request){
      $this->validate($request,[
        'content' =>'required|string|max:6000',
      ]);

      $content = $request->get('content');
      $user = Auth::user();
      $cv = $user->masterInfo;
      $cv->content = $content;
      $cv->save();

      //return view
    }


    public function sendMessageToCourse(Request $request){
      $this->validate($request,[
        'course_id' =>'required|numeric',
        'text'       =>'required|string|min:1|max:6000',
      ]);

      $user = Auth::user();
      $course = Course::find($request->course_id);
      if($user->id !== $course->master_id) {
        //return
      }

      $message = Message::create([
        'course_id' => $request->course_id,
        'type' => 'public',
        'user_id' => $user->id,
        'is_student_sent' => 0,
        'is_seen' => 0,
      ]);

      //return
    }



}
