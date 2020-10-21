<?php

namespace App\Http\Controllers\Chuo\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\User;
use Auth;

class ProfileController extends Controller
{
    //
    function __construct(User $user)
    {
    	$this->user = $user;
    }

    public function save_college(Request $request)
    {

    	$user = User::findOrFail(Auth()->user()->id);
    	if (!isset($user->profile)) {
        	$profile = new Profile();
            $profile->course_id = $request['course_id'];
            $profile->yos_id = $request['yos_id'];
            $profile->college_id = $user->colege_id;
        	$profile->semester_id = $request['semester_id'];

        	$user->profile()->save($profile);
        	$user->save();

            return redirect()->back()->withFlashSuccess('User Details Updated Successfuly');
    	}else{
        	$profile = Profile::findOrFail($user->profile->id);

            $profile->college_id = $user->colege_id;
        	$profile->course_id = $request['course_id'];
            $profile->yos_id = $request['yos_id'];
            $profile->semester_id = $request['semester_id'];


        	$profile->save();
        	$user->save();
            return redirect()->back()->withFlashSuccess('User Details Updated Successfuly');
    	}
    }

    public function user_update(Request $request)
    {
        $user = User::findOrFail(Auth()->user()->id);
        
        $user->update($request->all());
        return redirect()->back()->withFlashSuccess('User Details Updated Successfuly');
    }
}
