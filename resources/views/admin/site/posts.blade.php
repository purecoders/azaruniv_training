@extends('admin.dashboard')
@section('admin_content')
    <div class="container-fluid">
        <div class="row">
            <div class=" col-md-8">
                <h6 class="mb-3">افزودن خبر جدید</h6>
                <form method="post" action="{{route('post.store')}}" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label for="postTitle" class="col-sm-2 col-form-label">عنوان خبر</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="postTitle"
                                   placeholder="عنوان خبر را وارد کنید..." name="title">
                        </div>
                    </div>

                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">تصویر</legend>
                            <div class="col-sm-10">
                                <input type="file" name="image" accept="image/*"/>
                            </div>
                        </div>
                    </fieldset>
                    <div class="form-group row">
                        <div class="col-sm-2">محتوای خبر</div>
                        <div class="col-sm-10">
                            <textarea name="post_content" class="form-control rtl " placeholder="محتوای خبر را وارد کنید"
                                      rows="15"></textarea>
                        </div>
                    </div>

                    {{csrf_field()}}
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-blue">انتشار</button>
                        </div>
                    </div>
                </form>

            </div>
            <div class="col-md-4">
                <h6>لیست اخبار</h6>
                <div class="news-container p-4 admin-news-container">
                    <h6>آخرین خبر ها</h6>
                    <div class="red-divider"></div>
                    <ul class="nav-list d-flex flex-column p-0">

                        @foreach($posts as $post)
                            <li class="d-flex">
                                <a href="{{route('post.show', ['id'=>$post->id])}}">{{$post->title}}</a>
                                <form class="align-self-center ml-auto" action="{{route('post.destroy', $post->id)}}" method="post">

                                    {{csrf_field()}}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="submit" class="btn btn-delete" value="حذف">
                                </form>
                            </li>
                        @endforeach




                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script>
        CKEDITOR.replace('post_content');
    </script>
@endsection