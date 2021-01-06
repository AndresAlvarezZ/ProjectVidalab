<?php

namespace App\Imports;

use App\Paquete;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class paquetesImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Paquete
        ([
            'codigoDelPaquete' => $row['codigo'],
            'nombreDelPaquete' => $row['nombre'],
            'descripcionDelPaquete' => $row['descripcion'],
            'costoDelPaquete' => $row['costo'],
        ]);

    }

    public function headingRow(): int
    {
        return 1;
    }
    
}
