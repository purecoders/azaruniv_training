@extends('admin.dashboard')
@section('admin_content')
    <div class="container-fluid">
        <div class="row">
            <div class=" col-md-10 m-auto">
                <h6 class="mb-3">ویرایش دوره</h6>
                <form>
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
            <h6 class="m-1 my-3">لیست دانشجو های این دوره</h6>
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
                        <a href="" class="btn btn-sm btn-blue mt-2">مشاهده جزئیات</a>
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