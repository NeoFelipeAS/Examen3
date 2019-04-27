@extends('layouts.app')

@section('title', '| Usuarios')

@section('content')
@include('layouts.nav-app')
<div class="container">
	<div class="row">
		<div class="col-md-5 p-2">
			<h4 class="my-3 text-center">Crear usuari<span class="vim-caret">o</span></h4>
			<form class="needs-validation border border-primary rounded p-2" method="post" action="crear-usuario">
                @csrf
				<div class="form-group mb-3">
					<label for="text">Nombre</label>
					<input type="text" class="form-control" name="name" required>
				</div>
				<div class="form-group mb-3">
					<label for="text">Correo</label>
					<input type="email" class="form-control" name="email" required>
				</div>
				<div class="form-group mb-3">
					<label for="text">Taller</label>
					<select class="custom-select d-block w-100" name="taller" required>
						@foreach($talleres as $taller)
						<option value="{{$taller->id}}">{{$taller->nombre}}</option>
						@endforeach
					</select>
				</div>
				<hr class="mb-4">
				<button class="btn btn-primary btn-lg btn-block" type="submit">CREAR</button>
			</form>
		</div>
		<div class="col-md-7 p-2">
			<h4 class="my-3 text-center">Tecnicos por taller</h4>
			<ul>
			@foreach($talleres as $taller)
				<hr class="bg-warning">
				<li>{{ $taller->nombre }}</li>
				<ul>
				@foreach($taller->users as $user)
					<li>{{ $user->name }}</li>
				@endforeach
				</ul>
			@endforeach
			</ul>
		</div>
	</div>
</div>
@endsection
