<?php

namespace App\Models\Chuo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Faculty extends Model
{
    //
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'colege_id',
        'added_by',
        'leader_id',
        'name',
        'acronym',
    ];

    public function departments()
    {
        return $this->hasMany('App\Models\Chuo\Department');
    }

    public function courses()
    {
        return $this->hasMany('App\Models\Chuo\Course');
    }

    public function main_college()
    {
        return $this->belongsTo('App\Models\Chuo\Colege','colege_id','id');
    }

    public function coll()
    {
        return $this->belongsTo('App\Models\Chuo\Colege');
    }
}
