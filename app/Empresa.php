<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    //ESTABLECER LLAVE PRIMARIA DISTINTA AL ID POR DEFECTO
        protected $primaryKey = 'idDeLaEmpresa';


    //RELACIÓN 1:M CON TABLA CITAS
        public function citas()
        {
            return $this->hasMany(Cita::class);
        }


    //ATRIBUTOS DE INGRESO MANUAL
        protected $fillable =
        [
            'nombreDeLaEmpresa',
            'numeroDeTelefonoDeLaEmpresa',
            'correoElectronicoDeLaEmpresa',
            'direccionDeLaEmpresa'
        ];
    //
}
