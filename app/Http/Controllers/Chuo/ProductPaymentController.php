<?php

namespace App\Http\Controllers\Chuo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Chuo\ProductPayment;

class ProductPaymentController extends Controller
{
    function __construct(ProductPayment $product_pay)
    {
    	$this->product_pay = $product_pay;
    }
}
