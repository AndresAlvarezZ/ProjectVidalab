@extends('layouts.app')

@section('content')

<div class="container"> 

    <div class="card">
        <div class="card-header">
            <h3><b><center>Registrar nueva cita a la empresa</center></b></h3>
        </div>

        <div class="card-body">
            <div class="alert alert-info" role="alert">
                <center>¡Para ver la nueva cita registrada acceda por medio del botón <i>Consultar</i> correspondiente a la empresa!</center>
            </div>
            <form action="/citas" method="POST">
                @csrf
               
                <div class="row">
                    <div class="col">
                        <label for="exampleFormControlSelect1">Nombre de la empresa</label>
                        <input type="text" class="form-control" name="nombreDeLaEmpresa" readonly="nombreDeLaEmpresa" value="{{$empresa->nombreDeLaEmpresa}}" /> <br>
                        @error('nombreDeLaEmpresa')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col"> 
                        <label for="exampleFormControlSelect1">Identificador</label>
                        <input type="text" class="form-control"name="idDeLaEmpresa" readonly="idDeLaEmpresa" value="{{$empresa->idDeLaEmpresa}}" /> <br> <!--AQUÍ ME DA ERROR-->
                        @error('idDeLaEmpresa')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="exampleFormControlSelect1">Solicitante de cita: nombre</label>
                        <input type="text" class="form-control" placeholder="Escriba el nombre del solicitante de la cita" name="nombreDelSolicitante" value="{{old('nombreDelSolicitante')}}" /> <br>
                        @error('nombreDelSolicitante')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror                    
                    </div>
                    <div class="col">
                        <label for="exampleFormControlSelect1">Primer apellido</label>
                        <input type="text" class="form-control" placeholder="Escriba el primer apellido del solicitante" name="primerApellidoDelSolicitante" value="{{old('primerApellidoDelSolicitante')}}"/> <br>
                        @error('primerApellidoDelSolicitante')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror                   
                    </div>
                    <div class="col">
                        <label for="exampleFormControlSelect1">Segundo apellido</label>
                        <input type="text" class="form-control" placeholder="Escriba el segundo apellido del solicitante" name="segundoApellidoDelSolicitante" value="{{old('segundoApellidoDelSolicitante')}}"/> <br>
                        @error('segundoApellidoDelSolicitante')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="exampleFormControlSelect1">Número de clientes por atender</label>
                        <input type="text" class="form-control" placeholder="Escriba el total de cliente que serán atendidos" name="numeroDeClientesPorAtender" value="{{old('numeroDeClientesPorAtender')}}"/> <br>
                        @error('numeroDeClientesPorAtender')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror                    
                    </div>
                    <div class="col">
                        <label for="exampleFormControlSelect1">Fecha de cita</label>
                        <input type="date" class="form-control" placeholder="Seleccione la fecha de cita" name="fechaDeCita" value="{{old('fechaDeCita')}}"/> <br>
                        @error('fechaDeCita')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror                  
                    </div>
                    <div class="col">
                        <label for="exampleFormControlSelect1">Seleccione la hora de cita</label>
                        <input type="TIME" class="form-control" placeholder="Seleccione la hora de cita" name="horaDeCita" value="{{old('horaDeCita')}}"/> <br>
                        @error('horaDeCita')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <label for="exampleFormControlSelect1">Escriba los tipos de análisis requeridos</label>
                <textarea name="tiposDeAnalisisRequeridos" class="form-control" cols="30" rows="5" placeholder="Escriba los tipos de análisis requeridos">{{old('tiposDeAnalisisRequeridos')}}</textarea> <br>
                @error('tiposDeAnalisisRequeridos')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <div class="row">
                    <div class="col">
                        <center><button type="submit" class="btn btn-success">Registrar cita</button></center>
                    </div>
                    <div class="col">
                        <center><a href="/empresas" class="btn btn-danger">Cancelar y Volver</a></center>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection 