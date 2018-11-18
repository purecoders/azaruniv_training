<?php

namespace App\Http\Controllers;

use App\Course;
use App\Ticket;
use Illuminate\Http\Request;
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










}
