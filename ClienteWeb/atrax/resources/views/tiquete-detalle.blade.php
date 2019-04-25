@extends('layouts.app')

@section('title', '| Tiquete detalle')

@section('content')
@include('layouts.nav-app')

<div class="jumbotron mb-0 radius-0">
		<div class="container">
				<h1 class="mb-3">Detalle del tiquete #82174912</h1>
			<div class="row">
				<div class="col-md-7 p-2 mx-auto">
					<div class="card">
						<div class="card-body bg-light text-dark">
								<h4 class="mb-3 text-center">Información general</h4>
								<h4>Marca:</h4>
								<p>Lenovo</p>
								<h4>Ram:</h4>
								<p>16 GB</p>
								<h4>HDD:</h4>
								<p>1024 GB</p>
								<h4>Descripcion:</h4>
								<p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, error quos! Quos ad minus amet eius accusamus quasi quibusdam, dolor asperiores voluptas adipisci fugit nihil est consectetur! Veritatis, dignissimos maiores.</p>
						</div>
					</div>
					<h4 class="my-3">Actualizar tiquete</h4>
					<form class="needs-validation border border-primary p-2" novalidate>
						<div class="mb-3">
							<label for="email">Email <span class="text-muted">(Optional)</span></label>
							<input type="email" class="form-control" id="email" placeholder="you@example.com">
							<div class="invalid-feedback">
								Please enter a valid email address for shipping updates.
							</div>
						</div>
						<div class="mb-3">
							<label for="email">Email <span class="text-muted">(Optional)</span></label>
							<input type="email" class="form-control" id="email" placeholder="you@example.com">
							<div class="invalid-feedback">
								Please enter a valid email address for shipping updates.
							</div>
						</div>
						<hr class="mb-4">
						<button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
					</form>
				</div>
				<div class="col-md-5">

						<h4 class="my-2">Historial</h4>
						<hr class="bg-primary">
						<div class="card my-1">
							<div class="card-header">
								Featured
							</div>
							<div class="card-body">
								<h4 class="card-title">Special title treatment</h4>
								<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
							</div>
						</div>
						<div class="card my-1">
							<div class="card-header">
								Featured
							</div>
							<div class="card-body">
								<h4 class="card-title">Special title treatment</h4>
								<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
							</div>
						</div>
						<div class="card my-1">
							<div class="card-header">
								Featured
							</div>
							<div class="card-body">
								<h4 class="card-title">Special title treatment</h4>
								<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
							</div>
						</div>
						<div class="card my-1">
							<div class="card-header">
								Featured
							</div>
							<div class="card-body">
								<h4 class="card-title">Special title treatment</h4>
								<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
							</div>
						</div>
						<div class="card my-1">
							<div class="card-header">
								Featured
							</div>
							<div class="card-body">
								<h4 class="card-title">Special title treatment</h4>
								<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
							</div>
						</div>
				</div>
			</div>
		</div>
    </div>
</div>
@endsection
