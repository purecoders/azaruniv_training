<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Support\Facades\Auth;


class UserDashboardController extends Controller
{
    public function __construct() {
      $this->middleware('auth');
    }



    public function show(){
      $user = Auth::user();
      $payments = $user->payments;
      $courses = $user->studentCourses;
      foreach ($courses as $course){
        $course->master;
        $course->coverImage;
      }
      $tickets = $user->tickets;
      $messages = $user->messages;
      $photo = $user->photo;

      //return view
    }


    public function showCourse($id){
      $course = Course::find($id);
      $user = Auth::user();
      $user_courses = $course->usersCourses;

      $isForUser = false;
      foreach ($user_courses as $user_course){
        if($user_course->student_id === $user->id){
          $isForUser = true;
          break;
        }
      }

      if(!$isForUser){
        //return to dashboard
      }


      $course->master->masterInfo;
      $course->publicMessages;



    }








}
