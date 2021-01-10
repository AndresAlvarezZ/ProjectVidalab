<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
  //ESTABLECER LLAVE PRIMARIA DISTINTA AL ID POR DEFECTO
    protected $primaryKey = 'dniDelCliente';


    protected $fillable = 
    [
      'idUsuario',
      'dniDelCliente',
      'nombreDelCliente',
      'segundoNombreDelCliente',
      'primerApellidoDelCliente',
      'segundoApellidoDelCliente',
      'fechaDeNacimientoDelCliente',
      'edadDelCliente',
      'correoDelCliente',
      'telefonoDelCliente',
      'numeroDehijosDelcliente',
      'domicilioDelCliente',
      'aceptacionDeTerminos'
    ];

    
    public function user()
    {
    return $this->belongsTo(User::class);
    }
}
