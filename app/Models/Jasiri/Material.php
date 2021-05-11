<?php

namespace App\Models\Jasiri;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Material extends Model
{
    use HasFactory;
    use SoftDeletes;

     protected $fillable = [
        'lesson_id',
        'user_id',
        'part_id',
        'name',
        'protocol',
        'address',
        'path',
        'key',
        'token',
        'type',
        'status',
        'size',
        'local_file',
    ];

    
    public function part()
    {
        return $this->belongsTo(\App\Models\Jasiri\Part::class);
    }
    
    public function lesson()
    {
        return $this->belongsTo(\App\Models\Jasiri\Lesson::class);
    }
}