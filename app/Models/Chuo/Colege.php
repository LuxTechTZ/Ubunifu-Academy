<?php

namespace App\Models\Chuo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Colege extends Model
{
    //
    //
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'added_by',
        'leader_id',
        'name',
        'acronym',
        'region',
        'district',
    ];

    public function faculties()
    {
        return $this->hasMany('App\Models\Chuo\Faculty');
    }

    public function courses()
    {
        return $this->hasMany('App\Models\Chuo\Course');
    }
}
