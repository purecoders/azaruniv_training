<?php


use App\Course;
use App\User;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/a', function () {

  $courses = Course::all();
  foreach ($courses as $course){
    $course->master->masterInfo;
    $course->coverImage;
  }

  return $courses;
});

