<!doctype html>
<html>
  <head>
  </head>
  <body>
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Modulo de registro de Usuarios Administradores') }}</div>

                    <div class="card-body">
                        <form method="POST" action="/nuevoAdministrador/registro">
                            @csrf

                            <div class="form-group row">
                                <label for="nombreDelUsuarioAdministrador" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                                <div class="col-md-6">
                                    <input id="nombreDelUsuarioAdministrador" type="text" class="form-control @error('nombreDelUsuarioAdministrador') is-invalid @enderror" name="nombreDelUsuarioAdministrador" value="{{ old('nombreDelUsuarioAdministrador') }}" required autocomplete="nombreDelUsuarioAdministrador" autofocus>

                                    @error('nombreDelUsuarioAdministrador')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="primerApellidoAdministrador" class="col-md-4 col-form-label text-md-right">{{ __('Primer Apellido') }}</label>

                                <div class="col-md-6">
                                    <input id="primerApellidoAdministrador" type="text" class="form-control @error('primerApellidoAdministrador') is-invalid @enderror" name="primerApellidoAdministrador" value="{{ old('primerApellidoAdministrador') }}" required autocomplete="primerApellidoAdministrador" autofocus>

                                    @error('primerApellidoAdministrador')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="segundoApellidoAdministrador" class="col-md-4 col-form-label text-md-right">{{ __('Segundo Apellido') }}</label>

                                <div class="col-md-6">
                                    <input id="segundoApellidoAdministrador" type="text" class="form-control @error('segundoApellidoAdministrador') is-invalid @enderror" name="segundoApellidoAdministrador" value="{{ old('segundoApellidoAdministrador') }}" required autocomplete="segundoApellidoAdministrador" autofocus>

                                    @error('segundoApellidoAdministrador')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="dniDelUsuarioAdministrador" class="col-md-4 col-form-label text-md-right">{{ __('DNI') }}</label>

                                <div class="col-md-6">
                                    <input id="dniDelUsuarioAdministrador" type="number" class="form-control @error('dniDelUsuarioAdministrador') is-invalid @enderror" name="dniDelUsuarioAdministrador" value="{{ old('dniDelUsuarioAdministrador') }}" required autocomplete="dniDelUsuarioAdministrador" autofocus>

                                    @error('dniDelUsuarioAdministrador')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="correoDelUsuarioAdministrador" class="col-md-4 col-form-label text-md-right">{{ __('Correo electrónico') }}</label>

                                <div class="col-md-6">
                                    <input id="correoDelUsuarioAdministrador" type="email" class="form-control @error('correoDelUsuarioAdministrador') is-invalid @enderror" name="correoDelUsuarioAdministrador" value="{{ old('correoDelUsuarioAdministrador') }}" required autocomplete="correoDelUsuarioAdministrador" autofocus>

                                    @error('correoDelUsuarioAdministrador')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="telefonoDelUsuarioAdministrador" class="col-md-4 col-form-label text-md-right">{{ __('Teléfono') }}</label>

                                <div class="col-md-6">
                                    <input id="telefonoDelUsuarioAdministrador" type="number" class="form-control @error('telefonoDelUsuarioAdministrador') is-invalid @enderror" name="telefonoDelUsuarioAdministrador" value="{{ old('telefonoDelUsuarioAdministrador') }}" required autocomplete="telefonoDelUsuarioAdministrador" autofocus>

                                    @error('telefonoDelUsuarioAdministrador')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="rol" class="col-md-4 col-form-label text-md-right">{{ __('Rol') }}</label>

                                <div class="col-md-6">
                                    <input id="rol" type="combak" class="form-control @error('rol') is-invalid @enderror" name="rol" value="{{ old('rol') }}" required autocomplete="rol" autofocus>

                                    @error('rol')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="contrasenaDelUsuarioAdministrador" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="contrasenaDelUsuarioAdministrador" required autocomplete="new-password">

                                    @error('contrasenaDelUsuarioAdministrador')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Contraseña') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Registrar Administrador') }}
                                    </button>

                                </div>
                            </div>
                        </form>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
  </body>
</html>
