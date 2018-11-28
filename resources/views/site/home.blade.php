@extends('layouts.masterLayout')
@section('content')
    <div id="carousel" class="swiper-container" dir="rtl">
        <div class="swiper-wrapper">
            @foreach($sliders as $slider)
            <div class="swiper-slide">
                @if(strlen($slider->on_click) < 3)
                    <img src="{{asset($slider->photo->path)}}">
                    <div class="title" id="title_#">{{$slider->title}}</div>
                @else
                    <a class="w-100" href="{{$slider->on_click}}">
                        <img src="{{asset($slider->photo->path)}}">
                        <div class="title" id="title_#">{{$slider->title}}</div>
                    </a>
                @endif
            </div>

            @endforeach



        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Navigation -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    <div class="divider"></div>
    <div class="container my-5">
        <ul class="nav nav-tabs d-flex tab-container-header " id="myTab" role="tablist">
            <li class="nav-item flex-grow-1 text-center">
                <a class="nav-link" id="news-tab" data-toggle="tab" href="#news" role="tab" aria-controls="news"
                   aria-selected="true">اخبار مرکز</a>
            </li>
            <li class="nav-item flex-grow-1 text-center">
                <a class="nav-link active" id="event-tab" data-toggle="tab" href="#event" role="tab"
                   aria-controls="event" aria-selected="false">رویداد ها و دوره ها</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade " id="news" role="tabpanel" aria-labelledby="news-tab">
                <div class="container tab-container p-2 pt-3 ">
                    <div class="row">


                        @php
                            $posts1 = array();
                            $posts2 = array();
                            $postsSize = sizeof($posts);
                            for($i=0 ; $i<(floor($postsSize/2)) ; $i++){
                                $posts2[] = $posts[$i];
                            }

                        for($i=$postsSize/2 ; $i<$postsSize ; $i++){
                                $posts1[] = $posts[$i];
                            }
                        @endphp



                        <div class="col-md-6">
                            @foreach($posts1 as $post1)
                            <div class="card  border-0">
                                <div class="card-body d-flex">
                                    <a class="tab-img-link" href="{{route('post.show', ['id'=>$post1->id])}}">
                                        <img class="tab-card-img" src="{{$post1->photo->path}}" alt="">
                                    </a>
                                    <div class="tab-card-title mx-2 d-flex flex-column">
                                        <h5><a href="{{route('post.show', ['id'=>$post1->id])}}" class="text-blue hover-link">{{$post1->title}}</a></h5>
                                        <p class="mt-3">
                                           {{$post1->content}}
                                        </p>
                                    </div>
                                </div>

                            </div>
                            <hr>
                            @endforeach
                        </div>



                        <div class="col-md-6">
                            @foreach($posts2 as $post2)
                                <div class="card  border-0">
                                    <div class="card-body d-flex">
                                        <a class="tab-img-link" href="{{route('post.show', ['id'=>$post2->id])}}">
                                            <img class="tab-card-img" src="{{$post2->photo->path}}" alt="">
                                        </a>
                                        <div class="tab-card-title mx-2 d-flex flex-column">
                                            <h5><a href="{{route('post.show', ['id'=>$post2->id])}}" class="text-blue hover-link">{{$post2->title}}</a></h5>
                                            <p class="mt-3">
                                                {{$post2->content}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            @endforeach
                        </div>


                    </div>







                    <div class="d-flex justify-content-end">
                        <a href="{{route('arcposts')}}" class="hover-link">
                            <span class="">آرشیو <i class="fal fa-share"></i> </span>
                        </a>
                    </div>

                </div>
            </div>
            <div class="tab-pane fade show active" id="event" role="tabpanel" aria-labelledby="event-tab">
                <div class="container tab-container p-2 pt-3">
                    <div class="row">

                        @php
                            $courses1 = array();
                            $courses2 = array();
                            $coursesSize = sizeof($courses);
                            for($i=0 ; $i<(floor($coursesSize/2)) ; $i++){
                                $courses2[] = $courses[$i];
                            }

                        for($i=$coursesSize/2 ; $i<$coursesSize ; $i++){
                                $courses1[] = $courses[$i];
                            }
                        @endphp

                        <div class="col-md-6">
                            @foreach($courses1 as $course1)
                            <div class="card  border-0">
                                <div class="card-body d-flex">
                                    <a class="tab-img-link" href="{{route('course.show', ['id'=>$course1->id])}}">
                                        <img class="tab-card-img" src="{{$course1->coverImage->path}}" alt="">
                                    </a>
                                    <div class="tab-card-title mx-2 d-flex flex-column">
                                        <h5><a href="{{route('course.show', ['id'=>$course1->id])}}" class="text-blue hover-link">{{$course1->title}}</a></h5>
                                        <p class="mt-3">
                                            {{strip_tags($course1->description)}}
                                        </p>
                                        <a href="#" class="course-price">{{number_format($course1->cost)}} تومان </a>
                                    </div>
                                </div>

                            </div>
                            <hr>
                            @endforeach

                        </div>



                        <div class="col-md-6">
                            @foreach($courses2 as $course2)
                                <div class="card  border-0">
                                    <div class="card-body d-flex">
                                        <a class="tab-img-link" href="{{route('course.show', ['id'=>$course2->id])}}">
                                            <img class="tab-card-img" src="{{$course2->coverImage->path}}" alt="">
                                        </a>
                                        <div class="tab-card-title mx-2 d-flex flex-column">
                                            <h5><a href="{{route('course.show', ['id'=>$course2->id])}}" class="text-blue hover-link">{{$course2->title}}</a></h5>
                                            <p class="mt-3">
                                                {{strip_tags($course2->description)}}
                                            </p>
                                            <a href="#" class="course-price">{{number_format($course2->cost)}} تومان </a>
                                        </div>
                                    </div>

                                </div>
                                <hr>
                            @endforeach
                        </div>



                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="{{route('arccourses')}}" class="hover-link">
                            <span class="">آرشیو <i class="fal fa-share"></i> </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection