<?php

namespace App\Http\Controllers;

class WelcomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
        return redirect('/');
        return view('chuo.index');
        // return view('welcome');
        // return view('sms.dash');
    }
}
