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

    <ul class="list-group pt-3 col-sm-3">
        @foreach($archives as $archive)
            <li class="list-group-item">
                <a href="?month={{ $archive['month'] }}&year={{ $archive['year'] }}">
                    {{ $archive['year'] }}  {{ $archive['month'] }}
                </a>
            </li>
        @endforeach
    </ul>
</div>


@endsection
