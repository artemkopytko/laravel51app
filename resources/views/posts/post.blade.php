<div class="blog-post">
    <a href="{{ $post->id }}">
    <p class="blog-post-title">{{ $post->title }}</p>
    </a>
    <hr>
    <p class="blog-post-body">{{ $post->body }}</p>
    <hr>
    <small class="blog-post-date">{{ $post->created_at->toFormattedDateString() }}</small>
</div>