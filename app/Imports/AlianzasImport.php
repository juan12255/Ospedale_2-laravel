<?php

namespace App\Imports;

use App\Models\Alianza;
use Maatwebsite\Excel\Concerns\ToModel;

class AlianzasImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Alianza([
            'Razon_Social' =>$row[1],
            'Nit' =>$row[2],
            'Representante' =>$row[3],
            'Objeto' =>$row[4],
            'FinicioA' =>$row[5],
            'FfinA' =>$row[6],
            'Prorroga' =>$row[7],
            'Camara'  =>$row[8],
            'Correo' =>$row[9],
            'Telefono' =>$row[10],
            'Supervisor' =>$row[11],
            'EstadoA'  =>$row[12],
        ]);
    }
}
