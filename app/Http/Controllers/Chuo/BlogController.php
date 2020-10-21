<?php

namespace App\Http\Controllers\Chuo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Chuo\Blog;
use Auth;
use DateTime;

class BlogController extends Controller
{
    //
    function __construct(Blog $blog)
    {
    	$this->blog = $blog;
    }

    public function index()
    {
    	$time = date('Y-m-d H:i:s');
    	
    	$posts = $this->blog->get();
        return view('chuo.entertainment.blog.index', compact('posts','time'));
    }
}
