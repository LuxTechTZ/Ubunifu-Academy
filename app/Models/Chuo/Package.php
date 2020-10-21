<?php

namespace App\Models\Chuo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Package extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'image',
        'extension',
        'is_main',
    ];

    public function product()
    {
        return $this->belongsTo('App\Models\Chuo\Product');
    }


    public function subscriptions()
    {
        return $this->hasMany('App\Models\Chuo\Subscription');
    }

    
}
