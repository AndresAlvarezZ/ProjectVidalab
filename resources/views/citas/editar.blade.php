@extends('layouts.app')

@section('content')

<div class="container"> 

    <div class="card">
        <div class="card-header">
            <h3><b><center>Editar datos de Cita registrada</center></b></h3>
        </div>

        <div class="card-body">

            <form action="/citas/{{$cita->idDeLaCita}}" method="POST">
                @csrf
                @method ('PUT')

                <div class="row">
                    <div class="col">
                        <label for="exampleFormControlSelect1">Solicitante: nombre</label>
                        <input type="text" class="form-control" placeholder="Escriba el nombre del solicitante de la cita" name="nombreDelSolicitante" value="{{$cita->nombreDelSolicitante}}" /> <br>
                        @error('nombreDelSolicitante')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror                    
                    </div>
                    <div class="col">
                        <label for="exampleFormControlSelect1">Primer apellido</label>
                        <input type="text" class="form-control" placeholder="Escriba el primer apellido del solicitante" name="primerApellidoDelSolicitante" value="{{$cita->primerApellidoDelSolicitante}}"/> <br>
                        @error('primerApellidoDelSolicitante')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror                   
                    </div>
                    <div class="col">
                        <label for="exampleFormControlSelect1">Segundo apellido</label>
                        <input type="text" class="form-control" placeholder="Escriba el segundo apellido del solicitante" name="segundoApellidoDelSolicitante" value="{{$cita->segundoApellidoDelSolicitante}}"/> <br>
                        @error('segundoApellidoDelSolicitante')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="exampleFormControlSelect1">Número de clientes por atender</label>
                        <input type="text" class="form-control" placeholder="Escriba el total de cliente que serán atendidos" name="numeroDeClientesPorAtender" value="{{$cita->numeroDeClientesPorAtender}}"/> <br>
                        @error('numeroDeClientesPorAtender')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror                    
                    </div>
                    <div class="col">
                        <label for="exampleFormControlSelect1">Fecha de cita</label>
                        <input type="date" class="form-control" placeholder="Seleccione la fecha de cita" name="fechaDeCita" value="{{$cita->fechaDeCita}}"/> <br>
                        @error('fechaDeCita')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror                  
                    </div>
                    <div class="col">
                        <label for="exampleFormControlSelect1">Seleccione la hora de cita</label>
                        <input type="time" class="form-control" placeholder="Seleccione la hora de cita" name="horaDeCita" value="{{$cita->horaDeCita}}"/> <br>
                        @error('horaDeCita')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <label for="exampleFormControlSelect1">Escriba los tipos de análisis requeridos</label>
                <textarea name="tiposDeAnalisisRequeridos" class="form-control" cols="30" rows="5" placeholder="Escriba los análisis requeridos">{{$cita->tiposDeAnalisisRequeridos}}</textarea> <br>
                @error('tiposDeAnalisisRequeridos')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <div class="row">
                    <div class="col">
                        <center><button type="submit" class="btn btn-success">Actualizar datos</button></center>   
                    </div>
                    <div class="col">
                        <center><a href="javascript: history.go(-1)" class="btn btn-primary">Cancelar y Volver</a></center>                
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection 