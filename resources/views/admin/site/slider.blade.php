@extends('admin.dashboard')
@section('admin_content')
    <div class="container-fluid pb-5">
        <h6>اسلایدر سایت</h6>
        <p class="m-2 mb-4">اسلایدر های صفحه اصلی را از این قسمت تنظیم کنید</p>
        <div class="row">
            <div class="col-md-3">
                <form action="" method="">
                    <div class="user-img-container d-flex justify-content-center align-items-center">
                        <img id="slideImg1" src="{{asset('img/master.jpg')}}" alt="">
                    </div>
                    <div  class="img-upload-btn-wrappers">
                        <div class="d-flex">
                            <div>
                                <input class="mt-1" id="inputSlideImg1" type="file" name="" accept="image/jpeg"/>
                            </div>
                        </div>
                    </div>
                    <button class="btn mt-1 btn-outline-secondary ">حدف</button>
                    <button type="submit" class="btn mt-1 btn-outline-secondary">ثبت تصویر</button>
                </form>
            </div>
            <div class="col-md-3">
                <form action="" method="">
                    <div class="user-img-container d-flex justify-content-center align-items-center">
                        <img id="slideImg2" src="{{asset('img/master.jpg')}}" alt="">
                    </div>
                    <div  class="img-upload-btn-wrappers">
                        <div class="d-flex">
                            <div>
                                <input class="mt-1" id="inputSlideImg2" type="file" name="" accept="image/jpeg"/>
                            </div>
                        </div>
                    </div>
                    <button class="btn mt-1 btn-outline-secondary ">حدف</button>
                    <button type="submit" class="btn mt-1 btn-outline-secondary">ثبت تصویر</button>
                </form>
            </div>
            <div class="col-md-3">
                <form action="" method="">
                    <div class="user-img-container d-flex justify-content-center align-items-center">
                        <img id="slideImg3" src="{{asset('img/master.jpg')}}" alt="">
                    </div>
                    <div  class="img-upload-btn-wrappers">
                        <div class="d-flex">
                            <div>
                                <input class="mt-1" id="inputSlideImg3" type="file" name="" accept="image/jpeg"/>
                            </div>
                        </div>
                    </div>
                    <button class="btn mt-1 btn-outline-secondary ">حدف</button>
                    <button type="submit" class="btn mt-1 btn-outline-secondary">ثبت تصویر</button>
                </form>
            </div>
            <div class="col-md-3">
                <form action="" method="">
                    <div class="user-img-container d-flex justify-content-center align-items-center">
                        <img id="slideImg4" src="{{asset('img/master.jpg')}}" alt="">
                    </div>
                    <div  class="img-upload-btn-wrappers">
                        <div class="d-flex">
                            <div>
                                <input class="mt-1" id="inputSlideImg4" type="file" name="" accept="image/jpeg"/>
                            </div>
                        </div>
                    </div>
                    <button class="btn mt-1 btn-outline-secondary ">حدف</button>
                    <button type="submit" class="btn mt-1 btn-outline-secondary">ثبت تصویر</button>
                </form>
            </div>
        </div>
    </div>
@endsection
