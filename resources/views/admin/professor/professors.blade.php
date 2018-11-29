@extends('admin.dashboard')
@section('admin_content')
    <div class="container-fluid">
        <h6 class="mb-3">ثبت نام استاد</h6>
        <div class="col-5">


            <form action="{{route('admin-register-professor')}}" method="post" onsubmit="return checkRegisterAdminForm(this)">
                <div class="form-group row">
                    <label for="professorName" class="col-sm-4 col-form-label">نام و نام خانوادگی</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="professorName"
                               placeholder="نام و نام خانوادگی استاد را وارد کنید" name="name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="professorEmail" class="col-sm-4 col-form-label">ایمیل</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" id="professorEmail"
                               placeholder="ایمیل استاد را وارد کنید" name="email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="professorMobile" class="col-sm-4 col-form-label">موبایل</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="professorMobile"
                               placeholder="شماره تلفن همراه استاد را وارد کنید" name="mobile">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="professorCode" class="col-sm-4 col-form-label">کد ملی</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="professorCode"
                               placeholder="کد ملی استاد را وارد کنید" name="national_code">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="professorSex" class="col-sm-4 col-form-label">جنسیت</label>
                    <div class="col-sm-8">
                        <select id="professorSex" class="form-control" name="is_male" id="">
                            <option value="1">مرد</option>
                            <option value="0">زن</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="professorPassword" class="col-sm-4 col-form-label">رمز عبور</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" id="professorPassword"
                               placeholder="رمز عبور استاد را وارد کنید" name="password">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="professorPasswordConfirm" class="col-sm-4 col-form-label">تکرار رمز عبور</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" id="professorPasswordConfirm"
                               placeholder="تکرار رمز عبور استاد را وارد کنید" name="password_confirmation">
                    </div>
                </div>

                @csrf
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-blue"><i class="fal fa-plus"></i> ثبت نام</button>
                    </div>
                </div>
            </form>



        </div>
        <div class="red-divider"></div>
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center flex-wrap ">
                <h6 class="my-3"> لیست همه اساتید</h6>
                <button class="btn btn-sm btn-blue m-1" onclick="excelReport(this)"><i
                            class="fal fa-file-excel mr-1"></i>ذخیره
                    فایل اکسل
                </button>
            </div>
            <div class="table-responsive">
                <table id="professors" class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">ردیف</th>
                        <th scope="col">نام و نام خانوادگی</th>
                        <th scope="col">شماره تلفن</th>
                        <th scope="col">کد ملی</th>
                        <th scope="col">تصویر</th>
                        <th scope="col">جزئیات</th>
                    </tr>
                    </thead>
                    <tbody>

                    @php($i = 0)
                    @foreach($masters as $master)
                    <tr>
                        <th scope="row">{{++$i}}</th>
                        <td>{{$master->name}}</td>
                        <td>{{$master->mobile}}</td>
                        <td>{{$master->national_code}}</td>
                        <td>
                            <div class="student-img-container">
                                <img src="{{asset($master->photo->path)}}" alt="">
                            </div>
                        </td>
                        <td>
                            <a href="{{route('admin-professor-detail', ['id' =>$master->id])}}" class="btn btn-sm btn-blue mt-2">مشاهده جزئیات</a>
                        </td>
                    </tr>
                    @endforeach


                    </tbody>
                </table>
            </div>
        </div>

    </div>

@endsection