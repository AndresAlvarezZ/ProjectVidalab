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
                        <div class="card border-dark mb-3" style="width: 30rem;">
                            <div class="card-header text-white bg-dark mb-3"><h4><b><center>Sesión de Administradores</center></b></h4></div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('loginAdmins') }}">
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
                                        <input id="password" placeholder="Mi contraseña para acceder al sistema" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" title="Contra">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <br>

                                    <div class="form-group col-md-10">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Iniciar Sesión') }}
                                        </button>
                                        <br><br>

                                        <a href="{{route('login')}}"> Ingresar como <i>Cliente</i></a>
                                        <br>

                                        @if (Route::has('password.requestAdmins'))
                                            <a class="btn btn-link" href="{{ route('password.requestAdmins') }}">
                                                {{ __('¡Olvidé mi contraseña!') }}
                                            </a>
                                        @endif
                                    </div>
                                </form>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </body>
@endsection
