<?php

namespace App\Models\jasiri;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'cart_id',
        'company_ref',
        'price',
        'result_code',
        'result_explanation',
        'trans_token',
        'trans_ref',
    ];
}
