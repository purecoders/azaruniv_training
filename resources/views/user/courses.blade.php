@extends('user.dashboard')
@section('user_content')
    <!--user course title -->
    <h6>آخرین دوره های شما</h6>
    <!--user course cards-->
    <div  class="d-flex flex-column">


        @foreach($courses as $course)
        <div class="card border-0">
            <div class="card-body row">

                <div class="col-xl-4 tab-img-link">
                    <a class="" href="{{route('course.show', ['id'=>$course->id])}}">
                        <img class="tab-card-img " src="{{asset($course->coverImage->path)}}" alt="">
                    </a>

                    <button class="text-dark border-dark  btn btn-outline-light btn-block mt-2" data-toggle="collapse" data-target="#professorMessage{{$course->id}}">   <i class="fal fa-check"></i> آخرین پیام های استاد</button>

                </div>
                <div class="col-xl-8">
                    <div class="h-100 tab-card-title mx-2 d-flex flex-column justify-content-between pt-0">
                        <div class="d-flex justify-content-between">
                            <h5><a href="{{route('course.show', ['id'=>$course->id])}}" class="test text-blue hover-link">{{$course->title}}</a></h5>
                            @if(\Illuminate\Support\Facades\Auth::user()->hasCertificate($course->id))
                                <span class="alert alert-success">گواهی پایان دوره شما آماده است.برای دریافت به مدیریت مراجعه فرمایید.</span>
                            @endif
                        </div>


                        <p class="mt-3 card-desc">
                            {{strip_tags($course->description)}}
                        </p>
                        <div class=" d-flex justify-content-around " style="font-size: .8em">
                            <div>
                                <span class=""><i class="fal fa-chalkboard-teacher"></i>مدرس</span>
                                <span class="mx-1">{{$course->master->name}}</span>
                            </div>
                            <div>
                                <span><i class="fal fa-clock"></i>زمان شروع</span>
                                <span class="mx-1 jDate">{{$course->start_date}}</span>
                            </div>
                        </div>
                    </div>
                </div>



                @php
                    $messages = $course->publicMessages();
                @endphp
                <div id="professorMessage{{$course->id}}" class="collapse">
                    <div class="container p-3">
                        <div class="d-flex flex-column">
                            @foreach($messages as $message)
                            <div class="d-flex alert alert-info">
                                <div>
                                    <i class="fal fa-envelope-open"></i>
                                   {{$message->text}}
                                </div>
                                <span class="mx-2 mt-4 jDate">{{$message->created_at}}</span>
                            </div>
                           @endforeach

                        </div>
                    </div>
                </div>


            </div>
        </div>

        <div class="red-divider"></div>

       @endforeach






    </div>
@endsection