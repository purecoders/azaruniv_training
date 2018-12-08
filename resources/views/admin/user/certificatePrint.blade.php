<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('include.head')
    <style>
        @page{
            size: auto;   /* auto is the initial value */
            margin: 0;  /* this affects the margin in the printer settings */

        }
        .content{

            margin:40mm 40mm 30mm 40mm;
            line-height: 50pt;
            font-size: 20pt;
            position: running(content);
            font-family: IranNastaliq;
        }
        .center-content{
            margin:30mm 30mm 0mm 30mm;
            line-height: 50pt;
            font-size: 20pt;
            position: running(content);
            font-family: IranNastaliq;
        }
        .footer-content{
            margin:0mm 15mm 30mm 30mm;
            line-height: 50pt;
            font-size: 20pt;
            position: running(content);
            font-family: IranNastaliq;
        }
        .title-one{
            margin:0mm 0mm 0mm 0mm;
        }
        body{

            direction: rtl;
            margin: 0;
        }
    </style>
</head>
<div class=" mt-5 rtl">
    <p class="content">
        احتراماً  گواهی می شود
            <span>پویا آکلیون</span>
        دوره مهارتی
            <span>زبان انگلیسی</span>
            را به مدت
            <span>۱۵</span>
            ساعت   د ر نیم سال
            <span>اول</span>
           سال تحصیلی
            <span>۹۶-۹۷</span>
        در دانشگاه شهید مدنی آذربایجان با موفقیت به پایان رسانده اند.
    </p>
    <p class="center-content d-flex justify-content-around">
        <span>دکتر علی عجمی</span>
        <span>دکتر بهزاد سلطانی</span>
    </p>
    <p class="footer-content d-flex justify-content-around">
        <span class="title-one">معاون پژوهش و فناوری</span>
        <span>مدیر امور فناوری</span>
    </p>
</div>
<body style="background-color: #ffffff">
<div class="rtl container mt-3">
    <div class="d-flex justify-content-around align-items-center no-print">
        <a href="{{route('admin-user-detail')}}" class="btn btn-sm btn-blue"><i class="fal fa-arrow-alt-right mr-1"></i>بازگشت</a>
        <button class="btn btn-sm btn-blue" onclick="window.print()"><i class="fal fa-print"></i> پرینت</button>
    </div>

</div>
</body>
</html>