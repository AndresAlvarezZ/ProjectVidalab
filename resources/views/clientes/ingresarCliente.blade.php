@extends('layouts.appPublicaEspecial')

<head>
    <link href="{{ asset('css/estiloDeSesion.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
    <script src="{{ asset('js/calculoEdad.js') }}?v=<?php echo(rand()); ?>"defer></script>
    <script src="{{ asset('js/validadoresDeTexto/caracteresPermitidos.js') }}?v=<?php echo(rand()); ?>"defer></script>
</head>

@section('content')
    <body background={{asset('wallpapers/Globos.jpg')}}>
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm">
                    <center>
                        <div class="card border-success mb-3" style="width: 75em;">
                            <div class="card-header text-white bg-success mb-3"><h4><b><center>Afiliarme como cliente VIDAlab</center></b></h4></div>

                                <div class="card-body">
                                    <form  method="POST" action="/afiliarme">
                                        @csrf

                                        <div class="alert alert-info" role="alert">
                                            <center><b>Los siguientes datos son requeridos para concluir su registro en el sistema y la respectiva apertura de su expediente.<br>
                                            Sus datos no serán compartidos ni difundidos como parte de nuestros valores y responsabilidades en VIDAlab.
                                            <br>
                                            Se solicita el número de hijos debido a que constantemente se realizan ofertas que se adapten a nuestros clientes
                                        </b></center>
                                        </div>


                                        <div class="row">
                                          <div class="form-group col-md-6">
                                              <label for="nombreDelCliente" class="col-md-4 col-form-label text-md-center">{{ __('Primer Nombre') }}</label>
                                              <input id="nombreDelCliente" type="text" placeholder="Ingrese su primer nombre" class="form-control @error('nombreDelCliente') is-invalid @enderror" name="nombreDelCliente" onkeypress="return soloLetras(event);" value="{{ auth()->user()->nombreDelCliente }}" required autocomplete="nombreDelCliente" autofocus>
                                              @error('nombreDelCliente')
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                              @enderror
                                          </div>

                                          <div class="form-group col-md-6">
                                              <label for="segundoNombreDelCliente" class="col-md-4 col-form-label text-md-center">{{ __('Segundo Nombre') }}</label>
                                              <input id="segundoNombreDelCliente" type="text" placeholder="Ingrese su segundo nombre" class="form-control" name="segundoNombreDelCliente" onkeypress="return soloLetras(event);" value="{{ old('segundoNombreDelCliente') }}" autofocus>
                                          </div>
                                          
                                          <div class="form-group col-md-6">
                                              <label for="primerApellidoDelCliente" class="col-md-4 col-form-label text-md-center">{{ __('Primer Apellido') }}</label>
                                              <input id="primerApellidoDelCliente" type="text" placeholder="Ingrese su primer apellido" class="form-control @error('primerApellidoDelCliente') is-invalid @enderror" onkeypress="return soloLetras(event);" name="primerApellidoDelCliente" value="{{ old('primerApellidoDelCliente') }}" required autocomplete="primerApellidoDelCliente" autofocus>

                                              @error('primerApellidoDelCliente')
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                              @enderror
                                          </div>

                                          <div class="form-group col-md-6">
                                              <label for="segundoApellidoDelCliente" class="col-md-4 col-form-label text-md-center">{{ __('Segundo Apellido') }}</label>
                                              <input id="segundoApellidoDelCliente" type="text" placeholder="Ingrese su segundo apellido" class="form-control @error('segundoApellidoDelCliente') is-invalid @enderror" onkeypress="return soloLetras(event);" name="segundoApellidoDelCliente" value="{{ old('segundoApellidoDelCliente') }}" required autocomplete="segundoApellidoDelCliente" autofocus>
                                              @error('segundoApellidoDelCliente')
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                              @enderror
                                          </div>
                                            <div class="form-group col-md-6">
                                                <label for="dniDelCliente" class="col-md-4 col-form-label text-md-center">{{ __('Cédula/Identificación') }}</label>
                                                <input id="dniDelCliente" type="integer" class="form-control @error('dniDelCliente') is-invalid @enderror" name="dniDelCliente" readonly value="{{ auth()->user()->dniDelUsuario }}" onkeypress="return soloNumeros(event);" required autocomplete="dniDelCliente" autofocus>
                                                @error('dniDelCliente')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="numeroDehijosDelcliente" class="col-md-4 col-form-label text-md-center">{{ __('Numero de hijos') }}</label>
                                                <input id="numeroDehijosDelcliente" type="number" placeholder="Ingrese su nombre" class="form-control @error('numeroDehijosDelcliente') is-invalid @enderror" name="numeroDehijosDelcliente" onkeypress="return soloNumeros(event);" value="{{ old('numeroDehijosDelcliente') }}" required autocomplete="numeroDehijosDelcliente" autofocus>
                                                @error('numeroDehijosDelcliente')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="fechaDeNacimientoDelCliente" class="col-md-4 col-form-label text-md-center">{{ __('Fecha de Nacimiento') }}</label>
                                                <input id="fechaDeNacimientoDelCliente" onchange="primer(this.value)" onclick="primer(this.value)" onkeyup="primer(this.value)" type="date" class="form-control @error('fechaDeNacimientoDelCliente') is-invalid @enderror" onkeypress="return soloNumeros(event);" name="fechaDeNacimientoDelCliente" value="" required autocomplete="fechaDeNacimientoDelCliente" autofocus>
                                                @error('fechaDeNacimientoDelCliente')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="edadDelCliente" class="col-md-4 col-form-label text-md-center">{{ __('Edad Actual') }}</label>
                                                <input id="edadDelCliente" readonly type="integer" placeholder="este campo se calcula automatico"class="form-control @error('edadDelCliente') is-invalid @enderror" name="edadDelCliente" value="{{ old('edadDelCliente') }}" required autocomplete="edadDelCliente" autofocus>
                                                @error('edadDelCliente')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="correoDelCliente" class="col-md-4 col-form-label text-md-center">{{ __('Correo electrónico') }}</label>
                                                <input id="correoDelCliente" type="email" readonly class="form-control @error('correoDelCliente') is-invalid @enderror" name="correoDelCliente" value="{{ Auth()->User()->email }}" required autocomplete="correoDelCliente" autofocus>
                                                @error('correoDelCliente')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="telefonoDelCliente" class="col-md-4 col-form-label text-md-center">{{ __('Teléfono') }}</label>
                                                <input id="telefonoDelCliente" type="text" placeholder="Ingrese un número telefónico de contacto" class="form-control @error('telefonoDelCliente') is-invalid @enderror" onkeypress="return soloNumeros(event);" name="telefonoDelCliente" onkeypress="return soloNumeros(event);" value="{{ old('telefonoDelCliente') }}" required autocomplete="telefonoDelCliente" autofocus>

                                                @error('telefonoDelCliente')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group col-md-10">
                                            <label for="domicilioDelCliente" class="col-md-4 col-form-label text-md-center">{{ __('Domicilio') }}</label>
                                            <textarea id="domicilioDelCliente" type="text" cols="30" rows="4" placeholder="Ingrese su domicilio en el siguiente formato: Provincia, Cantón, Distrito, Dirección exacta" class="form-control @error('domicilioDelCliente') is-invalid @enderror" name="domicilioDelCliente" required autocomplete="domicilioDelCliente" autofocus>{{old('domicilioDelCliente') }}</textarea>
                                            @error('domicilioDelCliente')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group col-md-16">
                                            <label for="aceptacionDeTerminos" class="col-md-12 col-form-label text-md-center">{{ __('Aceptar Términos') }}</label>
                                            <label for="texto" class="col-md-6 col-form-label text-md-center">Doy fe que la información proporcionada es verídica y acepto se me envíe notificaciones sobre ofertas o cualquier otro relacionado con el labratorio VIDAlab.</label>
                                            <div class="form-group col-md-2">
                                                <input id="aceptacionDeTerminos" type="checkbox" class="form-control @error('aceptacionDeTerminos') is-invalid @enderror" name="aceptacionDeTerminos" value=1 required autocomplete="aceptacionDeTerminos" autofocus>
                                                @error('aceptacionDeTerminos')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="form-group col-md-10">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Afiliarme') }}
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
    </body>
@endsection
