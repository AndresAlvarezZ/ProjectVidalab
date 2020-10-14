<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compras extends Model
{
    protected $fillable =[
      'dniDelCliente',
      'codigoDelAnalisis',
      'codigoDelPaquete',
      'nombre',
      'costoDelServicio'
    ];
}
