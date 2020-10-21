<?php

namespace App\Http\Controllers;

use Auth;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        if ($user->isAdmin()) {
            // return redirect('/');
            return view('sms.dash');
            // return view('pages.admin.home');
        }

        // return view('pages.user.home');
        return redirect('/');
        return view('chuo.index');
        
    }
}
