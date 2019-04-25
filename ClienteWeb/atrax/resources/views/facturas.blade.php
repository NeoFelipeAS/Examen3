@extends('layouts.app')

@section('title', '| Facturas')

@section('content')
@include('layouts.nav-app')

<div class="jumbotron mb-0 radius-0">
		<div class="container">
			<div class="row">
				<div class="col-md-7 p-2 mx-auto">
					<h4 class="my-3 bg-success p-2">Número de la Factura #82174912</h4>
					<form class="needs-validation border border-primary p-2" novalidate>
						<div class="mb-3">
                            <label for="text">ID Cliente: </label>
							<input type="text" class="form-control" id="id_Cliente" placeholder="">
                        </div>
                        <div class="mb-3">
                                <label for="text">ID Tiquete </label>
                                <input type="text" class="form-control" id="id_tiquete" placeholder="">
                        </div>
						<div class="mb-3">
                                <label for="text">Fecha</label>
							<input type="text" class="form-control" id="fecha" placeholder="">
                        </div>
                        <div class="mb-3">
                                <label for="text">Total</label>
							<input type="text" class="form-control" id="total" placeholder="">
                        </div>
                        <div class="mb-3">
                                <label for="text">Pagado</label>
							<input type="text" class="form-control" id="pagado" placeholder="">
						</div>
						<hr class="mb-4">
						<button class="btn btn-warning btn-lg btn-block" type="submit">Marcar como cancelada</button>
						<button class="btn btn-primary btn-lg btn-block" type="submit">Enviar por correo</button>
					</form>
				</div>
			</div>
		</div>
    </div>
@endsection
