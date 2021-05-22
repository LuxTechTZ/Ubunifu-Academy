<?php

namespace App\Models\Jasiri;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookCategory extends Model
{
    use HasFactory;
    use SoftDeletes;

     protected $fillable = [
        'title',
        'user_id',
    ];

    public function books()
    {
        return $this->hasMany(\App\Models\Jasiri\Book::class);
    }

}
