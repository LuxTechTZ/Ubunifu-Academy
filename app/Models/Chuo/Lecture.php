<?php

namespace App\Models\Chuo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lecture extends Model
{
    use SoftDeletes;
	
    //
    protected $fillable = [
        'name',
        'added_by',
        'name',
        'module_id',
        'file',
    ];

}
