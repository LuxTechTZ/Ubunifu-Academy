@extends('layouts.sms')

@section('template_linked_css')
<link href="{{url('/')}}/assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
<link href="{{url('/')}}/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEAD-->
        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>
                    {{$course->name}}
                </h1>
            </div>
            <!-- END PAGE TITLE -->
            <!-- BEGIN PAGE TOOLBAR -->
            <div class="page-toolbar">
                
            </div>
            <!-- END PAGE TOOLBAR -->
        </div>
        <!-- END PAGE HEAD-->
        <!-- BEGIN PAGE BREADCRUMB -->
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <a href="{{url('/')}}/home">Home</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span class="active">Here</span>
            </li>
        </ul>
        <!-- END PAGE BREADCRUMB -->
        

       
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        @foreach($yoss as $yos)
        <section id="about-{{$yos->id}}-{{$course->id}}">
        <div class="row">
            <div class="col-md-12">
                <h2>{{$course->acronym}} {{$yos->year}}</h2>
                @foreach($semesters as $semester)
                <h2>Semester {{$semester->roman_value}} </h2>
                <div class="portlet light bordered" id="semester-{{$semester->id}}-{{$course->id}}">
                    <div class="portlet-title">
                        <div class="caption font-dark">
                            <i class="icon-envelope-open font-dark"></i>
                            <span class="caption-subject bold uppercase">Modules</span>
                        </div>
                        <div class="actions">
                           <a data-toggle="modal" href="#course{{$semester->id}}-{{$yos->id}}" type="button" class="btn dark btn-outline"><i class="icon-plus"></i> Add Module</a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">
                            <thead>
                                <tr class="">
                                    <th> Name </th>
                                    <th> Code </th>
                                    <th> Lectures </th>
                                    <th> Status </th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($course->moduless as $module)
                                @if($module->yos_id == $yos->id)
                                    @if($module->semester_id == $semester->id)
                                <tr>
                                    <td>{{$module->name}}</td>
                                    <td>{{$module->code}}</td>
                                    <td>{{count($module->lectures)}}</td>
                                    <td style="max-width: 100px">
                                        <a href="{{ route('module.show', $module->id)}}" class="btn btn-xs btn-success"><i class="icon-eye"></i> View</a> 
                                        <a data-toggle="modal" href="#module-edit{{$module->id}}" type="button" class="btn btn-xs btn-warning"><i class="icon-pencil"></i> Edit</a> 
                                        <a data-toggle="modal" href="#module-delete{{$module->id}}" type="button" class="btn btn-xs btn-danger"><i class="icon-trash"></i> Delete</a> 
                                       
                                    </td>
                                </tr>
                                @endif
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <hr>
                @endforeach
                </div>
            </div>
        </section>
        @endforeach
               
                <!-- END EXAMPLE TABLE PORTLET-->
               
        <!-- END PAGE BASE CONTENT -->
    </div>
    <!-- END CONTENT BODY -->
</div>
@foreach($yoss as $yos)
@foreach($semesters as $semester)
<div class="modal fade" id="course{{$semester->id}}-{{$yos->id}}" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Add Module in {{$course->name}} YR:{{$yos->year}} SM:{{$semester->number}}</h4>
            </div>
            <div class="modal-body"> 
                <form role="form" method="POST" action="{{url('/')}}/home/courses/module/store">
                    <input type="hidden" name="course_id" value="{{$course->id}}">
                    <input type="hidden" name="yos_id" value="{{$yos->id}}">
                    <input type="hidden" name="semester_id" value="{{$semester->id}}">
                    @csrf
                    <div class="form-body">
                        <div class="form-group form-md-line-input">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Full name">
                            <label for="name">Module Name</label>
                            <span class="help-block">Full Module or Subject Name</span>
                        </div>
                        <div class="form-group form-md-line-input form-md-floating-label has-info">
                            <select class="form-control edited" id="form_control_1" name="module_was_in_id">
                                <option value="0"></option>
                                @foreach($modules as $module)
                                    @if($course->faculty_id == $module->course->faculty->id)
                                    @if($module->yos_id == $yos->id)
                                    @if($module->semester_id == $semester->id)
                                    <option value="{{$module->id}}">{{$module->name}}</option>
                                    @endif
                                    @endif
                                    @endif
                                @endforeach
                            </select>
                            <label for="form_control_1">Exixsting Module</label>
                        </div>
                        <div class="form-group form-md-line-input">
                            <input type="text" name="code" class="form-control" id="code" placeholder="Abreviation">
                            <label for="code">Subject Code</label>
                            <span class="help-block">Short Form Of the Name eg.CSU07101</span>
                        </div>
                        
                    </div>
                    <div class="form-actions noborder">
                        <button type="submit" class="btn blue btn-outline">Save</button>
                        <button type="button" class="btn dark btn-outline" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
               
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endforeach
@endforeach

<!-- Edit Module -->
@foreach($yoss as $yos)
@foreach($semesters as $semester)
@foreach($modules as $module)
<div class="modal fade" id="module-edit{{$module->id}}" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Edit {{$module->name}}</h4>
            </div>
            <div class="modal-body"> 
                <form role="form" method="POST" action="{{url('/')}}/home/courses/module/edit/{{$module->id}}">
                    <input type="hidden" name="course_id" value="{{$course->id}}">
                    <input type="hidden" name="yos_id" value="{{$yos->id}}">
                    <input type="hidden" name="semester_id" value="{{$semester->id}}">
                    @csrf
                    <div class="form-body">
                        <div class="form-group form-md-line-input">
                            <input type="text" value="{{$module->name}}" class="form-control" name="name" id="name" placeholder="Full name">
                            <label for="name">Module Name</label>
                            <span class="help-block">Full Module or Subject Name</span>
                        </div>
                        <div class="form-group form-md-line-input">
                            <input type="text" name="code" value="{{$module->code}}" class="form-control" id="code" placeholder="Abreviation">
                            <label for="code">Subject Code</label>
                            <span class="help-block">Short Form Of the Name eg.CSU07101</span>
                        </div>
                        
                    </div>
                    <div class="form-actions noborder">
                        <button type="submit" class="btn blue btn-outline">Save</button>
                        <button type="button" class="btn dark btn-outline" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
               
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endforeach
@endforeach
@endforeach

<!-- Delete Module -->
@foreach($yoss as $yos)
@foreach($semesters as $semester)
@foreach($modules as $module)
<div class="modal fade" id="module-delete{{$module->id}}" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Delete {{$module->name}}</h4>
            </div>
            <div class="modal-body" align="center"> 
                <p style="color: red"><i style="font-size: 90px" class="fa fa-exclamation-triangle"></i></p>
               <h2 align="center">Are Sure you want to pemanently delete<br><b>{{$module->name}}</b> </h2>
               <p style="color: red">You wont be able to recover it</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Cancel</button>

                <a href="{{url('/')}}/home/courses/module/delete/{{$module->id}}/{{$course->id}}" type="button" class="btn btn-danger"><i class="icon-trash"></i> Yes Delete</a>                
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endforeach
@endforeach
@endforeach

@endsection

@section('footer_scripts')
<!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{{url('/')}}/assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/pages/scripts/table-datatables-fixedheader.min.js" type="text/javascript"></script>

        <!-- END PAGE LEVEL PLUGINS -->
@endsection