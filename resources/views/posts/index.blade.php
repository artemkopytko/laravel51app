@extends ('layouts.master')

@section('content')
<div>

    <h1 class="blog-title">This is a posts page</h1>

    <div class="blog-posts">
        @foreach($posts as $post)
            @include('posts.post')
        @endforeach
    </div>

    <hr>

    <div>
        <a href="/posts/create" class="btn btn-primary">Add a new post</a>
    </div>
</div>


@endsection
