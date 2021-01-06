<?php

namespace App\Imports;

use App\Prueba;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class pruebasImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
      if ($this->siEsNull($row)==null) {
        return new Prueba([
            'codigoDelAnalisis' => $row['codigo'],
            'nombreDelAnalisis' => $row['nombre'],
            'descripcionDelAnalisis' => $row['descripcion'],
            'categoriaDelAnalisis' => $row['categoria'],
            'costoDelAnalisis' => $row['costo'],
            'descuentoDelAnalisis'=> $row['descuento']
        ]);
      }
    }

    public function headingRow(): int
    {
        return 1;
    }

protected function validator(array $validator)
{
  return $validator['codigo'];
}
protected function siEsNull(array $siEsNull){
  $variableADestacar = $this->validator($siEsNull);
  $variableValidadora = Prueba::find($variableADestacar);
  return $variableValidadora;
}
}
