@extends('layouts.app')

@section('title', '| Clientes')

@section('content')
@include('layouts.nav-app')
<div class="container">
	<div class="row">
		<div class="col-md-5">
			<h4 class="my-3 text-center">Registrar client<span class="vim-caret">e</span></h4>
			@if(auth()->user()->rol === 'administrador')
			<form class="needs-validation border border-primary rounded p-2" method="post" action="crear-cliente">
                @csrf
				<div class="form-group mb-3">
					<label for="text">Nombre</label>
					<input type="text" class="form-control" name="nombre" required>
				</div>
				<div class="form-group mb-3">
					<label for="text">Correo</label>
					<input type="email" class="form-control" name="correo" required>
				</div>
				<div class="form-group mb-3">
					<label for="text">Teléfono</label>
					<input type="number" class="form-control" name="telefono" required>
				</div>
				<div class="form-group mb-3">
					<label for="text">Dirección</label>
					<textarea class="form-control" name="direccion" cols="20" rows="4" required></textarea>
				</div>
				<hr class="mb-4">
				<button class="btn btn-primary btn-lg btn-block" type="submit">Registrar</button>
			</form>
			@endif
		</div>
		<div class="col-md-7 p-2">
			<h1 class="text-center">Lista de clientes {{$clientes->count()}}</h1>
			<div class="card">
				<div class="card-body">
					<table class="table table-bordered table-responsive">
						<thead class="thead-dark">
							<tr>
								<th scope="col">#</th>
								<th scope="col">Nombre</th>
								<th scope="col">Correo</th>
								<th scope="col">Teléfono</th>
								<th scope="col">Dirección</th>
							</tr>
						</thead>
						<tbody class="font-weight-bold bg-light text-dark">
							@foreach($clientes as $cliente)
							<tr>
								<th>{{$cliente->id}}</th>
								<th>{{$cliente->nombre}}</th>
								<th>{{$cliente->correo}}</th>
								<th>{{$cliente->telefono}}</th>
								<th>{{$cliente->direccion}}</th>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
