@extends('layouts.app')

@section('title', '| Tiquetes')

@section('content')
@include('layouts.nav-app')
<div class="container">
	<div class="row">
		<div class="col-md-5">
			<h4 class="my-3 text-center">Registrar tiquet<span class="vim-caret">e</span></h4>
			@if(auth()->user()->rol === 'administrador')
			<form class="needs-validation border border-primary rounded p-2">
                @csrf
				<div class="form-group mb-3">
					<label for="text">Marca</label>
					<input type="text" class="form-control" name="marca" required>
				</div>
				<div class="form-group mb-3">
					<label for="text">Ram</label>
					<input type="text" class="form-control" name="ram" required>
				</div>
				<div class="form-group mb-3">
					<label for="text">Disco duro</label>
					<input type="text" class="form-control" name="hhd" required>
				</div>
				<div class="form-group mb-3">
					<label for="text">Procesador</label>
					<input type="text" class="form-control" name="procesador" required>
				</div>
				<div class="form-group mb-3">
					<label for="text">Descripción</label>
					<textarea class="form-control" name="descripcion" cols="20" rows="4" required></textarea>
				</div>
				<div class="form-group mb-3">
					<label for="text">Tipo</label>
					<select class="custom-select d-block w-100" name="tipo" required>
						<option>Revision</option>
						<option>Mantenimiento</option>
						<option>Reparacion</option>
						<option>Reemplazo</option>
					</select>
				</div>
				<div class="form-group mb-3">
					<label for="text">Cliente</label>
					<select class="custom-select d-block w-100" name="cliente_id" required>
						@foreach($clientes as $cliente)
						<option value="{{$cliente->id}}">{{$cliente->nombre}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group mb-3">
					<label for="text">Usuario</label>
					<select class="custom-select d-block w-100" name="usuario_id" required>
						@foreach($users as $user)
						<option value="{{$user->id}}">{{$user->name}}</option>
						@endforeach
					</select>
				</div>
					<input type="hidden" class="form-control" name="estado" value="Nuevo" required>
					<input type="hidden" class="form-control" value="1" name="taller_id" required>
				<hr class="mb-4">
				<button class="btn btn-primary btn-lg btn-block" type="submit">Registrar</button>
			</form>
			@endif
		</div>
		<div class="col-md-7 p-2">
			<h1 class="text-center">Lista de tiquetes</h1>
			<div class="card">
				<div class="card-body">
					<table class="table table-bordered table-responsive">
						<thead class="thead-dark">
							<tr>
								<th scope="col">#</th>
								<th scope="col">Nombre</th>
								<th scope="col">Descripción</th>
								<th scope="col">Cantidad de tecnicos</th>
							</tr>
						</thead>
						<tbody class="font-weight-bold bg-light text-dark">
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
