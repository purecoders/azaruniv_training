@extends('layouts.app', ['site_route' => $post->title])
@section('content')
    <div >
        <h3 style="font-size: 1.5em">{{$post->title}}</h3>
        <p class="text" style="white-space: pre-wrap">
            {{$post->content}}
        </p>
        <div class="content-img-container text-center mb-3">
            <img src="{{asset($post->photo->path)}}" class="content-img" alt="">
        </div>

        <div class="d-flex justify-content-end">
            <span class="posted-date">{{$post->created_at}}</span>
        </div>
    </div>
@endsection