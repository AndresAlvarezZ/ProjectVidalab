@extends('layouts.app')

@section('content')
    
<div class="container"> 
    <div class="card">
        <div class="card-header">
            <h3><b><center>Consultar Paquete registrado</center></b></h3>  
        </div>
    
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <label for="exampleFormControlSelect1">Código</label>
                    <input type="text" class="form-control" readonly="codigoDelPaquete" value="{{$paquete->codigoDelPaquete}}"/> <br>
                </div>
                <div class="col">
                    <label for="exampleFormControlSelect1">Nombre</label>
                    <input type="text" class="form-control" readonly="nombreDelPaquete" value="{{$paquete->nombreDelPaquete}}"/> <br> 
                </div>
                <div class="col">
                    <label for="exampleFormControlSelect1">Costo</label>
                    <input type="text" class="form-control" readonly="costoDelPaquete" value="{{$paquete->costoDelPaquete}}"/> <br> 
                </div>
            </div>  

            <label for="exampleFormControlSelect1">Descripción</label>
            <textarea class="form-control" cols="30" rows="5" readonly="descripcionDelPaquete">{{$paquete->descripcionDelPaquete}}</textarea> <br> 
                
            <div class="row">
                <div class="col">
                    <center><a href="/paquetes" class="btn btn-danger">Regresar a la lista</a></center> 
                </div>
                <div class="col">
                    <center><a href="/homeAdmins" class="btn btn-danger">Ir al menú principal</a></center> 
                </div>          
            </div>
        </div> 
    </div>
</div>                    
@endsection