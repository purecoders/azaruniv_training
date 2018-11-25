@extends('admin.dashboard')
@section('admin_content')
    <div class="container-fluid pb-5">
        <h6>اسلایدر سایت</h6>
        <p class="m-2 mb-4">اسلایدر های صفحه اصلی را از این قسمت تنظیم کنید</p>
        <div class="row">


            @foreach($sliders as $slider)
                <div class="col-md-3">
                    <form action="" method="">
                        <div class="user-img-container d-flex justify-content-center align-items-center">
                            <img id="slideImg1" src="{{asset($slider->photo->path)}}" alt="">
                        </div>
                        <div  class="img-upload-btn-wrappers">
                            <div class="d-flex">
                                <div>
                                    <input class="mt-1" id="inputSlideImg1" type="file" name="" accept="image/jpeg"/>
                                </div>
                            </div>
                        </div>
                        <a href="#"><button class="btn mt-1 btn-outline-secondary ">حذف</button></a>
                        <button type="submit" class="btn mt-1 btn-outline-secondary">ثبت تصویر</button>
                    </form>
                </div>
            @endforeach



        </div>
    </div>
@endsection
