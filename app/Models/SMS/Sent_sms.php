<?php

namespace App\Models\SMS;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sent_sms extends Model
{
    use SoftDeletes;

    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'time',
        'phone',
        'text',
    ];
}
