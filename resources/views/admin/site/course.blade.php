@extends('admin.dashboard')
@section('admin_content')
    <div class="container-fluid">
        <div class="row">
            <div class=" col-md-10 m-auto">
                <h6 class="mb-3">ویرایش دوره</h6>
                <form>
                    <div class="form-group row">
                        <label for="postTitle" class="col-sm-2 col-form-label">وضعیت</label>
                        <div class="col-sm-10">
                            <div class="form-check">

                                <label class="form-check-label">
                                    {{--radio buttons name must be same--}}
                                    <input type="radio" name="active" class="form-check-input" value="1" checked> فعال
                                </label>
                                <label class="form-check-label">
                                    <input type="radio" name="active" class="form-check-input" value="0"> غیر فعال
                                </label>

                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="postTitle" class="col-sm-2 col-form-label">عنوان دوره</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="postTitle"
                                   placeholder="عنوان دوره را وارد کنید...">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">تصویر</legend>
                            <div class="col-sm-10">
                                <input type="file" name="" accept="image/*"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">قیمت دوره</legend>
                            <div class="col-sm-3">
                                <input class="form-control d-inline" type="number" name=""/>
                            </div>
                            <div class="col-sm-2 pt-2"><span>تومان</span></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">دسته دوره</legend>
                            <div class="col-sm-5">
                                <select class="form-control">
                                    <option value="دسته1">دسته 1</option>
                                    <option value="دسته2">دسته 2</option>
                                    <option value="دسته3">دسته 3</option>
                                </select>
                            </div>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">زمان شروع دوره</legend>
                            <div class="col-sm-4">
                                <input type="text" class="form-control start-day">
                            </div>
                            <legend class="col-form-label col-sm-2 pt-1">زمان پایان دوره</legend>
                            <div class="col-sm-4">
                                <input type="text" class="form-control start-day">
                            </div>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">استاد دوره</legend>
                            <div class="col-sm-5">
                                <select class="form-control">
                                    <option value="دسته1">استاد 1</option>
                                    <option value="دسته2">استاد 2</option>
                                    <option value="دسته3">استاد 3</option>
                                </select>
                            </div>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">ظرفیت دوره</legend>
                            <div class="col-sm-3">
                                <input class="form-control d-inline" type="number" name=""/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">جنسیت</legend>
                            <div class="col-sm-5">
                                <select class="form-control">
                                    <option value="0">مشترک</option>
                                    <option value="1">مرد</option>
                                    <option value="3">زن</option>
                                </select>
                            </div>

                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2">محتوای دوره</div>
                        <div class="col-sm-10">
                            <textarea name="course_content" class="form-control rtl "
                                      placeholder="محتوای خبر را وارد کنید"
                                      rows="15"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
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
                <button class="btn btn-sm btn-blue" onclick="excelReport(this)"><i class="fal fa-file-excel mr-1"></i>ذخیره
                    فایل اکسل
                </button>
            </div>
            <div class="table-responsive">
                {{--set id by course name--}}
                    <table id="لیست دانشجو های کلاس زبان" class="table table-striped">
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
                                <span class="flex-grow-1 ">ارسال گواهی</span>
                                <label class="mb-0" for="allCheck">
                                    <span style="font-size:0.95em">همه</span>
                                    <input type="checkbox" name="test" id="allCheck" onclick="checkAll(this)">
                                </label>

                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <input type="hidden" form="certForm" name="user_id[]" value="1">
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>2820188796</td>
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
                            <td class="table-check">
                                <input type="hidden" name="cert[]" form="certForm" value="0"/>
                                <input class="form-control tableCheckBox" form="certForm" type="checkbox" name="cert[]" value="1"/>
                            </td>

                        </tr>
                        <tr>
                            <input type="hidden" form="certForm" name="user_id[]" value="2">
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>2820188796</td>
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
                            <td class="table-check">
                                <input type="hidden" name="cert[]" form="certForm" value="0"/>
                                <input class="form-control tableCheckBox" form="certForm" type="checkbox" name="cert[]" value="1"/>
                            </td>
                        </tr>
                        <tr>
                            <input type="hidden" form="certForm" name="user_id[]" value="3">
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>2820188796</td>
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
                            <td class="table-check">
                                <input type="hidden" name="cert[]" form="certForm" value="0"/>
                                <input class="form-control tableCheckBox" type="checkbox" name="cert[]" value="1" form="certForm"/>
                            </td>
                        </tr>

                        </tbody>

                    </table>
                <form action="{{route('table-post')}}"  onsubmit="return confirm('آیا از ارسال گواهی به دانشجویان انتخاب شده مطمئن هستید؟')" method="POST" id="certForm">
                    @csrf
                    <input name="_method" type="hidden" value="POST">
                    <button type="submit" class="btn btn-sm btn-blue float-left mb-2">ارسال گواهی</button>
                </form>


            </div>
        </div>
        <div class="mb-3 red-divider"></div>
        <div class="mt-3 col-10 m-auto">
            <div class="d-flex justify-content-between align-items-center flex-wrap ">
                <h6 class="m-1 my-3">پرداخت های این دوره</h6>
                <button class="btn btn-sm btn-blue m-1" onclick="excelReport(this)"><i
                            class="fal fa-file-excel mr-1"></i>ذخیره فایل اکسل
                </button>
                <h6 class="course-price p-sm-2 m-1">مجموع : 108000 تومان</h6>
            </div>
            <div class="table-responsive">
                {{--set id by course name--}}
                <table id="پرداخت های دوره زبان" id="tableToExcel" class="table table-striped course-payment ">
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
                    <tr>
                        <th scope="row">1</th>
                        <td>36000 تومان</td>
                        <td>پویا آکلیون</td>
                        <td>2820188796</td>
                        <td>موفق</td>
                        <td>
                            1397/09/04
                        </td>
                    </tr>
                    <tr class="fail-table-row">
                        <th scope="row">2</th>
                        <td>36000 تومان</td>
                        <td>پویا آکلیون</td>
                        <td>2820188796</td>
                        <td>ناموفق</td>
                        <td>
                            1397/09/04
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>36000 تومان</td>
                        <td>پویا آکلیون</td>
                        <td>2820188796</td>
                        <td>موفق</td>
                        <td>
                            1397/09/04
                        </td>
                    </tr>
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