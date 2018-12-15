<?php

namespace App\Http\Controllers;

use App\Category;
use App\Course;
use App\Http\Controllers\helper\UserHelper;
use App\MasterExtraInfo;
use App\Photo;
use App\Post;
use App\RecommendedCourse;
use App\Role;
use App\SiteInfo;
use App\Slider;
use App\Ticket;
use App\User;
use App\UserCourse;
use DateInterval;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
    $users = User::orderBy('id' ,'desc')->paginate(30);

    //get recent two month records
    $originaldate = date("Y-m-d H:i:s");
    $converted = DateTime::createFromFormat("Y-m-d H:i:s", $originaldate);
    $converted2months = $converted->sub(new DateInterval("P2M"));
    $recommends = RecommendedCourse::orderBy('id', 'desc')->where('created_at', '>=', $converted2months)->get();

    return view('admin.user.users', compact(['users', 'recommends']));
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


  public function tickets(){
    $users_id = DB::select("SELECT  user_id FROM  tickets GROUP BY user_id ORDER BY MAX(id) DESC ");
    $users = array();
    foreach ($users_id as $user_id){
      $users [] = User::withTrashed()->find($user_id->user_id);
    }

    $tickets = null;
    $user_id = 0;

    return view('admin.site.tickets', compact(['users', 'tickets', 'user_id']));
  }


  public function userTickets($id){
    $user = User::find($id);
    $users_id = DB::select("SELECT  user_id FROM  tickets GROUP BY user_id ORDER BY MAX(id) DESC ");
    $users = array();
    foreach ($users_id as $user_id){
      $users [] = User::withTrashed()->find($user_id->user_id);
    }


    $tickets = $user->tickets()->where('is_user_sent', '=', '1')
      ->where('is_seen', '=', '0')->get();
    foreach ($tickets as $ticket) {
      $ticket->is_seen = 1;
      $ticket->save();
    }

    $tickets = $user->tickets()->orderBy('id', 'asc')->get();
    $user_id = $user->id;

    return view('admin.site.tickets', compact(['users', 'tickets', 'user_id']));
  }


  public function sendTicket(Request $request){
    $this->validate($request,[
      'text' => 'required|string|max:3000|min:1',
      'user_id' => 'required|numeric',
    ]);

    $ticket = Ticket::create([
      'user_id' => $request->user_id,
      'is_user_sent' => 0,
      'text' => $request->text,
      'is_seen' => 0,
    ]);

    return redirect(route('admin-user-tickets', $request->user_id));

  }



  public function allUsers(){
    $students = array();
    $users = User::orderBy('id' ,'asc')->get();
    foreach ($users as $user){
      if(UserHelper::isStudent($user)){
        $students [] = $user;
      }
    }

    return view('admin.user.all', compact('students'));
  }

  public function professors(){
    $role = Role::where('name' , '=' ,'master')->first();
    $masters = $role->users;
    return view('admin.professor.professors', compact('masters'));
  }

  public function professorDetail($id){
    $master = User::find($id);
    $courses = $master->masterCourses;
    $cv = $master->masterInfo;

    return view('admin.professor.detail', compact(['master', 'courses', 'cv']));
  }


  public function registerProfessor(Request $request){
    $this->validate($request,[
      'name' => 'required|string|max:255',
      'is_male' => 'required|numeric|max:1|min:0',
      'email' => 'required|string|email|max:255|unique:users',
      'mobile' => 'required|string|max:20',
//      'major' => 'required|string|max:100',
      'national_code' => 'required|string|max:12|min:3',
      'password' => 'required|string|min:6',
    ]);

    $user = User::create([
      'name' => $request->name,
      'is_male' => $request->is_male,
      'major' => $request->major,
      'email' => $request->email,
      'mobile' => $request->mobile,
      'student_number' => $request->student_number,
      'national_code' => $request->national_code,
      'password' => Hash::make($request->password),
    ]);

    //add master role
    $masterRole = Role::where('name', '=', 'master')->first();
    DB::insert("INSERT INTO user_role (user_id, role_id) VALUES ('$user->id', '$masterRole->id')");

    //add cv
    $cv = MasterExtraInfo::create([
      'master_id' => $user->id,
      'content' => 'خالی',
      'docs_path' => '',
    ]);
    //add master image
    if($request->is_male == 1){
      $file_path = Photo::MASTER_MALE_AVATAR_PATH;
    }else{
      $file_path = Photo::MASTER_FEMALE_AVATAR_PATH;
    }

    $photo = Photo::create([
      'imageable_id' => $user->id,
      'imageable_type' => 'App\User',
      'path' => $file_path,
      'url' => env('APP_URL') . '/'. $file_path,
    ]);

    return redirect(route('admin-professor-detail', $user->id));

  }



  public function studentPublicMessage(Request $request){
    $this->validate($request,[
      'text' => 'required|string|max:3000|min:1',
    ]);

    $users = User::orderBy('id' ,'desc')->get();
    foreach ($users as $user){
      if(UserHelper::isStudent($user)){
        Ticket::create([
          'user_id' => $user->id,
          'is_user_sent' => 0,
          'text' => $request->text,
          'is_seen' => 0,
        ]);
      }
    }

    return redirect(route('admin-users'));
  }


  public function professorPublicMessage(Request $request) {
    $this->validate($request, [
      'text' => 'required|string|max:3000|min:1',
    ]);

    $role = Role::where('name', '=', 'master')->first();
    $masters = $role->users;

    foreach ($masters as $master) {
      Ticket::create([
        'user_id' => $master->id,
        'is_user_sent' => 0,
        'text' => $request->text,
        'is_seen' => 0,
      ]);
    }

    return redirect(route('admin-professors'));
  }



  public  function removeStudent($id){
    $user = User::find($id);
    $user->delete();
    return redirect(route('admin-users'));
  }


  public function changePasswordPage(){
    $message = null;
    $is_success = null;
    return view('admin.site.changePassword', compact(['message', 'is_success']));
  }

  public function changePassword(Request $request){
    $this->validate($request, [
      'old_password' => 'required|string|max:100|min:6',
      'new_password' => 'required|string|max:100|min:6',
      'new_password_repeat' => 'required|string|max:100|min:6',
    ]);


    $user = Auth::user();
    if(Hash::check($request->old_password, $user->password)){
      if($request->new_password == $request->new_password_repeat){
        $user->password = Hash::make($request->new_password);
        $user->save();
        $message = 'رمز شما با موفقیت تغییر یافت';
        $is_success = 1;
      }else{
        $message = 'رمز های جدید با همدیگر مطابقت ندارند';
        $is_success = 0;
      }
    }else{
      $message = 'رمز فعلی شما اشتباه میباشد';
      $is_success = 0;
    }


    return view('admin.site.changePassword', compact(['message', 'is_success']));

  }


  public function professorSendMessage(Request $request){
    $this->validate($request,[
      'text' => 'required|string|max:3000|min:1',
      'user_id' => 'required|numeric',
    ]);

    $ticket = Ticket::create([
      'user_id' => $request->user_id,
      'is_user_sent' => 0,
      'text' => $request->text,
      'is_seen' => 0,
    ]);

    return redirect(route('admin-professor-detail', $request->user_id));
  }


  public function userSendMessage(Request $request){
    $this->validate($request,[
      'text' => 'required|string|max:3000|min:1',
      'user_id' => 'required|numeric',
    ]);

    $ticket = Ticket::create([
      'user_id' => $request->user_id,
      'is_user_sent' => 0,
      'text' => $request->text,
      'is_seen' => 0,
    ]);

    return redirect(route('admin-user-detail', $request->user_id));
  }


  public function userCertificatePrint($user_id, $course_id){
    $user = User::find($user_id);
    $course = Course::find($course_id);
    return view('admin.user.certificatePrint', compact(['user', 'course']));
  }


  public function userExportCertificate(Request $request){
    $this->validate($request,[
      'cert' => 'required',
      'user_id' => 'required',
      'course_id' => 'required',
    ]);

    $certs = $request->input('cert');
    $users = $request->input('user_id');
    $course_id = $request->input('course_id');

    for ($i = 0 ; $i < sizeof($users) ; $i++){
      $user_course = UserCourse::where('course_id', '=', $course_id)->where('student_id', '=', $users[$i])->first();
      if($certs[$i] == 1){
        $user_course->has_certificate = 1;
      }else{
        $user_course->has_certificate = 0;
      }
      $user_course->save();
    }

    return redirect(route('admin-course', $course_id));
  }



}
