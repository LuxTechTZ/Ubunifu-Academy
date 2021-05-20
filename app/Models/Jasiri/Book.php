<?php

namespace App\Models\Jasiri;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function category()
    {
        return $this->belongsTo(\App\Models\Jasiri\BookCategory::class,'book_category_id');
    }
}
