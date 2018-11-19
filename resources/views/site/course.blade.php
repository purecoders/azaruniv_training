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
            <div class="card-body row p-3 ">
                <div class="col-sm-3 col-md-3 col-xl-2 master-img-container ">
                    <img class="master-img" src="{{asset($course->master->photo->path)}}" alt="">
                </div>


                <div class="col-sm-8 col-md-8 col-xl-9 d-flex flex-column justify-content-around">
                    <span class=""><i class="fal fa-chalkboard-teacher"></i> استاد مدرس </span>
                    <h6 class="">{{$course->master->name}}</h6>
                </div>

            </div>
        </div>

        <div class="d-flex justify-content-between flex-wrap">
            <a href="#" class="btn btn-success "><i class="fal fa-plus"></i> ثبت نام در این دوره</a>
            <span href="#" class="course-price align-self-start mt-1">{{$course->cost}} تومان </span>
        </div>

    </div>
@endsection