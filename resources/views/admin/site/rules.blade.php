@extends('admin.dashboard')
@section('admin_content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h6>قانون جدید</h6>
                <form action="">
                    <div class="form-group row">
                        <label for="ruleText" class="col-sm-2 col-form-label">متن قانون</label>
                        <div class="col-sm-10">
                            <textarea type="text" class="form-control" id="ruleText"
                                      placeholder="متن قانون را وارد کنید..." rows="5"></textarea>
                        </div>
                        <input type="submit" class="btn btn-sm btn-blue" value="ثبت قانون جدید">
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <h6>لیست همه قوانین</h6>
                {{-- For Show Server response when deleting is success if you want show this just remove d-none class --}}
                <div class="d-none alert alert-success alert-dismissible fade show" role="alert">
                    قانون با موفقیت حذف شد
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                {{-- For Show Server response when deleting is failed if you want show this just remove d-none class --}}
                <div class="d-none alert alert-danger alert-dismissible fade show" role="alert">
                    خطا! قانون حذف نشد
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <ul class="rules">
                    <li class="d-flex justify-content-between">
                        <span>
                            حضور غیاب در دوره طبق قوانین آموزشی خواهد بود.
                        </span>
                        <form class="d-inline" action="" onsubmit="return confirm('آیا از حذف قانون مطمئن هستید؟')">
                            <input type="submit" class="btn btn-sm btn-danger" value="حذف">
                        </form>
                    </li>
                    <li class="d-flex justify-content-between">
                        <span>
                             در صورت که در دوره های رایگان ثبت نام کنید و در کلاس شرکت نکنید یک امتیاز منفی می گیرید، در
                        صورت گرفتن داشتن دو امتیاز منفی از سیستم حذف می شوید و کد ملی شما مسدود می گردد.
                        </span>
                        <form class="d-inline" action="" onsubmit="return confirm('آیا از حذف قانون مطمئن هستید؟')">
                            <input type="submit" class="btn btn-sm btn-danger" value="حذف">
                        </form>
                    </li>
                    <li class="d-flex justify-content-between">
                        <span>
                             در صورتی که در دوره های رایگان ثبت نام کنید و حضور نداشته باشید هزینه دوره هنگام تسویه حساب اخذ خواهد شد.
                        </span>
                        <form class="d-inline" action="" onsubmit="return confirm('آیا از حذف قانون مطمئن هستید؟')">
                            <input type="submit" class="btn btn-sm btn-danger" value="حذف">
                        </form>
                    </li>



                </ul>

            </div>
        </div>
    </div>
@endsection