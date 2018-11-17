<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
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
        //
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
        //
    }




    public function archivePosts(){
      $posts = Post::orderBy('id', 'desc')->paginate(6);
      return view('site.archiveposts', compact('posts'));
    }
}
