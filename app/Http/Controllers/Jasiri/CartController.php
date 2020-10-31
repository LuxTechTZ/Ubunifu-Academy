<?php

namespace App\Http\Controllers\Jasiri;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jasiri\Cart;
use App\Models\Jasiri\CartItem;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UsersManagementController;
use App\Http\Controllers\Jasiri\CourseController;
use App\Http\Controllers\Jasiri\StudentController;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Session;
use Auth;

class CartController extends Controller
{
    use AuthenticatesUsers;

    function __construct(Cart $cart,CartItem $cart_item,CourseController $course,RegisterController $register_user,StudentController $student,UsersManagementController $user_manage)
    {
    	$this->cart = $cart;
    	$this->course = $course;
        $this->cart_item = $cart_item;
        $this->register_user = $register_user;
        $this->student = $student;
        $this->user_manage = $user_manage;

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

    	$cart = $this->updateCart($cart->id);

        return view('jasiri.cart.items',compact('cart'));

    }

    public function showCart($value='')
    {
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

    	return $cart;
    }

    public function placeOrder(Request $request,$cart_id)
    {
        $cart = Cart::findOrFail($cart_id);

        $user = Auth::user(); 
        if (!isset($user)) {
            $user = $this->user_manage->store($request,$from_order = true);

            // return $user;
            $credentials = $request->only('email', 'password');

            Auth::attempt($credentials);
                 // create Student
            $student_details = new Request;
            $student_details['user_id'] = $user->id;
            $student_details['name'] = $user->name;
            $student_details;
            
            $student = $this->student->store($student_details);

            foreach ($cart->items as $item) {
                if($student->courses()->find($item->course_id) == null)
                $student->courses()->attach($item->course_id);
            }
            

        }else{
            $student_details = new Request;
            $student_details['user_id'] = $user->id;
            $student_details['name'] = $user->name;
            
            $student = $this->student->find($user->id);
            if (isset($student)) {
                foreach ($cart->items as $item) {
                    if($student->courses()->find($item->course_id) == null)
                    $student->courses()->attach($item->course_id);
                }
            }else{
                $student = $this->student->store($student_details);

                foreach ($cart->items as $item) {
                    if($student->courses()->find($item->course_id) == null)
                    $student->courses()->attach($item->course_id);
                }
            }

        }


        $cart = Cart::findOrFail($cart_id);
        $cart->user_id = $user->id;
        $cart->save();

        Cart::destroy($cart_id);

        return redirect('account/courses');
    }
    
    public function createStudemt($student_details,$cart_id)
    {
        $cart = Cart::findOrFail($cart_id);
        
        $student = $this->student->store($student_details);

        foreach ($cart->items as $item) {
            $student->courses()->attach($item->course_id);
        }
    }
}
