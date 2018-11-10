<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('include.head')
</head>
<body>
<div id="app" class="rtl">
    @include('include.navbar')

    <main class="py-4">
        <!-- content -->
        @yield('content')
    </main>
    <footer class="row">
        @include('include.footer')
    </footer>
</div>
</body>
</html>
