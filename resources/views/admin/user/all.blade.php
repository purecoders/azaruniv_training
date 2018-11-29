@extends('admin.dashboard')
@section('admin_content')
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center flex-wrap ">
            <h6 class="m-1 mb-3"> لیست همه کاربران</h6>
            <button class="btn btn-sm btn-blue m-1" onclick="excelReport(this)"><i class="fal fa-file-excel mr-1"></i>ذخیره
                فایل اکسل
            </button>
        </div>
        <div class="table-responsive">
            <table id="لیست تمامی دانشجویان" class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">ردیف</th>
                    <th scope="col">نام و نام خانوادگی</th>
                    <th scope="col">کد ملی</th>
                    <th scope="col">شماره تلفن</th>
                    <th scope="col">رشته تحصیلی</th>
                    <th scope="col">تصویر</th>
                    <th scope="col">جزئیات</th>
                </tr>
                </thead>
                <tbody>

                @php($i = 0)
                @foreach($students as $student)
                <tr>
                    <th scope="row">{{++$i}}</th>
                    <td>{{$student->name}}</td>
                    <td>{{$student->national_code}}</td>
                    <td>{{$student->mobile}}</td>
                    <td>{{$student->major}}</td>
                    <td>
                        <div class="student-img-container">
                            <img src="{{asset($student->photo->path)}}" alt="">
                        </div>
                    </td>
                    <td>
                        <a href="{{route('admin-user-detail', $student->id)}}" class="btn btn-sm btn-blue mt-2">مشاهده جزئیات</a>
                    </td>
                </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection