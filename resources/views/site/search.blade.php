@extends('layouts.app')
@section('content')
    <h6>جست وجو برای عبارت {{time()}}</h6>
    <div id="coursesList" class="d-flex flex-column">

        <div class="card border-0">
            <div class="card-body row">

                <div class="col-xl-4 tab-img-link">
                    <a class="" href="#">
                        <img class="tab-card-img " src="{{asset('img/slide6.jpg')}}" alt="">
                    </a>
                </div>
                <div class="col-xl-8">
                    <div class="tab-card-title mx-2 d-flex flex-column justify-content-between">
                        <h5><a href="#" class="text-blue hover-link">رویداد کسب کار خودتو بساز</a></h5>
                        <p class="mt-3">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت...
                        </p>

                        <div class="d-flex justify-content-around " style="font-size: .8em">
                            <div>
                                <span class=""><i class="fal fa-chalkboard-teacher"></i>استاد مربوطه</span>
                                <span class="mx-1">پویا آکلیون</span>
                            </div>
                            <div>
                                <span><i class="fal fa-clock"></i>زمان شروع</span>
                                <span class="mx-1">12 اردیبهشت</span>
                            </div>

                        </div>
                        <a href="#" class="course-price align-self-start mt-1">62000 تومان</a>

                    </div>
                </div>

            </div>
        </div>
        <div class="red-divider"></div>
        <!-- if search did not match show this card -->
        <div class="mt-3 card p-3  text-center">
            <p class="text-blue" style="font-size: 1.4em">متاسفانه هیج موردی پیدا نشد!</p>
            <i class="fal fa-frown text-blue" style="font-size: 3em"></i>
        </div>

    </div>
@endsection