<?php

namespace App\Models\Chuo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    //
    use SoftDeletes;

    public function courses()
    {
        return $this->hasMany('App\Models\Chuo\Course');
    }
}
