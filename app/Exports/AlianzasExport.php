<?php

namespace App\Exports;

use App\Models\Alianza;
use Maatwebsite\Excel\Concerns\FromCollection;

class AlianzasExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Alianza::all();
    }
}
