<?php

namespace App\Imports;

use App\Empresa;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class empresasImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Empresa
        ([
            'nombreDeLaEmpresa' => $row['nombre'],
            'numeroDeTelefonoDeLaEmpresa' => $row['telefono'],
            'correoElectronicoDeLaEmpresa' => $row['correo'],
            'direccionDeLaEmpresa' => $row['direccion'],
        ]);
    }

    public function headingRow(): int
    {
        return 1;
    }
    
}
