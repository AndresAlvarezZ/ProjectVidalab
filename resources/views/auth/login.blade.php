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
                        <br></br><br></br>
                        <div class="card border-primary mb-3 cliente" style="width: 30rem;">
                            <div class="card-header text-white bg-primary mb-3 "><h4><b><center>Sesión de Clientes</center></b></h4></div>

                                <div class="card-body">
                                    @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                    @endif



                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="form-group col-md-10">
                                            <input id="email" placeholder="Mi correo electrónico para acceder al sistema" type="email" title="Correo" onkeyup="this.value = this.value.toLowerCase();" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <br>

                                        <div class="form-group col-md-10">
                                            <input id="password" placeholder="Mi contraseña para accedar al sistema" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" title="Contra">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group col-md-10">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Iniciar Sesión') }}
                                            </button>
                                            <br><br>

                                            <a href="{{ route('loginAdmins') }}"> Ingresar como <i>Administrador</i></a>
                                            <br>

                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('¡Olvidé mi contraseña!') }}
                                                </a>
                                            @endif
                                        </div>


                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>
                <center>

            </div>
        </div>
    </body>
@endsection
