@extends('layouts.especial')
@include('pop_up.modalAspectos')
@section('content')

    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"><script src="https://code.jquery.com/jquery-3.1.1.slim.min.js">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        
        <link href="{{ asset('icons/fuentes.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
        <link href="{{ asset('css/iconos.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
        <link href="{{ asset('css/sombras.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">

        <script src="{{ asset('js/transacciones/transaccionesDeAspectos.js') }}?v=<?php echo(rand()); ?>"defer></script>
        <script src="{{ asset('js/buscador/buscadorDeRegistros.js') }}?v=<?php echo(rand()); ?>"defer></script>
        
        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

        <link href="{{ asset('css/menuAdministrador.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
    </head>

    <body>
        <div class="container-fluid">
            <div class="card-header titulo"><h4><b><center>INFORMACIÓN SOBRE VIDAlab</center></b></h4></div>
                <div class="card-body">
                        @if($datosDisponibles == 1)
                            <br>
                        @else

                            <div class="row">
                                <div class="col-lg-12 margin-tb">
                                    <button type="button" class="btn btn-primary btnAgregar" data-toggle="modal" data-target="#agregarAspecto" data-toggle="tooltip" data-placement="right" title="Click para agregar datos de la empresa"><span class="icon-office"></span>Registrar Información de VIDAlab</button>
                                </div>
                            </div>
                        @endif
                    <br></br>
                    
                    @foreach($aspectos as $aspecto)
                        <div class="text-center"><h4>Ubicaciones de Sedes</h4></div>
                        <div class="row">
                            <div class="col-sm-6">
                                <br></br>
                                <div class="card">
                                    <div class="card-body aspectos">
                                        <h6 class="card-title text-center text-center"><i>Ubicación</i></h6>
                                        <p class="card-text">{{$aspecto->ubicacion}}</p>
                                        <button type="button" id="editarAspecto" class="btn btn-primary" data-toggle="modal" data-target="#ubicacion2" data-toggle="tooltip" data-placement="right" title="Click para actualizar"><span class="icon-loop2"> </span> Actualizar Ubicación</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <br></br>
                            </div>
                        </div>
                        <br></br>

                    <div class="text-center"><h4>Contactos</h4></div>
                        <div class="row">
                            <div class="col-sm-6">
                                <br></br>
                                <div class="card">
                                    <div class="card-body aspectos">
                                        <h6 class="card-title text-center"><i>Teléfonos</i></h6>
                                        <p class="card-text">{{$aspecto->telefono}}</p>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#telefono2" data-toggle="tooltip" data-placement="right" title="Click para actualizar"><span class="icon-loop2"> </span> Actualizar Teléfono</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <br></br>
                                <div class="card">
                                    <div class="card-body aspectos">
                                        <h6 class="card-title text-center"><i>Correo electrónico</i></h6>
                                        <p class="card-text">{{$aspecto->correoElectronico}}</p>
                                        <button type="button" id="editarAspecto" class="btn btn-primary" data-toggle="modal" data-target="#correo2" data-toggle="tooltip" data-placement="right" title="Click para actualizar"><span class="icon-loop2"> </span> Actualizar Correo</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br></br>

                        <div class="text-center"><h4>Redes Sociales</h4></div>
                        <div class="row">
                            <div class="col-sm-6">
                                <br></br>
                                <div class="card">
                                    <div class="card-body aspectos">
                                        <h6 class="card-title text-center"><i>Facebook</i></h6>
                                        <p class="card-text">{{$aspecto->facebook}}</p>
                                        <button type="button" id="editarAspecto" class="btn btn-primary" data-toggle="modal" data-target="#facebook2" data-toggle="tooltip" data-placement="right" title="Click para actualizar"><span class="icon-loop2"> </span> Actualizar Facebook</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <br></br>
                                <div class="card">
                                <div class="card-body aspectos">
                                    <h6 class="card-title text-center"><i>Instagram</i></h6>
                                    <p class="card-text">{{$aspecto->instagram}}</p>
                                    <button type="button" id="editarAspecto" class="btn btn-primary" data-toggle="modal" data-target="#instagram2" data-toggle="tooltip" data-placement="right" title="Click para actualizar"><span class="icon-loop2"> </span> Actualizar Instagram</button>
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <br></br>
                                <div class="card">
                                    <div class="card-body aspectos">
                                        <h6 class="card-title text-center"><i>WhatsApp</i></h6>
                                        <p class="card-text">{{$aspecto->whatsapp}}</p>
                                        <button type="button" id="editarAspecto" class="btn btn-primary" data-toggle="modal" data-target="#whatsapp2" data-toggle="tooltip" data-placement="right" title="Click para actualizar"><span class="icon-loop2"> </span> Actualizar WhatsApp</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <br></br>
                            </div>
                        </div>
                        <br></br>

                        <div class="text-center"><h4>Horarios de Atención</h4></div>
                        <div class="row">
                            <div class="col-sm-6">
                                <br></br>
                                <div class="card">
                                    <div class="card-body aspectos">
                                        <h6 class="card-title text-center"><i>Horario Regular</i></h6>
                                        <p class="card-text">{{$aspecto->horarioRegular}}</p>
                                        <button type="button" id="editarAspecto" class="btn btn-primary" data-toggle="modal" data-target="#horarioRegular2" data-toggle="tooltip" data-placement="right" title="Click para actualizar"><span class="icon-loop2"> </span> Actualizar Horario</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <br></br>
                                <div class="card">
                                <div class="card-body aspectos">
                                    <h6 class="card-title text-center"><i>Horario Especial</i></h6>
                                    <p class="card-text">{{$aspecto->horarioEspecial}}</p>
                                    <button type="button" id="editarAspecto" class="btn btn-primary" data-toggle="modal" data-target="#horarioEspecial2" data-toggle="tooltip" data-placement="right" title="Click para actualizar"><span class="icon-loop2"> </span> Actualizar Horario</button>
                                </div>
                                </div>
                            </div>
                        </div>
                        <br></br>

                        <div class="text-center"><h4>Descripciones</h4></div>
                        <div class="row">
                            <div class="col-sm-6">
                                <br></br>
                                <div class="card">
                                    <div class="card-body aspectos">
                                        <h6 class="card-title text-center"><i>Lema</i></h6>
                                        <p class="card-text">{{$aspecto->lema}}</p>
                                        <button type="button" id="editarAspecto" class="btn btn-primary" data-toggle="modal" data-target="#lema2" data-toggle="tooltip" data-placement="right" title="Click para actualizar"><span class="icon-loop2"> </span> Actualizar Lema</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <br></br>
                                <div class="card">
                                    <div class="card-body aspectos">
                                        <h6 class="card-title text-center"><i>Historia</i></h6>
                                        <p class="card-text">{{$aspecto->historia}}</p>
                                        <button type="button" id="editarAspecto" class="btn btn-primary" data-toggle="modal" data-target="#historia2" data-toggle="tooltip" data-placement="right" title="Click para actualizar"><span class="icon-loop2"> </span> Actualizar Historia</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br></br>

                        <div class="row">
                            <div class="col-sm-6">
                                <br></br>
                                <div class="card">
                                    <div class="card-body aspectos">
                                        <h6 class="card-title text-center"><i>Valores</i></h6>
                                        <p class="card-text">{{$aspecto->valores}}</p>
                                        <button type="button" id="editarAspecto" class="btn btn-primary" data-toggle="modal" data-target="#valores2" data-toggle="tooltip" data-placement="right" title="Click para actualizar"><span class="icon-loop2"> </span> Actualizar Valores</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <br></br>
                                <div class="card">
                                    <div class="card-body aspectos">
                                        <h6 class="card-title text-center"><i>Compromiso</i></h6>
                                        <p class="card-text">{{$aspecto->compromiso}}</p>
                                        <button type="button" id="editarAspecto" class="btn btn-primary" data-toggle="modal" data-target="#compromiso2" data-toggle="tooltip" data-placement="right" title="Click para actualizar"><span class="icon-loop2"> </span> Actualizar Compromiso</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <br></br>
                                <div class="card">
                                    <div class="card-body aspectos">
                                        <h6 class="card-title text-center"><i>Misión</i></h6>
                                        <p class="card-text">{{$aspecto->mision}}</p>
                                        <button type="button" id="editarAspecto" class="btn btn-primary" data-toggle="modal" data-target="#mision2" data-toggle="tooltip" data-placement="right" title="Click para actualizar"><span class="icon-loop2"> </span> Actualizar Misión</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <br></br>
                                <div class="card">
                                    <div class="card-body aspectos">
                                        <h6 class="card-title text-center"><i>Visión</i></h6>
                                        <p class="card-text">{{$aspecto->vision}}</p>
                                            <button type="button" id="editarAspecto" class="btn btn-primary" data-toggle="modal" data-target="#vision2" data-toggle="tooltip" data-placement="right" title="Click para actualizar"><span class="icon-loop2"> </span> Actualizar Visión</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br></br>
                    @endforeach
                </div>
            </div>
            <br>
            <center><a href="/homeAdmins" class="btn btn-dark">Ir al menú principal</a></center>
        </div>
    </body>
@endsection
