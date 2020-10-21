<?php

namespace App\Models\Chuo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogCategory extends Model
{
    //
    use SoftDeletes;

	protected $fillable = [
        'user_id',
        'blog_id',
        'comment',
    ];
    //

    public function likes()
    {
        return $this->hasMany('App\Models\Chuo\Likes');
    }

    public function blog()
    {
        return $this->belongsTo('App\Models\Chuo\Blog');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
