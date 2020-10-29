<?php

namespace App\Http\Controllers\Jasiri;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Auth;
use Image;

class ProfileController extends Controller
{
    public function index($value='')
    {
    	return view('jasiri.back.profile.index');
    }

    public function uploadPhoto(Request $request)
    {
    	$user = Auth::user();
    	$validation = $request->validate([
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
            // for multiple file uploads
            // 'photo.*' => 'required|file|image|mimes:jpeg,png,gif,webp|max:2048'
        ]);

        $file      = $validation['file']; // get the validated file
        $extension = $file->getClientOriginalExtension();
        $filename =  $user->name.'.'.$file->getClientOriginalExtension();
        
        $file->move('uploads/profile/'.$user->id.'/',$filename);
        $save_path  = 'uploads/profile/'.$user->id.'/';

        Image::make($file)->fit(300, 300)->save($save_path.$filename);

        return "200";

    }
}
