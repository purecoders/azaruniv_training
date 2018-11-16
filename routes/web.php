<?php


use App\User;

Route::get('/', function () {
    return view('site.home');
})->name('home');

Route::get('/post', function () {
    return view('site.post');
});
Route::get('/course', function () {
    return view('site.course');
});
Route::get('/arcposts', function () {
    return view('site.archiveposts');
})->name('arcposts');
Route::get('/arccourses', function () {
    return view('site.archivecourses');
})->name('arccourses');

Route::get('/course/category/{id}', function () {
    return view('site.courses',compact('id'));
})->name('course-category');



Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');



Route::get('/a', function () {
  $user = User::find(2);

  echo 'hello admin';


});

