
@extends('layouts.masterLayout')
@section('content')
    <script src="{{asset('js/ckeditor/ckeditor.js')}}"></script>
<div class="container-fluid py-2 my-2 ">
    @include('include.route')
    <h6 class="mb-2">بخش مدیریت ادمین</h6>
    @include('admin.navbar')
    <div class="content-container mt-3 p-sm-3 py-2">
       @yield('admin_content')
    </div>

</div>
@endsection