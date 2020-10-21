<?php

namespace App\Models\Chuo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Module extends Model
{
     //
    use SoftDeletes;

        //
    protected $fillable = [
        'added_by',
        'leader_id',
        'leader_id',
        'department_id',
        'course_id',
        'yos_id',
        'semester_id',
        'name',
        'code',
    ];

    public function lectures()
    {
        return $this->hasMany('App\Models\Chuo\Lecture');
    }

    public function course()
    {
        return $this->belongsTo('App\Models\Chuo\Course');
    }

    public function courses()
    {
        return $this->belongsToMany('App\Models\Chuo\Course')->withTimestamps();
    }

    public function department()
    {
        return $this->belongsTo('App\Models\Chuo\Department');
    }
}
