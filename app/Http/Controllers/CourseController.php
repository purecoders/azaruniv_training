<?php

namespace App\Http\Controllers;

use App\Course;
use App\Http\Controllers\helper\PersianDate;
use App\Http\Controllers\helper\PersianNumber;
use App\Http\Controllers\helper\UserHelper;
use App\Http\Controllers\helpers\FileHelper;
use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CourseController extends Controller
{


  public function __construct() {
    $this->middleware('auth', ['except' => ['show', 'archiveCourses']]);
    $this->middleware('admin', ['except' => ['show', 'archiveCourses']]);
  }

  public function index()
    {
      $courses = Course::orderBy('id', 'desc');
      //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
      $this->validate($request,[
        'master_id'       =>'numeric',
        'category_id' =>'numeric',
        'title'       =>'required|string|max:250|min:3',
        'course_content'    =>'required|string|max:3000|min:3',
        'cost'     =>'required|numeric',
        'duration'     =>'required|numeric',
        'capacity'     =>'required|numeric|max:1000|min:1',
        'gender'     =>'required|string|max:20|min:1',
        'start_date'     =>'required|string',
        'finish_date'     =>'required|string',
        'image'       =>'required|image',
      ]);


      $image = $request->file('image');

      $file_extension = $image->getClientOriginalExtension();
      $dir = FileHelper::getFileDirName('images/courses');
      $file_name = FileHelper::getFileNewName();
      $image_name = $file_name . '.' . $file_extension;
      $file_path = $dir . '/' . $file_name . '.'.$file_extension;
      $image->move($dir, $image_name);



      $persianDate = new PersianDate();
      $course = Course::create([
        'master_id' => $request->master_id,
        'category_id' => $request->category_id,
        'title' => $request->title,
        'description' => $request->course_content,
        'cost' => $request->cost,
        'duration' => $request->duration,
        'capacity' => $request->capacity,
        'gender' => $request->gender,
        'start_date' => $persianDate->date_to(PersianNumber::persianToLatin($request->start_date)),
        'finish_date' => $persianDate->date_to(PersianNumber::persianToLatin($request->finish_date)),
//        'is_open'     => $request->is_open,
        'is_open'     => 1,
      ]);


      $photo = Photo::create([
        'imageable_id' => $course->id,
        'imageable_type' => 'App\Course',
        'path' => $file_path,
        'url' => url('/') . '/'. $file_path,
      ]);

      return redirect('admin-courses');

    }


    public function show($id)
    {
      $course = Course::find($id);
      return view('site.course', compact('course'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
      $this->validate($request,[
        'master_id'       =>'numeric',
        'category_id' =>'numeric',
        'title'       =>'required|string|max:250|min:3',
        'course_content'    =>'required|string|max:3000|min:3',
        'cost'     =>'required|numeric',
        'duration'     =>'required|numeric',
        'capacity'     =>'required|numeric|max:1000|min:1',
        'gender'     =>'required|string|max:20|min:1',
        'start_date'     =>'required|string',
        'finish_date'     =>'required|string',
        'is_open'     =>'required|numeric|min:0|max:1',
//        'image'       =>'image',
      ]);


      $image = $request->file('image');
      $hasImage = false;
      if($image !== null) {
        $hasImage = true;
        $file_extension = $image->getClientOriginalExtension();
        $dir = FileHelper::getFileDirName('images/courses');
        $file_name = FileHelper::getFileNewName();
        $image_name = $file_name . '.' . $file_extension;
        $file_path = $dir . '/' . $file_name . '.' . $file_extension;
        $image->move($dir, $image_name);
      }

      $persianDate = new PersianDate();
      $course = Course::find($id);
      $course->master_id = $request->master_id;
      $course->category_id = $request->category_id;
      $course->title = $request->title;
      $course->description = $request->course_content;
      $course->cost = $request->cost;
      $course->capacity = $request->capacity;
      $course->gender= $request->gender;
      $course->start_date = $persianDate->date_to(PersianNumber::persianToLatin($request->start_date));
      $course->finish_date = $persianDate->date_to(PersianNumber::persianToLatin($request->finish_date));
      $course->is_open = $request->is_open;
      $course->save();


      if($hasImage) {
        $photo = $course->coverImage;
        $photo->delete();
        File::delete($photo->path);

        $photo = Photo::create([
          'imageable_id' => $course->id,
          'imageable_type' => 'App\Course',
          'path' => $file_path,
          'url' => url('/') . '/' . $file_path,
        ]);
      }


      return redirect(route('admin-course', $course->id));

    }


    public function destroy($id)
    {
        Course::find($id)->delete();
        return redirect('/admin-courses');
    }


    public function archiveCourses(){
      $courses = Course::orderBy('id', 'desc')->paginate(20);
      return view('site.archivecourses', compact('courses'));
    }




}
