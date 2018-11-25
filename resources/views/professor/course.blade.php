@extends('layouts.masterLayout')
@section('content')
    <div class="container py-4">
        <!-- current route -->
        <div class="row">
            <div class="col-12">
                @include('include.route')
            </div>
        </div>
        <!-- course content -->
        <div class="row">
            <div id="content" class="col-md-8">
                <div class="content-container professor-course p-4 mb-3 ">
                    <h5>کلاس بورس</h5>
                    <div class="p-3">
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                            تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در
                            شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها
                            شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی
                            ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط
                            سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته
                            اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                        </p>
                        <div class="red-divider"></div>
                        <div>
                            <h6 class="mt-3"></h6>
                            <form action="postt" method="post"   onsubmit="return checkForm()">
                                <div class="form-group">
                                    <label for="professorMassage">ارسال پیام برا همه دانشجو ها</label>
                                    <textarea  name="inputfield" class="form-control" id="professorMassage" rows="3" placeholder="متن پیام را وارد کنید..."></textarea>
                                </div>
                                {{csrf_field()}}
                                <button type="submit" class="btn btn-blue"><i class="fal fa-paper-plane mr-2"></i>ارسال</button>
                            </form>

                        </div>
                    </div>

                </div>
            </div>

            <!-- student list -->
            <div id="sidebar" class="col-md-4">
                <div class="content-container p-4 mb-3">
                    <div class="d-flex justify-content-around align-items-center mb-1">
                        <h6> دانشجو ها</h6>
                        <button class=" btn btn-sm btn-blue"><i class="fal fa-print"></i>  پرینت لیست کلاسی</button>
                    </div>
                    <div class="red-divider"></div>
                    <ul class="students-list nav-list d-flex flex-column p-1 mt-2">
                        <li class="d-flex align-items-center justify-content-start mt-2">
                            <span class="mr-3">1-</span>
                            <div class="student-img-container">
                                <img src="{{asset('img/master.jpg')}}" alt="">
                            </div>
                            <span class="ml-2">پویا آکلیون</span>
                        </li>
                        <div class="grey-divider"></div>
                        <li class="d-flex align-items-center justify-content-start mt-2">
                            <span class="mr-3">2-</span>
                            <div class="student-img-container">
                                <img src="{{asset('img/master.jpg')}}" alt="">
                            </div>
                            <span class="ml-2">پویا آکلیون</span>
                        </li>

                        <li class="d-flex align-items-center justify-content-start mt-2">
                            <span class="mr-3">3-</span>
                            <div class="student-img-container">
                                <img src="{{asset('img/master.jpg')}}" alt="">
                            </div>
                            <span class="ml-2">پویا آکلیون</span>
                        </li>

                        <li class="d-flex align-items-center justify-content-start mt-2">
                            <span class="mr-3">4-</span>
                            <div class="student-img-container">
                                <img src="{{asset('img/master.jpg')}}" alt="">
                            </div>
                            <span class="ml-2">پویا آکلیون</span>
                        </li>

                        <li class="d-flex align-items-center justify-content-start mt-2">
                            <span class="mr-3">4-</span>
                            <div class="student-img-container">
                                <img src="{{asset('img/master.jpg')}}" alt="">
                            </div>
                            <span class="ml-2">پویا آکلیون</span>
                        </li>

                        <li class="d-flex align-items-center justify-content-start mt-2">
                            <span class="mr-3">4-</span>
                            <div class="student-img-container">
                                <img src="{{asset('img/master.jpg')}}" alt="">
                            </div>
                            <span class="ml-2">پویا آکلیون</span>
                        </li>
                        <li class="d-flex align-items-center justify-content-start mt-2">
                            <span class="mr-3">4-</span>
                            <div class="student-img-container">
                                <img src="{{asset('img/master.jpg')}}" alt="">
                            </div>
                            <span class="ml-2">پویا آکلیون</span>
                        </li>
                        <li class="d-flex align-items-center justify-content-start mt-2">
                            <span class="mr-3">4-</span>
                            <div class="student-img-container">
                                <img src="{{asset('img/master.jpg')}}" alt="">
                            </div>
                            <span class="ml-2">پویا آکلیون</span>
                        </li>
                        <li class="d-flex align-items-center justify-content-start mt-2">
                            <span class="mr-3">4-</span>
                            <div class="student-img-container">
                                <img src="{{asset('img/master.jpg')}}" alt="">
                            </div>
                            <span class="ml-2">پویا آکلیون</span>
                        </li>
                        <li class="d-flex align-items-center justify-content-start mt-2">
                            <span class="mr-3">4-</span>
                            <div class="student-img-container">
                                <img src="{{asset('img/master.jpg')}}" alt="">
                            </div>
                            <span class="ml-2">پویا آکلیون</span>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection