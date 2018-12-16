<?php

namespace App\Http\Controllers;

use App\Http\Controllers\helpers\FileHelper;
use App\Photo;
use App\Post;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class PostController extends Controller
{

  public function __construct() {
    $this->middleware('auth', ['only' => ['store', 'destroy']]);
    $this->middleware('admin', ['only' => ['store', 'destroy']]);
  }

  public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
      $this->validate($request,[
        'title' => 'required|string|max:250|min:2',
        'image' => 'required|image',
        'post_content' => 'required|string|max:6000|min:2',
      ]);

      $title = $request->title;
      $content = $request->post_content;

      $image = $request->file('image');

      $file_extension = $image->getClientOriginalExtension();
      $dir = FileHelper::getFileDirName('images/posts');
      $file_name = FileHelper::getFileNewName();
      $image_name = $file_name . '.' . $file_extension;
      $file_path = $dir . '/' . $file_name . '.'.$file_extension;
      $image->move($dir, $image_name);
//      $image = Image::make($file_path);
//      $image->resize(Photo::USER_AVATAR_WIDTH, Photo::USER_AVATAR_HEIGHT);
//      $image->save();

      $post = Post::create([
        'title' => $title,
        'content' => $content
      ]);

      $photo = Photo::create([
        'imageable_id' => $post->id,
        'imageable_type' => 'App\Post',
        'path' => $file_path,
        'url' => url('/') . '/'. $file_path,
      ]);

      return redirect('/admin-posts');
    }




    public function show($id)
    {
        $post = Post::find($id);
        return view('site.post', compact(['post']));
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
      Post::find($id)->delete();
      return redirect('/admin-posts');
    }



    public function archivePosts(){
      $posts = Post::orderBy('id', 'desc')->paginate(20);
      return view('site.archiveposts', compact('posts'));
    }
}
