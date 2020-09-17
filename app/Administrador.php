<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    // datos que necesitan llenarse en un formulario
    protected $fillable =
  ['nombreDelUsuarioAdministrador',
  'primerApellidoAdministrador',
  'segundoApellidoAdministrador',
  'dniDelUsuarioAdministrador',
  'email',
  'telefonoDelUsuarioAdministrador',
  'password',
  'rol',
  'estadoDelUsuarioAdministrador'
];
}
