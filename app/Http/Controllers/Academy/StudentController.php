<?php

namespace App\Http\Controllers\Academy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jasiri\Course;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function myCourses()
    {
        $user = Auth::user();
        $courses = $user->student->courses;
        return view('academy.back.courses.index',compact('courses'));
    }
}
