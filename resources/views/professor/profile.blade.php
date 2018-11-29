@extends('professor.dashboard')
@section('professor_content')
    <h6>پروفایل</h6>
    <div class="container">
        <div class=" p-3">
            <div class="row">
                <div class="col-sm-4 col-md-3 col-xl-2">

                    <form action="{{route('professor-change-avatar')}}" method="post" enctype="multipart/form-data">
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
                            <div class="col-md-6">
                                <spna><i class="fal fa-envelope"></i></spna>
                                <span>ایمیل:</span>
                                <span class="mx-2">{{$user->email}}</span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <spna><i class="fal fa-mobile"></i></spna>
                                <span>شماره تلفن:</span>
                                <span class="mx-2">{{$user->mobile}}</span>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <span><i class="fal fa-id-card"></i></span>
                                    <span>شماره ملی:</span>
                                    <span class="mx-2">{{$user->national_code}}</span>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-wr  ap">
                            {{--<div>--}}
                                {{--<span><i class="fal fa-id-card"></i></span>--}}
                                {{--<span>شماره ملی:</span>--}}
                                {{--<span class="mx-2">{{$user->national_code}}</span>--}}
                            {{--</div>--}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="mt-3 red-divider"></div>
    <div class="row mt-3">
        <div class="col-12">
            <h6>ارسال رزومه</h6>
            {{--<form class="col-8 m-auto" action="{{route('professor-update-cv')}}" method="post"   onsubmit="return checkForm()">--}}
            <form class="col-8 m-auto" action="{{route('professor-update-cv')}}" method="post"  enctype="multipart/form-data" >
                <div class="form-group">
                    <label for="professorMassage"> رزومه (رزومه شما در کنار دوره هایتان نمایش داده خواهد شد)</label>
                    <textarea  name="inputfield"  class="form-control" id="professorMassage" rows="3" placeholder="رزومه خود را وارد کنید...">{{$cv->content}}</textarea>
                </div>

                <div class="form-group">
                    <label for="professorMassage"> مدارک (این فایل فقط به مدیریت ارسال می شود)</label>
                    @if(strlen($cv->docs_path) > 2)
                      <a class="btn btn-sm btn-blue" href="{{$cv->docs_path}}" download>دانلود</a><br>
                    @endif
                    <input type="file"  name="docs"  class="form-control" id="professorMassage"></input>
                </div>

                {{csrf_field()}}
                <button type="submit" class="btn btn-blue"><i class="fal fa-paper-plane mr-2"></i>ویرایش</button>
            </form>
        </div>
    </div>
    </div>


    <div class="mt-3 red-divider"></div>
    <div class="row mt-3">
        <div class="col-12">
            <h6>تغییر رمز عبور</h6>
            <form class="col-6" action="{{route('professor-change-password')}}" method="post" onsubmit="return checkChangePasswordForm(this)">
                <div class="form-group row">
                    <label for="password" class="col-sm-5 col-form-label">رمز عبور قبلی</label>
                    <div class="col-sm-7">
                        <input type="password" name="old_password" class="form-control {{ $errors->has('old_password') ? ' is-invalid' : '' }}" id="password" placeholder="رمز عبور قبلی را وارد کنید">
                        @if ($errors->has('old_password'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('old_password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="newPassword" class="col-sm-5 col-form-label">رمز عبور جدید</label>
                    <div class="col-sm-7">
                        <input name="new_password" type="password" class="form-control" id="newPassword" placeholder="رمز عبور جدید را وارد کنید">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="newPasswordConfirm" class="col-sm-5 col-form-label">تکرار رمز عبور جدید </label>
                    <div class="col-sm-7">
                        <input type="password" class="form-control" id="newPasswordConfirm" placeholder=" تکرار رمز عبور جدید را وارد کنید">
                    </div>
                </div>
                @csrf
                <button type="submit"  class="btn btn-sm btn-blue"><i class="fal fa-edit mr-1"></i>تغییر</button>
            </form>
        </div>
    </div>
    </div>

@endsection