@extends('admin.dashboard')
@section('admin_content')
    <div class="container-fluid pb-5">
        <h6>اسلاید جدید</h6>

        <div class="my-4">
            <form action="">
                <div class="form-group row">
                    <label for="slideTitle" class="col-sm-2 col-form-label">عنوان اسلاید</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="postTitle"
                               placeholder="عنوان اسلاید را وارد کنید">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="slideLink" class="col-sm-2 col-form-label">لینک اسلاید</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="slideLink"
                               placeholder="لینک اسلاید را وارد کنید">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="slideImg" class="col-sm-2 col-form-label">تصویر</label>
                    <div class="col-sm-4">
                        <input type="file" id="slideImg">
                    </div>
                </div>
            </form>
        </div>
        <h6>اسلاید های فعلی سایت</h6>
        <div class="row">
            <div class="mt-2 col-md-3">
                <form action="" method="">
                    <div class="user-img-container d-flex justify-content-center align-items-center">
                        <img src="{{asset('img/master.jpg')}}" alt="">
                    </div>
                    <button class="btn mt-1 btn-outline-danger ">حدف</button>
                </form>
            </div>
            <div class="mt-2 col-md-3">
                <form action="" method="">
                    <div class="user-img-container d-flex justify-content-center align-items-center">
                        <img src="{{asset('img/master.jpg')}}" alt="">
                    </div>
                    <button class="btn mt-1 btn-outline-danger ">حدف</button>
                </form>
            </div>
            <div class="mt-2 col-md-3">
                <form action="" method="">
                    <div class="user-img-container d-flex justify-content-center align-items-center">
                        <img src="{{asset('img/master.jpg')}}" alt="">
                    </div>
                    <button class="btn mt-1 btn-outline-danger ">حدف</button>
                </form>
            </div>
            <div class="mt-2 col-md-3">
                <form action="" method="">
                    <div class="user-img-container d-flex justify-content-center align-items-center">
                        <img src="{{asset('img/master.jpg')}}" alt="">
                    </div>
                    <button class="btn mt-1 btn-outline-danger ">حدف</button>
                </form>
            </div>
            <div class="mt-2 col-md-3">
                <form action="" method="">
                    <div class="user-img-container d-flex justify-content-center align-items-center">
                        <img src="{{asset('img/master.jpg')}}" alt="">
                    </div>
                    <button class="btn mt-1 btn-outline-danger ">حدف</button>
                </form>
            </div>


        </div>
    </div>
@endsection
