<nav style="background-color: #fff; padding: 15px">
    <div class="container">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/posts">Posts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/tasks">Tasks</a>
            </li>

            @if(Auth::check())
                <li class="nav-item ml-auto">
                    <a class=" nav-link" href="/logout">Logout</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="/register">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                </li>
            @endif

            @if (Auth::check())
                <li class="nav-item fl-r">
                    <a class="nav-link" href="#">{{ Auth::user()->name }}</a>
                </li>
            @endif

        </ul>
    </div>
</nav>