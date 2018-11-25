<nav id="adminNavbar" class="navbar navbar-expand-md navbar-dark navbar-custom">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#adminNavbarContent"
                aria-controls="adminNavbarContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
            <i class="far  fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="adminNavbarContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav nav-item nav-mega ">
                <li class="dropdown mx-2">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarSite" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fal fa-globe mt-1"></i>
                         مدیریت سایت
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarSite">
                        <a class="dropdown-item" href="{{route('admin-posts')}}">اخبار</a>
                        <a class="dropdown-item" href="{{route('admin-courses')}}">دوره ها</a>
                        <a class="dropdown-item" href="{{route('admin-slider')}}">اسلایدر سایت</a>

                        <a class="dropdown-item" href="{{route('admin-contact-us')}}">ارتباط با ما</a>
                    </div>
                </li>
                <li class="dropdown mx-2">
                    <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fal fa-chalkboard-teacher mt-1"></i>
                        مدیریت اساتید
                    </a>
                </li>
                <li class="dropdown mx-2">
                    <a class="nav-link" href="{{route('admin-users')}}" role="button" >
                        <i class="fal fa-users-class mt-1"></i>
                        مدیریت دانشجویان
                    </a>
                </li>
                <li class="dropdown mx-2">
                    <a class="nav-link" href="#" id="navbarTicket" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fal fa-ticket mt-1"></i>
                        مدیریت پیام ها
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
            </ul>
        </div>
    </div>
</nav>