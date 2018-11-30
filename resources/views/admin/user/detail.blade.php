@extends('admin.dashboard')
@section('admin_content')
    <div class="container-fluid">
        <div class=" p-3">
            <div class="row">
                <div class="col-sm-4 col-md-3 col-xl-2">
                    <form action="" method="">
                        <div class="user-img-container d-flex justify-content-center align-items-center">
                            @if($user->photo !== null)
                                <img id="profileImage" src="{{asset($user->photo->path)}}" alt="">
                            @endif


                        </div>
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
                                <spna><i class="fal fa-book"></i></spna>
                                <span>رشته تحصیلی:</span>
                                <span class="mx-2">{{$user->major}}</span>
                            </div>
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

                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <span><i class="fal fa-id-card"></i></span>
                                    <span>شماره ملی:</span>
                                    <span class="mx-2">{{$user->national_code}}</span>
                                </div>
                            </div>
                            <div class="col-md-6">

                                <a href="{{route('admin-reset-password', ['id' => $user->id])}}" class="btn btn-sm btn-blue align-self-center mt-1">بازیابی رمز عبور</a>

                                <form class="d-inline-block" action="" onsubmit="return confirm('آیا از حذف این کاربر مطمئن هستید')">
                                    <button type="submit" class="btn btn-sm btn-danger align-self-center mt-1" >حذف کاربر</button>
                                </form>
                                <br>
                                <span style="color: #fe4219">با کلیک روی دکمه بالا رمز حساب دانشجو به کد ملی تغییر می یابد</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="red-divider"></div>
        <h6 class="mt-4">دوره های این کاربر</h6>
        <div class="mt-1 d-flex flex-wrap align-items-start">

            @foreach($courses as $course)
                <div class="m-1 admin-course-container d-flex flex-column">
                    <div class="row">
                        <div class="col-sm-4">
                            {{--<div class="admin-course-img-container">--}}
                                {{--<img src="{{asset($course->coverImage->path)}}" alt="">--}}
                            {{--</div>--}}
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
                        <span><i class="fal fa-users-class"></i> {{$course->students()->count()}}</span>
                        <span><i class="fal fa-chalkboard-teacher"></i> {{$course->master->name}}</span>

                    </div>
                </div>
            @endforeach



        </div>

        <div class="red-divider mt-3"></div>
        <h6 class="mt-4">پرداخت های این کاربر</h6>

        <div class="col-x1-6 table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">ردیف</th>
                    <th scope="col">مبلغ(تومان)</th>
                    <th scope="col">بابت</th>
                    <th scope="col">وضعیت پرداخت</th>
                    <th scope="col">تاریخ</th>

                </tr>
                </thead>
                <tbody>


                @php($i = 0)
                @foreach($payments as $payment)
                    @if($payment->is_success == 1)
                        <tr>
                            <th scope="row">{{++$i}}</th>
                            <td>{{number_format($payment->amount)}}</td>
                            <td>{{$payment->course->title}}</td>
                            <td>موفق</td>
                            <td class="jDate">{{$payment->created_at}}</td>
                        </tr>


                    @else
                        <tr style="background-color: rgba(255,26,0,0.79)">
                            <th scope="row">{{++$i}}</th>
                            <td>{{number_format($payment->amount)}}</td>
                            <td>{{$payment->course->title}}</td>
                            <td>ناموفق</td>
                            <td class="jDate">{{$payment->created_at}}</td>
                        </tr>

                    @endif
                @endforeach


                </tbody>
            </table>
        </div>
    </div>
@endsection