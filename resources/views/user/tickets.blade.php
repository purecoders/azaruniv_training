@extends('user.dashboard')
@section('user_content')
    <h6>ارتباط با مدیریت</h6>

    <div class="container mt-3 user-ticket-container p-3" id="chat">
        <div id="charViewContainer" class="chat-view-container">

            @foreach($tickets as $ticket)

               @if($ticket->is_user_sent == 1)
                    <div class="chat-view d-flex w-50 alert alert-info">
                        <div class="d-flex flex-column justify-content-start align-items-center">
                            <i class="fal fa-user img-chat-view"></i>
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
                    </div> <!-- user chat view card -->

                @else

                    <div class="chat-view d-flex w-50 ml-auto alert alert-success ">
                        <p class=" mr-auto">
                            {{$ticket->text}}
                        </p>
                        <div class="d-flex flex-column justify-content-start align-items-center">
                            <i class="fal fa-user img-chat-view "></i>
                            <b><span>مدیریت</span></b>
                            <span class="jDate mt-auto">{{$ticket->created_at}}</span>
                        </div>

                    </div> <!-- admin chat view card -->

                @endif

            @endforeach

            <div class="the-end"></div> <!-- do not clear this -->
        </div>

        <form class="mt-3" action="{{route('user-send-ticket')}}" method="post">
            <div class="d-flex">
            <textarea id="chat-text" type="text" name="text" class="form-control mr-5" rows="3"
                      placeholder="متن..."></textarea>
                {{csrf_field()}}
                <input class="btn btn-blue align-self-center" type="submit" value="ارسال" )/>
            </div>
        </form>

    </div>

@endsection
