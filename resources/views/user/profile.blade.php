@extends('user.dashboard')
@section('user_content')
    <div class="container">
        <div class="user-info-container p-3">
            <div class="row">
                <div class="col-sm-4 col-md-3 col-xl-2">
                    @php
                        $user = \Illuminate\Support\Facades\Auth::user();
                    @endphp
                    <form action="{{route('user-change-avatar')}}" method="post" enctype="multipart/form-data">
                        <div class="user-img-container d-flex justify-content-center align-items-center">
                            <img id="profileImage" src="{{asset($user->photo->path)}}" alt="">
                        </div>

                        <div id="imgUploadBtnContainer" class="img-upload-btn-wrapper">
                            <button class="btn btn-block mt-1 btn-outline-secondary" onclick="performClick('inputProfileImg')">انتخاب تصویر</button>
                            <input id="inputProfileImg" type="file" name="image" accept="image/jpeg/png"/>
                        </div>

                            {{csrf_field()}}
                        <button type="submit" class="btn btn-block mt-1 btn-outline-secondary">ثبت تصویر</button>
                    </form>
                </div>
                <div class="col-sm-6 col-md-9 col-xl-10">
                    <div class="d-flex flex-column h-100 justify-content-around">
                        <div class="row">
                            <div class="col-md-6">
                                <spna><i class="fal fa-user"></i></spna>
                                <span>نام و نام خانوادگی:</span>
                                <span class="mx-2">{{$user->name}}</span>
                            </div>
                            {{--<div class="col-md-6">--}}
                                {{--<spna><i class="fal fa-birthday-cake"></i></spna>--}}
                                {{--<span>سن:</span>--}}
                                {{--<span class="mx-2">23</span>--}}
                            {{--</div>--}}
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <spna><i class="fal fa-mobile"></i></spna>
                                <span>شماره تلفن:</span>
                                <span class="mx-2">{{$user->mobile}}</span>
                            </div>
                            <div class="col-md-6">
                                <spna><i class="fal fa-graduation-cap"></i></spna>
                                <span>شماره دانشجویی:</span>
                                <span class="mx-2">{{$user->student_number}}</span>
                            </div>
                        </div>

                        <div class="d-flex flex-wr  ap" >
                            <div>
                                <span><i class="fal fa-id-card"></i></span>
                                <span>شماره ملی:</span>
                                <span class="mx-2">{{$user->national_code}}</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="mt-3 red-divider"></div>
    <div class="row mt-3">
        <div class="col-12">
            <h6>فرم نظر سنجی</h6>
        </div>
    </div>
    </div>
@endsection