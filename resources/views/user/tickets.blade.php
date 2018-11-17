@extends('user.dashboard')
@section('user_content')
    <h6>تیکت ها</h6>

    <div class="container mt-3 user-ticket-container p-3" id="chat">

        <div class="chat-view d-flex w-50 alert alert-info">

            <div class="d-flex flex-column  m-1">
                <i class="fal fa-user img-chat-view"></i>
                <b><span>پویا</span></b>
            </div>
            <p class="ml-1">
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
            </p>
        </div>

        <div class="chat-view d-flex w-50 ml-auto alert alert-success ">

            <p class=" mr-auto">
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
            </p>
            <div class="d-flex flex-column">
                <i class="fal fa-user img-chat-view m-1"></i>
                <b><span>ادمین</span></b>
            </div>
        </div>
        <form action="" method="post">
            <div class="d-flex">
            <textarea id="chat-text" type="text" name="text" class="form-control mr-5" rows="3"
                      placeholder="متن..."></textarea>
                {{csrf_field()}}
                <input class="btn btn-primary align-self-center " type="submit" value="ارسال" )/>
                {{--<button class="btn btn-primary align-self-center " type="submit"  )> ارسال</button>--}}
            </div>
        </form>
    </div>



@endsection