@extends('layouts.appAdmin')
@section('content')
    
    <head>
        @include('layouts.seccionesGenerales.cssDeTablas')
    </head>

    <div class="container">
        <h5>Fecha/Hora: {{$notificacion->created_at}}</h5>
        <div class="card text-left">
            <div class="card-header badge-primary">
                <h5><b>Asunto</b></h5>
            </div>

            <div class="card-body">
                <h5 class="card-text text-center">
                    <b>Enviado por:</b> {{$notificacion->enviadoPor}} [correo electrónico de VIDAlab]<br><br>
                    <b>Enviado a:</b> {{$notificacion->recibidoPor}} [{{$notificacion->receptorDeNotificacion}}]
                </h5>
                <br>
            </div>    

            <div class="card-header badge-primary">
                <h5><b>Asunto</b></h5>
            </div>

            <div class="card-body">
                <h5 class="card-text text-center">{{$notificacion->asuntoDeNotificacion}}</h5>
                <br>
            </div>

            <div class="card-header text-left badge-primary">
                <h5><b>Mensaje</b></h5>
            </div>

            <div class="card-body">
                <h5 class="card-text text-center">{{$notificacion->mensajeDeNotificacion}}</h5>
            </div>
            <div class="card-header text-left badge-primary">
                <h5><b>Archivos</b></h5>
            </div>
            
            <div class="card-body">
                <h5 class="card-text text-center">{{$notificacion->archivo}}</h5>
                <br>
            </div>
        </div>
    </div>
@endsection