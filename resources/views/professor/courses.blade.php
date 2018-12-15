@extends('professor.dashboard')
@section('professor_content')
    <!--user course title -->
    <h6>لیست کلاس های شما</h6>
    <!--user course cards-->
    <div  class="d-flex flex-column">


        @foreach($courses as $course)
        <div class="card border-0">
            <div class="card-body row">

                <div class="col-xl-4 tab-img-link">
                    <a class="" href="{{route('course.show', ['id' => $course->id])}}">
                        <img class="tab-card-img " src="{{asset($course->coverImage->path)}}" alt="">
                    </a>

                    <button class="text-dark border-dark  btn btn-outline-light btn-block mt-2" data-toggle="collapse"
                            data-target="#{{$course->id}}"><i class="fal fa-check"></i> آخرین پیام های ارسالی من
                    </button>


                </div>
                <div class="col-xl-8">
                    <div class="h-100 tab-card-title mx-2 d-flex flex-column justify-content-between">
                        <h5><a href="{{route('course.show', ['id' => $course->id])}}" class="test text-blue hover-link">{{$course->title}}</a></h5>
                        <p class="mt-3 card-desc">
                            {{strip_tags($course->description)}}
                        </p>
                        <div class=" d-flex justify-content-around align-items-center " style="font-size: .8em">
                            <div>
                                {{--<span class=""><i class="fal fa-"></i>صفحه </span>--}}
                                <a href="{{route('professor-course', ['id' => $course->id])}}" class="btn btn-blue text-white"><i class="fal fa-cog mr-1"></i>مدیریت کلاس</a>
                            </div>
                            <div>
                                <span><i class="fal fa-clock mr-1"></i>زمان شروع دوره:</span>
                                <span class="jDate ml-1">{{$course->start_date}}</span>
                            </div>
                        </div>
                    </div>

                </div>

                <div id="{{$course->id}}" class="collapse">
                    <div class="container p-3">

                       @foreach($course->publicMessages() as $message)
                        <div class="d-flex flex-column">
                            <div class="d-flex alert alert-info">
                                <div>
                                    <i class="fal fa-envelope-open"></i>
                                   {{$message->text}}
                                </div>
                                <span class="mx-2 mt-4 jDate">{{$message->created_at}}</span>
                            </div>
                        </div>
                        @endforeach


                    </div>


                </div>

            </div>
        </div>
        <div class="red-divider"></div>

        @endforeach




    </div>
@endsection