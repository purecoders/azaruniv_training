<?php

namespace App\Http\Controllers;

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








}
