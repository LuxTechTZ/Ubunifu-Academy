<?php

namespace App\Http\Controllers\Chuo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Chuo\Course;
use App\Models\Chuo\Colege;
use App\Models\Chuo\Semester;
use App\Models\Chuo\ClassYear;
use App\Models\Chuo\Module;
use Auth;

class CourseController extends Controller
{
    function __construct(Course $course, Colege $college,Semester $semester, ClassYear $yos,Module $module)
    {
        $this->course = $course;
        $this->college = $college;
        $this->semester = $semester;
        $this->yos = $yos;
        $this->module = $module;

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $colleges = $this->college->get();
        $colleges->time = "2020";

        return view('chuo.back.college.course.index', compact('colleges'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('chuo.back.faculty.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request['added_by'] = Auth::user()->id;
        $request['leader_id'] = Auth::user()->id;
        $college = Course::create($request->all());
        
        return redirect()->back()->withFlashSuccess('Product Added');

        // return view('chuo.back.college.course.show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $modules = $this->module->get();

        $course = Course::FindOrFail($id);
        $college = $this->college->where('id','=',$course->faculty_id)->first();
        $semesters = $this->semester->get();
        $yoss = $this->yos->get();

        return view('chuo.back.college.course.show', compact('course','college','semesters','yoss','modules'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $course = Course::FindOrFail($id);
        $course_updated = $course->update($request->all());
        return redirect()->back()->withFlashSuccess('Course Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        if (Course::destroy($id)) {
            return redirect()->back()->withFlashWarning('Course Deleted');
        }

    }
}
