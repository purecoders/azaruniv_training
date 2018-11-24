<?php

namespace App\Http\Controllers;

use App\Category;
use App\Course;
use App\Post;
use App\User;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{

  public function __construct() {
    $this->middleware('auth');
    $this->middleware('admin');
  }


  public function dashboard(){
      return view('admin.dashboard');
  }

  public function posts(){
    $posts = Post::orderBy('id', 'desc')->get();
    return view('admin.site.posts', compact('posts'));
  }

  public function courses(){
    $courses = Course::orderBy('id', 'desc')->get();
    $categories = Category::all();
    $masters = User::masters();
    return view('admin.site.courses', compact(['courses', 'categories', 'masters']));
  }


  public function course($id){
    $course = Course::find($id);
    $categories = Category::all();
    $masters = User::masters();
    return view('admin.site.course', compact(['course', 'categories', 'masters']));
  }
}
