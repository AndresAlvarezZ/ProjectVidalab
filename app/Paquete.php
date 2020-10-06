<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
//ESTABLECER LLAVE PRIMARIA DISTINTA AL ID POR DEFECTO
  protected $primaryKey = 'idDelPaquete';


//RELACIÓN 

  
  
//ATRIBUTOS DE INGRESO MANUAL
    protected $fillable =
    [
        'codigoDelPaquete',
        'nombreDelPaquete',
        'descripcionDelPaquete',
        'costoDelPaquete'
    ];
  }