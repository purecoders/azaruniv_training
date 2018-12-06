@extends('admin.dashboard')
@section('admin_content')
    <div class="container-fluid">
        <div class="row">
            <div class=" col-md-8">
                <h6 class="mb-3">افزودن دوره جدید</h6>

                <form action="{{route('course.store')}}" method="post" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label for="postTitle" class="col-sm-2 col-form-label">عنوان دوره</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="postTitle"
                                   placeholder="عنوان دوره را وارد کنید..." name="title" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">تصویر</legend>
                            <div class="col-sm-10">
                                <input type="file" name="image" accept="image/*" required/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">هزینه دوره</legend>
                            <div class="col-sm-3">
                                <input class="form-control d-inline" type="number" name="cost" required/>
                            </div>
                            <div class="col-sm-2 pt-2"><span>تومان</span></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">مدت زمان دوره (ساعت)</legend>
                            <div class="col-sm-3">
                                <input class="form-control d-inline" type="number" name="duration" required/>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">دسته دوره</legend>
                            <div class="col-sm-5">
                                <select class="form-control" name="category_id" required>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">زمان شروع دوره</legend>
                            <div class="col-sm-4">
                                <input  type="text" name="start_date" class="form-control start-day" required>
{{--                                <input value="{{date('Y-m-d')}}" type="text" name="start_date" >--}}
                            </div>
                            <legend class="col-form-label col-sm-2 pt-1">زمان پایان دوره</legend>
                            <div class="col-sm-4">
                                <input  type="text" name="finish_date" class="form-control start-day" required>
                                {{--<input value="{{date('Y-m-d')}}" type="text" name="finish_date" >--}}
                            </div>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">مدرس دوره</legend>
                            <div class="col-sm-5">
                                <select class="form-control" name="master_id" required>
                                    @foreach($masters as $master)
                                        <option value="{{$master->id}}">{{$master->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">ظرفیت دوره</legend>
                            <div class="col-sm-3">
                                <input class="form-control d-inline" type="number" name="capacity" required/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">جنسیت</legend>
                            <div class="col-sm-5" >
                                <select class="form-control" name="gender" required>
                                    <option value="coeducational">مشترک</option>
                                    <option value="male">مرد</option>
                                    <option value="female">زن</option>
                                </select>
                            </div>

                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2">توضیحات دوره</div>
                        <div class="col-sm-10">
                            <textarea name="course_content" class="form-control rtl "
                                      placeholder="توضیحات دوره را وارد کنید"
                                      rows="15" required></textarea>
                        </div>
                    </div>
                    {{csrf_field()}}
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-blue">ثبت</button>
                        </div>
                    </div>
                </form>

            </div>
            <div class="col-md-4">
                <h6>لیست دوره ها</h6>
                <div class="news-container p-4 admin-news-container">
                    <h6>آخرین دوره ها</h6>
                    <div class="red-divider"></div>
                    <ul class="nav-list d-flex flex-column p-0">

                        @foreach($courses as $course)
                            <li class="d-flex">
                                <a href="{{route('course.show', ['id' => $course->id])}}">{{$course->title}}</a>
                                <form class="align-self-center ml-auto" action="{{route('course.destroy', $course->id)}}" method="post">

                                    <input type="hidden" name="_method" value="DELETE">
                                    @csrf
                                    <input type="submit" class="btn btn-delete" value="حذف">
                                </form>
                            </li>
                        @endforeach




                    </ul>
                </div>
            </div>
        </div>
        <div class="red-divider"></div>
        <h6 class="mt-4">همه دوره ها</h6>
        <div class="mt-1 d-flex flex-wrap">

           @foreach($courses as $course)
            <div class="m-1 admin-course-container d-flex flex-column">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="admin-course-img-container">
                            <img src="{{asset($course->coverImage->path)}}" alt="">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="d-flex justify-content-between align-items-center admin-course-card-header my-md-0">
                        <h6>{{$course->title}}</h6>
                            @if($course->cost == 0)
                                <span class="btn-sm course-price align-self-start ">رایگان</span>
                            @else
                                <span class="btn-sm course-price align-self-start ">{{number_format($course->cost)}} تومان </span>
                            @endif
                        </div>
                        <p>
                            {{strip_tags($course->description)}}.
                        </p>
                    </div>
                </div>
                <div class="d-flex mt-3 justify-content-between align-items-center flex-wrap">
                    <span><i class="fal fa-users-class"></i> {{$course->students()->count()}}</span>
                    <span><i class="fal fa-chalkboard-teacher"></i> {{$course->master->name}}</span>
                    <a href="{{route('admin-course', ['id' => $course->id])}}" class="btn btn-sm btn-blue"><i class="fal fa-cog mr-1 "></i>مدیریت دوره</a>
                </div>
            </div>
           @endforeach





        </div>
    </div>
    <script>
        CKEDITOR.replace('course_content');

    </script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/persian-date.min.js')}}"></script>
    <script src="{{asset('js/persian-datepicker.min.js')}}"></script>
    <script>
        (function ($) {
            $(document).ready(function () {

                $(".start-day").persianDatepicker({
                    format: 'YYYY/MM/DD',
                    timePicker: {
                        enabled: false
                    }
                })

            });
        })
        (window.jQuery);
    </script>

@endsection