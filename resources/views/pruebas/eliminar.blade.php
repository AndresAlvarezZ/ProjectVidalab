@extends('layouts.app')

@section('content')
    
<div class="container">

    <div class="card">
        <div class="card-header">
            <h3><b><center>Eliminar Análisis registrado</center></b></h3>  
        </div>
        <div class="card-body">
            <form action="/pruebas/{{$prueba->idDelAnalisis}}" method="POST">
                @csrf   
                @method('DELETE')

                <div class="alert alert-danger" role="alert">
                    <center>¡Lea cuidadosamente la información!<b>¿Realmente desea eliminar este registro?.</b></center>
                </div>

                <div class="row">
                    <div class="col">
                    <label for="exampleFormControlSelect1">Código</label>
                        <input type="text" class="form-control" name="codigoDelAnalisis" readonly="codigoDelAnalisis" value="{{$prueba->codigoDelAnalisis}}"/> <br> 
                    </div>
                    <div class="col">
                        <label for="exampleFormControlSelect1">Nombre</label>
                        <input type="text" class="form-control" name="nombreDelAnalisis" readonly="nombreDelAnalisis" value="{{$prueba->nombreDelAnalisis}}"/> <br> 
                    </div>
                </div> 
                <div class="row">
                    <div class="col">
                        <label for="exampleFormControlSelect1">Costo</label>
                        <input type="text" class="form-control" name="costoDelAnalisis" readonly="costoDelAnalisis" value="{{$prueba->costoDelAnalisis}}"/> <br> 
                    </div>
                    <div class="col">
                        <label for="exampleFormControlSelect1">Número de máquina</label>
                        <input type="text" class="form-control"name="numeroDeMaquina" readonly="numeroDeMaquina" value="{{$prueba->numeroDeMaquina}}"/> <br>                
                    </div>
                </div>

                <label for="exampleFormControlSelect1">Descripción del análisis</label>
                <textarea name="descripcionDelAnalisis" class="form-control" cols="30" rows="5" readonly="descripcionDelAnalisis">{{$prueba->descripcionDelAnalisis}}</textarea> <br> 
               
                <div class="row">
                    <div class="col">
                        <center><button type="submit" class="btn btn-danger">Eliminar Registro</button></center>
                    </div>
                    <div class="col">
                        <center><a href="/pruebas" class="btn btn-primary">Cancelar y Volver</a></center>
                    </div>
                </div>
            
            </form>
        </div>
    </div>   
</div>                   
@endsection