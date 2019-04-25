
<div class="navbar-dark text-white">
    <div class="container">
        <nav class="navbar px-0 navbar-expand-lg navbar-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav">
                    <li class="nav-item">
                        <a href="/" class="nav-link pl-md-0 p-3 text-light title">ATRAX</a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link p-3 text-decoration-none text-light">Quienes somos</a>
                    </li>
                    <li class="nav-item">
                        <a href="/servicios" class="nav-link p-3 text-decoration-none text-light">Servicios y app</a>
                    </li>
                </div>
                <div class="navbar-nav ml-auto">
                    @guest
                        <li class="nav-item bg-primary rounded">
                            <a class="nav-link p-3 text-decoration-none text-light" href="{{ route('login') }}">{{ __('Login') }} <i class="far fa-user-circle"></i></a>
                        </li>
                    @else
                        <li class="nav-item bg-primary rounded">
                            <a class="nav-link p-3 text-decoration-none text-light" href="/home">Sistema <i class="fas fa-hands-helping"></i></a>
                        </li>
                    @endguest
                </div>
            </div>
        </nav>
    </div>
</div>