
@extends('layouts.masterLayout')
@section('content')
<div class="container-fluid py-2 my-2 ">
    @include('include.route', ['site_route' => 'داشبورد مدیریت'])
    <h6 class="mb-2">بخش مدیریت </h6>
    @include('admin.navbar')
    <div class="content-container mt-3 p-sm-3 py-2">
       @yield('admin_content')
    </div>

</div>

@endsection