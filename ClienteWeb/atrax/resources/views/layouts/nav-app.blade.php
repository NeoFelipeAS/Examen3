<hr class="bg-success">
<div class="navbar-dark">
	<div class="container">
		<nav class="navbar px-0 navbar-expand-lg">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav mx-auto">
					<a class="p-2 text-light" href="/tiquetes">Tiquetes <i class="fas fa-clipboard-list"></i></a>
					<a class="p-2 text-light" href="/talleres">Taller <i class="fas fa-tools"></i></a>
					<a class="p-2 text-light" href="/usuarios">Usuarios <i class="fas fa-users"></i></a>
					<a class="p-2 text-light" href="/clientes">Clientes <i class="far fa-user"></i></a>
					<a class="p-2 text-light" href="/facturas">Facturas <i class="fas fa-file-invoice"></i></a>
				</div>
				<div class="navbar-nav ml-auto">
					<a class="p-2 text-light" href="/reportes">Reportes <i class="fas fa-chart-line"></i></a>
					<a class="p-2 text-light bg-primary" href="/home">Perfil <i class="far fa-user-circle"></i></a>
					<a class="p-2 text-light bg-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar sesión <i class="fas fa-sign-out-alt"></i></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
				</div>
			</div>
		</nav>
	</div>
</div>
<hr class="bg-info">