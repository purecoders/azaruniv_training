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

Route::get('/search', function () {
    return view('site.search');
})->name('search');



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


Route::get('/professor-dashboard', function () {
    return view('professor.dashboard');
})->middleware('auth')->name('professor-dashboard');

Route::get('/professor-courses', function () {
    return view('professor.courses');
})->middleware('auth')->name('professor-courses');

Route::get('/professor-course', function () {
    return view('professor.course');
})->middleware('auth')->name('professor-course');

Route::get('/professor-profile', function () {
    return view('professor.profile');
})->middleware('auth')->name('professor-profile');

Route::get('/professor-tickets', function () {
    return view('professor.tickets');
})->middleware('auth')->name('professor-tickets');

Route::post('postt',function (){
   return "posted";
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');



Route::get('/a', function () {
  $user = User::find(2);

  echo 'hello admin';


});

