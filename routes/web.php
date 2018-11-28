<?php







//auth
Auth::routes();
Route::get('/home', 'HomeController@index')->name('dashboard-home');




//site public
Route::get('/', 'SiteIndexPageController@show')->name('home');
Route::resource('post', 'PostController', [
  'names' => [
    'show' => 'post.show',
    'destroy' => 'post.destroy',
    'store' => 'post.store',
  ]
]);
Route::resource('course', 'CourseController', [
  'names' => [
    'show' => 'course.show',
    'store' => 'course.store',
    'destroy' => 'course.destroy',
    'update' => 'course.update',
  ]
]);

Route::resource('slider', 'SliderController', [
  'names' => [
    'show' => 'slider.show',
    'store' => 'slider.store',
    'destroy' => 'slider.destroy',
    'update' => 'slider.update',
  ]
]);

Route::get('/arcposts', 'PostController@archivePosts')->name('arcposts');
Route::get('/arccourses', 'CourseController@archiveCourses')->name('arccourses');
Route::get('/category/{id}/courses', 'SiteIndexPageController@categoryCourses')->name('course-category');
Route::post('/search', 'SiteIndexPageController@search')->name('search');



//student dashboard
Route::get('/user-dashboard', 'UserDashboardController@show')->name('user-dashboard');
Route::get('/user-courses', 'UserDashboardController@courses')->name('user-courses');
Route::get('/user-profile', 'UserDashboardController@profile')->name('user-profile');
Route::get('/user-tickets', 'UserDashboardController@tickets')->name('user-tickets');
Route::post('/user-send-ticket', 'UserDashboardController@sendTicket')->name('user-send-ticket');
Route::post('/user-change-avatar', 'UserDashboardController@changeAvatar')->name('user-change-avatar');




//master routes
Route::get('/professor-dashboard', 'MasterDashboardController@show')->name('professor-dashboard');
Route::get('/professor-courses', 'MasterDashboardController@courses')->name('professor-courses');
Route::get('/professor-course/{id}', 'MasterDashboardController@classManagment')->name('professor-course');
Route::post('/professor-course-send-message/{id}', 'MasterDashboardController@sendMessage')->name('professor-send-message');
Route::get('/professor-profile', 'MasterDashboardController@profile')->name('professor-profile');
Route::post('/professor-change-avatar', 'MasterDashboardController@changeAvatar')->name('professor-change-avatar');
Route::post('/professor-update-cv', 'MasterDashboardController@updateCv')->name('professor-update-cv');
Route::get('/professor-tickets', 'MasterDashboardController@tickets')->name('professor-tickets');
Route::post('/professor-send-ticket', 'MasterDashboardController@sendTicket')->name('professor-send-ticket');




//admin routes
Route::get('/admin-dashboard', 'AdminDashboardController@dashboard')->name('admin-dashboard');
Route::get('/admin-posts', 'AdminDashboardController@posts')->name('admin-posts');
Route::get('/admin-courses', 'AdminDashboardController@courses')->name('admin-courses');
Route::get('/admin-course/{id}', 'AdminDashboardController@course')->name('admin-course');
Route::get('/admin-slider', 'AdminDashboardController@sliders')->name('admin-slider');
Route::get('/admin-contact-us', 'AdminDashboardController@contactUs')->name('admin-contact-us');
Route::post('/admin-update-contact-us', 'SiteInfoController@update')->name('admin-update-contact-us');
Route::get('/admin-users', 'AdminDashboardController@users')->name('admin-users');
Route::get('/admin-user-detail/{id}', 'AdminDashboardController@user')->name('admin-user-detail');
Route::get('/admin-reset-password/{id}', 'AdminDashboardController@resetPassword')->name('admin-reset-password');
