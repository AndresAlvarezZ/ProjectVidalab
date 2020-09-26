<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $fillable = [
      'idUsuario',
      'dniDelCliente',
      'nombreDelCliente',
      'primerApellidoDelCliente',
      'segundoApellidoDelCliente',
      'fechaDeNacimientoDelCliente',
      'edadDelCliente',
      'correoDelCliente',
      'telefonoDelCliente',
      'domicilioDelCliente',
      'aceptacionDeTerminos'
    ];
}
