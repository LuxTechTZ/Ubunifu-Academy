<?php

namespace App\Models\Chuo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductSpecifies extends Model
{
    //
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id',
        'title',
        'value',
    ];

    /**
     * Get the products for the category.
     */
    public function product()
    {
        return $this->belongsTo('App\Models\Chuo\Product');
    }

}
