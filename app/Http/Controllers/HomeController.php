<?php

namespace App\Http\Controllers;

use App\Http\Controllers\helper\UserHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {

      $user = Auth::user();

      if(UserHelper::isAdmin($user)){
        return redirect('/admin-posts');
      }elseif (UserHelper::isMaster($user)){
        return redirect('/professor-courses');
      }else{
        return redirect('/user-courses');
      }

//        return view('home');
    }

}
