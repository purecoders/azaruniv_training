@extends('admin.dashboard')
@section('admin_content')
    <div class="container-fluid pb-5">
        <h6>اسلاید جدید</h6>

        <div class="my-4">
            <form action="{{route('slider.store')}}" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="slideTitle" class="col-sm-2 col-form-label">عنوان اسلاید</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="postTitle"
                               placeholder="عنوان اسلاید را وارد کنید" name="title" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="slideLink" class="col-sm-2 col-form-label">لینک اسلاید</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="slideLink"
                               placeholder="لینک اسلاید را وارد کنید" name="on_click">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="slideImg" class="col-sm-2 col-form-label">تصویر</label>
                    <div class="col-sm-4">
                        <input name="image" type="file" accept="image/jpeg/png" id="slideImg" required>
                    </div>
                </div>

                {{csrf_field()}}
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-blue">ثبت</button>
                    </div>
                </div>

            </form>
            <br>
        </div>
        <h6>اسلاید های فعلی سایت</h6>
        <div class="row">

            @foreach($sliders as $slider)
            <div class="mt-2 col-md-3">
                <form action="{{route('slider.destroy', $slider->id)}}" method="post">
                    <div class="user-img-container d-flex justify-content-center align-items-center">
                        <img src="{{asset($slider->photo->path)}}" alt="">
                    </div>
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn mt-1 btn-outline-danger " type="submit">حذف</button>
                </form>
            </div>
            @endforeach




        </div>
    </div>
@endsection