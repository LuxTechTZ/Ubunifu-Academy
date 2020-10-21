<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\CHuo\Blog;
use App\Http\Resources\User as UserResource;
use App\Http\Resources\UserCollection;
use Auth;

class APITestCOntroller extends Controller
{
    //
    function __construct(User $user,Blog $blog)
    {
    	$this->user = $user;
    	$this->blog = $blog;
    }

    public function returnUsers()
    {
        $users = $this->user->get();
    	// $useccoded = json_encode($users);
    	$blogs = $this->blog->get();

    	$results = $users;

    	return $results;
    }

    public function user($id)
    {
        $user = User::findOrFail($id);
        return $user;
    }

}
