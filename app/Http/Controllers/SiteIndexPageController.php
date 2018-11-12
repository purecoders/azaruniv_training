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

      $siteInfos = SiteInfo::all();

      $courses = Course::orderBy('id', 'desc')->get();
      foreach ($courses as $course){
        $course->master->masterInfo;
        $course->master->photo;
        $course->coverImage;
      }

      $posts = Post::orderBy('id', 'desc')->get();
      foreach ($posts as $post){
        $post->photo;
      }

    }

    public function courseList(){
      $courses = Course::orderBy('id', 'desc')->get();
      foreach ($courses as $course){
        $course->coverImage;
        $course->master->masterInfo;
        $course->master->photo;
        $course->students;
      }

      //return view
    }

    public function postList(){
      $posts = Post::orderBy('id', 'desc')->get();
      foreach ($posts as $post){
        $post->photo;
      }

      //
    }


    public function showCourse($id){
      $course = Course::find($id);
      $course->coverImage;
      $course->master->masterInfo;
      $course->master->photo;
      $course->students;
      //
    }

    public function showPost($id){
      $post = Post::find($id);
      $post->photo;
      //
    }

    public function categoryCourses($id){
      $category = Category::find($id);
      $courses = $category->courses;
      foreach ($courses as $course){
        $course->coverImage;
        $course->master->masterInfo;
        $course->master->photo;
        $course->students;
      }
    }




}
