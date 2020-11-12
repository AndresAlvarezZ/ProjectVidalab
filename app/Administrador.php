<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\Administrador as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Administrador extends Authenticatable
{

  use Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */

//ESTABLECER LLAVE PRIMARIA DISTINTA AL ID POR DEFECTO
  protected $primaryKey = 'id';

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
  'estadoDelUsuarioAdministrador',
  'motivoDeEstadoDelUsuarioAdministrador',
];

/**
 * The attributes that should be hidden for arrays.
 *
 * @var array
 */
protected $hidden = [
    'password', 'remember_token',
];

/**
 * The attributes that should be cast to native types.
 *
 * @var array
 */
protected $casts = [
    'email_verified_at' => 'datetime',
];


}
