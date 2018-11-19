<?php

namespace App\Http\Controllers;

use App\Category;
use App\Course;
use App\Post;
use App\SiteInfo;
use App\Slider;
use Illuminate\Http\Request;

class SiteIndexPageController extends Controller
{


    public function show(){
      $sliders = Slider::orderBy('id', 'desc')->get();
      $courses = Course::orderBy('id', 'desc')->take(20)->get();
      $posts = Post::orderBy('id', 'desc')->take(10)->get();
      return view('site.home', compact(['sliders', 'courses', 'posts']));
    }




    public function categoryCourses($id){
      $category = Category::find($id);
      $courses = $category->courses;
      return view('site.courses',compact(['courses', 'category']));
    }


    public function search(Request $request){
      $text = $request->T1;
      $courses = Course::orderBy('id', 'desc')->where('title', 'like', '%'.$text.'%')->orWhere('description', 'like', '%'.$text.'%')->take(20)->get();
      return view('site.search', compact(['text', 'courses']));
    }




}
