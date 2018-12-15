@extends('layouts.masterLayout')
@section('content')
    <div id="carousel" class="swiper-container" dir="rtl">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <a class="w-100" href="{{route('user-courses')}}">
                    <img src="{{asset('img/hero.jpg')}}">
                    <div class="title" id="title_#">کلاس های بورس از اول بهمن ماه شروع خواهد شد</div>
                </a>
            </div>
            <div class="swiper-slide">
                <img src="{{asset('img/hero.jpg')}}">
                <div class="title" id="title_#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</div>
            </div>
            <div class="swiper-slide">
                <img src="{{asset('img/hero.jpg')}}">
                <div class="title" id="title_#">کلاس های بورس از اول بهمن ماه شروع خواهد شد</div>
            </div>
            <div class="swiper-slide">
                <img src="{{asset('img/hero.jpg')}}">
                <div class="title" id="title_#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت لورم ایپسوم متن
                    ساختگی با تولید سادگی نامفهوم از صنعت
                </div>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Navigation -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    <div class="divider"></div>
    <div class="container my-5">
        <ul class="nav nav-tabs d-flex tab-container-header " id="myTab" role="tablist">
            <li class="nav-item flex-grow-1 text-center">
                <a class="nav-link" id="news-tab" data-toggle="tab" href="#news" role="tab" aria-controls="news"
                   aria-selected="true">اخبار مرکز</a>
            </li>
            <li class="nav-item flex-grow-1 text-center">
                <a class="nav-link active" id="event-tab" data-toggle="tab" href="#event" role="tab"
                   aria-controls="event" aria-selected="false">رویداد ها و دوره ها</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade " id="news" role="tabpanel" aria-labelledby="news-tab">
                <div class="container tab-container p-2 pt-3 ">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card  border-0">
                                <div class="card-body row ">
                                    <div class="col-xl-6 px-xl-0">
                                        <a class="tab-img-link" href="#">
                                            <img class="tab-card-img d-inline-block" src="{{asset('img/slide6.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="col-xl-6 px-xl-2">
                                        <div class="tab-card-title mx-2 d-flex flex-column  pt-xl-0">
                                            <h5><a href="{{route('course')}}" class="text-blue hover-link">رویداد کسب کار خودتو بساز</a></h5>
                                            <p class="card-desc mt-3">
                                                لورم ایپسوم متن ساختگی با تولید سادگی نام
                                                لورم ایپسوم متن ساختگی با تولید سادگی نام
                                                لورم ایپسوم متن ساختگی با تولید سادگی نام
                                                لورم ایپسوم متن ساختگی با تولید سادگی نام
                                                لورم ایپسوم متن ساختگی با تولید سادگی نام

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="card  border-0">
                                <div class="card-body row ">
                                    <div class="col-xl-6 px-xl-0">
                                        <a class="tab-img-link" href="#">
                                            <img class="tab-card-img d-inline-block" src="{{asset('img/slide6.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="col-xl-6 px-xl-2">
                                        <div class="tab-card-title mx-2 d-flex flex-column  pt-xl-0">
                                            <h5><a href="{{route('course')}}" class="text-blue hover-link">رویداد کسب کار خودتو بساز</a></h5>
                                            <p class="card-desc mt-3">
                                                لورم ایپسوم متن ساختگی با تولید سادگی نام
                                                لورم ایپسوم متن ساختگی با تولید سادگی نام
                                                لورم ایپسوم متن ساختگی با تولید سادگی نام
                                                لورم ایپسوم متن ساختگی با تولید سادگی نام
                                                لورم ایپسوم متن ساختگی با تولید سادگی نام

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card  border-0">
                                <div class="card-body row ">
                                    <div class="col-xl-6 px-xl-0">
                                        <a class="tab-img-link" href="#">
                                            <img class="tab-card-img d-inline-block" src="{{asset('img/slide6.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="col-xl-6 px-xl-2">
                                        <div class="tab-card-title mx-2 d-flex flex-column  pt-xl-0">
                                            <h5><a href="{{route('course')}}" class="text-blue hover-link">رویداد کسب کار خودتو بساز</a></h5>
                                            <p class="card-desc mt-3">
                                                لورم ایپسوم متن ساختگی با تولید سادگی نام
                                                لورم ایپسوم متن ساختگی با تولید سادگی نام
                                                لورم ایپسوم متن ساختگی با تولید سادگی نام
                                                لورم ایپسوم متن ساختگی با تولید سادگی نام
                                                لورم ایپسوم متن ساختگی با تولید سادگی نام

                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <hr>
                            <div class="card  border-0">
                                <div class="card-body row ">
                                    <div class="col-xl-6 px-xl-0">
                                        <a class="tab-img-link" href="#">
                                            <img class="tab-card-img d-inline-block" src="{{asset('img/slide6.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="col-xl-6 px-xl-2">
                                        <div class="tab-card-title mx-2 d-flex flex-column  pt-xl-0">
                                            <h5><a href="{{route('course')}}" class="text-blue hover-link">رویداد کسب کار خودتو بساز</a></h5>
                                            <p class="card-desc mt-3">
                                                لورم ایپسوم متن ساختگی با تولید سادگی نام
                                                لورم ایپسوم متن ساختگی با تولید سادگی نام
                                                لورم ایپسوم متن ساختگی با تولید سادگی نام
                                                لورم ایپسوم متن ساختگی با تولید سادگی نام
                                                لورم ایپسوم متن ساختگی با تولید سادگی نام

                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="{{route('arcposts')}}" class="hover-link">
                            <span class="">آرشیو <i class="fal fa-share"></i> </span>
                        </a>
                    </div>

                </div>
            </div>
            <div class="tab-pane fade show active" id="event" role="tabpanel" aria-labelledby="event-tab">
                <div class="container tab-container p-2 pt-3">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card  border-0">
                                <div class="card-body row ">
                                    <div class="col-xl-6 px-xl-0">
                                    <a class="tab-img-link" href="#">
                                        <img class="tab-card-img d-inline-block" src="{{asset('img/slide6.jpg')}}" alt="">
                                    </a>
                                    </div>
                                    <div class="col-xl-6 px-xl-2">
                                    <div class="tab-card-title mx-2 d-flex flex-column  pt-xl-0">
                                        <h5><a href="{{route('course')}}" class="text-blue hover-link">رویداد کسب کار خودتو بساز</a></h5>
                                        <p class="card-desc mt-3">
                                            لورم ایپسوم متن ساختگی با تولید سادگی نام
                                            لورم ایپسوم متن ساختگی با تولید سادگی نام
                                            لورم ایپسوم متن ساختگی با تولید سادگی نام
                                            لورم ایپسوم متن ساختگی با تولید سادگی نام
                                            لورم ایپسوم متن ساختگی با تولید سادگی نام

                                        </p>
                                        <a href="#" class="course-price">62000 تومان</a>
                                    </div>
                                    </div>
                                </div>

                            </div>
                            <hr>
                            <div class="card  border-0">
                                <div class="card-body row ">
                                    <div class="col-xl-6 px-xl-0">
                                        <a class="tab-img-link" href="#">
                                            <img class="tab-card-img d-inline-block" src="{{asset('img/slide6.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="col-xl-6 px-xl-2">
                                        <div class="tab-card-title mx-2 d-flex flex-column  pt-xl-0">
                                            <h5><a href="{{route('course')}}" class="text-blue hover-link">رویداد کسب کار خودتو بساز</a></h5>
                                            <p class="card-desc mt-3">
                                                لورم ایپسوم متن ساختگی با تولید سادگی نام
                                                لورم ایپسوم متن ساختگی با تولید سادگی نام
                                                لورم ایپسوم متن ساختگی با تولید سادگی نام
                                                لورم ایپسوم متن ساختگی با تولید سادگی نام
                                                لورم ایپسوم متن ساختگی با تولید سادگی نام

                                            </p>
                                            <a href="#" class="course-price">62000 تومان</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card  border-0">
                                <div class="card-body row ">
                                    <div class="col-xl-6 px-xl-0">
                                        <a class="tab-img-link" href="#">
                                            <img class="tab-card-img d-inline-block" src="{{asset('img/slide6.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="col-xl-6 px-xl-2">
                                        <div class="tab-card-title mx-2 d-flex flex-column  pt-xl-0">
                                            <h5><a href="{{route('course')}}" class="text-blue hover-link">رویداد کسب کار خودتو بساز</a></h5>
                                            <p class="card-desc mt-3">
                                                لورم ایپسوم متن ساختگی با تولید سادگی نام
                                                لورم ایپسوم متن ساختگی با تولید سادگی نام
                                                لورم ایپسوم متن ساختگی با تولید سادگی نام
                                                لورم ایپسوم متن ساختگی با تولید سادگی نام
                                                لورم ایپسوم متن ساختگی با تولید سادگی نام

                                            </p>
                                            <a href="#" class="course-price">62000 تومان</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <hr>
                            <div class="card  border-0">
                                <div class="card-body row ">
                                    <div class="col-xl-6 px-xl-0">
                                        <a class="tab-img-link" href="#">
                                            <img class="tab-card-img d-inline-block" src="{{asset('img/slide6.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="col-xl-6 px-xl-2">
                                        <div class="tab-card-title mx-2 d-flex flex-column  pt-xl-0">
                                            <h5><a href="{{route('course')}}" class="text-blue hover-link">رویداد کسب کار خودتو بساز</a></h5>
                                            <p class="card-desc mt-3">
                                                لورم ایپسوم متن ساختگی با تولید سادگی نام
                                                لورم ایپسوم متن ساختگی با تولید سادگی نام
                                                لورم ایپسوم متن ساختگی با تولید سادگی نام
                                                لورم ایپسوم متن ساختگی با تولید سادگی نام
                                                لورم ایپسوم متن ساختگی با تولید سادگی نام

                                            </p>
                                            <a href="#" class="course-price">62000 تومان</a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="{{route('arccourses')}}" class="hover-link">
                            <span class="">آرشیو <i class="fal fa-share"></i> </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

