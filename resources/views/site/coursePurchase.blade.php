@extends('layouts.app', ['site_route' => 'ثبت نام در ' . $course->title ])
@section('content')
    <div class="container-fluid">
        <h5><i class="fal fa-plus mr-1 mt-1"></i>ثبت نام در دوره </h5>
        <div class="card-body row">
            <div class="col-xl-5">
                <img class="tab-card-img " src="{{asset($course->coverImage->path)}}" alt="">
                <div class="d-flex flex-column mt-2 justify-content-around" style="font-size: .9em;height: 6em">
                    <div>
                        <span class=""><i class="fal fa-chalkboard-teacher mr-1"></i>مدرس</span>
                        <span class="mx-1">{{$course->master->name}}</span>
                    </div>
                    <div>
                        <span><i class="fal fa-clock mr-1"></i>زمان شروع</span>
                        <span class="mx-1 jDate">{{$course->start_date}}</span>
                    </div>
                    <div>
                        <span><i class="fal fa-money-bill mr-1"></i>قیمت </span>
                        @if($course->cost == 0)
                            <span class="mx-1">رایگان</span>
                        @else
                            <span class="mx-1">{{number_format($course->cost)}} تومان</span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xl-7">
                <div class="tab-card-title d-flex flex-column justify-content-between pt-0">
                    <h5><a href="{{route('course.show', $course->id)}}" class="text-blue hover-link">{{$course->title}}</a></h5>
                    <p class="" style="max-height: 6em;overflow: hidden">
                        {{--@php--}}
                        {{--echo $course->description;--}}
                        {{--@endphp--}}

                    </p>


                    @if( \App\Http\Controllers\helper\UserHelper::isStudent($user))
                        {{--check user gender--}}
                        @if($user->is_male == 1 && $course->gender == 'female')
                            <span  class="course-price  mt-3">این دوره مخصوص بانوان می باشد</span>
                        @elseif($user->is_male == 0 && $course->gender == 'male'))
                            <span  class="course-price  mt-3">این دوره مخصوص آقایان می باشد</span>
                        @else
                            @if($course->students()->count() < $course->capacity)
                                @if($course->is_open == 1)
                                    {{--goto pay--}}
                                    <a href="#" class="course-price  mt-3"> پرداخت و ثبت نام</a>
                                @else
                                    <span  class="course-price  mt-3">متاسفانه امکان ثبت نام وجود ندارد</span>
                                @endif

                            @else
                                <span  class="course-price  mt-3">متاسفانه ظرفیت دوره پر شده است</span>
                            @endif
                        @endif
                    @else
                        <span  class="course-price  mt-3">شما نمی توانید در این دوره ثبت نام کنید</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection