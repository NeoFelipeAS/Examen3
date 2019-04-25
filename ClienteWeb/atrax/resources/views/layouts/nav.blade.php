
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
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle p-3 text-decoration-none text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item bg-primary" href="/home">Mi perfil <i class="far fa-user-circle"></i></a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </div>
            </div>
        </nav>
    </div>
</div>