@extends('layouts.app')

@section('title', '| Recuperar contraseña')

@section('content')
<div class="container py-5 mb5">
    <h1 class="mb-3 text-center">Recuperar contraseñ<span class="vim-caret">a</span></h1>
    <div class="row py-4">
        <div class="col-md-7 offset-md-1 order-md-2 ">
            <div class="card">
                <div class="card-header">Recuperación</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Correo</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Enviar enlace de recuperación
                                </button>
                            </div>
                        </div>
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
