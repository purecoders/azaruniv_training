@extends('admin.dashboard')
@section('admin_content')
    <div class="container-fluid" style="min-height: 300px">
        <div class="row ">
            <div class="col-xl-6">

                <h6>تغییر رمز عبور مدیریت سایت</h6>
                <form class="mt-5" action="{{route('admin-change-password')}}" method="post" onsubmit="return confirm('آیا از تغییر رمز عبور مطمئن هستید؟')">
                    <div class="form-group row">
                        <label for="oldPassword" class="col-sm-4 col-form-label">رمز عبور فعلی</label>
                        <div class="col-sm-6">
                            <input name="old_password" type="password" class="form-control" id="oldPassword"
                                   placeholder="رمز عبور قبلی را وارد کنید...">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label for="newPassword" class="col-sm-4 col-form-label">رمز عبور جدید</label>
                            <div class="col-sm-6">
                                <input type="password" class="form-control" id="newPassword" name="new_password" placeholder="رمز عبور جدید را وارد کنید..." required/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label for="confirmNewPassword" class="col-sm-4 col-form-label">تکرار رمز عبور جدید</label>
                            <div class="col-sm-6">
                                <input class="form-control d-inline" id="confirmNewPassword" type="password" name="new_password_repeat" placeholder="تکرار رمز عبور جدید را وارد کنید" required/>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-sm btn-blue" type="submit">تغییر</button>
                    @csrf
                </form>
            </div>
            <div class="col-xl-4">
                <div class="d-flex justify-content-center m-2 p-2 mt-0" >
                       @if(!is_null($message))
                           @if($is_success == 1)
                                <span class="alert alert-success p-1">
                            @else
                                <span class="alert alert-danger p-1">
                            @endif

                           {{$message}}
                        </span>
                       @endif
                </div>
                <div class="d-flex justify-content-center align-items-center h-100" >
                    <span><i class="fal fa-lock-alt" style="font-size: 10em;color: rgba(6,8,81,0.45);"></i></span>
                </div>
            </div>
        </div>
    </div>
@endsection