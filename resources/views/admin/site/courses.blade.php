@extends('admin.dashboard')
@section('admin_content')
    <div class="container-fluid">
        <div class="row">
            <div class=" col-md-8">
                <h6 class="mb-3">دوره جدید</h6>
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
                            <legend class="col-form-label col-sm-2 pt-1">زمان  پایان دوره</legend>
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
                            <button type="submit" class="btn btn-blue">انتشار</button>
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
                        <li class="d-flex">
                            <a href="#">دورۀ آموزشی ویراستاری</a>
                            <form class="align-self-center ml-auto" action="">

                                <input type="submit" class="btn btn-delete" value="حذف">
                            </form>
                        </li>
                        <li class="d-flex">
                            <a href="#">اعلام نتایج آزمون زبان دانشگاه مورخ ۹۷/۰۷/۱۳</a>
                            <form class="align-self-center ml-auto" action="">
                                <input type="submit" class="btn btn-delete" value="حذف">
                            </form>
                        </li>
                        <li class="d-flex">
                            <a href="#">دورۀ آموزشی ویراستاری</a>
                            <form class="align-self-center ml-auto" action="">

                                <input type="submit" class="btn btn-delete" value="حذف">
                            </form>
                        </li>
                        <li class="d-flex">
                            <a href="#">اعلام نتایج آزمون زبان دانشگاه مورخ ۹۷/۰۷/۱۳</a>
                            <form class="align-self-center ml-auto" action="">
                                <input type="submit" class="btn btn-delete" value="حذف">
                            </form>
                        </li>
                        <li class="d-flex">
                            <a href="#">دورۀ آموزشی ویراستاری</a>
                            <form class="align-self-center ml-auto" action="">

                                <input type="submit" class="btn btn-delete" value="حذف">
                            </form>
                        </li>
                        <li class="d-flex">
                            <a href="#">اعلام نتایج آزمون زبان دانشگاه مورخ ۹۷/۰۷/۱۳</a>
                            <form class="align-self-center ml-auto" action="">
                                <input type="submit" class="btn btn-delete" value="حذف">
                            </form>
                        </li>
                        <li class="d-flex">
                            <a href="#">دورۀ آموزشی ویراستاری</a>
                            <form class="align-self-center ml-auto" action="">

                                <input type="submit" class="btn btn-delete" value="حذف">
                            </form>
                        </li>
                        <li class="d-flex">
                            <a href="#">اعلام نتایج آزمون زبان دانشگاه مورخ ۹۷/۰۷/۱۳</a>
                            <form class="align-self-center ml-auto" action="">
                                <input type="submit" class="btn btn-delete" value="حذف">
                            </form>
                        </li>
                        <li class="d-flex">
                            <a href="#">دورۀ آموزشی ویراستاری</a>
                            <form class="align-self-center ml-auto" action="">

                                <input type="submit" class="btn btn-delete" value="حذف">
                            </form>
                        </li>
                        <li class="d-flex">
                            <a href="#">اعلام نتایج آزمون زبان دانشگاه مورخ ۹۷/۰۷/۱۳</a>
                            <form class="align-self-center ml-auto" action="">
                                <input type="submit" class="btn btn-delete" value="حذف">
                            </form>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="red-divider"></div>
        <h6 class="mt-4">همه دوره ها</h6>
        <div class="mt-1 d-flex flex-wrap">
            <div class="m-1 admin-course-container d-flex flex-column">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="admin-course-img-container">
                            <img src="{{asset('img/1.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <h6>دوره زبان</h6>
                        <p>
                            مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته
                            اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                        </p>
                    </div>
                </div>
                <div class="d-flex mt-3 justify-content-around align-items-center flex-wrap">
                    <span><i class="fal fa-users-class"></i> 24</span>
                    <span><i class="fal fa-chalkboard-teacher"></i> پویا آکلیون</span>
                    <a href="{{route('admin-course')}}" class="btn btn-sm btn-blue"><i class="fal fa-cog mr-1 "></i>مدیریت دوره</a>
                </div>
            </div>
            <div class="m-1 admin-course-container d-flex flex-column">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="admin-course-img-container">
                            <img src="{{asset('img/1.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <h6>دوره زبان</h6>
                        <p>
                            مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته
                            اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                        </p>
                    </div>
                </div>
                <div class="d-flex mt-3 justify-content-around align-items-center flex-wrap">
                    <span><i class="fal fa-users-class"></i> 24</span>
                    <span><i class="fal fa-chalkboard-teacher"></i> پویا آکلیون</span>
                    <a href="" class="btn btn-sm btn-blue"><i class="fal fa-cog mr-1 "></i>مدیریت دوره</a>
                </div>
            </div>
            <div class="m-1 admin-course-container d-flex flex-column">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="admin-course-img-container">
                            <img src="{{asset('img/1.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <h6>دوره زبان</h6>
                        <p>
                            مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته
                            اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                        </p>
                    </div>
                </div>
                <div class="d-flex mt-3 justify-content-around align-items-center flex-wrap">
                    <span><i class="fal fa-users-class"></i> 24</span>
                    <span><i class="fal fa-chalkboard-teacher"></i> پویا آکلیون</span>
                    <a href="" class="btn btn-sm btn-blue"><i class="fal fa-cog mr-1 "></i>مدیریت دوره</a>
                </div>
            </div>
            <div class="m-1 admin-course-container d-flex flex-column">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="admin-course-img-container">
                            <img src="{{asset('img/1.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <h6>دوره زبان</h6>
                        <p>
                            مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته
                            اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                        </p>
                    </div>
                </div>
                <div class="d-flex mt-3 justify-content-around align-items-center flex-wrap">
                    <span><i class="fal fa-users-class"></i> 24</span>
                    <span><i class="fal fa-chalkboard-teacher"></i> پویا آکلیون</span>
                    <a href="" class="btn btn-sm btn-blue"><i class="fal fa-cog mr-1 "></i>مدیریت دوره</a>
                </div>
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