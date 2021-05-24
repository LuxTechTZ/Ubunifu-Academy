<?php

namespace App\Http\Controllers\Academy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use \App\Models\Jasiri\Category;
use Illuminate\Support\Facades\Storage;
use \App\Models\Jasiri\Course;
use App\Models\Jasiri\Lesson;

class TeacherController extends Controller
{
    public function myCourses()
    {
        $user = Auth::user();
        $courses = $user->teacher->courses->reverse();
        return view('academy.courses.teacher.index',compact('courses','user'));
    }

    public function createCourse()
    {
        $user = Auth::user();
        $categories = Category::get();
        return view('academy.back.courses.create',compact('categories','user'));
    }

    public function storeCourse(Request $request)
    {
        $user = Auth::user();

        $request['owner_id'] = $user->id;
        $request['teacher_id'] = $user->id;

        $request['image'] = Storage::putFile('public/courses', $request['img'], 'public');

        $course = Course::create($request->all());
        $user->teacher->courses()->save($course);

        return redirect()->route('teacher_courses');
    }

    public function editCourse($id)
    {
        $user = Auth::user();
        $categories = Category::get();
        $course = Course::findOrFail($id);

        return view('academy.back.courses.edit',compact('categories','user','course'));
    }

    public function updateCourse(Request $request, $id)
    {
        $course = Course::findOrFail($id);

        if(isset($request['img'])){
            $request['image'] = Storage::putFile('public/courses', $request['img'], 'public');
        }

        $course->update($request->all());
        return redirect()->route('teacher_courses');
    }

    public function lessons($id)
    {
        $user = Auth::user();
        $course = Course::findOrFail($id);
        $lessons = $course->lessons;

        return view('academy.courses.teacher.lessons',compact('user','course'));
    }

    public function storeLesson(Request $request)
    {
        $request['user_id'] = Auth::user()->id;

        Lesson::create($request->all());
        return redirect()->back();
    }
}
