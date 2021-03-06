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
                               placeholder="نام و نام خانوادگی استاد را وارد کنید" name="name" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="professorEmail" class="col-sm-4 col-form-label">ایمیل</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" id="professorEmail"
                               placeholder="ایمیل استاد را وارد کنید" name="email" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="professorMobile" class="col-sm-4 col-form-label">موبایل</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="professorMobile"
                               placeholder="شماره تلفن همراه استاد را وارد کنید" name="mobile" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="professorCode" class="col-sm-4 col-form-label">کد ملی</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="professorCode"
                               placeholder="کد ملی استاد را وارد کنید" name="national_code" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="professorSex" class="col-sm-4 col-form-label">جنسیت</label>
                    <div class="col-sm-8">
                        <select id="professorSex" class="form-control" name="is_male" id="" required>
                            <option value="1">مرد</option>
                            <option value="0">زن</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="professorPassword" class="col-sm-4 col-form-label">رمز عبور</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" id="professorPassword"
                               placeholder="رمز عبور استاد را وارد کنید" name="password" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="professorPasswordConfirm" class="col-sm-4 col-form-label">تکرار رمز عبور</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" id="professorPasswordConfirm"
                               placeholder="تکرار رمز عبور استاد را وارد کنید" name="password_confirmation" required>
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


        <div class="red-divider "></div><br>
        <h6>ارسال پیام برای تمامی اساتید</h6>
        <i class="fal fa-bullhorn float-right fa-flip-horizontal mt-5"
           style="font-size: 4em;color: rgba(6,8,81,0.45);"></i>
        <div class="col-xl-10 col-md-12">
            <form method="post" action="{{route('admin-send-professor-public-message')}}" onsubmit="return confirm('این پیام را برای همه ی اساتید ارسال کن')">
                <div class="form-group row pt-4">
                    {{--<label for="messageText" class="col-sm-2 col-form-label">متن پیام</label>--}}
                    <div class="col-sm-12 ">
                        <textarea type="text" class="form-control" id="messageText"
                                  name="text" placeholder="متن پیام را وارد کنید" rows="5"></textarea>
                    </div>
                </div>
                @csrf
                <button class="btn btn-sm btn-blue mt-2" type="submit"><i class="fal fa-paper-plane"></i> ارسال</button>
            </form>
        </div>

    </div>

@endsection