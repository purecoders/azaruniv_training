@extends('professor.dashboard')
@section('professor_content')
    <h6>پروفایل</h6>
    <div class="container">
        <div class=" p-3">
            <div class="row">
                <div class="col-sm-4 col-md-3 col-xl-2">
                    <form action="" method="">
                        <div class="user-img-container d-flex justify-content-center align-items-center">
                            <img id="profileImage" src="{{asset('img/master.jpg')}}" alt="">


                        </div>
                        <div id="imgUploadBtnContainer" class="img-upload-btn-wrapper">
                            <button class="btn btn-block mt-1 btn-outline-secondary"
                                    onclick="performClick('inputProfileImg')">انتخاب تصویر
                            </button>
                            {{--<div id="imgTitle">تصویر پروفایل</div>--}}
                            {{--<button class="btn  btn-block mt-1 btn-outline-secondary" onclick="performClick('inputProfileImg')">انتخاب تصویر</button>--}}
                            <input id="inputProfileImg" type="file" name="" accept="image/jpeg"/>
                        </div>

                        <button type="submit" class="btn btn-block mt-1 btn-outline-secondary">ثبت تصویر</button>
                    </form>
                </div>
                <div class="col-sm-6 col-md-9 col-xl-10">
                    <div class="d-flex flex-column h-100 justify-content-around">
                        <div class="row">
                            <div class="col-md-6">
                                <spna><i class="fal fa-user"></i></spna>
                                <span>نام و نام خانوادگی:</span>
                                <span class="mx-2">پویا آکلیون</span>
                            </div>
                            <div class="col-md-6">
                                <spna><i class="fal fa-birthday-cake"></i></spna>
                                <span>سن:</span>
                                <span class="mx-2">23</span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <spna><i class="fal fa-mobile"></i></spna>
                                <span>شماره تلفن:</span>
                                <span class="mx-2">09388584677</span>
                            </div>
                            <div class="col-md-6">
                                <spna><i class="fal fa-graduation-cap"></i></spna>
                                <span>شماره دانشجویی:</span>
                                <span class="mx-2">931831208</span>
                            </div>
                        </div>

                        <div class="d-flex flex-wr  ap">
                            <div>
                                <span><i class="fal fa-id-card"></i></span>
                                <span>شماره ملی:</span>
                                <span class="mx-2">2820188796</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="mt-3 red-divider"></div>
    <div class="row mt-3">
        <div class="col-12">
            <h6>ارسال رزومه</h6>
            <form class="col-8 m-auto" action="postt" method="post"   onsubmit="return checkForm()">
                <div class="form-group">
                    <label for="professorMassage">ارسال رزومه</label>
                    <textarea  name="inputfield" class="form-control" id="professorMassage" rows="3" placeholder="رزومه خود را وارد کنید..."></textarea>
                </div>
                {{csrf_field()}}
                <button type="submit" class="btn btn-blue"><i class="fal fa-paper-plane mr-2"></i>ارسال</button>
            </form>
        </div>
    </div>
    </div>
@endsection