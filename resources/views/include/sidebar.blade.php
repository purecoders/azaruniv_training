<div class="news-container p-4">
    <h6>آخرین خبر ها</h6>
    <div class="red-divider"></div>
    @php
        $posts = \App\Post::orderBy('id', 'desc')->take(6)->get();
    @endphp

    <ul class="nav-list d-flex flex-column p-0">
        @foreach($posts as $post)
        <li><a href="{{route('post.show', ['id' => $post->id])}}">{{$post->title}}</a></li>
        @endforeach
    </ul>
</div>