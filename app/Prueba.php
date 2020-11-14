<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prueba extends Model
{
//ESTABLECER LLAVE PRIMARIA DISTINTA AL ID POR DEFECTO
    protected $primaryKey = 'codigoDelAnalisis';
    protected $keyType = 'string';

//RELACIÓN



//ATRIBUTOS DE INGRESO MANUAL
    protected $fillable =
    [
        'codigoDelAnalisis',
        'nombreDelAnalisis',
        'descripcionDelAnalisis',
        'costoDelAnalisis',
        'descuentoDelAnalisis',
        'numeroDeMaquina',
    ];
}
