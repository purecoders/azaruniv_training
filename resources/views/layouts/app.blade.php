<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   @include('include.head')
</head>
<body>
    <div id="app" class="rtl">
        @include('include.navbar')

        <main class="row py-4">
            <!-- content -->
            <div id="content" class="col-md-8">
                @yield('content')
            </div>

            <!-- sidebar content -->
            <div id="sidebar" class="col-md-4">
                @include('include.sidebar')
            </div>


        </main>
        <footer class="row">
            @include('include.footer')
        </footer>
    </div>
</body>
</html>
