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
        return new Prueba([
            'codigoDelAnalisis' => $row['codigo'],
            'nombreDelAnalisis' => $row['nombre'],
            'descripcionDelAnalisis' => $row['descripcion'],
            'categoriaDelAnalisis' => $row['categoria'],
            'costoDelAnalisis' => $row['costo'],
            'descuentoDelAnalisis'=> $row['descuento']
        ]);
    }

    public function headingRow(): int
    {
        return 1;
    }
}
