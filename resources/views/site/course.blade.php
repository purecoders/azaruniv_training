@extends('layouts.app',  ['site_route' => $course->title])
@section('content')
    <div >
        <h3 style="font-size: 1.5em">{{$course->title}}</h3>
        <p class="text" style="white-space: pre-wrap">
            {{$course->description}}
        </p>
        <div class="content-img-container text-center mb-3">
            <img src="{{asset($course->coverImage->path)}}" class="content-img" alt="">
        </div>
        <div class="master-container card mb-3">
            <div class="card-body d-flex p-3">
                <div class="master-img-container">
                    <img class="master-img" src="{{asset($course->master->photo->path)}}" alt="">
                </div>
                <div class="d-flex flex-column justify-content-around">
                    <span class="mx-3"><i class="fal fa-chalkboard-teacher"></i> استاد مدرس </span>
                    <h6 class="mx-3">{{$course->master->name}}</h6>
                </div>

            </div>
        </div>
        <a href="#" class="btn btn-success "><i class="fal fa-plus"></i> ثبت نام در این دوره</a>
    </div>
@endsection