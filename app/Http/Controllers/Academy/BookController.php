<?php

namespace App\Http\Controllers\Academy;

use App\Http\Controllers\Controller;
use App\Models\Jasiri\BookCategory;
use Illuminate\Http\Request;
use App\Models\Jasiri\Book;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{

    public function index()
    {
        $books = Book::get();
        return view('academy.back.books.index',compact('books'));
    }

    public function create()
    {
        $categories = BookCategory::get();
        return view('academy.back.books.create',compact('categories'));
    }


    public function store(Request $request)
    {
//        return $request;

        $request['user_id'] = Auth::user()->id;
        $request['cover_image'] = Storage::putFile('public/books', $request['cv_image'], 'public');
        if (isset($request['bk_image']))
            $request['back_image'] = Storage::putFile('public/books', $request['bk_image'], 'public');

        Book::create($request->all());
        return redirect()->route('admin_books');
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


    public function edit($id)
    {
        $categories = BookCategory::get();
        $book = Book::findOrFail($id);
        return view('academy.back.books.edit',compact('categories','book'));
    }


    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);
        $request['user_id'] = Auth::user()->id;

        if (isset($request['cv_image']))
            $request['cover_image'] = Storage::putFile('public/books', $request['cv_image'], 'public');

        if (isset($request['bk_image']))
            $request['back_image'] = Storage::putFile('public/books', $request['bk_image'], 'public');

        $book->update($request->all());
        return redirect()->route('admin_books');
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
