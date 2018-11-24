@extends('admin.dashboard')
@section('admin_content')
    <div class="container-fluid">
        <h6>ثبت مشخصات ارتباط ما سایت</h6>
        <div class="m-4">
            <form action="">
                <div class="form-group row">
                    <label for="postTitle" class="col-sm-2 col-form-label">آدرس</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="postTitle"
                               placeholder="آدرس مرکز را وارد کنید">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="postTitle" class="col-sm-2 col-form-label">تلفن</label>
                    <div class="col-sm-5">
                        <input type="number" class="form-control" id="postTitle"
                               placeholder="شماره تلفن مرکز را وارد کنید">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="postTitle" class="col-sm-2 col-form-label">ایمیل</label>
                    <div class="col-sm-5">
                        <input type="email" class="form-control" id="postTitle"
                               placeholder="ایمیل ارتباطی مرکز ">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="postTitle" class="col-sm-2 col-form-label">کد پستی</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="postTitle"
                               placeholder="کد پستی مرکز را وارد کنید">
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection