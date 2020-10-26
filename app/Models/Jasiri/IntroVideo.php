<?php

namespace App\Models\Jasiri;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class IntroVideo extends Model
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
}
