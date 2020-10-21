<?php

namespace App\Models\Chuo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductDetail extends Model
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
        'details',
        'description',
        'status',
    ];

    /**
     * Get the products for the category.
     */
    public function product()
    {
        return $this->belongsTo('App\Models\Chuo\Product');
    }

    /**
     * Get the products for the category.
     */
    public function images()
    {
        return $this->hasMany('App\Models\Chuo\Images');
    }
}
