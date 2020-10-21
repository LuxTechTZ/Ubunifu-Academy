<?php

namespace App\Models\Chuo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductCategory extends Model
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
    ];

    /**
     * Get the products for the category.
     */
    public function products()
    {
        return $this->hasMany('App\Models\Chuo\Product','category_id','id');
    }

}
