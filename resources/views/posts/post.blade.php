<link rel="stylesheet" href="/css/posts.css">
<div class="blog-post">
    <a href="/posts/{{ $post->id }}">

    <p class="blog-post-title">{{ $post->title }}</p>
    </a>
    <hr>
    <p class="blog-post-body">{{ $post->body }}</p>
    <hr>
    {{--@if(Auth::check())--}}

    <small>by {{ $post->user->name }} on </small>
    {{--@endif--}}
    <small class="blog-post-date">{{ $post->created_at->toFormattedDateString() }}</small>
</div>