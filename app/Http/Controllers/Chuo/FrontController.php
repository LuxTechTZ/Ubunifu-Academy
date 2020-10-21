<?php

namespace App\Http\Controllers\Chuo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Chuo\Product;
use App\Models\Chuo\Course;
use App\Models\Chuo\Colege;
use App\Models\Chuo\Image;
use App\Models\Chuo\ProductCategory;
use App\Models\Chuo\Order;
use Auth;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct(Product $product,Colege $college,Image $image, ProductCategory $category, Order $order)
    {
        $this->product = $product;
        $this->college = $college;
        $this->image = $image;
        $this->category = $category;
        $this->order = $order;
    }
    public function index()
    {
        //
        $products = $this->product->get();
        return view('chuo.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function product($id)
    {
        //
        $product = Product::FindOrFail($id);
        return view('chuo.products', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function products()
    {
        //
        $categories = $this->category->get();
        $products = $this->product->get();
        return view('chuo.product.grid', compact('products','categories'));
    }

    public function categories($name)
    {
        $categories = $this->category->get();
        $category = $this->category->where('name','=',$name)->first();
        $products = $this->product->where('category_id','=',$category->id)->get();
        return view('chuo.product.grid', compact('products','categories','category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        if(!session()->has('url.intended')){
            session(['url.intended' => url()->previous()]);
        }
        
        return view('chuo.login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        //
        $colleges = $this->college->get();
        return view('chuo.register', compact('colleges'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        //
        

        if (isset(Auth::User()->profile->college)) {
            $college = Auth::User()->profile->college;
        }else{
            $college = new Colege;
        }

        if (isset(Auth::User()->profile->course)) {
            $course = Auth::User()->profile->course;
        }else{
            $course = new Course;
        }

        return view('chuo.profile.index', compact('college','course'));
    }


    public function orders()
    {
        $orders = $this->order->where('user_id','=',Auth::user()->id)->get();
        return view('chuo.profile.orders',compact('orders'));
    }

    public function edit_profile()
    {
        if (isset(Auth::User()->profile->college)) {
            $college = Auth::User()->profile->college;
        }else{
            $college = new Colege;
        }

        if (isset(Auth::User()->profile->course)) {
            $course = Auth::User()->profile->course;
        }else{
            $course = new Course;
        }
        
        return view('chuo.profile.settings', compact('college','course'));
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
}
