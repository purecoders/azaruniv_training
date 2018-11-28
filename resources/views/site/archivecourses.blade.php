@extends('layouts.app' ,['site_route'=> 'آرشیو دوره ها'])
@section('content')
    <!-- course title -->
    <h4>آرشیو دوره ها</h4>
    <!--course cards-->
    <div  class="d-flex flex-column mb-3">


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
                        <p class="mt-3">
                            {{strip_tags($course->description)}}
                        </p>


                        <div class="d-flex justify-content-around " style="font-size: .8em">
                            <div>
                                <span class=""><i class="fal fa-chalkboard-teacher"></i>استاد مربوطه</span>
                                <span class="mx-1">{{$course->master->name}}</span>
                            </div>
                            <div>
                                <span><i class="fal fa-clock"></i> زمان شروع</span>
                                <span class="mx-1 jDate">{{$course->start_date}}</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="red-divider"></div>

       @endforeach





    </div>

    <nav aria-label="Page navigation text-center mt-1">
        <ul class="pagination justify-content-start">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">قبلی</a>
            </li>
            <li class="page-item"><a class="page-link hover-link nav-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link hover-link nav-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link hover-link nav-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">بعدی</a>
            </li>
        </ul>
    </nav>
@endsection