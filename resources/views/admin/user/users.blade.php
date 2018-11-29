@extends('admin.dashboard')
@section('admin_content')
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center flex-wrap ">
            <h6 class="m-1 mb-3"> لیست همه کاربران</h6>
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
                @foreach($students as $student)
                    <tr>
                        <th scope="row">{{++$i}}</th>
                        <td>{{$student->name}}</td>
                        <td>{{$student->national_code}}</td>
                        <td>{{$student->mobile}}</td>
                        <td>{{$student->major}}</td>
                        <td>
                            <div class="student-img-container">
                                @if($student->photo !== null)
                                    <img src="{{asset($student->photo->path)}}" alt="">
                                @endif
                            </div>
                        </td>
                        <td>
                            <a href="{{route('admin-user-detail', ['id' => $student->id])}}" class="btn btn-sm btn-blue mt-2">مشاهده جزئیات</a>
                        </td>
                    </tr>
                @endforeach



                </tbody>
            </table>
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link text-blue" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link text-blue" href="#">1</a></li>
                <li class="page-item"><a class="page-link text-blue" href="#">2</a></li>
                <li class="page-item"><a class="page-link text-blue" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link text-blue" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>


        <div class="red-divider"></div>
        <div class="container-fluid">
            <h6 class="mt-3">دوره های پیشنهادی کاربران</h6>
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