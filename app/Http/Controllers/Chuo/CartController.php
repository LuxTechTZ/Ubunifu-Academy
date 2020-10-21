<?php

namespace App\Http\Controllers\Chuo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Chuo\Cart;
use App\Models\Chuo\CartItem;
use App\Models\Chuo\Product;
use Auth;

class CartController extends Controller
{

    function __construct(Cart $cart, CartItem $cart_item,Product $product)
    {
        $this->cart = $cart;
        $this->cart_item = $cart_item;
        $this->product = $product;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cart = $this->cart->where('user_id','=',Auth::user()->id)->where("status","=",0)->first();

        return view('chuo.cart.show', compact('cart'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($product_id,$qty = null)
    {
        //
        $cart = $this->cart->where('user_id','=',Auth::user()->id)->where("status","=",0)->first();

        if (isset($cart)) {
            if (isset($qty)) {
                $cart_item = $this->addProduct($cart->id, $product_id, $qty);
            }else{
                $cart_item = $this->addProduct($cart->id, $product_id);
            }

        $total =  $this->cart_item->where('cart_id','=', $cart->id)->sum('total');

        $cart->total = $total;
        $cart->status = 0;
        
        if ($cart->save()) {
            
            return redirect()->back()->withFlashSuccess('Product Added');
        }

        }else{


            $cart = new Cart;
            $cart->user_id = Auth::user()->id;
            $cart->cart_id = Auth::user()->id.date('sidmy');
            $cart->status = 0;
            $cart->total = 0;
            
            if ($cart->save()) {
                
                $cart_item = $this->addProduct($cart->id, $product_id);
                $total =  $this->cart_item->where('cart_id','=', $cart->id)->sum('total');
                $cart->total = $total;

                if ($cart->save()) {
                    return redirect()->back()->withFlashSuccess('Added to new Cart');
                }

            }
        }

        $cart = Cart::create($request->all());

        return $cart;

        return redirect()->back()->withFlashSuccess('Cart Updated Successfuly');
    }

    public function store_product($product_id, Request $request)
    {
        $this->store($product_id,$request['qty']);
        return redirect()->back()->withFlashSuccess('Cart Updated Successfuly');
    }

    public function update_qty(Request $request, $product_id)
    {
        $qty = $request['qty'.$product_id];
        $cart_id = $request['cart_id'];

        $cart = Cart::findOrFail($cart_id);
        $cart_item = $this->cart_item->where('item_id','=', $product_id)->where('cart_id','=', $cart_id)->first();

        $product = Product::findOrFail($product_id);
        $total_price = $qty * $product->price;

        $cart_item->quantity = $qty;
        $cart_item->total = $total_price;

        if ($cart_item->save()) {
            $total =  $this->cart_item->where('cart_id','=', $cart->id)->sum('total');
            $cart->total = $total;

            if ($cart->save()) {
                return redirect()->back()->withFlashSuccess('Added to new Cart');
            }
        }





    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



    public function addProduct($cart_id, $product_id, $qty = 1)
    {
        $cart_item = $this->cart_item->where("cart_id","=",$cart_id)->where("item_id","=",$product_id)->first();
        if (!isset($cart_item)) {
            $cart_item = new CartItem;
        }

        $product = Product::findOrFail($product_id);

        $total_quantity = $cart_item->quantity + $qty;
        $total_price = $total_quantity * $product->price;

        $cart_item->cart_id = $cart_id;
        $cart_item->item_id = $product_id;
        $cart_item->price = $product->price;
        $cart_item->total = $total_price;
        $cart_item->quantity = $cart_item->quantity + $qty;

        if ($cart_item->save()) {
            return $cart_item;
        }
    }

    public function updateQuantity($value='')
    {
        # code...
    }

    public function remove_item($product_id)
    {
        $cart = $this->cart->where('user_id','=',Auth::user()->id)->first();
        $product = Product::findOrFail($product_id);

        $cart_itemd = $this->cart_item->where("cart_id","=",$cart->id)->where("item_id","=",$product->id)->first();

       // return $cart_itemd;

        if (CartItem::destroy($cart_itemd->id)) {
            $total =  $this->cart_item->where('cart_id','=', $cart->id)->sum('total');

            $cart->total = $total;
            if ($cart->save()) {
                
                return redirect()->back()->withFlashWarning('Product Removed');

            }
        }
       
    }

    public function chekout($value='')
    {
        $cart = $this->cart->where('user_id','=',Auth::user()->id)->where("status","=",0)->first();
        
        return view('chuo.cart.bill', compact('cart'));
        
    }
}
