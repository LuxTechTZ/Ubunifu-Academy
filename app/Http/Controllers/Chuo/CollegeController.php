<?php

namespace App\Http\Controllers\Chuo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Chuo\Colege;
use App\Models\Chuo\Course;
use Auth;

class CollegeController extends Controller
{
    function __construct(Course $course,Colege $college)
    {
        $this->course = $course;
        $this->college = $college;
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

        return view('chuo.back.college.index', compact('colleges'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('chuo.back.college.create');

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
        $college = Colege::create($request->all());
        return view('chuo.back.college.create');


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
        $college = Colege::FindOrFail($id);
        return view('chuo.back.college.show',compact('college'));

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
        $college = Colege::FindOrFail($id);
        return view('chuo.back.college.edit', compact('college'));
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
        $college = Colege::FindOrFail($id);
        $college->update($request->all());
        
        return redirect('home/colleges/view/'.$id)->with('success', 'All good!');
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
    }
}
