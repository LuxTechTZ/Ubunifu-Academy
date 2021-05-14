<?php

namespace App\Http\Controllers\Academy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jasiri\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categories = Category::get();
        return view('academy.back.categories.index',compact('categories'));
    }


    public function create()
    {
        return view('academy.back.categories.create');
    }


    public function store(Request $request)
    {
        $request['user_id'] = Auth::user()->id;
        $request['image'] = Storage::putFile('public/categories', $request['img'], 'public');

        Category::create($request->all());
        return redirect()->route('admin_categories');
    }


    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('academy.back.categories.edit',compact('category'));
    }

    public function update(Request $request, $id)
    {
        if(isset($request['img'])){
            $request['image'] = Storage::putFile('public/categories', $request['img'], 'public');
        }

        $category = Category::findOrFail($id);

        $category->update($request->all());

        return redirect()->route('admin_categories');
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
