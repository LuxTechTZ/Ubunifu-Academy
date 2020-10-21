<?php

namespace App\Models\Chuo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
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
        'faculty_id',
        'name',
        'acronym',
    ];

    public function modules()
    {
        return $this->hasMany('App\Models\Chuo\Module');
    }

    public function faculty()
    {
        return $this->belongsTo('App\Models\Chuo\Faculty');
    }

    /**
     * The profiles that belong to the user.
     */
    public function moduless()
    {
        return $this->belongsToMany('App\Models\Chuo\Module')->withTimestamps();
    }
}
