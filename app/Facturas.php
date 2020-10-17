<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Compras;

class Facturas extends Model
{
    protected $fillable = [
      'idCliente',
      'descuento',
      'total',
      'fecha',
      'condicionDeCompra'
    ];

    public function Compras()
    {
      return $this->hasMany(Compras::class);
    }
}
