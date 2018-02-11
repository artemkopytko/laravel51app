@extends ('layouts.master')

@section ('content')

    <div class="md-sm-8">
        <h1>Sign In</h1>

        <div class="card">
            <div class="card-block">
                <form method="post" action="/login">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" name="email" id="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Log In</button>
                    </div>
                </form>
                @include('layouts.errors')
            </div>
        </div>

    </div>

@endsection