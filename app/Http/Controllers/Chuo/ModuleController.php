<?php

namespace App\Http\Controllers\Chuo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Chuo\Module;
use App\Models\Chuo\Course;
use Auth;

class ModuleController extends Controller
{
    function __construct(Module $module, Course $course)
    {
        $this->module = $module;
        $this->course = $course;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $modules = $this->module->get();
        $module = Module::FindOrFail($id);
        $course = Course::FindOrFail($module->course->id);

        return view('chuo.back.college.module.index', compact('modules','course','module'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $course = Course::FindOrFail($request['course_id']);
        

        if ($request['module_was_in_id'] == 0) {

            $request['added_by'] = Auth::user()->id;
            $request['leader_id'] = Auth::user()->id;
            $request['department_id'] = 1;
            $module = Module::create($request->all()); 

        }else{

            $module = Module::FindOrFail($request['module_was_in_id']);

        }

        
        $module->courses()->attach($request['course_id']);

        return redirect('/home/courses/view/'.$request['course_id'].'#about-'.$request['yos_id'].'-'.$request['course_id'].'')->withFlashSuccess('Module Added Successfuly');

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
        $module = Module::FindOrFail($id);
        $module_updated = $module->update($request->all());
        return redirect()->back()->withFlashSuccess('Module Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($module_id,$course_id)
    {
        //
        $module = Module::FindOrFail($module_id);

        $module->courses()->detach($course_id);

        return redirect()->back()->withFlashWarning('Module Deleted');
        if (Module::destroy($id)) {
        }

    }
}
