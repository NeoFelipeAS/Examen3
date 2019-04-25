@extends('layouts.app')

@section('title', '| Usuarios')

@section('content')
@include('layouts.nav-app')

            <div class="container">
              <div class="row">
                <div class="col-md-7 p-2 mx-auto">
                  <h4 class="my-3 text-center">Crear Usuario</h4>
                  <form class="needs-validation border border-primary rounded p-2" novalidate>
                    <div class="mb-3">
                      <label for="text">Nombre</label>

                        <input type="text" class="form-control" id="Nombre" placeholder="" value="" required>
                      <div class="invalid-feedback">

                      </div>
                    </div>
                    <div class="mb-3">
                        <label for="descripcion">Clave</label>
                        <input type="password" class="form-control" id="descripcion"placeholder="" value="" required>
                      <div class="invalid-feedback">

                      </div>
                    </div>
                    <a class="main_btn" href="login.html">Ya tienes cuenta?</a>
                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">CREAR</button>
                  </form>
                </div>
              </div>
            </div>
            </div>
@endsection
