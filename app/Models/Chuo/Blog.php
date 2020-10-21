<?php

namespace App\Models\Chuo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use SoftDeletes;

	protected $fillable = [
        'cart_id',
        'user_id',
        'status',
        'total',
    ];
    //

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Chuo\BlogComment');
    }

    public function images()
    {
        return $this->hasMany('App\Models\Chuo\BlogImage');
    }

}
