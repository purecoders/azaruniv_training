<?php


use App\Http\Controllers\helper\MyCrypt;
use App\Http\Controllers\helper\Sadad;
use App\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

Route::get('test', function (){


  $data = MyCrypt::encrypt_pkcs7(env('SADAD_TERMINAL_ID').';'.'1545'.';'.'10000', env('SADAD_TERMINAL_KEY'));
  return $data;
  $url = 'http://google.com';
  return redirect("$url");
  header("Location:$url");

  $sadad = new Sadad(env('SADAD_MERCHANT_ID'), env('SADAD_TERMINAL_ID'),
    env('SADAD_TERMINAL_KEY'), env('SADAD_PAYMENT_IDENTITY'));
  $res = $sadad->request(1000, 154544, route('verify'));
  return json_encode($res);
  $res_code = $res->ResCode;
  $token = $res->Token;
  $desc = $res->Description;
  echo "res_code =  <br>token = $token <br>desc = $desc";
//  return base64_encode('7zn8DrAPzLIoVOwstLltktJSpeNH/us3');
//  return utf8_decode(base64_decode('=okC+oxkdFSfci7cYlkXc31NYjtiA3LOgrjqgaayMJLY'));


//  return base64_decode(env('SADAD_TERMINAL_KEY'));
//
//
//
//  $key = md5('123');
//  //Take first 8 bytes of $key and append them to the end of $key.
//  $key .= substr($key, 0, 8);
//  echo 'key = ' . "$key" . '<br>';
//
//  $enc = MyCrypt::encrypt_pkcs7('Mohsen');
//  echo 'encrypted = ' . $enc . '<br>';
//  echo 'decrypted = ' . MyCrypt::decrypt_pkcs7($enc) . '<br>';
//  echo base64_encode('mohsen') . '<br>' . base64_decode('bW9oc2Vu');
})->name('test');




Route::post('/verify',function (){

})->name('verify');

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
Route::get('/course-purchase/{id}', 'SiteIndexPageController@coursePurchase')->name('course-purchase');
Route::get('/course-register/{id}', 'SiteIndexPageController@courseRegister')->name('course-register');
Route::post('/course-verify-pay', 'SiteIndexPageController@courseVerifyPay')->name('course-verify-pay');



//student dashboard
Route::get('/user-dashboard', 'UserDashboardController@show')->name('user-dashboard');
Route::get('/user-courses', 'UserDashboardController@courses')->name('user-courses');
Route::get('/user-profile', 'UserDashboardController@profile')->name('user-profile');
Route::get('/user-tickets', 'UserDashboardController@tickets')->name('user-tickets');
Route::post('/user-send-ticket', 'UserDashboardController@sendTicket')->name('user-send-ticket');
Route::post('/user-change-avatar', 'UserDashboardController@changeAvatar')->name('user-change-avatar');
Route::post('/user-change-password', 'UserDashboardController@changePassword')->name('user-change-password');
Route::get('/user-course-offer', 'UserDashboardController@offerCourse')->name('user-course-offer');
Route::post('/user-recommend-course', 'UserDashboardController@recommendCourse')->name('user-recommend-course');




//master routes
Route::get('/professor-dashboard', 'MasterDashboardController@show')->name('professor-dashboard');
Route::get('/professor-courses', 'MasterDashboardController@courses')->name('professor-courses');
Route::get('/professor-course/{id}', 'MasterDashboardController@classManagment')->name('professor-course');
Route::post('/professor-course-send-message/{id}', 'MasterDashboardController@sendMessage')->name('professor-send-message');
Route::get('/professor-profile', 'MasterDashboardController@profile')->name('professor-profile');
Route::post('/professor-change-avatar', 'MasterDashboardController@changeAvatar')->name('professor-change-avatar');
Route::post('/professor-change-password', 'MasterDashboardController@changePassword')->name('professor-change-password');
Route::post('/professor-update-cv', 'MasterDashboardController@updateCv')->name('professor-update-cv');
Route::get('/professor-tickets', 'MasterDashboardController@tickets')->name('professor-tickets');
Route::post('/professor-send-ticket', 'MasterDashboardController@sendTicket')->name('professor-send-ticket');
Route::get('/professor-course-students/{id}', 'MasterDashboardController@courseStudents')->name('professor-course-students');



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
Route::get('/admin-tickets', 'AdminDashboardController@tickets')->name('admin-tickets');
Route::get('/admin-tickets-user/{id}', 'AdminDashboardController@userTickets')->name('admin-user-tickets');
Route::post('/admin-send-ticket', 'AdminDashboardController@sendTicket')->name('admin-send-ticket');
Route::get('/admin-users-all', 'AdminDashboardController@allUsers')->name('admin-users-all');
Route::get('/admin-professors', 'AdminDashboardController@professors')->name('admin-professors');
Route::get('/admin-professor-detail/{id}', 'AdminDashboardController@professorDetail')->name('admin-professor-detail');
Route::post('/admin-register-professor', 'AdminDashboardController@registerProfessor')->name('admin-register-professor');
Route::post('/admin-send-student-public-message', 'AdminDashboardController@studentPublicMessage')->name('admin-send-student-public-message');
Route::post('/admin-send-professor-public-message', 'AdminDashboardController@professorPublicMessage')->name('admin-send-professor-public-message');
Route::delete('/admin-remove-student/{id}', 'AdminDashboardController@removeStudent')->name('admin-remove-student');
Route::get('/admin-change-password-page', 'AdminDashboardController@changePasswordPage')->name('admin-change-password-page');
Route::post('/admin-change-password', 'AdminDashboardController@changePassword')->name('admin-change-password');
Route::post('/admin-professor-send-message', 'AdminDashboardController@professorSendMessage')->name('admin-professor-send-message');
Route::post('/admin-user-send-message', 'AdminDashboardController@userSendMessage')->name('admin-user-send-message');


Route::get('/admin-user-print-certificate/{user_id}/{course_id}', 'AdminDashboardController@userCertificatePrint')->name('admin-user-print-certificate');

Route::post('table-post','AdminDashboardController@userExportCertificate')->name('table-post');


