<?php

namespace App\Models\Jasiri;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'book_category_id',
        'title',
        'quote',
        'about',
        'description',
        'author',
        'weight',
        'price',
        'pages',
        'isbn',
        'language',
        'publisher',
        'date_published',
        'status',
        'cover_image',
        'back_image',
    ];

    public function category()
    {
        return $this->belongsTo(\App\Models\Jasiri\BookCategory::class,'book_category_id');
    }
}
