@extends('layouts.app', ['site_route' => 'جستجو'])
@section('content')
    <h6>  جست وجو برای عبارت   {{$text}} </h6>
    <div id="coursesList" class="d-flex flex-column">

        @if(sizeof($courses) > 0)

            @foreach($courses as $course)
                <div class="card border-0">
                    <div class="card-body row">

                        <div class="col-xl-4 tab-img-link">
                            <a class="" href="{{route('course.show', ['id'=>$course->id])}}">
                                <img class="tab-card-img " src="{{$course->coverImage->path}}" alt="">
                            </a>
                        </div>
                        <div class="col-xl-8">
                            <div class="tab-card-title mx-2 d-flex flex-column justify-content-between">
                                <h5><a href="#" class="text-blue hover-link">{{$course->title}}</a></h5>
                                <p class="mt-3">
                                    {{$course->description}}
                                </p>

                                <div class="d-flex justify-content-around " style="font-size: .8em">
                                    <div>
                                        <span class=""><i class="fal fa-chalkboard-teacher"></i>استاد مربوطه</span>
                                        <span class="mx-1">{{$course->master->name}}</span>
                                    </div>
                                    <div>
                                        <span><i class="fal fa-clock"></i>زمان شروع</span>
                                        <span class="mx-1 jDate">{{$course->start_date}}</span>
                                    </div>

                                </div>
                                <a href="#" class="course-price align-self-start mt-1">{{$course->cost}} تومان </a>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="red-divider"></div>

            @endforeach

        @else


        <!-- if search did not match show this card -->
            <div class="mt-3 card p-3  text-center">
                <p class="text-blue" style="font-size: 1.4em">متاسفانه هیج موردی پیدا نشد!</p>
                <i class="fal fa-frown text-blue" style="font-size: 3em"></i>
            </div>

        @endif

    </div>
@endsection