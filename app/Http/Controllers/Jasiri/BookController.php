<?php

namespace App\Http\Controllers\Jasiri;

use App\Http\Controllers\Controller;
use App\Models\Jasiri\Book;
use App\Models\Jasiri\BookCategory;
use Illuminate\Http\Request;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::get();
        $categories = BookCategory::get();
        return view('jasiri.books.index',compact('books','categories'));
    }



    public function show($category,$id,$name)
    {
        $book = Book::findOrFail($id);
        return view('jasiri.books.show',compact('book'));
    }


}
