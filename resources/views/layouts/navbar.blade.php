<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container px-4">
        <a class="navbar-brand" href="#page-top">Yakiniki</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('service') }}">Service</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/product') }}">Products</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>

                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="{{ url('/dashboard') }}"><i class="fa-solid fa-gauge-high"></i> My Dashboard</a></li>
                        </ul>
                    </li>
                @endauth

                @guest
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" role="button">
                            Login
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="{{ url('/login') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> Sign In </a></li>
                            <li><a class="dropdown-item" href="{{ url('/register') }}"><i class="fa-solid fa-user"></i> Sign Up</a></li>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
