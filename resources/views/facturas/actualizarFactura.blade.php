@extends('layouts.appAdmin')

@section('content')

<div class="container">

    <div class="card">
        <div class="card-header">
            <h3><b><center>Procesar Compra</center></b></h3>
        </div>

        <div class="card-body">

            <form action="/procesarFactura/{{$factura->idFactura}}" method="POST">
                @csrf
                @method ('PUT')

                <div class="row">
                    <div class="col">
                        <label for="exampleFormControlSelect1">Fecha</label>
                        <input type="text" class="form-control" readonly name="fecha" value="{{$factura->fecha}}" /> <br>
                        @error('fecha')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="exampleFormControlSelect1">Cédula del cliente</label>
                        <input type="text" class="form-control" readonly name="idCliente" value="{{$factura->idCliente}}"/> <br>
                        @error('idCliente')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="exampleFormControlSelect1">Condición de compra</label>
                       <br>
                       <select class="form-control" type="text" name="condicionDeCompra">
                         <?php if ($factura->condicionDeCompra=='Cancelado'): ?>
                           <option value="Cancelado">Cancelado</option>
                           <option value="Pendiente">Pendiente</option>
                         <?php endif; ?>
                         <?php if ($factura->condicionDeCompra=='Pendiente'): ?>
                           <option value="Pendiente">Pendiente</option>
                           <option value="Cancelado">Cancelado</option>
                         <?php endif; ?>
                       </select>

                        @error('condicionDeCompra')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="exampleFormControlSelect1">Subtotal</label>
                        <input type="text" class="form-control" readonly name="Subtotal" value="{{$factura->total}}"/> <br>
                        @error('Subtotal')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="exampleFormControlSelect1">Descuento</label>
                        <input type="text" class="form-control" readonly name="descuento" value="{{$factura->descuento}}"/> <br>
                        @error('descuento')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="exampleFormControlSelect1">Total</label>
                        <?php $total = $factura->total-$factura->descuento ?>
                        <input type="text" class="form-control" readonly name="total" value="{{$total}}"/> <br>
                        @error('total')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <center><button type="submit" class="btn btn-success">Procesar compra</button></center>
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
