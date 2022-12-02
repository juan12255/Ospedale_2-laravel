<?php

namespace App\Imports;

use App\Models\Alianza;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;


class AlianzasImport implements ToModel,WithBatchInserts, WithChunkReading
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
   
    public function model(array $row)
    {

        return new Alianza([
            'Razon_Social' =>$row[0],
            'Nit' =>$row[1],
            'Representante' =>$row[2],
            'Objeto' =>$row[3],
            'FinicioA' =>$row[4],
            'FfinA' =>$row[5],
            'Prorroga' =>$row[6],
            'Camara'  =>$row[7],
            'Correo' =>$row[8],
            'Telefono' =>$row[9],
            'Supervisor' =>$row[10],
            'EstadoA'  =>$row[11],  
        ]);
    }

    public function batchSize(): int
    {
        return 1000;
    }

    public function chunkSize(): int
    {
        return 1000;
    }
}
