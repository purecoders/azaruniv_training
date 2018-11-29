@extends('layouts.app', ['site_route' => $post->title])
@section('content')
    <div >
        <h3 style="font-size: 1.5em">{{$post->title}}</h3>

        <div class="content-img-container text-center mb-3">
            <img src="{{asset($post->photo->path)}}" class="content-img" alt="">
        </div>

        <p class="text" style="white-space: pre-wrap">
            @php
                echo $post->content;
            @endphp
        </p>


        <div class="d-flex justify-content-end">
            <span class="jDate">{{$post->created_at}}</span>
        </div>
    </div>
@endsection