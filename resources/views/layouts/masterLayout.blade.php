<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('include.head')
</head>
<body>
<div id="app" class="rtl">
    <div class='thetop'></div>
    @include('include.header')

    <main class="">
        <!-- content -->
        @yield('content')
    </main>
    <footer>
        @include('include.footer')
    </footer>
    <div class='scrolltop'>
        <div class='scroll icon'><i class="fa fa-4x fa-angle-up"></i></div>
    </div>
</div>
</body>
</html>
