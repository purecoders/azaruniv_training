@extends('admin.dashboard')
@section('admin_content')
    <div class="container-fluid">
        <div class="row">
            <div class=" col-md-10 m-auto">
                <h6 class="mb-3">ویرایش دوره</h6>
                <form action="{{route('course.update', $course->id)}}" method="post" enctype="multipart/form-data">

                    <div class="form-group row">
                        <label for="postTitle" class="col-sm-2 col-form-label">وضعیت ثبت نام برای دانشجویان</label>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <label class="form-check-label">
                                    {{--radio buttons name must be same--}}
                                    <input type="radio" name="is_open" class="form-check-input" value="1" @if($course->is_open == 1) checked @endif> فعال
                                </label>
                                <label class="form-check-label">
                                    <input type="radio" name="is_open" class="form-check-input" value="0" @if($course->is_open == 0) checked @endif> غیر فعال
                                </label>
                            </div>
                        </div>


                    </div>

                    <div class="form-group row">
                        <label for="postTitle" class="col-sm-2 col-form-label">عنوان دوره</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="postTitle"
                                   placeholder="عنوان دوره را وارد کنید..." name="title" value="{{$course->title}}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">تصویر</legend>
                            <div class="col-sm-10">
                                <input type="file" name="image" accept="image/*"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">قیمت دوره</legend>
                            <div class="col-sm-3">
                                <input class="form-control d-inline" type="number" name="cost" value="{{$course->cost}}" required/>
                            </div>
                            <div class="col-sm-2 pt-2"><span>تومان</span></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">مدت زمان دوره (ساعت)</legend>
                            <div class="col-sm-3">
                                <input class="form-control d-inline" type="number" name="duration" value="{{$course->duration}}" required/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">دسته دوره</legend>
                            <div class="col-sm-5">
                                <select class="form-control" name="category_id" required>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}" @if($category->id == $course->category_id) selected @endif>{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">زمان شروع دوره</legend>
                            <div class="col-sm-4">
                                {{--<input value="{{$course->start_date}}" type="text" name="start_date" class="jDate" >--}}
                                <input value="{{$course->start_date}}" type="text" name="start_date" class="form-control start-day" required>
                            </div>
                            <legend class="col-form-label col-sm-2 pt-1">زمان پایان دوره</legend>
                            <div class="col-sm-4">
                                {{--<input value="{{$course->finish_date}}" type="text" name="finish_date" class="jDate">--}}
                                <input value="{{$course->finish_date}}" type="text" name="finish_date" class="form-control start-day" required>
                            </div>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">استاد دوره</legend>
                            <div class="col-sm-5">
                                <select class="form-control" name="master_id" required>
                                    @foreach($masters as $master)
                                        <option value="{{$master->id}}" @if($master->id == $course->master_id) selected @endif>{{$master->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">ظرفیت دوره</legend>
                            <div class="col-sm-3">
                                <input value="{{$course->capacity}}" class="form-control d-inline" type="number" name="capacity" required/>
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
                                      placeholder="محتوای خبر را وارد کنید"
                                      rows="15" required>{{$course->description}}</textarea>
                        </div>
                    </div>
                    @csrf
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <input type="hidden" name="_method" value="PUT">
                            <button type="submit" class="btn btn-blue">ویرایش</button>
                        </div>
                    </div>
                </form>

            </div>

        </div>
        <div class="red-divider"></div>
        <div class="col-10 m-auto">
            <div class="d-flex justify-content-between align-items-center">
                <h6 class="m-1 my-3">لیست دانشجو های این دوره</h6>
                <button  class="btn btn-sm btn-blue" onclick="excelReport(this)"><i class="fal fa-file-excel mr-1"></i>ذخیره فایل اکسل</button>
            </div>
            <div class="table-responsive">
            <table id="اسامی_{{$course->title}}" class="table table-striped">
                <thead>
                <tr>
                    <input type="hidden">
                    <th scope="col">ردیف</th>
                    <th scope="col">نام و نام خانوادگی</th>
                    <th scope="col">کد ملی</th>
                    <th scope="col">شماره تلفن</th>
                    <th scope="col">رشته تحصیلی</th>
                    <th scope="col">عکس</th>
                    <th scope="col">جزئیات</th>

                    <th scope="col">
                        <span class="flex-grow-1 "> ارسال گواهی </span>
                        <label class="mb-0" for="allCheck">
                            <span style="font-size:0.95em">همه </span>
                            <input type="checkbox" name="test" id="allCheck"  onclick="checkAll(this)">
                        </label>
                    </th>

                </tr>
                </thead>
                <tbody>

                @php($i=0)
                @foreach($students as $student)
                    <tr>
                        <input type="hidden" form="certForm" name="user_id[]" value="{{$student->id}}">
                        <th scope="row">{{++$i}}</th>
                        <td>{{$student->name}}</td>
                        <td>{{$student->national_code}}</td>
                        <td>{{$student->mobile}}</td>
                        <td>{{$student->major}}</td>
                        <td>
                            <div class="student-img-container">
                                <img src="{{asset($student->photo->path)}}" alt="">
                            </div>
                        </td>
                        <td>
                            <a href="{{route('admin-user-detail', ['id' => $student->id])}}" class="btn btn-sm btn-blue mt-2">مشاهده جزئیات</a>
                        </td>

                        <td class="table-check">
                            <input type="hidden" name="cert[]" form="certForm" value="0" @if($student->hasCertificate($course->id)) disabled="true" @endif />
                            <input class="form-control tableCheckBox" form="certForm" type="checkbox" name="cert[]" value="1"  @if($student->hasCertificate($course->id)) checked="true" @endif/>
                        </td>

                    </tr>
                @endforeach

                </tbody>
            </table>
                <form action="{{route('admin-export-certificate')}}"  onsubmit="return confirm('آیا از ارسال گواهی به دانشجویان انتخاب شده مطمئن هستید؟')" method="POST" id="certForm">
                    @csrf
                    <input name="course_id" type="hidden" value="{{$course->id}}">
                    <input name="_method" type="hidden" value="POST">
                    <button type="submit" class="btn btn-sm btn-blue float-left mb-2">  ارسال گواهی ها</button>
                </form>
            </div>
        </div>








        <div class="mb-3 red-divider"></div>
        <div class="mt-3 col-10 m-auto">
            <div class="d-flex justify-content-between align-items-center flex-wrap ">
                <h6 class="m-1 my-3">پرداخت های این دوره</h6>
                <button class="btn btn-sm btn-blue m-1" onclick="excelReport(this)"><i class="fal fa-file-excel mr-1"></i>ذخیره فایل اکسل</button>
                <h6 class="course-price p-sm-2 m-1"> مجموع : {{number_format($paymentsSum)}} تومان </h6>
            </div>
            <div class="table-responsive">
                <table id="پرداختهای_{{$course->title}}"  class="table table-striped course-payment">
                    <thead>
                    <tr>
                        <th scope="col">ردیف</th>
                        <th scope="col">مبلغ</th>
                        <th scope="col">واریز شده توسط</th>
                        <th scope="col">کد ملی</th>
                        <th scope="col">وضعیت پرداخت</th>
                        <th scope="col">تاریخ</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php($i = 0)
                    @foreach($payments as $payment)
                     @if($payment->is_success == 1)
                         <tr>
                             <th scope="row">{{++$i}}</th>
                             <td>{{number_format($payment->amount)}} تومان </td>
                             <td>{{$payment->user->name}}</td>
                             <td>{{$payment->user->national_code}}</td>
                             <td>موفق</td>
                             <td class="jDate">{{$payment->created_at}}</td>
                         </tr>
                    @else
                         <tr class="fail-table-row">
                             <th scope="row">{{++$i}}</th>
                             <td>{{number_format($payment->amount)}} تومان </td>
                             <td>{{$payment->user->name}}</td>
                             <td>{{$payment->user->national_code}}</td>
                             <td>ناموفق</td>
                             <td class="jDate">{{$payment->created_at}}</td>
                         </tr>
                    @endif
                    @endforeach

                    </tbody>
                </table>
            </div>
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