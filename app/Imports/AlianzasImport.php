<?php

namespace App\Imports;

use App\Models\alianza;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AlianzasImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new alianza([
            'Razon_Social' =>$row['razon_social'],
            'Nit' =>$row['nit'],
            'Representante' =>$row['representante'],
            'Objeto' =>$row['objeto'],
            'FinicioA' => date("Y-m-d", ((intval($row['finicioa']))-25569)*86400),
            'FfinA' => date("Y-m-d", ((intval($row['ffina']))-25569)*86400),
            'Prorroga' =>$row['prorroga'],
            'Camara'  => date("Y-m-d", ((intval($row['camara']))-25569)*86400),
            'Correo' =>$row['correo'],
            'Telefono' =>$row['telefono'],
            'Supervisor' =>$row['supervisor'],
            'EstadoA'  =>$row['estadoa'],
        ]);
    }
}