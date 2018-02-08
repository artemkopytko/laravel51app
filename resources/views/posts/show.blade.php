@extends ('layouts.master')

@section ('content')

    <div class="col-sm-12 blog-main">
        <h1>{{ $post->title }}</h1>
        <p> {{ $post->body }}</p>
        <hr>
        <small class="blog-post-date">{{ $post->created_at->toFormattedDateString() }}</small>
        <br><br>
        <a href="/posts">Go back to Posts.</a>
    </div>


@endsection