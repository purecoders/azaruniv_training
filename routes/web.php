<?php


use App\Course;
use App\User;

//tests
Route::get('/a', function () {

  $user = Auth::user();
  $courses = $user->studentCourses;
  return $courses;
  $tickets = $user->tickets()->orderBy('id', 'desc');
  $newTicketsCount = $tickets = $user->tickets()->where('is_user_sent', '=', 0)->where('is_seen', '=', 0)->count();
  return $newTicketsCount;
});




//auth
Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');


//site public
Route::get('/', 'SiteIndexPageController@show')->name('home');


Route::resource('post', 'PostController', [
  'names' => [
    'show' => 'post.show',
  ]
]);

Route::resource('course', 'CourseController', [
  'names' => [
    'show' => 'course.show',
  ]
]);

Route::get('/arcposts', 'PostController@archivePosts')->name('arcposts');

Route::get('/arccourses', 'CourseController@archiveCourses')->name('arccourses');


Route::get('/category/courses/{id}', 'SiteIndexPageController@categoryCourses')->name('course-category');



//user dashboard
Route::get('/user-dashboard', 'UserDashboardController@show')->name('user-dashboard');
Route::get('/user-courses', 'UserDashboardController@courses')->name('user-courses');




Route::get('/user-profile', function () {
  return view('user.profile');
})->middleware('auth')->name('user-profile');

Route::get('/user-tickets', function () {
  return view('user.tickets');
})->middleware('auth')->name('user-tickets');