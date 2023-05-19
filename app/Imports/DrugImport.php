<?php

namespace App\Imports;

use App\Models\Drug;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DrugImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Drug([
            'name' => $row['name'],
            'price' => $row['price'],
            'dosage' => $row['dosage'],
            'combination' => 'kjnn',

        ]);
    }
}
