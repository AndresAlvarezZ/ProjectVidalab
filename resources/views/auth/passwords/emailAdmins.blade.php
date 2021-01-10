<?php
    $link = 1;
?>
@extends('layouts.appPublicaEspecial')

<head>
    <link href="{{ asset('css/estiloDeSesion.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
</head>

@section('content')
    <body background={{asset('wallpapers/Globos.jpg')}}>
        <div class="container-fluid auth">

            <div class="row">
                <div class="col-sm">
                    <center>
                        <br></br><br></br>
                        <div class="card border-dark mb-3" style="width: 35rem;">
                            <div class="card-header text-white bg-dark mb-3"><h4><b><center><i>Administrador</i><br>Restablecer mi contraseña</center></b></h4></div>
                            
                                <div class="card-body">
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif

                                    <form method="POST" action="{{ route('password.emailAdmins') }}">
                                        @csrf

                                        <div class="alert alert-info" role="alert">
                                            <center><b>¡Para recuperar su contraseña deberá ingresar su correo electrónico y le enviaremos un correo de recuperación!</b></center>
                                        </div>


                                        <div class="form-group col-md-12">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo electrónico') }}</label>
                                            <input id="email" type="email" placeholder="Ingrese su correo electrónico" onkeyup="this.value = this.value.toLowerCase();" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group col-md-12">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Solicitar ') }}
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
