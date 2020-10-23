<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SolicitudesFinalizadas extends Model
{
  protected $primaryKey = 'idDeSolicitudFinalizada';
    protected $fillable = [
      'idDeSolicitudConfirmada',
      'idFactura',
      'nombreDelCiente',
      'domicilioDelCiente',
      'telefonoDelCliente',
      'analisisSolicitados',
      'costoDelServicio'
    ];
}
