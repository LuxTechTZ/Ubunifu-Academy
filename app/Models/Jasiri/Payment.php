<?php

namespace App\Models\jasiri;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'order_id',
        'trans_id',
        'ccd_approval',
        'prn_id',
        'trans_token',
        'company_ref',
    ];
}
