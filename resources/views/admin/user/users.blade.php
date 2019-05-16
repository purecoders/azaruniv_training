@extends('admin.dashboard')
@section('admin_content')
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center flex-wrap ">
            <h6 class="m-1 mb-3"> لیست همه کاربران</h6>

            <form action="{{route('admin-search-user')}}" method="post" class="d-flex">
                @csrf
                <input name="national_code" type="text" class="form-control m-1" placeholder="کدملی">
                <input name="name" type="text" class="form-control m-1" placeholder="نام دانشجو">
                <button class="btn btn-primary btn-sm m-1">جستجو</button>
            </form>

            <a href="{{route('admin-users-all')}}" class="btn btn-sm btn-blue m-1">مشاهده همه کاربران</a>
        </div>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">ردیف</th>
                    <th scope="col">نام و نام خانوادگی</th>
                    <th scope="col">کد ملی</th>
                    <th scope="col">شماره تلفن</th>
                    <th scope="col">رشته تحصیلی</th>
                    <th scope="col">تصویر</th>
                    <th scope="col">جزئیات</th>
                </tr>
                </thead>
                <tbody>

                @php($i = 0)
                @foreach($users as $user)
                    @if(\App\Http\Controllers\helper\UserHelper::isStudent($user))
                    <tr>
                        <th scope="row">{{++$i}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->national_code}}</td>
                        <td>{{$user->mobile}}</td>
                        <td>{{$user->major}}</td>
                        <td>
                            <div class="student-img-container">
                                @if($user->photo !== null)
                                    <img src="{{asset($user->photo->path)}}" alt="">
                                @endif
                            </div>
                        </td>
                        <td>
                            <a href="{{route('admin-user-detail', ['id' => $user->id])}}" class="btn btn-sm btn-blue mt-2">مشاهده جزئیات</a>
                        </td>
                    </tr>
                    @endif
                @endforeach



                </tbody>
            </table>
        </div>

        <nav aria-label="Page navigation example">
            <ul class="pagination">
                {{$users->links()}}
            </ul>
        </nav>

        {{--<nav aria-label="Page navigation example">--}}
            {{--<ul class="pagination">--}}
                {{--<li class="page-item">--}}
                    {{--<a class="page-link text-blue" href="#" aria-label="Previous">--}}
                        {{--<span aria-hidden="true">&laquo;</span>--}}
                        {{--<span class="sr-only">Previous</span>--}}
                    {{--</a>--}}
                {{--</li>--}}
                {{--<li class="page-item"><a class="page-link text-blue" href="#">1</a></li>--}}
                {{--<li class="page-item"><a class="page-link text-blue" href="#">2</a></li>--}}
                {{--<li class="page-item"><a class="page-link text-blue" href="#">3</a></li>--}}
                {{--<li class="page-item">--}}
                    {{--<a class="page-link text-blue" href="#" aria-label="Next">--}}
                        {{--<span aria-hidden="true">&raquo;</span>--}}
                        {{--<span class="sr-only">Next</span>--}}
                    {{--</a>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</nav>--}}



        {{--<div class="red-divider"></div>--}}


        {{--<hr>--}}
        <div class="red-divider mt-3"></div>
        <div class="mt-3">
            <h6>ارسال پیام برای تمامی دانشجویان</h6>
            <i class="fal fa-bullhorn float-right fa-flip-horizontal mt-5"
               style="font-size: 4em;color: rgba(6,8,81,0.45);"></i>
            <div class="col-xl-10 col-md-12">
                <form method="post" action="{{route('admin-send-student-public-message')}}" onsubmit="return confirm('این پیام را برای همه ی دانشجویان ارسال کن')">
                    <div class="form-group row pt-4">
                        {{--<label for="messageText" class="col-sm-2 col-form-label">متن پیام</label>--}}
                        <div class="col-sm-12 ">
                        <textarea type="text" class="form-control" id="messageText"
                                  name="text" placeholder="متن پیام را وارد کنید" rows="5"></textarea>
                        </div>
                    </div>
                    @csrf
                    <button class="btn btn-sm btn-blue mt-2"><i class="fal fa-paper-plane"></i> ارسال</button>
                </form>
            </div>
        </div>
        <div class="red-divider mt-3"></div>


        <div class="container-fluid">
            <h6 class="mt-3">دوره های پیشنهادی دانشجویان در 2 ماه اخیر</h6>
            <div class="container table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">ردیف</th>
                        <th scope="col">نام و نام خانوادگی</th>
                        <th scope="col">کد ملی</th>
                        <th scope="col">رشته تحصیلی</th>
                        <th scope="col">دوره پیشنهادی</th>
                        <th scope="col">تاریخ</th>
                    </tr>
                    </thead>
                    <tbody>

                    @php($i = 0)
                    @foreach($recommends as $recommend)
                    <tr>
                        <th scope="row">{{++$i}}</th>
                        <td>{{$recommend->user->name}}</td>
                        <td>{{$recommend->user->national_code}}</td>
                        <td>{{$recommend->user->major}}</td>
                        <td>{{$recommend->name}}</td>
                        <td class="jDate">{{$recommend->created_at}}</td>
                    </tr>
                   @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection