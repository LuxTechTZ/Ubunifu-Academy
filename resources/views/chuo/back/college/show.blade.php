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
                <h1>{{$college->name}}
                    <small>{{$college->region}}</small>
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
                <span class="active">Colleges</span>
            </li>
        </ul>
        <!-- END PAGE BREADCRUMB -->
        
        <div class="m-heading-1 border-green m-bordered">
            <h3>Courses Grouped By Fuculties</h3>
            <hr>
            <div class="actions" >
                <a href="{{url('/')}}/home/colleges/edit/{{$college->id}}" type="button" class="btn btn-success"><i class="icon-pencil"></i> Edit Course</a> ||
                <a data-toggle="modal" href="#basic" type="button" class="btn btn-warning"><i class="icon-plus"></i> Add Faculty</a>
            </div>
        </div>
        <!-- BEGIN PAGE BASE CONTENT -->
       
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                @foreach($college->faculties as $faculty)
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption font-dark">
                            <i class="icon-envelope-open font-dark"></i>
                            <span class="caption-subject bold uppercase">{{$faculty->name}}</span>
                        </div>
                        <div class="actions">
                <a data-toggle="modal" href="#course{{$faculty->id}}" type="button" class="btn dark btn-outline"><i class="icon-plus"></i> Add Course</a>
                           
                        </div>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">
                            <thead>
                                <tr class="">
                                    <th> Time </th>
                                    <th> Acrconym </th>
                                    <th> Modules  </th>
                                    <th> Status </th>
                                </tr>
                            </thead>
                            <tbody>
                                 @foreach($faculty->courses as $course)
                                <tr>
                                    <td>{{$course->name}}</td>
                                    <td>{{$course->acronym}}</td>
                                    <td>{{count($course->moduless)}}</td>
                                    <td style="max-width: 100px">
                                        <a href="{{url('/')}}/home/courses/view/{{$course->id}}" class="btn btn-xs btn-success"><i class="icon-eye"></i> View</a> 
                                        <a data-toggle="modal" href="#edit-course{{$course->id}}" type="button" class="btn btn-xs btn-warning"><i class="icon-pencil"></i> Edit</a> 
                                        <a href="{{url('/')}}/home/courses/delete/{{$course->id}}" class="btn btn-xs btn-danger"><i class="icon-eye"></i> Delete </a> 
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
               <hr>
               @endforeach
                <!-- END EXAMPLE TABLE PORTLET-->
               
            </div>
        </div>
        <!-- END PAGE BASE CONTENT -->
    </div>
    <!-- END CONTENT BODY -->
</div>

<div class="modal fade" id="basic" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Add Faculty</h4>
            </div>
            <div class="modal-body"> 
                <form role="form" method="POST" action="{{url('/')}}/home/faculties/store">
                    <input type="hidden" name="colege_id" value="{{$college->id}}">
                    @csrf
                    <div class="form-body">
                        <div class="form-group form-md-line-input">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Full name">
                            <label for="name">Fuculty Name</label>
                            <span class="help-block">Full Fuculty or University Name</span>
                        </div>
                        <div class="form-group form-md-line-input">
                            <input type="text" name="acronym" class="form-control" id="acronym" placeholder="Abreviation">
                            <label for="acronym">Acronym</label>
                            <span class="help-block">Short Form Of the Name eg.IFM</span>
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

@foreach($college->faculties as $faculty)
<div class="modal fade" id="course{{$faculty->id}}" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Add Course in {{$faculty->name}}</h4>
            </div>
            <div class="modal-body"> 
                <form role="form" method="POST" action="{{url('/')}}/home/courses/store">
                    <input type="hidden" name="faculty_id" value="{{$faculty->id}}">
                    @csrf
                    <div class="form-body">
                        <div class="form-group form-md-line-input">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Full name">
                            <label for="name">Course Name</label>
                            <span class="help-block">Full Course Name</span>
                        </div>
                        <div class="form-group form-md-line-input">
                            <input type="text" name="acronym" class="form-control" id="acronym" placeholder="Abreviation">
                            <label for="acronym">Acronym</label>
                            <span class="help-block">Short Form Of the Name eg.FCIM</span>
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

@foreach($college->faculties as $faculty)
@foreach($faculty->courses as $course)
<div class="modal fade" id="edit-course{{$course->id}}" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Edit Course {{$course->name}}</h4>
            </div>
            <div class="modal-body"> 
                <form role="form" method="POST" action="{{url('/')}}/home/courses/update/{{$course->id}}">
                    @csrf
                    <div class="form-body">
                        <div class="form-group form-md-line-input">
                            <input type="text" value="{{$course->name}}" class="form-control" name="name" id="name" placeholder="Full name">
                            <label for="name">Fuculty Name</label>
                            <span class="help-block">Full Fuculty or University Name</span>
                        </div>
                        <div class="form-group form-md-line-input">
                            <input type="text" value="{{$course->acronym}}" name="acronym" class="form-control" id="acronym" placeholder="Abreviation">
                            <label for="acronym">Acronym</label>
                            <span class="help-block">Short Form Of the Name eg.IFM</span>
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

@endsection

@section('footer_scripts')
<!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{{url('/')}}/assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/pages/scripts/table-datatables-fixedheader.min.js" type="text/javascript"></script>

        <!-- END PAGE LEVEL PLUGINS -->
@endsection