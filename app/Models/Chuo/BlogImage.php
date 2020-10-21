<?php

namespace App\Models\Chuo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogImage extends Model
{
    use SoftDeletes;
	
        protected $fillable = [
        'blog_id',
        'image',
        'extension',
        'is_main',
    ];

    public function blog()
    {
    	   return $this->belongsTo('App\Models\Chuo\Blog');
    }
}
