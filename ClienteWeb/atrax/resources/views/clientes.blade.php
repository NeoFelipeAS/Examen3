@extends('layouts.app')

@section('title', '| Clientes')

@section('content')
@include('layouts.nav-app')

<div class="container py-5 mb5">

  <h1 class="mb-5">Registrar cliente</h1>

<div class="row">
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Ingrese los siguientes datos:</h4>

	     <br>
		 </br>
      <form class="needs-validation" novalidate>

            <label for="firstName">Nombre Completo</label>
            <input type="text" class="form-control" id="Nombre" placeholder="Nombre Completo" value="" required>

            <div class="invalid-feedback">
              Es requerido poner el nombre.
            </div>
		   <br>
		 </br>
          <label for="address2">Telefono</label>
          <input type="number" class="form-control" id="Telefono" placeholder="88888888" required>
          <div class="invalid-feedback">
             Es requerido poner el telefono.
          </div>
			 <br>
		 </br>
          <label for="username">Correo Electronico</label>

            <input type="email" class="form-control" id="Correo"  placeholder="you@example.com" required>
            <div class= "invalid-feedback">
              Es requerido poner el correo electronico.
            </div>
		<br>
		 </br>
          <label for="address">Direccion</label>
          <input type="text" class="form-control" id="Direccion" placeholder="San Jose" required>
          <div class="invalid-feedback">
            Es requerido poner el direccion.
          </div>


        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
      </form>
    </div>
  </div>
</div>
<div class="row">
    <div class="col">

  <h1 class="mb-5">Ver Clientes</h1>

<table class="table">
<thead class="thead-light">
<tr>
<th scope="col">Id</th>
<th scope="col">Nombre</th>
<th scope="col">Telefono</th>
<th scope="col">Correo</th>
<th scope="col">Direccion</th>
</tr>
</thead>
<tbody>

<tr>
<th scope="row">1</th>
<td>
  <a href="#">
  Cliente1
  </a>
</td>
<td>
  <a href="#" class="btn btn-sm btn-primary my-1 my-sm-0">
    <span class="fas fa-edit mr-1"></span>
    Editar</a>
  <a href="#" class="btn btn-sm btn-danger my-1 my-sm-0">
    <span class="fas fa-trash mr-1"></span>
    Eliminar</a>
</td>
</tr>

<tr>
<th scope="row">2</th>
<td>
  <a href="#">
  Cliente 2
  </a>
</td>
<td>
  <a href="#" class="btn btn-sm btn-primary my-1 my-sm-0">
    <span class="fas fa-edit mr-1"></span>
    Editar</a>
  <a href="#" class="btn btn-sm btn-danger my-1 my-sm-0">
    <span class="fas fa-trash mr-1"></span>
    Eliminar</a>
</td>
</tr>

<tr>
<th scope="row">3</th>
<td>
  <a href="#">
  Cliente 3
  </a>
</td>
<td>
  <a href="#" class="btn btn-sm btn-primary my-1 my-sm-0">
    <span class="fas fa-edit mr-1"></span>
    Editar</a>
  <a href="#" class="btn btn-sm btn-danger my-1 my-sm-0">
    <span class="fas fa-trash mr-1"></span>
    Eliminar</a>
</td>
</tr>

<tr>
<th scope="row">4</th>
<td>
  <a href="#">
  Cliente 4
  </a>
</td>
<td>
  <a href="#" class="btn btn-sm btn-primary my-1 my-sm-0">
    <span class="fas fa-edit mr-1"></span>
    Editar</a>
  <a href="#" class="btn btn-sm btn-danger my-1 my-sm-0">
    <span class="fas fa-trash mr-1"></span>
    Eliminar</a>
</td>
</tr>

<tr>
<th scope="row">5</th>
<td>
  <a href="#">
  Cliente 5
  </a>
</td>
<td>
  <a href="#" class="btn btn-sm btn-primary my-1 my-sm-0">
    <span class="fas fa-edit mr-1"></span>
    Editar</a>
  <a href="#" class="btn btn-sm btn-danger my-1 my-sm-0">
    <span class="fas fa-trash mr-1"></span>
    Eliminar</a>
</td>
</tr>


</tbody>
</table>

    </div>
</div>
</div>
@endsection
