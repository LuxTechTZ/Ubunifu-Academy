<?php

namespace App\Models\Chuo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    use SoftDeletes;
	
    protected $fillable = [
        'product_id',
        'image',
        'extension',
    ];

    public function subscriptions()
    {
    	   return $this->belongsTo('App\Models\Chuo\Department');
    }
      
}
