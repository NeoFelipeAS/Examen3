@extends('layouts.app')

@section('title', '| Inicio de sesion')

@section('content')
<div class="container py-5 mb5">
    <h1 class="mb-3 text-center">Logi<span class="vim-caret">n</span></h1>
    <div class="row py-4">
        <div class="col-md-7 offset-md-1 order-md-2 ">
            <div class="card">
                <div class="card-header">Inicio de sesión</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email">Correo</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Contraseña</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        </div>
                        <hr class="col-md-8 mb-3">
                        <button class="btn btn-primary " type="submit">Ingresar</button>
                        <a class="btn btn-link text-info" href="{{ route('password.request') }}">
                            Recuperar clave
                        </a>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3 order-md-1">
            <img src="/img/logo.png" alt="" class="img-fluid">
        </div>
    </div>
</div>
@endsection
