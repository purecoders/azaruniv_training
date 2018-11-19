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
Route::get('/category/{id}/courses', 'SiteIndexPageController@categoryCourses')->name('course-category');
Route::post('/search', 'SiteIndexPageController@search')->name('search');


//users public api
Route::post('/user-change-avatar', 'UserController@changeAvatar')->name('user-change-avatar');




//user dashboard
Route::get('/user-dashboard', 'UserDashboardController@show')->name('user-dashboard');
Route::get('/user-courses', 'UserDashboardController@courses')->name('user-courses');
Route::get('/user-profile', 'UserDashboardController@profile')->name('user-profile');
Route::get('/user-tickets', 'UserDashboardController@tickets')->name('user-tickets');
Route::post('/user-send-ticket', 'UserDashboardController@sendTicket')->name('user-send-ticket');




//master routes
Route::get('/professor-dashboard', 'MasterDashboardController@show')->name('professor-dashboard');
Route::get('/professor-courses', 'MasterDashboardController@courses')->name('professor-courses');

Route::get('/professor-course', function () {
  return view('professor.course');
})->middleware('auth')->name('professor-course');

Route::get('/professor-profile', function () {
  return view('professor.profile');
})->middleware('auth')->name('professor-profile');

Route::get('/professor-tickets', function () {
  return view('professor.tickets');
})->middleware('auth')->name('professor-tickets');