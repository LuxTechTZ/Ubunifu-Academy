<?php

namespace App\Models\Jasiri;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VideoUpload extends Model
{
    use HasFactory;
    use SoftDeletes;

     protected $fillable = [
        'user_id',
        'lesson_id',
        'name',
        'path',
        'extenssion',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    public function lesson()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
