<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;


class ProfimeManagementController extends Controller
{
    public function __construct(User $user, Profile $profile)
    {
        $this->middleware('auth');
    }

    public function bio($user_id)
    {
    	
    	$user = User::findOrFail($user_id);

        return View('auth.users.bio',compact('user'));
    }

    public function interests($user_id)
    {
    	$user = User::findOrFail($user_id);

        return View('auth.users.interests',compact('user'));
    }

    public function mobile($user_id)
    {
    	$user = User::findOrFail($user_id);

        return View('auth.users.mobile',compact('user'));
    }

    public function media($user_id)
    {
    	$user = User::findOrFail($user_id);

        return View('auth.users.photos',compact('user'));
    }

    public function payment($user_id)
    {
    	$user = User::findOrFail($user_id);

        return View('auth.users.payment_method',compact('user'));
    }

    public function transactions($user_id)
    {
    	$user = User::findOrFail($user_id);

        return View('auth.users.transactions',compact('user'));
    }

    public function security($user_id)
    {
    	$user = User::findOrFail($user_id);

        return View('auth.users.security',compact('user'));
    }

    public function upgrade_plan($user_id)
    {
    	$user = User::findOrFail($user_id);

        return View('auth.users.upgrade_plan',compact('user'));
    }

    public function invite_friends($user_id)
    {
    	$user = User::findOrFail($user_id);

        return View('auth.users.invite_friends',compact('user'));
    }

    public function connected_accounts($user_id)
    {
    	$user = User::findOrFail($user_id);

        return View('auth.users.connected_accounts',compact('user'));
    }

    public function updateProfile($user_id)
    {
    	$user = User::findOrFail($user_id);

        return View('auth.users.bio',compact('user'));
    }



   
}
