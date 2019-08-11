<?php

namespace App\Exports;

use App\School;
use Maatwebsite\Excel\Concerns\FromCollection;

class SchoolsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return School::select('name', 'address', 'phone')->get();
    }
}
