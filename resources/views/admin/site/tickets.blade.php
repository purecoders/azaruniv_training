@extends('admin.dashboard')
@section('admin_content')
    <div class="container rtl">
        <div class="user-ticket-container row p-1">
            <div class="col-sm-3 p-0">
                <div class="p-2">
                    <h6>کاربران</h6>
                </div>
                <div class="d-flex flex-column admin-chat-view-sidebar">


                    @if($users !== null)
                        @foreach($users as $user)
                            @if(\App\Http\Controllers\helper\UserHelper::isMaster($user))
                                @if($user->id == $user_id)
                                    <div class="admin-chat-user-item mt-1 active">
                                @else
                                    <div class="admin-chat-user-item mt-1 ">
                                @endif
                                    <div class="d-flex justify-content-between">
                                        @if($user->newSendedTickets()->count() > 0)
                                            <span class="new-ticket position-relative ml-1">{{$user->newSendedTickets()->count()}}</span>
                                        @else
                                            <span class="new-ticket position-relative ml-1 d-hide"></span>
                                        @endif
                                        <a href="{{route('admin-professor-detail', $user->id)}}" class="mr-2">پروفایل</a>
                                    </div>
                                    <a class="admin-chat-view-user  " href="{{route('admin-user-tickets', $user->id)}}">
                                        <div class="p-sm-2 text-center  border-bottom border-light">
                                            <div class="d-flex align-items-center">
                                                <i class="fal fa-chalkboard-teacher  admin-chat-view-user-img mr-2"></i>
                                                <span class="admin-chat-view-user-name mr-auto ">استاد {{$user->name}}</span>
                                                <div class="d-flex flex-column align-items-end justify-content-around">
                                                    @if($user->tickets()->orderBy('id', 'desc')->first() !== null)
                                                        <span class="text-muted mt-auto jDate">{{$user->tickets()->orderBy('id', 'desc')->first()->created_at}} </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @else
                              @if($user->id == $user_id)
                                 <div class="admin-chat-user-item mt-1 active">
                              @else
                                 <div class="admin-chat-user-item mt-1 ">
                               @endif
                                    <div class="d-flex justify-content-between ">
                                        @if($user->newSendedTickets()->count() > 0)
                                            <span class="new-ticket position-relative ml-1">{{$user->newSendedTickets()->count()}}</span>
                                        @else
                                            <span class="new-ticket position-relative ml-1 d-hide"></span>
                                        @endif
                                        <a href="{{route('admin-user-detail', $user->id)}}" class="mr-2">پروفایل</a>

                                    </div>
                                    <a class="admin-chat-view-user  " href="{{route('admin-user-tickets', $user->id)}}">
                                        <div class="p-sm-2 text-center  border-bottom border-light">
                                            <div class="d-flex align-items-center">
                                                <i class="fal fa-user-circle admin-chat-view-user-img mr-2"></i>
                                                <span class="admin-chat-view-user-name mr-auto ">{{$user->name}}</span>
                                                <div class="d-flex flex-column align-items-end justify-content-around">
                                                    @if($user->tickets()->orderBy('id', 'desc')->first() !== null)
                                                        <span class="text-muted mt-auto jDate">{{$user->tickets()->orderBy('id', 'desc')->first()->created_at}}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    @endif



                </div>
            </div>
            <div class=" col-sm-9 pl-1 ">
                <div class="p-2">
                    <h6>پیام ها</h6>
                </div>

                <div id="charViewContainer" class="chat-view-container">

                    @if($tickets !== null)
                        @foreach($tickets as $ticket)
                            @if($ticket->is_user_sent == 0)
                                <div class="chat-view d-flex w-50 alert alert-info">

                                    <div class="d-flex flex-column justify-content-start align-items-center">
                                        <i class="fal fa-chalkboard-teacher img-chat-view"></i>
                                        <b><span>شما</span></b>
                                    </div>
                                    <p class="ml-2">
                                        {{$ticket->text}}
                                    </p>
                                    <div class="ml-auto d-flex flex-column justify-content-end">
                                        <div class="d-flex flex-row-reverse align-items-center">
                                            <span class="jDate">{{$ticket->created_at}}</span>
                                            @if($ticket->is_seen == 1)
                                                <span><i class="fal fa-check-double mr-1"></i></span>
                                            @else
                                                <span><i class="fal fa-check mr-1"></i></span>
                                            @endif

                                        </div>

                                    </div>
                                </div> <!-- professor chat view card -->

                            @else
                                <div class="chat-view d-flex w-50 ml-auto alert alert-success ">


                                    <p class=" mr-auto">
                                        {{$ticket->text}}
                                    </p>
                                    <div class="d-flex flex-column justify-content-start align-items-center">
                                        <i class="fal fa-user img-chat-view "></i>
                                        <b><span>{{$ticket->user->name}}</span></b>
                                        <span class="jDate mt-auto">{{$ticket->created_at}}</span>
                                    </div>

                                </div> <!-- admin chat view card -->

                            @endif

                        @endforeach


                        <div class="the-end"></div> <!-- do not clear this -->
                </div>
                <form class="mt-3" action="{{route('admin-send-ticket')}}" method="post">
                    <div class="d-flex">
            <textarea id="chat-text" type="text" name="text" class="form-control mr-5" rows="3"
                      placeholder="متن..."></textarea>
                        {{csrf_field()}}
                        <input  type="hidden" name="user_id" value="{{$user_id}}" )/>
                        <input class="btn btn-blue align-self-center" type="submit" value="ارسال" )/>
                    </div>
                </form>

                @endif
            </div>
        </div>
    </div>
@endsection