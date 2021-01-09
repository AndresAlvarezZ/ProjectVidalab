<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notificaciones extends Model
{
  protected $fillable = 
  [
    'idUsuarioAdministrador',
    'receptorDeNotificacion',
    'enviadoPor',
    'recibidoPor',
    'asuntoDeNotificacion',
    'mensajeDeNotificacion',
    'tipoDeNotificacion',
    'archivo',
  ];
}
