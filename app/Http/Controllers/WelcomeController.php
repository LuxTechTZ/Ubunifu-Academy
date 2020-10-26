<?php

namespace App\Http\Controllers;

use App\Models\Jasiri\Course;

class WelcomeController extends Controller
{
	function __construct(Course $course)
	{
		$this->course = $course;
	}
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
    	$courses = $this->course->get();
        return view('jasiri.index',compact('courses'));
    }
}
