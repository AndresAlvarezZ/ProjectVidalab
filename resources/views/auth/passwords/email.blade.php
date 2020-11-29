@extends('layouts.app')

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
                        <div class="card border-primary mb-3" style="width: 35rem;">
                            <div class="card-header text-white bg-primary mb-3"><h4><b><center><i>Cliente</i><br>Restablecer mi contraseña</center></b></h4></div>

                                <div class="card-body">
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                        <?php $paseValido = 1; ?>
                                    @endif
                                    @if($paseValido!=1)
                                    <form method="POST" action="{{ route('password.email') }}">
                                        @csrf

                                        <div class="alert alert-info" role="alert">
                                            <center><b>¡Para recuperar su contraseña deberá ingresar su correo electrónico y le enviaremos un correo de recuperación!</b></center>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label for="email" class="col-md-4 col-form-label text-md-center">{{ __('Correo electrónico') }}</label>
                                            <input id="email" type="email" placeholder="Ingrese su correo electrónico" onkeyup="this.value = this.value.toLowerCase();" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="dniDelUsuario" class="col-md-4 col-form-label text-md-center">{{ __('Cédula') }}</label>
                                            <input id="dniDelUsuario" type="number" placeholder="Ingrese su número de cédula" onkeyup="this.value = this.value.toLowerCase();" class="form-control @error('dniDelUsuario') is-invalid @enderror" name="dniDelUsuario" value="{{ old('dniDelUsuario') }}" required autocomplete="dniDelUsuario" autofocus>
                                            @error('dniDelUsuario')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <br>

                                        <div class="form-group col-md-10">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Solicitar Contraseña') }}
                                            </button>
                                        </div>
                                    </form>
                                    @endif


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
