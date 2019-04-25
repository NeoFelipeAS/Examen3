@extends('layouts.app')

@section('title', '| Mi perfil')

@section('content')
@include('layouts.nav-app')
<div class="jumbotron mb-0 radius-0">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="/img/beach-boy-daytime-1121796.jpg" alt="" class="img-fluid border">
            </div>
            <div class="col-md-4 offset-md-1">
                <hr class="bg-light">
                <h1>{{ Auth::user()->name }}</h1>
                <h3>Administrador</h3>
            </div>
            <div class="col-md-3">
                <h3>Logros</h3>
                <img src="/img/iconfinder_advantage_quality_1034364.png" height="40">
                <p>Mas tiquetes cerrados.</p>
                <img src="/img/iconfinder_watch_291047.png" height="40">
                <p>Siempre a tiempo.</p>
            </div>
        </div>
        <hr class="bg-light">
        <div class="row">
            <div class="col-md-4">
                <form action="" class="border-white border m-1 p-2">
                    <label for="photo">Cambiar foto</label>
                    <div class="form-group my-2">
                        <input type="file" class="form-control-file" name="photo">
                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-primary" type="submit">Confirmar cambio</button>
                </form>
            </div>
            <div class="col-md-5 offset-md-2">
                <h4 class="mb-3">Datos</h4>
                <p>Nombre de usuario: amenta</p>
                <p>Correo: amenta@atrax.com</p>
                <p>Rol: Administrador</p>
                <p>Taller: GAM Taller 1</p>
                <p class="text-muted">Este taller es la central de reparaciones.</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="card bg-warning">
                    <div class="card-body">
                        <i class="fas fa-plus-circle fa-2x"></i>
                        <h5>Tiquetes nuevos: 12</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-danger">
                    <div class="card-body">
                        <i class="fas fa-minus-circle fa-2x"></i>
                        <h5>Tiquetes en progreso: 4</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-success">
                    <div class="card-body">
                        <i class="fas fa-check-circle fa-2x"></i>
                        <h5>Tiquetes cerrados: 22</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
