<?php
    $link = 1;
?>

@extends('layouts.appPublicaEspecial')

<head>
    <link href="{{ asset('css/estiloDeSesion.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
</head>

@section('content')
    <body background={{asset('wallpapers/Globos.jpg')}}>
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm">
                    <center>
                        <br></br>
                        <div class="card border-primary mb-3" style="width: 35rem;">
                            <div class="card-header text-white bg-primary mb-3"><h4><b><center><i>Cliente</i><br>Nueva contraseña</center></b></h4></div>
                            
                                <div class="card-body">
                                    <form method="POST" action="{{ route('password.update') }}">
                                        @csrf

                                        <div class="alert alert-info" role="alert">
                                            <center><b>¡Genere una nueva contraseña y así poder acceder al sistema!</b></center>
                                        </div>

                                        <input type="hidden" name="token" value="{{ $token }}">

                                        <div class="form-group col-md-12">
                                            <label for="email" class="col-md-12 col-form-label text-md-center">{{ __('Correo electrónico') }}</label>
                                            <input id="email" placeholder="Ingrese su correo electrónico de acceso al sistema" type="email" onkeyup="this.value = this.value.toLowerCase();" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label for="password" class="col-md-12 col-form-label text-md-center">{{ __('Contraseña') }}</label>
                                            <input id="password" type="password" placeholder="Ingrese una nueva contraseña segura para acceder al sistema" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label for="password-confirm" class="col-md-12 col-form-label text-md-center">{{ __('Confirmar contraseña') }}</label>
                                            <input id="password-confirm" type="password" placeholder="Reingrese la nueva contraseña para confirmar" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>

                                        <div class="form-group col-md-12">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Restablecer') }}
                                            </button>
                                        </div>
                                    </form>
                                </div>
            
                            </div>
                        </div>
                    </center>
                </div>
            </div>   
        </div>
    </div>
</div>
@endsection
