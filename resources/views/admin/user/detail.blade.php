@extends('admin.dashboard')
@section('admin_content')
    <div class="container-fluid">
        <div class=" p-3">
            <div class="row">
                <div class="col-sm-4 col-md-3 col-xl-2">
                    <form action="" method="">
                        <div class="user-img-container d-flex justify-content-center align-items-center">
                            <img id="profileImage" src="{{asset('img/master.jpg')}}" alt="">


                        </div>
                    </form>
                </div>
                <div class="col-sm-6 col-md-9 col-xl-10">
                    <div class="d-flex flex-column h-100 justify-content-around">
                        <div class="row">
                            <div class="col-md-6">
                                <spna><i class="fal fa-user"></i></spna>
                                <span>نام و نام خانوادگی:</span>
                                <span class="mx-2">پویا آکلیون</span>
                            </div>
                            <div class="col-md-6">
                                <spna><i class="fal fa-book"></i></spna>
                                <span>رشته تحصیلی:</span>
                                <span class="mx-2">فناوری اطلاعات</span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <spna><i class="fal fa-mobile"></i></spna>
                                <span>شماره تلفن:</span>
                                <span class="mx-2">09388584677</span>
                            </div>
                            <div class="col-md-6">
                                <spna><i class="fal fa-graduation-cap"></i></spna>
                                <span>شماره دانشجویی:</span>
                                <span class="mx-2">931831208</span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <span><i class="fal fa-id-card"></i></span>
                                    <span>شماره ملی:</span>
                                    <span class="mx-2">2820188796</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <a href="" class="btn btn-sm btn-blue align-self-center mt-1">ریست رمز عبور</a>
                                <form class="d-inline-block" action=""
                                      onsubmit="return confirm('آیا از حذف این کاربر مطمئن هستید')">

                                    <button type="submit" class="btn btn-sm btn-danger align-self-center mt-1">حذف
                                        کاربر
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="red-divider"></div>
        <h6 class="mt-4">دوره های این کاربر</h6>
        <div class="mt-3 d-flex flex-wrap align-items-start">
            <div>
                <a href="{{route('admin-user-print-certificate')}}" class="ml-1 btn btn-sm btn-outline-blue">پرینت گواهی</a>
                <div class="m-1 admin-course-container d-flex flex-column">
                    <div class="row">
                        <div class="col-sm-4">
                            <a href="{{route('admin-course')}}">
                                <div class="admin-course-img-container">
                                    <img src="{{asset('img/1.jpg')}}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-8">
                            <a href="{{route('admin-course')}}">
                                دوره زبان
                            </a>
                            <p>
                                مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته
                                اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                            </p>
                        </div>
                    </div>
                    <div class="d-flex mt-3 justify-content-around align-items-center flex-wrap">
                        <span><i class="fal fa-users-class"></i> 24</span>
                        <span><i class="fal fa-chalkboard-teacher"></i> پویا آکلیون</span>

                    </div>
                </div>
            </div>
            <div>
                <button class="ml-1 btn btn-sm btn-outline-blue d-hide">پرینت گواهی</button>
                <div class="m-1 admin-course-container d-flex flex-column">
                    <div class="row">
                        <div class="col-sm-4">
                            <a href="{{route('admin-course')}}">
                                <div class="admin-course-img-container">
                                    <img src="{{asset('img/1.jpg')}}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-8">
                            <a href="{{route('admin-course')}}">
                                دوره زبان
                            </a>
                            <p>
                                مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته
                                اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                            </p>
                        </div>
                    </div>
                    <div class="d-flex mt-3 justify-content-around align-items-center flex-wrap">
                        <span><i class="fal fa-users-class"></i> 24</span>
                        <span><i class="fal fa-chalkboard-teacher"></i> پویا آکلیون</span>

                    </div>
                </div>
            </div>
            <div>
                <button class="ml-1 btn btn-sm btn-outline-blue">پرینت گواهی</button>
                <div class="m-1 admin-course-container d-flex flex-column">
                    <div class="row">
                        <div class="col-sm-4">
                            <a href="{{route('admin-course')}}">
                                <div class="admin-course-img-container">
                                    <img src="{{asset('img/1.jpg')}}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-8">
                            <a href="{{route('admin-course')}}">
                                دوره زبان
                            </a>
                            <p>
                                مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته
                                اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                            </p>
                        </div>
                    </div>
                    <div class="d-flex mt-3 justify-content-around align-items-center flex-wrap">
                        <span><i class="fal fa-users-class"></i> 24</span>
                        <span><i class="fal fa-chalkboard-teacher"></i> پویا آکلیون</span>

                    </div>
                </div>
            </div>


        </div>

        <div class="red-divider mt-3"></div>
        <div class="row">
            <div class="col-xl-6 ">
                <h6 class="mt-4 mb-3">پرداخت های این کاربر</h6>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">ردیف</th>
                            <th scope="col">مبلغ</th>
                            <th scope="col">بابت</th>
                            <th scope="col">تاریخ</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>56000 تومان</td>
                            <td>دوره زبان خارجه</td>
                            <td>1397/12/50</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>56000 تومان</td>
                            <td>دوره زبان خارجه</td>
                            <td>1397/12/50</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>56000 تومان</td>
                            <td>دوره زبان خارجه</td>
                            <td>1397/12/50</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-xl-6">
                <h6 class="mt-4 mb-3">ارسال پیام</h6>
                <form action="" onsubmit="return confirm('آیا می خواهید این پیام ارسال شود؟')">
                    <textarea class="form-control mb-2" rows="5" placeholder="متن پیام را وارد کنید..."></textarea>
                    <input type="submit" class="btn btn-sm btn-blue mt-4" value="ارسال">
                </form>
            </div>
        </div>
    </div>
@endsection