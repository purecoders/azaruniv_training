@extends('layouts.app', ['site_route'=>$category->name])
@section('content')
    <!-- course title -->
    <h4>{{$category->name}}</h4>
    <!--course cards-->
    <div id="coursesList" class="d-flex flex-column">

        @foreach($courses as $course)

        <div class="card border-0">
            <div class="card-body row">

                <div class="col-xl-4 tab-img-link">
                    <a class="" href="{{route('course.show', ['id'=>$course->id])}}">
                        <img class="tab-card-img " src="{{asset($course->coverImage->path)}}" alt="">
                    </a>
                </div>
                <div class="col-xl-8">
                    <div class="tab-card-title mx-2 d-flex flex-column justify-content-between">
                        <h5><a href="{{route('course.show', ['id'=>$course->id])}}" class="text-blue hover-link">{{$course->title}}</a></h5>
                        <p class="mt-3 card-desc">
                            {{strip_tags($course->description)}}
                        </p>
                        <div class="d-flex justify-content-around " style="font-size: .8em">
                            <div>
                                <span class=""><i class="fal fa-chalkboard-teacher"></i>مدرس</span>
                                <span class="mx-1">{{$course->master->name}}</span>
                            </div>
                            <div>
                                <span><i class="fal fa-clock"></i>زمان شروع</span>
                                <span class="mx-1 jDate">{{$course->start_date}}</span>
                            </div>
                        </div>
                        @if($course->cost == 0)
                            <a href="{{route('course.show', $course->id)}}" class="course-price align-self-start mt-1">رایگان</a>
                        @else
                            <a href="{{route('course.show', $course->id)}}" class="course-price align-self-start mt-1">{{number_format($course->cost)}} تومان </a>
                        @endif
                    </div>
                </div>

            </div>
        </div>

        <div class="red-divider"></div>

            @endforeach





    </div>
@endsection