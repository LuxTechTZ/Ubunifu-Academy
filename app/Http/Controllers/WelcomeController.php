<?php

namespace App\Http\Controllers;

use App\Models\Jasiri\Course;
use App\Models\Jasiri\Category;
use Session;

class WelcomeController extends Controller
{
	function __construct(Course $course,Category $category)
	{
        $this->course = $course;
		$this->category = $category;
	}

    public function welcome()
    {

        // return Session::get('locale');
        $popula_courses = $this->course->limit(5)->get();
    	$categories = $this->category->limit(6)->get();
        return view('jasiri.index',compact('popula_courses','categories'));
    }
}
