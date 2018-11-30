@extends('layouts.app')
@section('content')
    <div class="container-fluid">

        <h5><i class="fal fa-plus mr-1 mt-1"></i>ثبت نام در دوره </h5>

        <div class="card-body row">

            <div class="col-xl-5">
                <img class="tab-card-img " src="{{asset('img/slide6.jpg')}}" alt="">
                <div class="d-flex flex-column mt-2 justify-content-around" style="font-size: .9em;height: 6em">
                    <div>
                        <span class=""><i class="fal fa-chalkboard-teacher mr-1"></i>استاد مربوطه</span>
                        <span class="mx-1">پویا آکلیون</span>
                    </div>
                    <div>
                        <span><i class="fal fa-clock mr-1"></i>زمان شروع</span>
                        <span class="mx-1">12 اردیبهشت</span>
                    </div>
                    <div>
                        <span><i class="fal fa-money-bill mr-1"></i>قیمت </span>
                        <span class="mx-1">36000 تومان</span>
                    </div>
                </div>

            </div>
            <div class="col-xl-7">
                <div class="tab-card-title d-flex flex-column justify-content-between pt-0">
                    <h5><a href="{{route('course')}}" class="text-blue hover-link">رویداد کسب کار خودتو بساز</a></h5>
                    <p class="" style="max-height: 6em;overflow: hidden">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت...
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت...
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت...
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت...
                    </p>
                    <a href="#" class="course-price  mt-3"> پرداخت و ثبت نام</a>

                </div>
            </div>

        </div>

    </div>
@endsection