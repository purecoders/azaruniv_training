@extends('admin.dashboard')
@section('admin_content')
    <div class="container-fluid">
        <h6 class="m-1 mb-3"> لیست همه کاربران</h6>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">ردیف</th>
                    <th scope="col">اسم کامل</th>
                    <th scope="col">شماره تلفن</th>
                    <th scope="col">عکس</th>
                    <th scope="col">جزئیات</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>09388584677</td>
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
    </div>
@endsection