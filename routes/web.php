<?php


use App\Course;
use App\User;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/a', function () {

  $user = Auth::user();
  $tickets = $user->tickets()->orderBy('id', 'desc');
  $newTicketsCount = $tickets = $user->tickets()->where('is_user_sent', '=', 0)->where('is_seen', '=', 0)->count();
  return $newTicketsCount;
});

