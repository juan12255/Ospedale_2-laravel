<?php

namespace App\Imports;

use App\Models\Especialista;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EspecialistasImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Especialista([
            'Especialidad' =>$row['especialidad'],
            'Nombres' =>$row['nombres'],
            'Documento' =>$row['documento'],
            'Finicio' => date("Y-m-d", ((intval($row['finicio']))-25569)*86400),
            'Ffin' => date("Y-m-d", ((intval($row['ffin']))-25569)*86400),
            'Fpoliza' => date("Y-m-d", ((intval($row['fpoliza']))-25569)*86400),
            'Correo' =>$row['correo'],
            'Telefono'  =>$row['telefono'],
            'Estado' =>$row['correo'],
    
        ]);
    }
}
