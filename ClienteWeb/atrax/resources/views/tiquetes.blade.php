@extends('layouts.app')

@section('title', '| Tiquetes')

@section('content')
@include('layouts.nav-app')

		<div class="container-fluid">
			<h1 class="mb-3">Manejo de tiquetes</h1>
			<div class="row">
				<div class="col-md-8 mx-auto bg-light p-2 rounded">
					<h2 class="text-dark text-center">Tiquetes</h2>
					<button type="button" class="btn btn-primary my-4" data-toggle="modal" data-target="#exampleModal">
						Agregar tiquete
					</button>
					<table class="table table-responsive text-dark">
						<thead class="thead-dark">
								<tr>
								<th scope="col">#</th>
								<th scope="col">Item</th>
								<th scope="col">Item</th>
								<th scope="col">Item</th>
								<th scope="col">Actions</th>
								</tr>
						</thead>
						<tbody>
								<tr>
									<th scope="row">1</th>
									<td>
										<a href="#">
										Some item on your list
										</a>
									</td>
									<td>
										Text
									</td>
									<td>
										Text
									</td>
									<td>
										<a href="/tiquete-detalle" class="btn btn-sm btn-secondary my-1 my-sm-0">
										<span class="fas fa-edit mr-1"></span>
										Inspeccionar</a>
									</td>
								</tr>
								<tr>
									<th scope="row">1</th>
									<td>
										<a href="#">
										Some item on your list
										</a>
									</td>
									<td>
										Text
									</td>
									<td>
										Text
									</td>
									<td>
										<a href="#" class="btn btn-sm btn-secondary my-1 my-sm-0">
										<span class="fas fa-edit mr-1"></span>
										Inspeccionar</a>
									</td>
								</tr>
								<tr>
									<th scope="row">1</th>
									<td>
										<a href="#">
										Some item on your list
										</a>
									</td>
									<td>
										Text
									</td>
									<td>
										Text
									</td>
									<td>
										<a href="#" class="btn btn-sm btn-secondary my-1 my-sm-0">
										<span class="fas fa-edit mr-1"></span>
										Inspeccionar</a>
									</td>
								</tr>
								<tr>
									<th scope="row">1</th>
									<td>
										<a href="#">
										Some item on your list
										</a>
									</td>
									<td>
										Text
									</td>
									<td>
										Text
									</td>
									<td>
										<a href="#" class="btn btn-sm btn-secondary my-1 my-sm-0">
										<span class="fas fa-edit mr-1"></span>
										Inspeccionar</a>
									</td>
								</tr>
								<tr>
									<th scope="row">1</th>
									<td>
										<a href="#">
										Some item on your list
										</a>
									</td>
									<td>
										Text
									</td>
									<td>
										Text
									</td>
									<td>
										<a href="#" class="btn btn-sm btn-secondary my-1 my-sm-0">
										<span class="fas fa-edit mr-1"></span>
										Inspeccionar</a>
									</td>
								</tr>
								<tr>
									<th scope="row">1</th>
									<td>
										<a href="#">
										Some item on your list
										</a>
									</td>
									<td>
										Text
									</td>
									<td>
										Text
									</td>
									<td>
										<a href="#" class="btn btn-sm btn-secondary my-1 my-sm-0">
										<span class="fas fa-edit mr-1"></span>
										Inspeccionar</a>
									</td>
								</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
    </div>
</div>

<!-- Modal -->
<div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
		  <div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Crear tiquete</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
			<div class="modal-body">
<form class="needs-validation border border-primary p-2" novalidate>
	<div class="row">
		<div class="col-md-6 mb-3">
			<label for="firstName">First name</label>
			<input type="text" class="form-control" id="firstName" placeholder="" value="" required>
			<div class="invalid-feedback">
			Valid first name is required.
			</div>
		</div>
		<div class="col-md-6 mb-3">
			<label for="lastName">Last name</label>
			<input type="text" class="form-control" id="lastName" placeholder="" value="" required>
			<div class="invalid-feedback">
			Valid last name is required.
			</div>
		</div>
	</div>

	<div class="mb-3">
		<label for="username">Username</label>
		<div class="input-group">
			<div class="input-group-prepend">
			<span class="input-group-text">@</span>
			</div>
			<input type="text" class="form-control" id="username" placeholder="Username" required>
			<div class="invalid-feedback" style="width: 100%;">
			Your username is required.
			</div>
		</div>
	</div>

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
</div>
</div>
@endsection
