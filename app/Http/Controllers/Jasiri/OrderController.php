<?php

namespace App\Http\Controllers\jasiri;

use App\Http\Controllers\Controller;
use App\Models\jasiri\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function save($order)
    {
        return Order::create($order);
    }
}
