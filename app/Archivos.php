<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archivos extends Model
{
    protected $fillable = 
    [
      'tipoDeArchivo',
      'descripcionDelArchivo',
      'nombreDelArchivo'
    ];
}
