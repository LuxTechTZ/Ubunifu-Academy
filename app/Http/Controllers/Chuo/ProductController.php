<?php

namespace App\Http\Controllers\Chuo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Chuo\ProductCategory;
use App\Models\Chuo\ProductDetail;
use App\Models\Chuo\Product;
use App\Models\Chuo\Image;
use Auth;

class ProductController extends Controller
{
    function __construct(Product $product,ProductCategory $category,ProductDetail $product_detail,Image $image)
    {
        $this->product = $product;
        $this->category = $category;
        $this->product_detail = $product_detail;
        $this->image = $image;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = $this->category->get();
        $products = $this->product->get();
        return view('chuo.back.product.index',compact('categories','products'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $product = Product::findOrFail();
        return view('chuo.back.product.show',compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        // Save Product
        $product = new Product;

        $data = $product->create($request->all());

        // save Details
        $detail = new ProductDetail;

        $request['product_id'] = $data->id;
        $request['status'] = 1;

        $data2 = $detail->create($request->all());

        // save images
        $img =  $request['images'];

        if (isset($img)) {
            foreach ($img as $key => $value) {
                $this->saveImage($data->id, $value);
            }
        }
        // Set main Photo
        $main_photo = $this->image->where('product_id','=',$data->id)->first();

        $main_photo->is_main = 1;

        $main_photo->save();

        return redirect()->back()->withFlashSuccess('Module Updated');
        
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
        $product = Product::findOrFail($id);
        $categories = $this->category->get();
        return view('chuo.back.product.show',compact('product','categories'));
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
        $product = Product::findOrFail($id);

        $detail = $this->product_detail->where('product_id','=',$id)->first();

        if (!isset($detail)) {
            
            $detail = new ProductDetail;
            $detail->product_id = $id;
            $detail->status = 1;
        }

        $detail->description = $request['description'];
        $detail->details = $request['details'];

        // return $detail;

        if ($detail->save()) {

            if ($product->update($request->all())) {
                # code...
                return redirect()->back()->withFlashSuccess('Module Updated');
            }
        }
        return redirect()->back()->withFlashSuccess('Module Updated');
        
    }

    public function updateImages(Request $request, $id)
    {

        $img = $request['img'];

        if (isset($img)) {
            foreach ($img as $key => $value) {
                $this->saveImage($id, $value);
            }
        }
        return redirect()->back()->withFlashSuccess('Module Updated');
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

    public function saveImage($id, $img)
    {
        $image = new Image;

        $file_type = $img->extension();
                
        $file_name  = microtime(true).".".$file_type;

        $file_name = '/uploads/products/'.$file_name;
                
        // $file_size = $img->getClientSize();
               
        $img->move('uploads/products',$file_name);

        $image->product_id = $id;
        $image->image = $file_name;
        $image->extension = $file_type;
        
        if ($image->save()) {
            return true;
        }
    }

    public function deleteImage($img)
    {
        if (Image::destroy($img)) {
            return redirect()->back()->withFlashDanger('Image Deleted');
        }
    }
}
