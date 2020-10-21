<?php

namespace App\Models\Chuo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductPayment extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'amount',
        'cart_id',
        'status',
    ];

    public function product()
    {
        return $this->belongsTo('App\Models\Chuo\Product');
    }

    public function method()
    {
        return $this->hasOne('App\Models\Chuo\PaymentMethod', 'id', 'payment_method_id');
    }

}
