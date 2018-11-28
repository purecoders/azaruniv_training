@extends('layouts.masterLayout')
@section('content')
    <div class="container py-4">
        <!-- current route -->
        <div class="row">
            <div class="col-12">
                @include('include.route', ['site_route' => $course->title])
            </div>
        </div>
        <!-- course content -->
        <div class="row">
            <div id="content" class="col-md-8">
                <div class="content-container professor-course p-4 mb-3 ">
                    <h5>{{$course->title}}</h5>
                    <div class="p-3">
                        <p>
                            {{$course->description}}
                        </p>
                        <div class="red-divider"></div>
                        <div>
                            <h6 class="mt-3"></h6>
                            <form action="{{route('professor-send-message', ['id' => $course->id])}}" method="post"   onsubmit="return checkForm()">
                                <div class="form-group">
                                    <label for="professorMassage">ارسال پیام برای دانشجویان این دوره</label>
                                    <textarea  name="inputfield" class="form-control" id="professorMassage" rows="3" placeholder="متن پیام را وارد کنید..."></textarea>
                                </div>

                                {{csrf_field()}}
                                <button type="submit" class="btn btn-blue"><i class="fal fa-paper-plane mr-2"></i>ارسال</button>
                            </form>

                        </div>
                    </div>

                </div>
            </div>

            <!-- student list -->
            <div id="sidebar" class="col-md-4">
                <div class="content-container p-4 mb-3">
                    <div class="d-flex justify-content-around align-items-center mb-1">
                        <h6> دانشجو ها</h6>
                        <button class=" btn btn-sm btn-blue"><i class="fal fa-print"></i>  پرینت لیست کلاس</button>
                    </div>
                    <div class="red-divider"></div>
                    <ul class="students-list nav-list d-flex flex-column p-1 mt-2">

                        @php($i = 1)

                        @foreach($students as $student)

                            <li class="d-flex align-items-center justify-content-start mt-2">
                                <span class="mr-3">{{$i++}}-</span>
                                <div class="student-img-container">
                                    <img src="{{asset($student->photo->path)}}" alt="">
                                </div>
                                <span class="ml-2">{{$student->name}}</span>
                            </li>

                        @endforeach






                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection