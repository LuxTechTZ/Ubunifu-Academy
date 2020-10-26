<?php

namespace App\Http\Controllers\Jasiri;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jasiri\Cart;
use App\Models\Jasiri\CartItem;
use App\Http\Controllers\Jasiri\CourseController;
use Session;
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

    	if (isset(Auth::user()->id)) {
    		$user_id = Auth::user()->id;
    	}

    	if (isset($user_id)) {
    		$cart = $this->cart
    			->where('user_id','=',$user_id)
    			->first();

    	}else{
	    	$cart = $this->cart
    			->where('session_id','=',Session::getId())
    			->first();
    	}

    	if (!isset($cart)) {
    		$cart = new Cart;
    		if (isset($user_id)) {
		    	$cart->user_id = $user_id;
    		}
		    $cart->session_id = Session::getId();
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
    	$cart_item = $this->cart_item
    			->where('course_id','=',$course->id)
    			->where('cart_id','=',$cart_id)
    			->first();

    	if (isset($cart_item)) {
    		$this->updateCart($cart_id);
    		return;
    	}

    	$cart_item = new CartItem;
    	$cart_item->cart_id 	= 	$cart_id;
    	$cart_item->course_id 	= 	$course->id;
    	$cart_item->price 		= 	$course->price;
    	$cart_item->total_price = 	$course->price;
    	$cart_item->status 		= 	"active";

    	if ($cart_item->save()) {
    		$this->updateCart($cart_id);
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
