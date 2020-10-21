<?php

namespace App\Http\Controllers\Chuo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Chuo\Blog;
use App\Models\Chuo\BlogComment;
use Auth;

class BlogCommentController extends Controller
{
    //
    function __construct(Blog $blog, BlogComment $comment)
    {
    	$this->blog = $blog;
    	$this->comment = $comment;
    }

    public function store($blog_id, Request $request)
    {

    	$comment = new BlogComment;

    	// return $request;

    	$comment->user_id = Auth::user()->id;
    	$comment->blog_id = $blog_id;
    	$comment->comment = $request['comment'];

    	if ($comment->save()) {
    		
    		return redirect()->back()->withFlashSuccess('Comment Posted');

    	}
    }
}
