<?php

namespace App\Http\Controllers;

use App\Course;
use App\Http\Controllers\helper\UserHelper;
use App\Http\Controllers\helpers\FileHelper;
use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{


  public function __construct() {
    $this->middleware('auth', ['except' => ['show', 'archiveCourses']]);
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
        'description'    =>'required|string|max:3000|min:3',
        'cost'     =>'required|numeric',
        'capacity'     =>'required|numeric|max:1000|min:1',
        'gender'     =>'required|string|max:20|min:1',
        'start_date'     =>'required|date',
        'finish_date'     =>'required|date',
        'is_open'     =>'required|numeric|min:0|max:1',
        'image'       =>'required',
      ]);


      $image = $request->file('image');

      $file_extension = $image->getClientOriginalExtension();
      $dir = FileHelper::getFileDirName('images/courses');
      $file_name = FileHelper::getFileNewName();
      $image_name = $file_name . '.' . $file_extension;
      $file_path = $dir . '/' . $file_name . '.'.$file_extension;
      $image->move($dir, $image_name);

      $course = Course::create([
        'master_id' => $request->master_id,
        'category_id' => $request->category_id,
        'description' => $request->description,
        'cost' => $request->cost,
        'capacity' => $request->capacity,
        'gender' => $request->gender,
        'start_date' => $request->start_date,
        'finish_date' => $request->finish_date,
        'is_open'     => $request->is_open,
      ]);


      $photo = Photo::create([
        'imageable_id' => $course->id,
        'imageable_type' => 'App\Course',
        'path' => $file_path,
        'url' => env('APP_URL') . '/'. $file_path,
      ]);


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
        $user = Auth::user();
        if(!UserHelper::isAdmin($user)){
          return;
        }

        $this->validate($request,[
          'master_id'       =>'numeric',
          'category_id' =>'numeric',
          'title'       =>'required|string|max:250|min:3',
          'description'    =>'required|string|max:3000|min:3',
          'cost'     =>'required|numeric',
          'capacity'     =>'required|numeric|max:1000|min:1',
          'gender'     =>'required|string|max:20|min:1',
          'start_date'     =>'required|date',
          'finish_date'     =>'required|date',
          'is_open'     =>'required|numeric|min:0|max:1',
          'image'       =>'required',
        ]);

        $course = Course::find($id);
        $course->master_id = $request->master_id;
        $course->category_id = $request->category_id;
        $course->description = $request->description;
        $course->cost = $request->cost;
        $course->capacity = $request->capacity;
        $course->gender = $request->gender;
        $course->start_date = $request->start_date;
        $course->finish_date = $request->finish_date;
        $course->is_open = $request->is_open;

        $course->save();


        //return view

    }


    public function destroy($id)
    {
        if(!UserHelper::isAdmin(Auth::user())){
          return;
        }

        $course = Course::find($id);
        $course->delete();

        //return view
    }


    public function archiveCourses(){
      $courses = Course::orderBy('id', 'desc')->paginate(6);
      return view('site.archivecourses', compact('courses'));
    }




}
