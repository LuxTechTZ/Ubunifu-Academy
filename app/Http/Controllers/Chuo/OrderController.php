<?php

namespace App\Http\Controllers\Chuo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Chuo\Order;
use App\Models\Chuo\Cart;
use App\Models\Chuo\ProductPayment;
use App\Models\Chuo\ShippingInfo;
use Auth;

class OrderController extends Controller
{
    //
    function __construct(Order $order, ProductPayment $product_pay, ShippingInfo $shipinginfo)
    {
    	$this->order = $order;
    	$this->product_pay = $product_pay;
    	$this->shipinginfo = $shipinginfo;
    }

    public function index()
    {
        $orders = $this->order->get();
        return view('chuo.back.order.index', compact('orders'));

    }

    public function show($order_id)
    {
        $order = Order::findOrFail($order_id);
        return view('chuo.back.order.show', compact('order'));
    }

    public function create($cart_id,Request $request)
    {


    	$ship = $this->shipinfo($cart_id, $request);

    	$order = new Order;
    	$orders = $this->order->get();

    	$cart = Cart::findOrFail($cart_id);

    	$order->user_id = Auth::user()->id;
    	$order->cart_id = $cart_id;
    	// $order->payment_id = $payment->id;
    	// $order->order_date = date('now');
        $order->total = $cart->total;
    	$order->status = 0;

    	if ($order->save()) {
    	   $payment = $this->confirmPay($order->id,$cart_id);
    		$cart->status = 1;
    		if ($cart->save()) {
                return redirect('/orders')->withFlashSuccess('Order Compleated');
    			// return view('chuo.profile.orders',compact('orders'));
    		}
    		return $order;
    	}

    }

    public function confirmPay($order_id,$cart_id)
    {
    	$cart = Cart::findOrFail($cart_id);

    	$pro_pay = $this->product_pay->where('order_id','=',$order_id)->first();

    	if (isset($pro_pay)) {
    		return $pro_pay;
    	}else{
    		$pro_pay = new ProductPayment;

    		$pro_pay->user_id = Auth::user()->id;
    		$pro_pay->amount = $cart->total;
    		$pro_pay->order_id = $order_id;
    		$pro_pay->status = 0;

    		if ($pro_pay->save()) {
    			return $pro_pay;
    		}

    	}


    }


    public function shipinfo($cart_id, Request $request)
    {
    	$shipinfo =  $this->shipinginfo->where('cart_id','=',$cart_id)->first();

    	if (isset($shipinfo)) {
    		return $shipinfo;
    	}else{

	    	$shipinfo = new ShippingInfo;

	    	$shipinfo->cart_id = $cart_id;
	    	$shipinfo->first_name = $request['first_name'];
	    	$shipinfo->last_name = $request['last_name'];
	    	$shipinfo->phone = $request['phone'];
	    	$shipinfo->email = $request['email'];
	    	$shipinfo->address = $request['address'];
	    	$shipinfo->city = $request['city'];
	    	$shipinfo->zip = $request['zip'];

	    	if ($shipinfo->save()) {
	    		return $shipinfo;
	    	}
	    }
    }
}
