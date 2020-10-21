<?php

namespace App\Models\Chuo;

use Illuminate\Database\Eloquent\Model;

class Subriber extends Model
{
    //
    use SoftDeletes;


    public function package()
    {
        return $this->belongsTo('App\Models\Chuo\Package');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function college()
    {
        return $this->belongsTo('App\Models\Chuo\Colege');
    }

    public function course()
    {
        return $this->belongsTo('App\Models\Chuo\Course');
    }
}
