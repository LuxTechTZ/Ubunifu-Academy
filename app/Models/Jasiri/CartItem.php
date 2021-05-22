<?php

namespace App\Models\Jasiri;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CartItem extends Model
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


    public function course()
    {
        return $this->belongsTo(\App\Models\Jasiri\Course::class);
    }

    public function book()
    {
        return $this->belongsTo(\App\Models\Jasiri\Book::class);
    }

    public function cart()
    {
        return $this->belongsTo(\App\Models\Jasiri\Cart::class);
    }
}
