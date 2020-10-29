<?php

namespace App\Models\Jasiri;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'owner_id',
        'category_id',
        'title',
        'description',
        'full_details',
        'price',
        'discount_price',
        'image',
    ];

    public function category()
    {
        return $this->belongsTo(\App\Models\Jasiri\Category::class);
    }

    public function lessons()
    {
        return $this->hasMany(\App\Models\Jasiri\Lesson::class);
    }

    public function teachers()
    {
        return $this->belongsToMany(\App\Models\Jasiri\Teacher::class);
    }

    public function teacher()
    {
        return $this->belongsTo(\App\Models\Jasiri\Teacher::class);
    }

    public function students()
    {
        return $this->belongsToMany(\App\Models\Jasiri\Student::class);
    }

}
