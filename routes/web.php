<?php


use App\Course;
use App\User;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/a', function () {

  $courses = Course::orderBy('id', 'desc')->get();
  $course = Course::find(1);
  $count = $course->students()->count();
  return $count;
});

