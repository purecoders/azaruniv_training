@extends('admin.dashboard')
@section('admin_content')
    <div class="container-fluid">
        <h6>ثبت مشخصات ارتباط ما سایت</h6>
        <div class="m-4">

            <form action="{{route('admin-update-contact-us')}}" method="post">
                <div class="form-group row">
                    <label for="postTitle" class="col-sm-2 col-form-label">آدرس</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="postTitle"
                               placeholder="آدرس مرکز را وارد کنید"
                               name="address" value="{{$address}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="postTitle" class="col-sm-2 col-form-label">تلفن</label>
                    <div class="col-sm-5">
                        <input type="number" class="form-control" id="postTitle"
                               placeholder="شماره تلفن مرکز را وارد کنید"
                               name="phone_number" value="{{$phone_number}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="postTitle" class="col-sm-2 col-form-label">ایمیل</label>
                    <div class="col-sm-5">
                        <input type="email" class="form-control" id="postTitle"
                               placeholder="ایمیل ارتباطی مرکز "
                               name="email" value="{{$email}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="postTitle" class="col-sm-2 col-form-label">کد پستی</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="postTitle"
                               placeholder="کد پستی مرکز را وارد کنید"
                               name="postal_code" value="{{$postal_code}}">
                    </div>
                </div>

                @csrf
                <br>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-blue">ویرایش</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection