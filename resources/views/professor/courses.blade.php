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
                    <a class="" href="">
                        <img class="tab-card-img " src="{{asset($course->coverImage->path)}}" alt="">
                    </a>

                </div>
                <div class="col-xl-8">
                    <div class="h-100 tab-card-title mx-2 d-flex flex-column justify-content-between">
                        <h5><a href="" class="test text-blue hover-link">{{$course->title}}</a></h5>
                        <p class="mt-3">
                            {{$course->description}}
                        </p>
                        <div class=" d-flex justify-content-around align-items-center " style="font-size: .8em">
                            <div>
                                {{--<span class=""><i class="fal fa-"></i>صفحه </span>--}}
                                <a href="{{route('professor-course')}}" class="btn btn-blue text-white"><i class="fal fa-cog mr-1"></i>مدیریت کلاس</a>
                            </div>
                            <div>
                                <span><i class="fal fa-clock mr-1"></i>زمان شروع دوره:</span>
                                <span class="jDate ml-1">{{$course->start_date}}</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <div class="red-divider"></div>

        @endforeach




    </div>
@endsection