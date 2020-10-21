<?php

namespace App\Models\Chuo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CartItem extends Model
{
    use SoftDeletes;
    //

    protected $fillable = [
        'cart_id',
        'item_id',
        'quantity',
        'price',
        'total',
    ];
    
    public function product()
    {
        return $this->hasOne('App\Models\Chuo\Product', 'id', 'item_id');
    }
}
