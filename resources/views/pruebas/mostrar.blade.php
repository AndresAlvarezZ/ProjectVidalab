@extends('layouts.app')

@section('content')
    
<div class="container"> 
    <div class="card">
        <div class="card-header">
            <h3><b><center>Consultar Analisis registrado</center></b></h3>  
        </div>
    
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <label for="exampleFormControlSelect1">Código</label>
                    <input type="text" class="form-control" readonly="codigoDelAnalisis" value="{{$prueba->codigoDelAnalisis}}"/> <br>
                </div>
                <div class="col">
                    <label for="exampleFormControlSelect1">Nombre</label>
                    <input type="text" class="form-control" readonly="nombreDelAnalisis" value="{{$prueba->nombreDelAnalisis}}"/> <br> 
                </div>
            </div> 

            <div class="row">
                <div class="col">
                    <label for="exampleFormControlSelect1">Costo</label>
                    <input type="text" class="form-control" readonly="costoDelAnalisis" value="{{$prueba->costoDelAnalisis}}"/> <br> 
                </div>
                <div class="col"> 
                    <label for="exampleFormControlSelect1">Numero de máquina</label>
                    <input type="text" class="form-control" readonly="numeroDeMaquina" value="{{$prueba->numeroDeMaquina}}"/> <br> 
                </div>
            </div>  

            <label for="exampleFormControlSelect1">Descripción</label>
            <textarea class="form-control" cols="30" rows="5" readonly="descripcionDelAnalisis">{{$prueba->descripcionDelAnalisis}}</textarea> <br> 
                
            <div class="row">
                <div class="col">
                    <center><a href="/pruebas" class="btn btn-danger">Regresar a la lista</a></center> 
                </div>
                <div class="col">
                    <center><a href="/homeAdmins" class="btn btn-danger">Ir al menú principal</a></center> 
                </div>          
            </div>
        </div> 
    </div>
</div>                    
@endsection