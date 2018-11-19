@extends('layouts.app')
@section('content')
    <div >
        <h3 style="font-size: 1.5em">آشنایی با بازار بورس</h3>
        <p class="text" style="white-space: pre-wrap">
            به اطلاع آن دسته از دانشجویان متقاضی شرکت در دوره آمادگی آزمون زبان دانشگاه می رساند که ششمین دوره آمادگی آزمون زبان دانشگاه علامه طباطبائی در تاریخ ۱۳۹۷/۰۴/۱۴ روز های پنج شنبه و جمعه شروع می شود.

            طول دوره: ۸۰ ساعت

            روزهای برگزاری: پنج شنبه و جمعه

            ساعت برگزاری: ۹ الی ۱۳

            مکان برگزاری: توانیر، نظامی گنجوی، پردیس تحصیلات تکمیلی خودگردان، طبقه دوم، کلاس ۲۰۵

            هزینه: ۸۸۰ هزار تومان( %۲۰ تخفیف برای دانشجویان دانشگاه علامه طباطبائی)

            در پایان دوره به دانشجویانی که حد نصاب نمره قبولی را احراز نمایند مدرک زبان قابل قبول در دانشگاه علامه طباطبائی اعطا می شود.
        </p>
        <div class="content-img-container text-center mb-3">
            <img src="{{asset('img/1.jpg')}}" class="content-img" alt="">
        </div>
        <div class="master-container card mb-3">
            <div class="card-body row p-3 ">
                <div class="col-sm-3 col-md-3 col-xl-2 master-img-container ">
                <img class="master-img" src="{{asset('img/master.jpg')}}" alt="">
                </div>
                <div class="col-sm-8 col-md-8 col-xl-9 d-flex flex-column justify-content-around">
                    <span class=""><i class="fal fa-chalkboard-teacher"></i> استاد مدرس </span>
                    <h6 class="">پویا آکلیون</h6>
                </div>

            </div>
        </div>
        <div class="d-flex justify-content-between flex-wrap">
        <a href="#" class="btn btn-success "><i class="fal fa-plus"></i> ثبت نام در این دوره</a>
            <span href="#" class="course-price align-self-start mt-1">38000 تومان</span>
        </div>
    </div>
@endsection