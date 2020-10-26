<?php

namespace App\Http\Controllers\Jasiri;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jasiri\Cart;
use App\Models\Jasiri\CartItem;
use App\Http\Controllers\Jasiri\CourseController;
use Auth;

class CartController extends Controller
{
    function __construct(Cart $cart,CartItem $cart_item,CourseController $course)
    {
    	$this->cart = $cart;
    	$this->course = $course;
    	$this->cart_item = $cart_item;

    }

    public function createCart($product_id)
    {
    	$course = $this->course->getCourse($product_id);

    	$cart = $this->cart->where('user_id','=',Auth::user()->id)->first();
    	if (!isset($cart)) {
    		$cart = new Cart;
	    	$cart->user_id = Auth::user()->id;
	    	$cart->save();
    	}
    	// return $cart;

    	$this->addItem($course,$cart->id);

    	$this->updateCart($cart->id);

    	return view('jasiri.cart.items',compact('cart'));

    }

    public function payment($cart_id)
    {
    	$cart = Cart::findOrFail($cart_id);
    	return view('jasiri.cart.payment',compact('cart'));
    }

    public function addItem($course,$cart_id)
    {
    	$cart_item = $this->cart_item->where('course_id','=',$course->id)->first();
    	if (isset($cart_item)) {
    		return;
    	}

    	$cart_item = new CartItem;
    	$cart_item->cart_id 	= 	$cart_id;
    	$cart_item->course_id 	= 	$course->id;
    	$cart_item->price 		= 	$course->price;
    	$cart_item->total_price = 	$course->price;
    	$cart_item->status 		= 	"active";

    	if ($cart_item->save()) {
    		return;
    	}
    }

    public function updateCart($cart_id)
    {
    	$cart = Cart::findOrFail($cart_id);

    	$total_price = 0;
    	$total_items = 0;
    	foreach ($cart->items as $item) {
    		$total_price += $item->total_price;
    		$total_items += 1;
    	}

    	$cart->total_price = $total_price;
    	$cart->total_items = $total_items;

    	$cart->save();

    	return;
    }
}
