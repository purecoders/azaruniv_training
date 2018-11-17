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
      foreach ($sliders as $slider){
        $slider->photo;
      }

//      $siteInfos = SiteInfo::all();

      $courses = Course::orderBy('id', 'desc')->take(20)->get();
      foreach ($courses as $course){
        $course->master->masterInfo;
        $course->master->photo;
        $course->coverImage;
      }

      $posts = Post::orderBy('id', 'desc')->take(20)->get();
      foreach ($posts as $post){
        $post->photo;
      }


      return view('site.home', compact(['sliders', 'courses', 'posts']));

    }




    public function categoryCourses($id){
      $category = Category::find($id);
      $courses = $category->courses;
      return view('site.courses',compact(['courses', 'category']));
    }




}
