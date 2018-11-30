<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('include.head')

</head>
<div class="d-flex justify-content-around mt-5">
    <h6>آموزش های تخصصی دانشگاه شهید مدنی آذربایجان</h6>
    <h6>لیست کلاسی دوره زبان</h6>
</div>
<body style="background-color: #ffffff">
<div class="rtl container mt-3">
    <div class="d-flex justify-content-around align-items-center no-print">
        <a href="{{route('professor-course')}}" class="btn btn-sm btn-blue"><i class="fal fa-arrow-alt-right mr-1"></i>بازگشت</a>
        <button class="btn btn-sm btn-blue" onclick="window.print()"><i class="fal fa-print"></i> پرینت</button>
    </div>
    <div class="table-responsive mt-2">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">ردیف</th>
                <th scope="col">نام و نام خانوادگی</th>
                <th scope="col">شماره دانشجویی</th>
                <th scope="col">رشته تحصیلی</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>پویا آکلیون</td>
                <td>931831208</td>
                <td>فناوری اطلاعات</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>پویا آکلیون</td>
                <td>931831208</td>
                <td>فناوری اطلاعات</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>پویا آکلیون</td>
                <td>931831208</td>
                <td>فناوری اطلاعات</td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>پویا آکلیون</td>
                <td>931831208</td>
                <td>فناوری اطلاعات</td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td>پویا آکلیون</td>
                <td>931831208</td>
                <td>فناوری اطلاعات</td>
            </tr>

            </tbody>
        </table>
    </div>
</div>
</body>
</html>