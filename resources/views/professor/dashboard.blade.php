@extends('layouts.masterLayout')
@section('content')

    <div class="container py-4 my-2">
        @include('include.route', ['site_route' => 'داشبورد'])
        <div class="card">
            <div class="card-header bg-blue pb-3  ">
                <ul class="nav nav-tabs card-header-tabs d-flex justify-content-between">
                    <li id="professorCardNavCourse" class="nav-item"><a  class="nav-link text-white " href="{{route('professor-courses')}}">
                            <i class="fal fa-users-class mr-1"></i>
                            کلاس های من
                        </a></li>

                    <li id="professorCardNavProfile" class="nav-item "><a  class="nav-link text-white" href="{{route('professor-profile')}}">
                            <i class="fal fa-file mr-1"></i>
                            پروفایل و رزومه
                        </a></li>

                    <li id="professorCardNavTickets" class="nav-item "><a  class="nav-link text-white"
                                                                           href="{{route('professor-tickets')}}">
                            <i class="fal fa-ticket mr-1"></i>

                            ارتباط با مدیریت
                            @php
                                use App\Ticket;
                                use Illuminate\Support\Facades\Auth;
                                $user = Auth::user();
                                $newTicketsCount = Ticket::where('user_id', '=', $user->id)->where('is_user_sent', '=', 0)->where('is_seen', '=', 0)->count();
                            @endphp
                            @if($newTicketsCount > 0)
                                <span class="new-ticket mr-1">{{$newTicketsCount}}</span>
                            @endif
                        </a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content bg-white">
                    <div id="info" class="tab-pane fade in active show">
                        @yield('professor_content')
                    </div>

                </div>
            </div>
            <div class="card-footer">

            </div>
        </div>
    </div>
@endsection