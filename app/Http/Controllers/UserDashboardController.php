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
      $courses = $user->studentCourses;
      $tickets = $user->tickets;

      return view('user.dashboard', compact(['courses', 'tickets']));
    }


    public function courses(){
      $user = Auth::user();
      $courses = $user->studentCourses;
      return view('user.courses', compact(['courses']));
    }










}
