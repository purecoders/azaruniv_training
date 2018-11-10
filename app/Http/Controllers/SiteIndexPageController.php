<?php

namespace App\Http\Controllers;

use App\Course;
use App\Post;
use App\SiteInfo;
use App\Slider;
use Illuminate\Http\Request;

class SiteIndexPageController extends Controller
{
    public function show(){
      $sliders = Slider::all();
      foreach ($sliders as $slider){
        $slider->photo;
      }

      $siteInfos = SiteInfo::all();

      $courses = Course::all();
      foreach ($courses as $course){
        $course->master->masterInfo;
        $course->coverImage;
      }

      $posts = Post::all();
      foreach ($posts as $post){
        $post->photo;
      }



    }
}
