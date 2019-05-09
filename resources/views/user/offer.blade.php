@extends('user.dashboard')
@section('user_content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7">
                <h6>پیشنهاد دوره</h6>
                <p class="alert alert-info">اگر دوره ای مد نظر شما هست که مایلید آن را برگزار کنیم به ما اطلاع دهید</p></div>
            <div class="col-md-5 p-1">
                {{--<img src="{{asset('img/recommendation.png')}}" class="float-left" style="max-height: 128px" alt="">--}}
            </div>
        </div>
        <h6>پیشنهاد دوره جدید</h6>

        <form class="col-7" action="{{route('user-recommend-course')}}" method="post" onsubmit="return checkForm(this)">
            <div class="form-group row">
                <label for="newOffer" class="col-sm-5 col-form-label">اسم دوره</label>
                <div class="col-sm-7">
                    <input type="text" name="new_offer" class="form-control" id="newOffer" placeholder="حداکثر 50 کاراکتر">
                </div>
            </div>
            @csrf
            <button type="submit"  class="btn btn-blue"><i class="fal fa-share mr-1"></i>ارسال</button>
        </form>

    </div>
@endsection