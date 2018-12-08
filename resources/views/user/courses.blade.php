@extends('user.dashboard')
@section('user_content')
    <!--user course title -->
    <h6>آخرین دوره های شما</h6>
    <!--user course cards-->
    <div class="d-flex flex-column">

        <div class="card border-0">
            <div class="card-body row">

                <div class="col-xl-4 tab-img-link">
                    <a class="" href="{{route('post')}}">
                        <img class="tab-card-img " src="{{asset('img/slide6.jpg')}}" alt="">
                    </a>
                    <button class="text-dark border-dark  btn btn-outline-light btn-block mt-2" data-toggle="collapse"
                            data-target="#professorMassage1"><i class="fal fa-check"></i> آخرین پیام های استاد
                    </button>
                </div>
                <div class="col-xl-8">
                    <div class="h-100 tab-card-title mx-2 d-flex flex-column justify-content-between pt-0">
                        <div class="d-flex justify-content-between">
                        <h5><a href="{{route('course')}}" class="test text-blue hover-link">رویداد کسب کار خودتو
                                بساز</a></h5>
                            <span class="alert alert-success">گواهی شما آماده است</span>
                        </div>
                        <p class="mt-3">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت...
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت...
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت... لورم ایپسوم متن ساختگی با تولید
                            سادگی نامفهوم از صنعت...


                        </p>
                        <div class=" d-flex justify-content-around " style="font-size: .8em">
                            <div>
                                <span class=""><i class="fal fa-chalkboard-teacher"></i>استاد مربوطه</span>
                                <span class="mx-1">پویا آکلیون</span>
                            </div>
                            <div>
                                <span><i class="fal fa-clock"></i>زمان شروع</span>
                                <span class="mx-1">12 اردیبهشت</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div id="professorMassage1" class="collapse">
                    <div class="container p-3">
                        <div class="d-flex flex-column">
                            <div class="d-flex alert alert-info">
                                <div>
                                    <i class="fal fa-envelope-open"></i>
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                                </div>
                                <span class="mx-2 mt-4">12:20am</span>

                            </div>
                            <div class="d-flex alert alert-info">
                                <div>
                                    <i class="fal fa-envelope-open"></i>
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                                </div>
                                <span class="mx-2 mt-4">12:20am</span>

                            </div>
                            <div class="d-flex alert alert-info">
                                <div>
                                    <i class="fal fa-envelope-open"></i>
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                                </div>
                                <span class="mx-2 mt-4">12:20am</span>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="red-divider"></div>

        <div class="card border-0">
            <div class="card-body row">

                <div class="col-xl-4 tab-img-link">
                    <a class="" href="{{route('course')}}">
                        <img class="tab-card-img " src="{{asset('img/slide6.jpg')}}" alt="">
                    </a>
                    <button class="text-dark border-dark  btn btn-outline-light btn-block mt-2" data-toggle="collapse"
                            data-target="#professorMassage2"><i class="fal fa-check"></i> آخرین پیام های استاد
                    </button>
                </div>
                <div class="col-xl-8">
                    <div class="h-100 tab-card-title mx-2 d-flex flex-column justify-content-between pt-0">
                        <h5><a href="{{route('course')}}" class="test text-blue hover-link">رویداد کسب کار خودتو
                                بساز</a></h5>
                        <p class="mt-3">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت...
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت...
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت... لورم ایپسوم متن ساختگی با تولید
                            سادگی نامفهوم از صنعت...


                        </p>
                        <div class=" d-flex justify-content-around " style="font-size: .8em">
                            <div>
                                <span class=""><i class="fal fa-chalkboard-teacher"></i>استاد مربوطه</span>
                                <span class="mx-1">پویا آکلیون</span>
                            </div>
                            <div>
                                <span><i class="fal fa-clock"></i>زمان شروع</span>
                                <span class="mx-1">12 اردیبهشت</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div id="professorMassage2" class="collapse">
                    <div class="container p-3">
                        <div class="d-flex flex-column">
                            <div class="d-flex alert alert-info">
                                <div>
                                    <i class="fal fa-envelope-open"></i>
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                                </div>
                                <span class="mx-2 mt-4">12:20am</span>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="red-divider"></div>

        <div class="card border-0">
            <div class="card-body row">

                <div class="col-xl-4 tab-img-link">
                    <a class="" href="{{route('course')}}">
                        <img class="tab-card-img " src="{{asset('img/slide6.jpg')}}" alt="">
                    </a>
                    <button class="text-dark border-dark  btn btn-outline-light btn-block mt-2" data-toggle="collapse"
                            data-target="#professorMassage3"><i class="fal fa-check"></i> آخرین پیام های استاد
                    </button>
                </div>
                <div class="col-xl-8">
                    <div class="h-100 tab-card-title mx-2 d-flex flex-column justify-content-between pt-0">
                        <h5><a href="{{route('course')}}" class="test text-blue hover-link">رویداد کسب کار خودتو
                                بساز</a></h5>
                        <p class="mt-3">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت...
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت...
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت... لورم ایپسوم متن ساختگی با تولید
                            سادگی نامفهوم از صنعت...


                        </p>
                        <div class=" d-flex justify-content-around " style="font-size: .8em">
                            <div>
                                <span class=""><i class="fal fa-chalkboard-teacher"></i>استاد مربوطه</span>
                                <span class="mx-1">پویا آکلیون</span>
                            </div>
                            <div>
                                <span><i class="fal fa-clock"></i>زمان شروع</span>
                                <span class="mx-1">12 اردیبهشت</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div id="professorMassage3" class="collapse">
                    <div class="container p-3">
                        <div class="d-flex flex-column">
                            <div class="d-flex alert alert-info">
                                <div>
                                    <i class="fal fa-envelope-open"></i>
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                                </div>
                                <span class="mx-2 mt-4">12:20am</span>

                            </div>
                            <div class="d-flex alert alert-info">
                                <div>
                                    <i class="fal fa-envelope-open"></i>
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                                </div>
                                <span class="mx-2 mt-4">12:20am</span>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="red-divider"></div>

        <div class="card border-0">
            <div class="card-body row">

                <div class="col-xl-4 tab-img-link">
                    <a class="" href="{{route('course')}}">
                        <img class="tab-card-img " src="{{asset('img/slide6.jpg')}}" alt="">
                    </a>
                    <button class="text-dark border-dark  btn btn-outline-light btn-block mt-2" data-toggle="collapse"
                            data-target="#professorMassage4"><i class="fal fa-check"></i> آخرین پیام های استاد
                    </button>
                </div>
                <div class="col-xl-8">
                    <div class="h-100 tab-card-title mx-2 d-flex flex-column justify-content-between pt-0">
                        <h5><a href="{{route('course')}}" class="test text-blue hover-link">رویداد کسب کار خودتو
                                بساز</a></h5>
                        <p class="mt-3">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت...
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت...
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت... لورم ایپسوم متن ساختگی با تولید
                            سادگی نامفهوم از صنعت...


                        </p>
                        <div class=" d-flex justify-content-around " style="font-size: .8em">
                            <div>
                                <span class=""><i class="fal fa-chalkboard-teacher"></i>استاد مربوطه</span>
                                <span class="mx-1">پویا آکلیون</span>
                            </div>
                            <div>
                                <span><i class="fal fa-clock"></i>زمان شروع</span>
                                <span class="mx-1">12 اردیبهشت</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div id="professorMassage4" class="collapse">
                    <div class="container p-3">
                        <div class="d-flex flex-column">
                            <div class="d-flex alert alert-info">
                                <div>
                                    <i class="fal fa-envelope-open"></i>
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                                </div>
                                <span class="mx-2 mt-4">12:20am</span>

                            </div>
                            <div class="d-flex alert alert-info">
                                <div>
                                    <i class="fal fa-envelope-open"></i>
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                                </div>
                                <span class="mx-2 mt-4">12:20am</span>

                            </div>
                            <div class="d-flex alert alert-info">
                                <div>
                                    <i class="fal fa-envelope-open"></i>
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                                </div>
                                <span class="mx-2 mt-4">12:20am</span>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="red-divider"></div>

    </div>
@endsection