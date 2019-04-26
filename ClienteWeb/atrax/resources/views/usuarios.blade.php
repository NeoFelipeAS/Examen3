@extends('layouts.app')

@section('title', '| Usuarios')

@section('content')
@include('layouts.nav-app')
<div class="container">
	<div class="row">
		<div class="col-md-5 p-2">
			<h4 class="my-3 text-center">Crear usuario</h4>
			<form class="needs-validation border border-primary rounded p-2" method="post" action="crear-usuario">
                @csrf
				<div class="form-group mb-3">
					<label for="text">Nombre</label>
					<input type="text" class="form-control" name="name" required>
				</div>
				<div class="form-group mb-3">
					<label for="text">Correo</label>
					<input type="text" class="form-control" name="email" required>
				</div>
				<hr class="mb-4">
				<button class="btn btn-primary btn-lg btn-block" type="submit">CREAR</button>
			</form>
		</div>
		<div class="col-md-7 p-2">
			<h4 class="my-3 text-center">Usuarios</h4>
			<ul>
			@foreach($users as $user)
				<li>{{ $user->name }}</li>
			@endforeach
			</ul>
		</div>
	</div>
</div>
@endsection
