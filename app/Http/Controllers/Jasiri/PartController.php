<?php

namespace App\Http\Controllers\Jasiri;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jasiri\Part;

class PartController extends Controller
{
   	function __construct(Part $part)
   	{
   		$this->part = $part;
   	}

   	public function create(Request $request)
   	{
   		$parts = $this->part->where('lesson_id','=',$request['lesson_id'])->get();
   		$request['order'] = count($parts) + 1;
   		$part = Part::create($request->all());
        return redirect('account/courses/edit/'.$request['course_id'].'#samlpe'.$request['lesson_id'].$request['order'])->withFlashSuccess('Lesson Part Created');
   	}
}
