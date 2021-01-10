<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
   
    //ESTABLECER LLAVE PRIMARIA DISTINTA AL ID POR DEFECTO
        protected $primaryKey = 'idDeLaCita';


    //RELACIÓN M:1 CON TABLA EMPRESAS
        public function empresas()
        {
            return $this->belongsTo(Empresa::class);
        }
    //


    //ATRIBUTOS DE INGRESO MANUAL
        protected $fillable=
        [
            'idDeLaEmpresa',
            'nombreDelSolicitante',
            'primerApellidoDelSolicitante',
            'segundoApellidoDelSolicitante',
            'numeroDeClientesPorAtender',
            'fechaDeCita',
            'horaDeCita',
            'tiposDeAnalisisRequeridos',
        ];
    //
}
