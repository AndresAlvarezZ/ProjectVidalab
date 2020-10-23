@extends('layouts.appAdmin')

@section('content')

<div class="container">

    <div class="card">
        <div class="card-header">
            <h3><b><center>Procesar Solicitud</center></b></h3>
        </div>

        <div class="card-body">

            <form action="/solicitudes/procesarCambio/{{$solicitud->idDeSolicitudEnEspera}}" method="POST">
                @csrf
                @method ('delete')

                <div class="row ">
                    <div class="col">
                        <label for="exampleFormControlSelect1">Factura#</label>
                        <input type="number" class="form-control" readonly name="idFactura" value="{{$solicitud->idFactura}}" /> <br>
                        @error('idFactura')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="exampleFormControlSelect1">Nombre del cliente</label>
                        <input type="text" class="form-control" readonly name="nombreDelCiente" value="{{$solicitud->nombreDelCiente}}"/> <br>
                        @error('nombreDelCiente')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="exampleFormControlSelect1">Domicilio del cliente</label>
                        <input type="text" class="form-control" readonly name="domicilioDelCiente" value="{{$solicitud->domicilioDelCiente}}"/> <br>
                        @error('domicilioDelCiente')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                  </div>
                    <div class="row ">
                    <div class="col">
                        <label for="exampleFormControlSelect1">Teléfono del cliente</label>
                        <input type="text" class="form-control" readonly name="telefonoDelCliente" value="{{$solicitud->telefonoDelCliente}}"/> <br>
                        @error('telefonoDelCliente')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="exampleFormControlSelect1">Análisis Solicitados</label>
                        <input type="text" class="form-control" readonly name="analisisSolicitados" value="{{$solicitud->analisisSolicitados}}"/> <br>
                        @error('analisisSolicitados')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="exampleFormControlSelect1">Costo del servicio</label>
                        <input type="number" class="form-control" readonly name="costoDelServicio" value="{{$solicitud->costoDelServicio}}"/> <br>
                        @error('costoDelServicio')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                  </div>
                    <div class="col">
                        <label>Cambiar estado</label>
                       <br>
                       <select class="form-control" type="text" name="estado">
                           <option value="Confirmada">Confirmada</option>
                           <option value="Cancelada">Cancelada</option>
                       </select>
                        @error('estado')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <br>
                <div class="row">
                    <div class="col">
                        <center><button type="submit" class="btn btn-success">Procesar solicitud</button></center>
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
