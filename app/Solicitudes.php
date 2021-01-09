<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitudes extends Model
{
  protected $primaryKey = 'idDeSolicitud';


  protected $fillable = 
  [
    'idFactura',
    'nombreDelCiente',
    'domicilioDelCiente',
    'telefonoDelCliente',
    'analisisSolicitados',
    'costoDelServicio',
    'estado'
  ];
}
