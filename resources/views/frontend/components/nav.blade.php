<nav class="navbar navbar-expand-md bg-dark navbar-dark">

    <a class="navbar-brand" href="{{ route('index') }}">Ecom Store</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">

            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                </li>
            @endguest

            @auth
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Welcome: {{ auth()->user()->name }}
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('userLogout') }}">Logout</a>
                </li>
            @endauth

            <li class="nav-item">
                <a class="nav-link" href="#">Cart</a>
            </li>

        </ul>
    </div>

</nav>
