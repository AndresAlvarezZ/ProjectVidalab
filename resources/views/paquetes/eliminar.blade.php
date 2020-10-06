@extends('layouts.app')

@section('content')
    
<div class="container">

    <div class="card">
        <div class="card-header">
            <h3><b><center>Eliminar Paquete registrado</center></b></h3>  
        </div>
        <div class="card-body">
            <form action="/paquetes/{{$paquete->idDelPaquete}}" method="POST">
                @csrf   
                @method('DELETE')

                <div class="alert alert-danger" role="alert">
                    <center>¡Lea cuidadosamente la información!<b>¿Realmente desea eliminar este registro?.</b></center>
                </div>

                <div class="row">
                    <div class="col">
                    <label for="exampleFormControlSelect1">Código</label>
                        <input type="text" class="form-control" name="codigoDelPaquete" readonly="codigoDelPaquete" value="{{$paquete->codigoDelPaquete}}"/> <br> 
                    </div>
                    <div class="col">
                        <label for="exampleFormControlSelect1">Nombre</label>
                        <input type="text" class="form-control" name="nombreDelPaquete" readonly="nombreDelPaquete" value="{{$paquete->nombreDelPaquete}}"/> <br> 
                    </div>
                    <div class="col">
                        <label for="exampleFormControlSelect1">Costo</label>
                        <input type="text" class="form-control" name="costoDelPaquete" readonly="costoDelPaquete" value="{{$paquete->costoDelPaquete}}"/> <br> 
                    </div>
                </div>

                <label for="exampleFormControlSelect1">Descripción del paquete</label>
                <textarea name="descripcionDelPaquete" class="form-control" cols="30" rows="5" readonly="descripcionDelPaquete">{{$paquete->descripcionDelPaquete}}</textarea> <br> 
               
                <div class="row">
                    <div class="col">
                        <center><button type="submit" class="btn btn-danger">Eliminar Registro</button></center>
                    </div>
                    <div class="col">
                        <center><a href="/paquetes" class="btn btn-primary">Cancelar y Volver</a></center>
                    </div>
                </div>
            
            </form>
        </div>
    </div>   
</div>                   
@endsection