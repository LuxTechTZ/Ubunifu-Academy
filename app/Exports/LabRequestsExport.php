<?php

namespace App\Exports;

use App\Models\LabRequest;
use Maatwebsite\Excel\Concerns\FromCollection;

class LabRequestsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return LabRequest::all();
    }
}
