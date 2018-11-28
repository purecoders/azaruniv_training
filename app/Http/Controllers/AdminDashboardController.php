<?php

namespace App\Http\Controllers;

use App\Category;
use App\Course;
use App\Http\Controllers\helper\UserHelper;
use App\Post;
use App\SiteInfo;
use App\Slider;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminDashboardController extends Controller
{

  public function __construct() {
    $this->middleware('auth');
    $this->middleware('admin');
  }


  public function dashboard(){
      return view('admin.dashboard');
  }

  public function posts(){
    $posts = Post::orderBy('id', 'desc')->get();
    return view('admin.site.posts', compact('posts'));
  }

  public function courses(){
    $courses = Course::orderBy('id', 'desc')->get();
    $categories = Category::all();
    $masters = User::masters();
    return view('admin.site.courses', compact(['courses', 'categories', 'masters']));
  }


  public function course($id){
    $course = Course::find($id);
    $payments = $course->payments;
    $paymentsSum = 0;
    foreach ($payments as $payment){
      if($payment->is_success == 1) {
        $paymentsSum += $payment->amount;
      }
    }
    $categories = Category::all();
    $masters = User::masters();
    $students = $course->students;

    return view('admin.site.course', compact(['course', 'categories', 'masters', 'students', 'payments', 'paymentsSum']));
  }


  public function sliders(){
    $sliders = Slider::orderBy('id', 'desc')->get();
    return view('admin.site.slider', compact('sliders'));
  }


  public function contactUs(){
    $infos = SiteInfo::all();
    foreach ($infos as $info){
      if($info->key === 'phone_number') $phone_number = $info->value;
      elseif($info->key === 'email') $email = $info->value;
      elseif ($info->key === 'address') $address = $info->value;
      elseif ($info->key === 'postal_code')  $postal_code = $info->value;
    }

    return view('admin.site.contactUs', compact(['phone_number', 'email', 'address', 'postal_code']));
  }



  public function users(){
    $students = array();
    $users = User::orderBy('id' ,'desc')->paginate(25);
    foreach ($users as $user){
      if(UserHelper::isStudent($user)){
        $students [] = $user;
      }
    }
    return view('admin.user.users', compact('students'));
  }


  public function user($id){
    $user = User::find($id);
    $courses = $user->studentCourses;
    $payments = $user->payments;
    return view('admin.user.detail', compact(['user', 'courses', 'payments']));
  }


  public function resetPassword($id){
    $user = User::find($id);
    $national_code = $user->national_code;
    $newPassword = Hash::make($national_code);
    $user->password = $newPassword;
    $user->save();

    return redirect('/admin-user-detail/' . $id);
  }

}
