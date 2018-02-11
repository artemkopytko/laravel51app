@extends ('layouts.master')

@section ('content')

    <div class="col-sm-8">

        <h1>Register</h1>
        <div class="card">
            <div class="card-block">
                <form method="post" action="/register">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input id="name" name="name" class="form-control" type="text"  required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" name="password" id="password" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Password Confirmation:</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" required class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Sign Up</button>
                    </div>
                </form>
                @include('layouts.errors')
            </div>
        </div>
    </div>

@endsection