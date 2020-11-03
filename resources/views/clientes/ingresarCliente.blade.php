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
                    <div class="card-header">{{ __('Modulo de Afiliación') }}</div>

                    <div class="card-body">
                        <form method="POST" action="/afiliarme">
                            @csrf

                            <div class="form-group row">
                                <label for="dniDelCliente" class="col-md-4 col-form-label text-md-right">{{ __('Cédula') }}</label>

                                <div class="col-md-6">
                                    <input id="dniDelCliente" type="integer" class="form-control @error('dniDelCliente') is-invalid @enderror" name="dniDelCliente" readonly value="{{ auth()->user()->dniDelUsuario }}" required autocomplete="dniDelCliente" autofocus>

                                    @error('dniDelCliente')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nombreDelCliente" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                                <div class="col-md-6">
                                    <input id="nombreDelCliente" type="text" class="form-control @error('nombreDelCliente') is-invalid @enderror" name="nombreDelCliente" value="{{ old('nombreDelCliente') }}" required autocomplete="nombreDelCliente" autofocus>

                                    @error('nombreDelCliente')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="primerApellidoDelCliente" class="col-md-4 col-form-label text-md-right">{{ __('Primer Apellido') }}</label>

                                <div class="col-md-6">
                                    <input id="primerApellidoDelCliente" type="text" class="form-control @error('primerApellidoDelCliente') is-invalid @enderror" name="primerApellidoDelCliente" value="{{ old('primerApellidoDelCliente') }}" required autocomplete="primerApellidoDelCliente" autofocus>

                                    @error('primerApellidoDelCliente')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="segundoApellidoDelCliente" class="col-md-4 col-form-label text-md-right">{{ __('Segundo Apellido') }}</label>

                                <div class="col-md-6">
                                    <input id="segundoApellidoDelCliente" type="text" class="form-control @error('segundoApellidoDelCliente') is-invalid @enderror" name="segundoApellidoDelCliente" value="{{ old('segundoApellidoDelCliente') }}" required autocomplete="segundoApellidoDelCliente" autofocus>

                                    @error('segundoApellidoDelCliente')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fechaDeNacimientoDelCliente" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de Nacimiento') }}</label>

                                <div class="col-md-6">
                                    <input id="fechaDeNacimientoDelCliente" type="date" class="form-control @error('fechaDeNacimientoDelCliente') is-invalid @enderror" name="fechaDeNacimientoDelCliente" value="{{ old('fechaDeNacimientoDelCliente') }}" required autocomplete="fechaDeNacimientoDelCliente" autofocus>

                                    @error('fechaDeNacimientoDelCliente')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="edadDelCliente" class="col-md-4 col-form-label text-md-right">{{ __('Edad') }}</label>

                                <div class="col-md-6">
                                    <input id="edadDelCliente" type="integer" class="form-control @error('edadDelCliente') is-invalid @enderror" name="edadDelCliente" value="{{ old('edadDelCliente') }}" required autocomplete="edadDelCliente" autofocus>

                                    @error('edadDelCliente')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="correoDelCliente" class="col-md-4 col-form-label text-md-right">{{ __('Correo') }}</label>

                                <div class="col-md-6">
                                    <input id="correoDelCliente" type="email" readonly class="form-control @error('correoDelCliente') is-invalid @enderror" name="correoDelCliente" value="{{ Auth()->User()->email }}" required autocomplete="correoDelCliente" autofocus>

                                    @error('correoDelCliente')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="telefonoDelCliente" class="col-md-4 col-form-label text-md-right">{{ __('Teléfono') }}</label>

                                <div class="col-md-6">
                                    <input id="telefonoDelCliente" type="text" class="form-control @error('telefonoDelCliente') is-invalid @enderror" name="telefonoDelCliente" value="{{ old('telefonoDelCliente') }}" required autocomplete="telefonoDelCliente" autofocus>

                                    @error('telefonoDelCliente')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="domicilioDelCliente" class="col-md-4 col-form-label text-md-right">{{ __('Domicilio') }}</label>

                                <div class="col-md-6">
                                    <input id="domicilioDelCliente" type="text" class="form-control @error('domicilioDelCliente') is-invalid @enderror" name="domicilioDelCliente" value="{{ old('domicilioDelCliente') }}" required autocomplete="domicilioDelCliente" autofocus>

                                    @error('domicilioDelCliente')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="aceptacionDeTerminos" class="col-md-4 col-form-label text-md-right">{{ __('Aceptar Términos') }}</label>

                                <div class="col-md-6">
                                    <input id="aceptacionDeTerminos" type="checkbox" class="form-control @error('aceptacionDeTerminos') is-invalid @enderror" name="aceptacionDeTerminos" value=1 required autocomplete="aceptacionDeTerminos" autofocus>
                                    @error('aceptacionDeTerminos')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Afiliarme') }}
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
