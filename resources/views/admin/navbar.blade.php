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
                    <a id="adminNavSite" class="nav-link dropdown-toggle " href="" id="navbarSite" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fal fa-globe mt-1"></i>
                         مدیریت سایت
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarSite">
                        <a class="dropdown-item" href="{{route('admin-posts')}}">اخبار</a>
                        <a class="dropdown-item" href="{{route('admin-courses')}}">دوره ها</a>
                        <a class="dropdown-item" href="{{route('admin-slider')}}">اسلایدر سایت</a>
                        <a class="dropdown-item" href="{{route('admin-rules')}}">قوانین سایت</a>
                        <a class="dropdown-item" href="{{route('admin-authorities')}}">مسئولین مرکز</a>
                        <a class="dropdown-item" href="{{route('admin-contact-us')}}">ارتباط با ما</a>
                        <a class="dropdown-item" href="{{route('admin-change-password-page')}}">تغییر رمز عبور</a>
                    </div>
                </li>
                <li class="dropdown mx-2">
                    <a id="adminNavProfessors" class="nav-link" href="{{route('admin-professors')}}" role="button"   aria-expanded="false">
                        <i class="fal fa-chalkboard-teacher mt-1"></i>
                        مدیریت اساتید
                    </a>
                </li>
                <li  class="dropdown mx-2">
                    <a id="adminNavUsers" class="nav-link" href="{{route('admin-users')}}" role="button" >
                        <i class="fal fa-users-class mt-1"></i>
                        مدیریت دانشجویان
                    </a>
                </li>
                <li class="navbar-ticket dropdown mx-2">
                    <a id="adminNavTickets" class="nav-link navbar-ticket-a" href="{{route('admin-tickets')}}" id="navbarTicket" role="button">
                        <i class="fal fa-ticket mt-1"></i>
                        مدیریت پیام ها
                        @php
                            $newTicketsCount = \App\Ticket::where('is_user_sent', '=', 1)->where('is_seen', '=', 0)->count();
                        @endphp
                        @if($newTicketsCount > 0)
                            <span class="new-ticket">{{$newTicketsCount}}</span>
                        @else
                            <span class="new-ticket d-hide">{{$newTicketsCount}}</span>
                        @endif
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
            </ul>
        </div>
    </div>
</nav>