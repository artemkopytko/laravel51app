@extends('layouts.master')

@section('content')

    <div class="col-sm-12">
        <div class="col-sm-6">
            <h1 class="h1">Edit Post</h1>
            <div class="card">
                <div class="card-block">
                    <form action="/posts/{{ $post->id }}" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="title">Title: </label>
                            <input type="text"
                                   name="title"
                                   id="title"
                                   class="form-control"
                                   required
                                   value="{{ $post->title }}"
                            >
                        </div>
                        <div class="form-group">
                            <label for="body">Body: </label>
                            <input type="text"
                                   name="body"
                                   id="body"
                                   class="form-control"
                                   required
                                   value="{{ $post->body }}"
                            >
                        </div>
                        <button class="btn btn-primary" type="submit">Edit</button>
                    </form>
                </div>
            </div>
            @include('layouts.errors')
        </div>
    </div>

@endsection