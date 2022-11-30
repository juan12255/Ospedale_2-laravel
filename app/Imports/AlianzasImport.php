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
            'FinicioA' =>$row[3],
            'FfinA' =>$row[4],
            'Supervisor' =>$row[5],
            'EstadoA' =>$row[6],
        ]);
    }
}
