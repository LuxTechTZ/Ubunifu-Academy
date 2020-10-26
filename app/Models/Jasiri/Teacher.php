<?php

namespace App\Models\Jasiri;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    use HasFactory;
    use SoftDeletes;

     protected $fillable = [
        'course_id',
        'protocol',
        'address',
        'path',
        'key',
        'token',
        'type',
        'status',
        'size',
    ];

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    public function courses()
    {
        return $this->belongsToMany(\App\Models\Jasiri\Course::class);
    }
}
