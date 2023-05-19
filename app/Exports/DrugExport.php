<?php

namespace App\Exports;

use App\Models\Drug;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DrugExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Drug::all();
    }

    public function headings(): array{
        return ["ID", "NAME", "PRICE","DOSAGE", "COMBINATION"];
    }
}
