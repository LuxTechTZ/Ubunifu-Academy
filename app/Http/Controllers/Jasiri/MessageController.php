<?php

namespace App\Http\Controllers\Jasiri;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function inbox($value='')
    {
    	return view('jasiri.back.messages.inbox');
    }
}
