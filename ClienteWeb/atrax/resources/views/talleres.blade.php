@extends('layouts.app')

@section('title', '| Talleres')

@section('content')
@include('layouts.nav-app')
<div class="container">
	<div class="row">
		<div class="col-md-5">
			<h4 class="my-3 text-center">Registrar talle<span class="vim-caret">r</span></h4>
			@if(auth()->user()->rol === 'administrador')
			<form class="needs-validation border border-primary rounded p-2" method="post" action="crear-taller">
                @csrf
				<div class="form-group mb-3">
					<label for="text">Nombre del taller</label>
					<input type="text" class="form-control" name="name" required>
				</div>
				<div class="form-group mb-3">
					<label for="text">Descripcion</label>
					<textarea class="form-control" name="description" cols="20" rows="4" required></textarea>
				</div>
				<hr class="mb-4">
				<button class="btn btn-primary btn-lg btn-block" type="submit">Registrar</button>
			</form>
			@endif
		</div>
		<div class="col-md-7 p-2">
			<h1 class="text-center">Lista de talleres</h1>
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
						@foreach($talleres as $taller)
							<tr>
								<th>{{$taller->id}}</th>
								<td>
									{{$taller->nombre}}
								</td>
								<td>
									{{$taller->descripcion}}
								</td>
								<td>
									{{$taller->users()->count()}}
								</td>
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
