<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SolicitudesEnEspera extends Model
{
  protected $primaryKey = 'idDeSolicitudEnEspera';
    protected $fillable = [
      'idFactura',
      'nombreDelCiente',
      'domicilioDelCiente',
      'telefonoDelCliente',
      'analisisSolicitados',
      'costoDelServicio',
      'estado'
    ];
}
