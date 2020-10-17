<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compras extends Model
{
  protected $primaryKey = 'dniDelCliente';
    protected $fillable =[
      'dniDelCliente',
      'codigoDelAnalisis',
      'codigoDelPaquete',
      'nombre',
      'costoDelServicio',
      'Fecha'
    ];
    public function Facturas()
    {
      return $this->hasOne(Facturas::class);
    }
}
