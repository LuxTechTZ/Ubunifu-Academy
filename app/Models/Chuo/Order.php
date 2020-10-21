<?php

namespace App\Models\Chuo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
	use SoftDeletes;

    protected $fillable = [
        'cart_id',
        'payment_id',
        'order_date',
        'total',
        'status',
        'user_id',
    ];

    public function cart()
    {
    	   return $this->hasOne('App\Models\Chuo\Cart', 'id', 'cart_id');
    }

    public function user()
    {
    	   return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function payment()
    {
    	   return $this->hasOne('App\Models\Chuo\ProductPayment');
    }

    
}
