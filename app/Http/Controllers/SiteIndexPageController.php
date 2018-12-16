<?php

namespace App\Http\Controllers;

use App\Category;
use App\Course;
use App\Http\Controllers\helper\MyCrypt;
use App\Http\Controllers\helper\Sadad;
use App\Order;
use App\Payment;
use App\Post;
use App\SiteInfo;
use App\Slider;
use App\User;
use App\UserCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteIndexPageController extends Controller
{


  public function __construct() {
    $this->middleware('auth', ['only' => ['coursePurchase', 'courseRegister']]);
    $this->middleware('student', ['only' => ['courseRegister']]);
  }

  public function show(){
      $sliders = Slider::orderBy('id', 'desc')->get();
      $courses = Course::orderBy('id', 'desc')->take(12)->get();
      $posts = Post::orderBy('id', 'desc')->take(12)->get();
      return view('site.home', compact(['sliders', 'courses', 'posts']));
    }




    public function categoryCourses($id){
      $category = Category::find($id);
      $courses = $category->courses;
      return view('site.courses',compact(['courses', 'category']));
    }


    public function search(Request $request){
      $text = $request->T1;
      $courses = Course::orderBy('id', 'desc')->where('title', 'like', '%'.$text.'%')->orWhere('description', 'like', '%'.$text.'%')->take(20)->get();
      return view('site.search', compact(['text', 'courses']));
    }




    public function coursePurchase($id){
      $course = Course::find($id);
      $user = Auth::user();
      return view('site.coursePurchase', compact(['course', 'user']));
    }



    public function courseRegister($id){
      $course = Course::find($id);
      $user = Auth::user();

      if($user->is_male == 1 && $course->gender == 'female'){
        return redirect(route('course-purchase', $id));
      }elseif ($user->is_male == 0 && $course->gender == 'male'){
        return redirect(route('course-purchase', $id));
      }elseif ($course->students()->count() >= $course->capacity){
        return redirect(route('course-purchase', $id));
      }elseif ($course->is_open == 0){
        return redirect(route('course-purchase', $id));
      }

      $userCourses = $user->studentCourses;
      foreach ($userCourses as $userCourse){
        if ($userCourse->id == $course->id){
          return redirect(route('course-purchase', $id));
        }
      }


      //register free courses
      if($course->cost == 0){
        $user_course = UserCourse::create([
          'student_id' => Auth::user()->user_id,
          'course_id' => $course->id,
          'has_certificate' => 0,
        ]);

        $description = 'ثبت نام با موفقیت انجام شد.';
        $retrival_ref_no = ' ';
        $system_trace_no = ' ';
        $amount = 0;
        return view('user.paymentSuccess', compact(['description', 'retrival_ref_no', 'system_trace_no', 'amount']));
      }




      $order = Order::create([
        'user_id' => $user->id,
        'course_id' => $course->id,
        'amount' => (int)($course->cost * 10),
      ]);

      $sadad = new Sadad(
        MyCrypt::decrypt_pkcs7(env('SADAD_MERCHANT_ID')),
        MyCrypt::decrypt_pkcs7(env('SADAD_TERMINAL_ID')),
        MyCrypt::decrypt_pkcs7(env('SADAD_TERMINAL_KEY')),
        MyCrypt::decrypt_pkcs7(env('SADAD_PAYMENT_IDENTITY'))
      );

      $response = $sadad->request($order->amount, $order->id, route('course-verify-pay'));

      if($response->ResCode != 0){
        $description = $response->Description;
        return view('user.paymentFailed', compact('description'));
      }else{
        $sadad->redirect($response->Token);
      }
    }


    public function courseVerifyPay(Request $request){

      //get below data from your call_back_url
//    $order_id=$_POST["OrderId"];
//    $token=$_POST["token"];
//    $response_code=$_POST["ResCode"];


      $order_id = $request->OrderId;
      $token = $request->Token;
      $pay_res_code = $request->ResCode;

      $sadad = new Sadad(
        MyCrypt::decrypt_pkcs7(env('SADAD_MERCHANT_ID')),
        MyCrypt::decrypt_pkcs7(env('SADAD_TERMINAL_ID')),
        MyCrypt::decrypt_pkcs7(env('SADAD_TERMINAL_KEY')),
        MyCrypt::decrypt_pkcs7(env('SADAD_PAYMENT_IDENTITY'))
      );

      $verify_response = $sadad->verify($token);
      $res_code = $verify_response->ResCode;
      $amount = $verify_response->Amount;
      $description = $verify_response->Description;
      $retrival_ref_no = $verify_response->RetrivalRefNo;
      $system_trace_no = $verify_response->SystemTraceNo;
      $order_id = $verify_response->OrderId;

      $order = Order::find($order_id);

      if($pay_res_code == 0 && $res_code == 0 && $amount == $order->amount){
        //success

        $user_course = UserCourse::create([
          'student_id' => $order->user_id,
          'course_id' => $order->course_id,
          'has_certificate' => 0,
        ]);

        $payment = Payment::create([
          'course_id' => $order->course_id,
          'user_id' => $order->user_id,
          'amount' => (int)(($order->amount)/10),
          'is_success' => 1,
          'retrival_ref_no' => $retrival_ref_no,
          'system_trace_no' => $system_trace_no,
        ]);

        return view('user.paymentSuccess', compact(['description', 'retrival_ref_no', 'system_trace_no', 'amount']));

      }else{
        //failed

        $payment = Payment::create([
          'course_id' => $order->course_id,
          'user_id' => $order->user_id,
          'amount' => (int)($order->amount/10),
          'is_success' => 0,
          'retrival_ref_no' => $retrival_ref_no,
          'system_trace_no' => $system_trace_no,
        ]);

        return view('user.paymentFailed', compact('description'));
      }


    }



}
