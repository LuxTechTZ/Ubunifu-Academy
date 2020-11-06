<?php

namespace App\Models\Jasiri;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Part extends Model
{
    use HasFactory;
    use SoftDeletes;

     protected $fillable = [
        'lesson_id',
        'order',
    ];

    public function materials()
    {
        return $this->hasMany(\App\Models\Jasiri\Material::class);
    }

     public function lesson()
    {
        return $this->belongsTo(\App\Models\Jasiri\Lesson::class);
    }
}
