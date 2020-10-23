<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SolicitudesConfirmadas extends Model
{
  protected $primaryKey = 'idDeSolicitudConfirmada';
    protected $fillable = [
      'idDeSolicitudEnEspera',
      'idFactura',
      'nombreDelCiente',
      'domicilioDelCiente',
      'telefonoDelCliente',
      'analisisSolicitados',
      'costoDelServicio',
      'estado'
    ];
}
