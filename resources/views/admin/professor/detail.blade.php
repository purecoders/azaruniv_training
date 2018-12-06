@extends('admin.dashboard')
@section('admin_content')
    <div class="container-fluid">
        <div class=" p-3">
            <div class="row">
                <div class="col-sm-4 col-md-3 col-xl-2">
                    <form action="" method="">
                        <div class="user-img-container d-flex justify-content-center align-items-center">
                            <img id="profileImage" src="{{asset($master->photo->path)}}" alt="">


                        </div>
                    </form>
                </div>
                <div class="col-sm-6 col-md-9 col-xl-10">
                    <div class="d-flex flex-column h-100 justify-content-around">
                        <div class="row">
                            <div class="col-md-6">
                                <spna><i class="fal fa-user"></i></spna>
                                <span>نام و نام خانوادگی:</span>
                                <span class="mx-2">{{$master->name}}</span>
                            </div>
                            <div class="col-md-6">
                                <spna><i class="fal fa-envelope"></i></spna>
                                <span>ایمیل:</span>
                                <span class="mx-2">{{$master->email}}</span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <spna><i class="fal fa-mobile"></i></spna>
                                <span>شماره تلفن:</span>
                                <span class="mx-2">{{$master->mobile}}</span>
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <span><i class="fal fa-id-card"></i></span>
                                    <span>شماره ملی:</span>
                                    <span class="mx-2">{{$master->national_code}}</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <a href="" class="btn btn-sm btn-blue align-self-center" onclick="return confirm('آیا از تغییر رمز این کاربر به کد ملی او مطمئن هستید؟')">بازیابی رمز عبور</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="red-divider"></div>
        <h6 class="mt-4">دوره های این استاد</h6>
        <div class="mt-1 d-flex flex-wrap align-items-start">

            @foreach($courses as $course)
            <div class="m-1 admin-course-container d-flex flex-column">
                <div class="row">



                    <div class="col-sm-4">
                        <a href="{{route('admin-course', $course->id)}}">
                            <div class="admin-course-img-container">
                                <img src="{{asset($course->coverImage->path)}}" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-8">
                        <a href="{{route('admin-course', $course->id)}}"><h6>{{$course->title}}</h6></a>
                        <p>
                            {{strip_tags($course->description)}}
                        </p>
                    </div>


                </div>
                <div class="d-flex mt-3 justify-content-around align-items-center flex-wrap">
                    <span><i class="fal fa-users-class"></i> {{$course->students->count()}}</span>
                    <span><i class="fal fa-chalkboard-teacher"></i>{{$master->name}}</span>

                </div>
            </div>
            @endforeach




        </div>
        <div class="red-divider mt-2">

        </div>
        <div>
            <h6 class="mt-3">رزومه </h6>
            <div class="col-8 p-2">
                <p class="bg-light p-2" style="border-radius: .25rem">
                   {{$cv->content}}
                </p>
            </div>
            @if(strlen($cv->docs_path) > 2)
            <a href="{{$cv->docs_path}}" download class="btn btn-sm btn-blue"><i class="fal fa-download"></i> دانلود مدارک</a>
            @endif
        </div>


    </div>
@endsection