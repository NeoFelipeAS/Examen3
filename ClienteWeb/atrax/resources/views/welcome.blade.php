@extends('layouts.app')

@section('content')
<div class="container py-5 mb5">
    <h1 class="mb-3 text-center">Logi<span class="vim-caret">n</span></h1>
    <div class="row py-4">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-8 mb-3">

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
                </form>
            </div>
            <div class="col">
                <img src="/img/logo.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</div>
@endsection
