@extends('layouts.especial')
@section('content')

    <head>
        @include('layouts.seccionesGenerales.cssDeTablas')
    </head>

    <body>
        @include('layouts.seccionesGenerales.css-jsDeModales')   
        <div class="container-fluid">
            <div class="card">
            <div class="card-header titulo"><h4><b><center>REGISTRO GENERAL DE CITAS</center></b></h4></div>
                <div class="card-body">
                    <table id="registros" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col"><center>Código de empresa</center></th>
                                <th scope="col"><center>Fecha de cita</center></th>
                                <th scope="col"><center>Hora de cita</center></th>
                                <th scope="col"><center>Clientes totales por atender</center></th>
                                <th scope="col"><center>Análisis solicitados</center></th>
                                <th scope="col"><center>Solicitante</center></th>
                                <th scope="col"><center>Acción a realizar</center></th>
                            </tr>
                        </thead>

                        <tfoot>
                            <tr>
                                <th scope="col"><center>Código de empresa</center></th>
                                <th scope="col"><center>Fecha de cita</center></th>
                                <th scope="col"><center>Hora de cita</center></th>
                                <th scope="col"><center>Clientes totales por atender</center></th>
                                <th scope="col"><center>Análisis solicitados</center></th>
                                <th scope="col"><center>Solicitante</center></th>
                                <th scope="col"><center>Acción a realizar</center></th>
                            </tr>
                        </tfoot>

                        <tbody>
                            @foreach($citas as $cita)
                            <tr>
                                <td><center>{{$cita->idDeLaEmpresa}}</center></td>
                                <td><center>{{$cita->fechaDeCita}}</center></td>
                                <td><center>{{$cita->horaDeCita}}</center></td>
                                <td><center>{{$cita->numeroDeClientesPorAtender}}</center></td>
                                <td><center>{{$cita->tiposDeAnalisisRequeridos}}</center></td>
                                <td><center>{{$cita->nombreDelSolicitante}} {{$cita->primerApellidoDelSolicitante}} {{$cita->segundoApellidoDelSolicitante}}</center></td>
                                <td><center><a href="/empresas/{{$cita->idDeLaEmpresa}}" class="btn btn-primary btnCitas" data-toggle="tooltip" data-placement="right" title="Click para ir a la ubicación del registro"><span class="icon-eye"></span></a></center></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <br>
            <center><a href="/homeAdmins" class="btn btn-dark">Ir al menú principal</a></center>
        </div> 
        @include('layouts.seccionesGenerales.jsDeTablas')
    </body>  
@endsection


