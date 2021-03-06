<?php
    $link = 1;
?>

@extends('layouts.appPublicaEspecial')

<head>
    <link href="{{ asset('css/estiloDeSesion.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
    <script src="{{ asset('js/cambiarNombre.js') }}?v=<?php echo(rand()); ?>"defer></script>
    <script src="{{ asset('js/validadoresDeTexto/caracteresPermitidos.js') }}?v=<?php echo(rand()); ?>"defer></script>

</head>

@section('content')
    <body background={{asset('wallpapers/Globos.jpg')}}>
        <div class="container-fluid auth">
          @if (session('duplicado'))
          <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
          <script src="{{ asset('js/duplicado.js') }}?v=<?php echo(rand()); ?>"defer></script>
          @endif
            <div class="row">
                <div class="col-sm">
                    <center>
                        <div class="card border-primary mb-3" style="width: 30rem;">
                            <div class="card-header text-white bg-primary mb-3"><h4><b><center>Registrarme como cliente de VIDAlab</center></b></h4></div>
                            <div class="card-body">
                                <form method="POST" action="register">
                                    @csrf
                                    <div class="alert alert-info" role="alert">
                                        <center><b>¡Este registro es totalmente gratuito!</b></center>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="dniDelUsuario" class="col-md-12 col-form-label text-md-center">{{ __('Tipo de identificación') }}</label>
                                        <select onchange="tipoIdentification()" id="tipoIdentificacion" class="form-control" name="">
                                          <option value="1">Persona física</option>
                                          <option value="2">Dimex (Residencia)</option>
                                          <option value="3">Nite</option>
                                        </select>
                                            @error('dniDelUsuario')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="dniDelUsuario" class="col-md-12 col-form-label text-md-center">{{ __('Cédula') }}</label>
                                        <input id="dniDelUsuario" min="100000000" message='minimo re' max="999999999" type="number" placeholder="Ingrese su número de identificación" class="form-control @error('dniDelUsuario') is-invalid @enderror" name="dniDelUsuario" onkeypress="return soloNumeros(event);" value="{{ old('dniDelUsuario') }}"   >
                                        @error('dniDelUsuario')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="email" class="col-md-12 col-form-label text-md-center">{{ __('Correo electrónico') }}</label>
                                        <input id="email" type="email" placeholder="Ingrese su correo electrónico de uso recurrente" onkeyup="this.value = this.value.toLowerCase();" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="password" class="col-md-4 col-form-label text-md-center">{{ __('Contraseña') }}</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Ingrese una contraseña segura para acceder al sistema" name="password" required autocomplete="new-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="password-confirm" class="col-md-8 col-form-label text-md-center">{{ __('Confirmar Contraseña') }}</label>
                                        <input id="password-confirm" type="password" class="form-control" placeholder="Reingrese la contraseña para confirmar" name="password_confirmation" required autocomplete="new-password">
                                    </div>

                                    <div class="form-group col-md-12">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Registrarme') }}
                                            </button>
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
