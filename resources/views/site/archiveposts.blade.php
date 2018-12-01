@extends('layouts.app', ['site_route' => 'آرشیو اخبار'])
@section('content')
    <!-- post title -->
    <h4>آرشیو اخبار</h4>
    <!--post cards-->
    <div class="d-flex flex-column mb-3">
        @foreach($posts as $post)

        <div class="card border-0">
            <div class="card-body row">

                <div class="col-xl-4 tab-img-link">
                    <a class="" href="{{route('post.show', ['id'=>$post->id])}}">
                        <img class="tab-card-img " src="{{asset($post->photo->path)}}" alt="">
                    </a>
                </div>
                <div class="col-xl-8">
                    <div class="tab-card-title mx-2 d-flex flex-column justify-content-between">
                        <h5><a href="{{route('post.show', ['id'=>$post->id])}}" class="text-blue hover-link">{{$post->title}}</a></h5>
                        <p class="mt-3">
                            @php
                                echo $post->content;
                            @endphp

                        </p>


                    </div>
                </div>

            </div>
        </div>

        <div class="red-divider"></div>

        @endforeach

    </div>




    <nav aria-label="Page navigation text-center ">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">قبلی</a>
            </li>
            <li class="page-item"><a class="page-link hover-link nav-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link hover-link nav-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link hover-link nav-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">بعدی</a>
            </li>
        </ul>
    </nav>

@endsection