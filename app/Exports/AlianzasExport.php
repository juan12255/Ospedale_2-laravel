<?php

namespace App\Exports;

use App\Models\Alianza;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize as ConcernsShouldAutoSize;

class AlianzasExport implements FromCollection,ConcernsShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Alianza::all();
    }
}
