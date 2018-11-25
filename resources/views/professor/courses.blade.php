@extends('professor.dashboard')
@section('professor_content')
    <!--user course title -->
    <h6>لیست کلاس های شما</h6>
    <!--user course cards-->
    <div class="d-flex flex-column">
        <div class="card border-0">
            <div class="card-body row">

                <div class="col-xl-4 tab-img-link">
                    <a class="" href="{{route('post')}}">
                        <img class="tab-card-img " src="{{asset('img/slide6.jpg')}}" alt="">
                    </a>
                    <button class="text-dark border-dark  btn btn-outline-light btn-block mt-2" data-toggle="collapse"
                            data-target="#professorMassage2"><i class="fal fa-check"></i> آخرین پیام های ارسالی من
                    </button>
                </div>

                <div class="col-xl-8">
                    <div class="h-100 tab-card-title mx-2 d-flex flex-column justify-content-between">
                        <h5><a href="{{route('course')}}" class="test text-blue hover-link">رویداد کسب کار خودتو
                                بساز</a></h5>
                        <p class="mt-3">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت...
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت...
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت... لورم ایپسوم متن ساختگی با تولید
                            سادگی نامفهوم از صنعت...


                        </p>
                        <div class=" d-flex justify-content-around align-items-center " style="font-size: .8em">
                            <div>
                                {{--<span class=""><i class="fal fa-"></i>صفحه </span>--}}
                                <a href="{{route('professor-course')}}" class="btn btn-blue text-white"><i
                                            class="fal fa-cog mr-1"></i>مدیریت کلاس</a>
                            </div>
                            <div>
                                <span><i class="fal fa-clock mr-1"></i>زمان کلاس:</span>
                                <span class="jDate ml-1">2018-05-16</span>
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
                    <a class="" href="{{route('post')}}">
                        <img class="tab-card-img " src="{{asset('img/slide6.jpg')}}" alt="">
                    </a>
                    <button class="text-dark border-dark  btn btn-outline-light btn-block mt-2" data-toggle="collapse"
                            data-target="#professorMassage3"><i class="fal fa-check"></i> آخرین پیام های ارسالی من
                    </button>
                </div>

                <div class="col-xl-8">
                    <div class="h-100 tab-card-title mx-2 d-flex flex-column justify-content-between">
                        <h5><a href="{{route('course')}}" class="test text-blue hover-link">رویداد کسب کار خودتو
                                بساز</a></h5>
                        <p class="mt-3">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت...
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت...
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت... لورم ایپسوم متن ساختگی با تولید
                            سادگی نامفهوم از صنعت...


                        </p>
                        <div class=" d-flex justify-content-around align-items-center " style="font-size: .8em">
                            <div>
                                {{--<span class=""><i class="fal fa-"></i>صفحه </span>--}}
                                <a href="{{route('professor-course')}}" class="btn btn-blue text-white"><i
                                            class="fal fa-cog mr-1"></i>مدیریت کلاس</a>
                            </div>
                            <div>
                                <span><i class="fal fa-clock mr-1"></i>زمان کلاس:</span>
                                <span class="jDate ml-1">2018-05-16</span>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="red-divider"></div>

    </div>
@endsection