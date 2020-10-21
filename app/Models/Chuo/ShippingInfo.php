<?php

namespace App\Models\Chuo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ShippingInfo extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'cart_id',
        'first_name',
        'last_name',
        'phone',
        'email',
        'address',
        'city',
        'zip',
    ];

    public function cart()
    {
    	   return $this->hasOne('App\Models\Chuo\Cart');
    }

    public function user()
    {
    	   return $this->belongsTo('App\Models\User');
    }


}
