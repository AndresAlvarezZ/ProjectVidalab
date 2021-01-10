<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aspecto extends Model
{
    protected $fillable =
    [  
        'telefono',
        'correoElectronico',
        'facebook',
        'whatsapp',
        'instagram',
        'ubicacion',
        'horarioRegular',
        'horarioEspecial',
        'mision',
        'vision',
        'lema',
        'valores',
        'historia',
        'compromiso'
    ];
}
