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
                                <spna><i class="fal fa-envelope"></i></spna>
                                <span>ایمیل:</span>
                                <span class="mx-2">test@gmail.com</span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <spna><i class="fal fa-mobile"></i></spna>
                                <span>شماره تلفن:</span>
                                <span class="mx-2">09388584677</span>
                            </div>
                            <div class="col-md-6">

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
        <h6 class="mt-4">دوره های این استاد</h6>
        <div class="mt-1 d-flex flex-wrap align-items-start">
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
        <div class="red-divider mt-2">

        </div>
        <div>
            <h6 class="mt-3">رزومه </h6>
            <div class="col-8 p-2">
                <p class="bg-light p-2" style="border-radius: .25rem">
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها
                    و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                    کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و
                    آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه
                    ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که
                    تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی
                    دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                </p>
            </div>
            <a href="" class="btn btn-sm btn-blue"><i class="fal fa-download"></i> دانلود مدارک</a>
        </div>


    </div>
@endsection