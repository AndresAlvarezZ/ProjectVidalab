<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SolicitudesCanceladas extends Model
{
  protected $primaryKey = 'idDeSolicitudCancelada';
    protected $fillable = [
      'idDeSolicitudEnEspera',
      'idDeSolicitudConfirmada',
      'idFactura',
      'nombreDelCiente',
      'domicilioDelCiente',
      'telefonoDelCliente',
      'analisisSolicitados',
      'costoDelServicio'
    ];
}
