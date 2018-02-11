@extends ('layouts.master')

@section ('content')

    <div class="col-sm-12 blog-main">

        <h1>{{ $post->title }}</h1>
        <p> {{ $post->body }}</p>
        <hr>

        <small class="blog-post-date">{{ $post->created_at->toFormattedDateString() }}</small>

        <hr>

        <div class="comments">
            <ul class="list-group">

            @foreach($post->comments as $comment)
                <li class="list-group-item">
                    <strong>
                        {{ $comment->created_at->diffForHumans() }}: &nbsp;
                    </strong>
                    <p> {{ $comment->body }}</p>
                </li>
            @endforeach

            </ul>
        </div>
        <br>
        <div class="comment_add card">
            <div class="card-block">
                <form method="POST" action="/posts/{{ $post->id }}/comments">

                    {{ csrf_field() }}

                    <div class="form-group">
                        <textarea class="form-control" name="body" id="body" placeholder="Your comment here" required></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Add Comment</button>
                    </div>
                </form>
                @include('layouts.errors')
            </div>
        </div>
        <br><br>

        <a href="/posts">Go back to Posts.</a>

    </div>


@endsection