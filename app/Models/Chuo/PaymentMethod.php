<?php

namespace App\Models\Chuo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaymentMethod extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'image',
        'extension',
        'is_main',
    ];
}
