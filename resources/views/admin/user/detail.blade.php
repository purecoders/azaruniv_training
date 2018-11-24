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
                                <spna><i class="fal fa-birthday-cake"></i></spna>
                                <span>سن:</span>
                                <span class="mx-2">23</span>
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
                                <a href="" class="btn btn-sm btn-blue align-self-center">ریست رمز عبور</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="red-divider"></div>
        <h6 class="mt-4">دوره های این کاربر</h6>
        <div class="mt-1 d-flex flex-wrap">
            <div class="m-1 admin-course-container d-flex flex-column">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="admin-course-img-container">
                            <img src="{{asset('img/1.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <h6>دوره زبان</h6>
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
            <div class="m-1 admin-course-container d-flex flex-column">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="admin-course-img-container">
                            <img src="{{asset('img/1.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <h6>دوره زبان</h6>
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
            <div class="m-1 admin-course-container d-flex flex-column">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="admin-course-img-container">
                            <img src="{{asset('img/1.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <h6>دوره زبان</h6>
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

        <div class="red-divider mt-3"></div>
        <h6 class="mt-4">پرداخت های این کاربر</h6>

        <div class="col-6 table-responsive">
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
@endsection