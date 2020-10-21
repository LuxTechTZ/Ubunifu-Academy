<?php

namespace App\Models\Chuo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cart extends Model
{
    use SoftDeletes;

	protected $fillable = [
        'cart_id',
        'user_id',
        'status',
        'total',
    ];
    //

    public function cart_items()
    {
        return $this->hasMany('App\Models\Chuo\CartItem');
    }

    public function cart_owner()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function ship_info()
    {
           return $this->hasOne('App\Models\Chuo\ShippingInfo');
    }
    public function payment()
    {
           return $this->hasOne('App\Models\Chuo\ProductPayment');
    }
}
