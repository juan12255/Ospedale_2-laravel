<?php

namespace App\Exports;

use App\Models\Especialista;
use Maatwebsite\Excel\Concerns\FromCollection;

class EspecialistasExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Especialista::all();
    }
}
