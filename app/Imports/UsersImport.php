<?php

namespace App\Imports;

use App\Models\SMS\Contact;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Contact([
            'phone'    => $row[34], 
            'first_name'     => $row[0],
            'last_name'     => $row[1],
        ]);
    }
}
