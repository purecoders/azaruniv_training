<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   @include('include.head')
</head>
<body>
    <div id="app" class="rtl">
        <div class='thetop'></div>
        @include('include.header')

        <main class="container py-4">
            <!-- current route -->
            <div class="row">
            <div class="col-12">
                @include('include.route')
            </div>
            </div>
            <!-- content -->
            <div class="row">
            <div id="content" class="col-md-8">
                <div class="content-container p-4 mb-3 ">
                    @yield('content')
                </div>
            </div>

            <!-- sidebar content -->
            <div id="sidebar" class="col-md-4">
                @include('include.sidebar')
            </div>
            </div>


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
