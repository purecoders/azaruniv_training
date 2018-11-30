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
                    <th scope="col">اسم کامل</th>
                    <th scope="col">شماره تلفن</th>
                    <th scope="col">رشته تحصیلی</th>
                    <th scope="col">عکس</th>
                    <th scope="col">جزئیات</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>09388584677</td>
                    <td>فناوری اطلاعات</td>
                    <td>
                        <div class="student-img-container">
                            <img src="{{asset('img/master.jpg')}}" alt="">
                        </div>
                    </td>
                    <td>
                        <a href="{{route('admin-user-detail')}}" class="btn btn-sm btn-blue mt-2">مشاهده جزئیات</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>09388584677</td>
                    <td>فناوری اطلاعات</td>
                    <td>
                        <div class="student-img-container">
                            <img src="{{asset('img/master.jpg')}}" alt="">
                        </div>
                    </td>
                    <td>
                        <a href="" class="btn btn-sm btn-blue mt-2">مشاهده جزئیات</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>09388584677</td>
                    <td>فناوری اطلاعات</td>
                    <td>
                        <div class="student-img-container">
                            <img src="{{asset('img/master.jpg')}}" alt="">
                        </div>
                    </td>
                    <td>
                        <a href="" class="btn btn-sm btn-blue mt-2">مشاهده جزئیات</a>
                    </td>
                </tr>
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

        {{--<div class="red-divider"></div>--}}
        <hr>
        <div class="mt-3">
            <h6>ارسال پیام برای همه کاربران</h6>
            <i class="fal fa-bullhorn float-right fa-flip-horizontal mt-5"
               style="font-size: 4em;color: rgba(6,8,81,0.45);"></i>
            <div class="col-xl-10 col-md-12">
                <form action="" onsubmit="return confirm('این پیام را برای همه ی کاربران ارسال کن')">
                    <div class="form-group row pt-4">
                        {{--<label for="messageText" class="col-sm-2 col-form-label">متن پیام</label>--}}
                        <div class="col-sm-12 ">
                        <textarea type="text" class="form-control" id="messageText"
                                  placeholder="متن پیام را وارد کنید" rows="5"></textarea>
                        </div>

                    </div>
                    <button class="btn btn-sm btn-blue mt-2"><i class="fal fa-paper-plane"></i> ارسال</button>
                </form>
            </div>
        </div>

        <div class="red-divider mt-3"></div>
        <div class="container mt-3">
            <div class="d-flex justify-content-between">
                <h6 class="mt-3">دوره های پیشنهادی کاربران</h6>
                <form action="" onsubmit="return confirm('آیا از ارسال درخواست پیشنهاد دوره مطمئن هستید؟')">
                    <button type="submit" class="btn btn-sm btn-blue">ارسال درخواست پیشنهاد دوره</button>
                </form>
            </div>
            <div class="container table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">ردیف</th>
                        <th scope="col">کاربر</th>
                        <th scope="col">دوره پیشنهادی</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>پویا</td>
                        <td>دوره زبان</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>پویا</td>
                        <td>دوره زبان</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>پویا</td>
                        <td>دوره زبان</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>پویا</td>
                        <td>دوره زبان</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection