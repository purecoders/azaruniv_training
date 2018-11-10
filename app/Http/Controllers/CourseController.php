<?php

namespace App\Http\Controllers;

use App\Course;
use App\Http\Controllers\helpers\FileHelper;
use App\Photo;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function index()
    {

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
        $course->master->masterInfo;
        $course->coverImage;

    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }


}
