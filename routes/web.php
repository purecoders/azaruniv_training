<?php


use App\User;

Route::get('/', function () {
    return view('site.home');
})->name('home');

Route::get('/post', function () {
    return view('site.post');
})->name('post');
Route::get('/course', function () {
    return view('site.course');
})->name('course');
Route::get('/arcposts', function () {
    return view('site.archiveposts');
})->name('arcposts');
Route::get('/arccourses', function () {
    return view('site.archivecourses');
})->name('arccourses');

Route::get('/course/category/{id}', function () {
    return view('site.courses',compact('id'));
})->name('course-category');

Route::get('/user-dashboard', function () {
    return view('user.dashboard');
})->middleware('auth')->name('user-dashboard');

Route::get('/user-courses', function () {
    return view('user.courses');
})->middleware('auth')->name('user-courses');

Route::get('/user-profile', function () {
    return view('user.profile');
})->middleware('auth')->name('user-profile');

Route::get('/user-tickets', function () {
    return view('user.tickets');
})->middleware('auth')->name('user-tickets');



Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');



Route::get('/a', function () {
  $user = User::find(2);

  echo 'hello admin';


});

