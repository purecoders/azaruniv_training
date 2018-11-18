<div>
    <div class="container-fluid nav-top ">
        <div class="row h-100 align-items-center ">
            <div class="col-md-8 py-0">
                <div class="row">
                    <div class="col-md-4 py-0">
                        <span class=" nav-top-new-container "> آخرین اخبار و اطلاعیه های مرکز</span>
                        @php
                            use App\Post;
                            $posts = Post::orderBy('id', 'desc')->take(5)->get();
                        @endphp
                    </div>

                    <div class="col-md-8">
                        <div dir=ltr class="text-white single-item text-center ">
                           @foreach($posts as $post)
                            <div><a class="text-white" href="{{route('post.show', ['id'=>$post->id])}}">{{$post->title}}</a></div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-self-stretch">
                <span class="flex-grow-1"></span>
                {{--<span ><a class="link-wrapper" href="#">صفحه اصلی دانشگاه </a></span>--}}
                {{--<span class="link-wrapper"><a class="" href="#">ارتباط با دانشگاه</a></span>--}}
                <nav id="top-nav" class="navbar navbar-expand navbar-dark navbar-custom p-0">
                    <div class="collapse navbar-collapse h-100">
                        <ul class="navbar-nav h-100">

                            <li class="nav-item pt-1">
                                <a class="nav-link" href="http://www.azaruniv.ac.ir/">صفحه اصلی دانشگاه</a>
                            </li>
                            <li class="nav-item pt-1">
                                <a class="nav-link " href="http://www.azaruniv.ac.ir/?PageID=6">ارتباط با دانشگاه</a>
                            </li>
                        </ul>
                    </div>
                </nav>


            </div>
        </div>
    </div>
    <div class="logo-container d-flex align-content-center align-items-center flex-wrap">
        <a href="{{route('home')}}">
            <img src="{{asset('img/logo.png')}}" alt="logo" class="p-2 px-4" style="height: 100px">
        </a>
        <div class="flex-grow-1"></div>
        <div class="d-flex flex-column">
            <div class="d-flex p-1 p-xl-5 ">
                @php
                    date_default_timezone_set('Asia/Tehran');
                    $date = date('Y-m-d', time());
                @endphp
                <span id="todayDate" class="align-self-center mr-1">{{$date}}</span>
                <form id="headerSearch" novalidate="novalidate" action="" method="post">
                    <div class="input-group">
                        <input type="text" aria-required="true" class="form-control search" name="T1" id="q"
                               placeholder="جستجو" required="">
                        <span class="input-group-btn">
								<button class="btn btn-default" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
						</span>
                    </div>
                </form>
            </div>

            @auth
                <div class="text-white align-self-end mr-5 ">

                    <span class="mx-1">کاربر</span>
                    <span class="mx-1">{{ Auth::user()->name }}</span>
                    <span class="mx-1">خوش آمدید</span>
                </div>
            @endauth
        </div>
    </div>
    <nav id="mainNavbar" class="navbar navbar-expand-md navbar-dark navbar-custom">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <i class="far  fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto ">


                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('course-category',['id'=>1]) }}">دوره های حضوری</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('course-category',['id'=>2]) }}">زبان های خارجه</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('course-category',['id'=>3]) }}">دوره های مجازی</a>
                    </li>

                    <li class="nav-item">
                        <a id="contactUsBtn" class="nav-link" href="#contactUs">ارتباط با ما</a>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                                <a class="nav-link btn sign-btn " href="{{ route('user-courses') }}">
                            {{--<a class="nav-link btn sign-btn " href="{{ route('register') }}">--}}
                                <i class="fal fa-user mr-1"></i>
                                ورود | ثبت نام</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link btn sign-btn " href="{{ route('user-courses') }}">
                                <i class="fal fa-tachometer mr-1"></i>
                                پنل کاربری</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn sign-btn "onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="fal fa-sign-out-alt mr-1"></i>
                                خروج</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                @csrf
                            </form>
                        </li>
                    @endguest

                </ul>
            </div>
        </div>
    </nav>

</div>