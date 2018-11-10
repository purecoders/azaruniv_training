<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{

  public function __construct() {
    $this->middleware('admin');
  }

  public function index()
    {

    }


    public function create()
    {
        //return view
    }


    public function store(Request $request)
    {
      $this->validate($request,[
        'title'       =>'required|string|max:250',
        'on_click' =>'required|max:250',
        'image'       =>'required',
      ]);

      $image = $request->file('image');

      $file_extension = $image->getClientOriginalExtension();
      $dir = FileHelper::getFileDirName('images/sliders');
      $file_name = FileHelper::getFileNewName();
      $image_name = $file_name . '.' . $file_extension;
      $file_path = $dir . '/' . $file_name . '.'.$file_extension;
      $image->move($dir, $image_name);

      $slider = Slider::create([
        'title' => $request->title,
        'on_click' => $request->on_click,
      ]);


      $photo = Photo::create([
        'imageable_id' => $slider->id,
        'imageable_type' => 'App\Slider',
        'path' => $file_path,
        'url' => env('APP_URL') . '/'. $file_path,
      ]);



    }


    public function show($id)
    {
        //
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
      $slider = Slider::find($id);
      $slider->delete();
      //return view
    }


}
