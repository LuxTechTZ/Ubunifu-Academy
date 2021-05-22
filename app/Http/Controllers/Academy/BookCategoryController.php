<?php

namespace App\Http\Controllers\Academy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jasiri\BookCategory;
use Illuminate\Support\Facades\Auth;

class BookCategoryController extends Controller
{

    public function index()
    {
        $book_categories = BookCategory::get();
        return view('academy.back.books.category.index',compact('book_categories'));
    }


    public function create()
    {
        return view('academy.back.books.category.create');
    }


    public function store(Request $request)
    {
        $request['user_id'] = Auth::user()->id;

        BookCategory::create($request->all());
        return redirect()->route('admin_books_categories');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $book_category = BookCategory::findOrFail($id);
        return view('academy.back.books.category.edit',compact('book_category'));
    }


    public function update(Request $request, $id)
    {
        $category = BookCategory::findOrFail($id);

        $category->update($request->all());

        return redirect()->route('admin_books_categories');
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
