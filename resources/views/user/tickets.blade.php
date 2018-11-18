@extends('user.dashboard')
@section('user_content')
    <h6>تیکت ها</h6>

    <div class="container mt-3 user-ticket-container p-3" id="chat">

        <div id="charViewContainer" class="chat-view-container">

            <div class="chat-view d-flex w-50 alert alert-info">

                <div class="d-flex flex-column justify-content-start align-items-center">
                    <i class="fal fa-user img-chat-view"></i>
                    <b><span>شما</span></b>
                </div>
                <p class="ml-2">
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت سبسیب س
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                </p>
                <div class="ml-auto d-flex flex-column justify-content-end">
                    <div class="d-flex flex-row-reverse align-items-center">
                    <span class="jDate">2018-10-16</span>
                        <span><i class="fal fa-check-double mr-1"></i></span>
                    </div>

                </div>
            </div> <!-- user chat view card -->
            <div class="chat-view d-flex w-50 ml-auto alert alert-success ">


                <p class=" mr-auto">
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                </p>
                <div class="d-flex flex-column justify-content-start align-items-center">
                    <i class="fal fa-user img-chat-view "></i>
                    <b><span>ادمین</span></b>
                    <span class="jDate mt-auto">2018-10-16</span>
                </div>

            </div> <!-- admin chat view card -->

            <div class="the-end"></div> <!-- do not clear this -->
        </div>
        <form class="mt-3" action="" method="post">
            <div class="d-flex">
            <textarea id="chat-text" type="text" name="text" class="form-control mr-5" rows="3"
                      placeholder="متن..."></textarea>
                {{csrf_field()}}
                <input class="btn btn-blue align-self-center" type="submit" value="ارسال" )/>
            </div>
        </form>
    </div>

@endsection