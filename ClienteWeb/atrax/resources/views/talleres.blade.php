@extends('layouts.app')

@section('title', '| Talleres')

@section('content')
@include('layouts.nav-app')

<div class="container py-5 mb5">

  <h1 class="mb-5">Talleres</h1>

  <div class="row py-4">
    <div class="col-md-4 order-md-2 mb-4">

      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Taller</span>

      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Id</h6>
            <small class="text-muted"></small>
          </div>
         <div>
            <h6 class="my-1">Nombre</h6>
            <small class="text-muted"></small>
          </div>
           <div>
            <h6 class="my-2">Descripción</h6>
            <small class="text-muted"></small>
          </div>


      </ul>


    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Registrar taller</h4>
      <form class="needs-validation" novalidate>
        <div class="row">
          <div class="col-md-8 mb-3">
            <label for="Nombre">Nombre</label>
            <input type="text" class="form-control" id="Nombre" placeholder="" value="" required>
            <div class="invalid-feedback">
              Es requerido el nombre del taller.
            </div>
          </div>

        <div class="col-md-8 mb-3">
          <label for="descripcion">Descripción</label>
            <input type="text" class="form-control" id="descripcion"placeholder="" value="" required>
            <div class="invalid-feedback" >
              Es requerido una descripción del taller.
            </div>
          </div>
        </div>
        <hr class="col-md-8 mb-3">
        <button class="btn btn-primary " type="submit">Registrar</button>
      </form>
    </div>
  </div>
</div>

@endsection
