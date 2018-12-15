<?php


use App\User;
use Illuminate\Http\Request;

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

Route::get('/course-purchase', function () {
    return view('site.coursePurchase');
})->name('course-purchase');



Route::get('/user-dashboard', function () {
    return view('user.dashboard');
})->middleware('auth')->name('user-dashboard');

Route::get('/user-courses', function () {
    return view('user.courses');
})->middleware('auth')->name('user-courses');

Route::get('/user-profile', function () {
    return view('user.profile');
})->middleware('auth')->name('user-profile');

Route::get('/user-course-offer', function () {
    return view('user.offer');
})->middleware('auth')->name('user-course-offer');


Route::get('/user-tickets', function () {
    return view('user.tickets');
})->middleware('auth')->name('user-tickets');

Route::get('/user-payment-success', function () {
    return view('user.paymentSuccess');
})->middleware('auth')->name('user-payment-success');

Route::get('/user-payment-failed', function () {
    return view('user.paymentFailed');
})->middleware('auth')->name('user-payment-failed');

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

Route::get('/professor-course-students', function () {
    return view('professor.courseStudents');
})->middleware('auth')->name('professor-course-students');


Route::get('/admin-dashboard', function () {
    return view('admin.dashboard');
})->middleware('auth')->name('admin-dashboard');
Route::get('/admin-posts', function () {
    return view('admin.site.posts');
})->middleware('auth')->name('admin-posts');
Route::get('/admin-courses', function () {
    return view('admin.site.courses');
})->middleware('auth')->name('admin-courses');
Route::get('/admin-course', function () {
    return view('admin.site.course');
})->middleware('auth')->name('admin-course');
Route::get('/admin-slider', function () {
    return view('admin.site.slider');
})->middleware('auth')->name('admin-slider');
Route::get('/admin-contact-us', function () {
    return view('admin.site.contactUs');
})->middleware('auth')->name('admin-contact-us');
Route::get('/admin-tickets', function () {
    return view('admin.site.tickets');
})->middleware('auth')->name('admin-tickets');
Route::get('/admin-change-password', function () {
    return view('admin.site.changePassword');
})->middleware('auth')->name('admin-change-password');

Route::get('/admin-professors', function () {
    return view('admin.professor.professors');
})->middleware('auth')->name('admin-professors');
Route::get('/admin-professor-detail', function () {
    return view('admin.professor.detail');
})->middleware('auth')->name('admin-professor-detail');

Route::get('/admin-users', function () {
    return view('admin.user.users');
})->middleware('auth')->name('admin-users');
Route::get('/admin-user-detail', function () {
    return view('admin.user.detail');
})->middleware('auth')->name('admin-user-detail');
Route::get('/admin-users-all', function () {
    return view('admin.user.all');
})->middleware('auth')->name('admin-users-all');
Route::get('/admin-user-print-certificate', function () {
    return view('admin.user.certificatePrint');
})->middleware('auth')->name('admin-user-print-certificate');



Route::post('table-post',function(Request $request){
//    return redirect('/admin-course');
    $certs=$request->input('cert');
    $users=$request->input('user_id');
    $arr=['certs'=>$certs,'users'=>$users];
    return $arr;

})->name('table-post');

Route::post('postt',function (){
   return "posted";
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');



Route::get('/a', function () {
  $user = User::find(2);

  echo 'hello admin';


});

