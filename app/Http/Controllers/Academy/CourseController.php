<?php

namespace App\Http\Controllers\Academy;

use App\Http\Controllers\Controller;
use App\Models\Jasiri\Category;
use App\Models\Jasiri\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{

    public function index()
    {
        $courses = Course::get();
        return view('academy.back.courses.index',compact('courses'));
    }


    public function create()
    {
        $categories = Category::get();
        return view('academy.back.courses.create',compact('categories'));
    }


    public function store(Request $request)
    {
//        return $request;
        $request['owner_id'] = Auth::user()->id;
        $request['image'] = Storage::putFile('public/courses', $request['img'], 'public');

        Course::create($request->all());
        return redirect()->route('admin_courses');
    }

    //    Teacher
    public function TeachersCourse($value='')
    {
        return view('jasiri.back.courses.mycourses');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $course = Course::findOrFail($id);
        $categories = Category::get();
        return view('academy.back.courses.edit',compact('course','categories'));
    }


    public function update(Request $request, $id)
    {
        if(isset($request['img'])){
            $request['image'] = Storage::putFile('public/courses', $request['img'], 'public');
        }

        $course = Course::findOrFail($id);

        $course->update($request->all());
        return redirect()->route('admin_courses');
    }


    public function destroy($id)
    {

    }
}
