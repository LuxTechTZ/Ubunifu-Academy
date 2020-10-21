<?php

namespace App\Http\Controllers\Chuo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Chuo\Course;
use App\Models\Chuo\Colege;
use App\Models\Chuo\Lecture;
use App\Models\Chuo\Faculty;
use App\Models\Chuo\Module;
use App\Models\Chuo\ClassYear;
use App\Models\Chuo\Semester;
use Auth;

class NotesController extends Controller
{
    //

    function __construct(Course $course,Colege $college, Lecture $lecture,Semester $semester, ClassYear $yos,Faculty $faculty)
    {
    	$this->course = $course;
    	$this->college = $college;
        $this->lecture = $lecture;
        $this->yos = $yos;
        $this->semester = $semester;
    	$this->faculty = $faculty;
    }

    public function materials_show()
    {
    	$courses = $this->course->get();
    	$colleges = $this->college->get();

        return view('chuo.materials.notes', compact('colleges'));
    }

    public function course_show($id)
    {
        $course = Course::FindOrFail($id);
        $faculty = Faculty::FindOrFail($course->faculty_id);
        $semesters = $this->semester->get();
        $yoss = $this->yos->get();


        return view('chuo.materials.course', compact('course','semesters','yoss','faculty'));
    }

    public function module($id)
    {
        $module = Module::FindOrFail($id);

        // return Auth::user()->subscription->package->name;


        return view('chuo.materials.module', compact('module'));
    }
}
