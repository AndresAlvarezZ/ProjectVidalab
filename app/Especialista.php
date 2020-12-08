<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialista extends Model
{
    protected $fillable =
    [  
        'nombreDelEspecialista',
        'segundoNombreDelEspecialista',
        'primerApellidoDelEspecialista',
        'segundoApellidoDelEspecialista',
        'correoDelEspecialista',
        'sedeDelEspecialista',
        'especialidadesDelEspecialista'
    ];
}
