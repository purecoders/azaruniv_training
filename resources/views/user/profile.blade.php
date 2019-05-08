@extends('user.dashboard')
@section('user_content')
    <div class="container">
        <div class="user-info-container p-3">
            <div class="row">
                <div class="col-sm-4 col-md-3 col-xl-2 col-7">
                    @php
                        $user = \Illuminate\Support\Facades\Auth::user();
                    @endphp
                    <form action="{{route('user-change-avatar')}}" method="post" enctype="multipart/form-data">
                        <div class="user-img-container d-flex justify-content-center align-items-center">
                            <img id="profileImage" src="{{asset($user->photo->path)}}" alt="">
                        </div>

                        <div id="imgUploadBtnContainer" class="img-upload-btn-wrapper">
                            <button class="btn btn-block btn-sm mt-1 btn-outline-secondary" onclick="performClick('inputProfileImg')">انتخاب تصویر</button>
                            <input id="inputProfileImg" type="file" name="image" accept="image/jpeg/png"/>
                        </div>

                        {{csrf_field()}}
                        <button type="submit" class="btn btn-block btn-sm mt-1 btn-outline-secondary">ثبت تصویر</button>
                    </form>
                </div>

                    <div class="col-sm-6 col-md-9 col-xl-10">
                        <div class="d-flex flex-column h-100 justify-content-around mt-3 m-md-0 ">

                            <form action="{{route('user-edit-info')}}" method="post">
                                @csrf

                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="form-group row">
                                        <label class="col-md-5 col-form-label " for="title">نام و نام خانوادگی :</label>
                                        <div class="col-md-7">
                                            <input type="text" id="title"
                                                   class="form-control" name="name" value="{{$user->name}}" >

                                        </div>
                                    </div>
                                </div>

                                {{--<div class="form-group row">--}}
                                    {{--<label class="col-md-5 col-form-label " for="major">رشته تحصیلی :</label>--}}
                                    {{--<div class="col-md-7">--}}
                                        {{--<input type="text" id="major"--}}
                                               {{--class="form-control" name="major" value="{{$user->major}}" >--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-md-5 col-form-label " for="major">رشته تحصیلی :</label>
                                        <div class="col-md-7">
                                            <input  id="major"
                                                   class="form-control" name="major" value="{{$user->major}}" >
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-md-5 col-form-label " for="number">شماره تلفن :</label>
                                        <div class="col-md-7">
                                            <input type="number" id="number"
                                                   class="form-control" name="mobile" value="{{$user->mobile}}" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-md-5 col-form-label " for="student_number">شماره دانشجویی:</label>
                                        <div class="col-md-7">
                                            <input type="number" id="student_number"
                                                   class="form-control" name="student_number" value="{{$user->student_number}}" >
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-md-5 col-form-label " for="national_code">شماره ملی:</label>
                                        <div class="col-md-7">
                                            <input type="number" id="national_code"
                                                   class="form-control" name="national_code" value="{{$user->national_code}}" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <button type="submit " class="btn mr-auto btn-outline-success btn-lg p-1" value="ویرایش">ویرایش</button>

                                        </div>

                                    </div>
                                </div>

                            </div>
                            </form>
                        </div>
                    </div>

            </div>
        </div>
    </div>


    <div class="mt-3 red-divider"></div>
    <div class="row mt-3">
        <div class="col-12">
            <h6>تغییر رمز عبور</h6>
            <form class="col-md-7 col-12" action="{{route('user-change-password')}}" method="post" onsubmit="return checkChangePasswordForm(this)">
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
                        <input type="password" class="form-control" id="newPassword" placeholder="رمز عبور جدید را وارد کنید" name="new_password">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="newPasswordConfirm" class="col-sm-5 col-form-label">تکرار رمز عبور جدید </label>
                    <div class="col-sm-7">
                        <input  type="password" class="form-control" id="newPasswordConfirm" placeholder=" تکرار رمز عبور جدید را وارد کنید">
                    </div>
                </div>
                @csrf
                <button type="submit"  class="btn btn-sm btn-blue"><i class="fal fa-edit mr-1"></i>تغییر</button>
            </form>
        </div>
    </div>
    </div>


    @if($change_password_status !== null)
        @if($change_password_status == 1)
            <div class=" sever-alert alert alert-success alert-dismissible fade show" role="alert">
                رمز عبور با موفیقت تغییر یافت
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @else
            <div class=" sever-alert alert alert-danger alert-dismissible fade show" role="alert">
                رمز عبور تغییر نیافت.رمز عبور فعلی وارد شده صحیح نمی باشد
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
    @endif



@endsection