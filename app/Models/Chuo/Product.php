<?php

namespace App\Models\Chuo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    //
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        
        'name',
        'category_id',
        'price',
        'stock',
    ];

    /**
     * Get the category that owns the product.
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Chuo\ProductCategory');
    }


    /**
     * Get the products for the category.
     */
    public function images()
    {
        return $this->hasMany('App\Models\Chuo\Image');
    }

    /**
     * Get the products for the category.
     */
    public function specifies()
    {
        return $this->hasMany('App\Models\Chuo\ProductSpecifies');
    }

    /**
     * Get the products for the category.
     */
    public function product_details()
    {
        return $this->hasOne('App\Models\Chuo\ProductDetail');
    }
}
