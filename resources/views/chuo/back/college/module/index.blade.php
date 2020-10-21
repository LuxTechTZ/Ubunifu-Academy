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
                <h1>Lectures in {{$module->name }}
                    <small>Text Messages Sent from You</small>
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
                <span class="active">Sent SMS</span>
            </li>
        </ul>
        <!-- END PAGE BREADCRUMB -->
        
     
        <!-- BEGIN PAGE BASE CONTENT -->
       
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                
                <hr>
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption font-dark">
                            <i class="icon-wallet font-dark"></i>
                            <span class="caption-subject bold uppercase">Lectures/Slides</span>
                        </div>
                        <div class="actions">
                            <a data-toggle="modal" href="#lecture" type="button" class="btn dark btn-outline"><i class="icon-plus"></i> Add Lecture</a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_2">
                            <thead>
                                <tr class="">
                                    <th> Time </th>
                                    <th> Notes </th>
                                    <th> Status </th>
                                </tr>
                            </thead>
                            <tbody>
                               
                                @foreach($module->lectures as $lecture)
                                <tr>
                                    <td>{{$lecture->name}}</td>
                                    <td><iframe src="//www.slideshare.net/slideshow/embed_code/key/{{$lecture->file}}" width="595" height="300" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe></td>
                                    <td style="max-width: 70px">
                                        <a data-toggle="modal" href="#lecture{{$lecture->id}}" type="button" class="btn btn-xs btn-warning"><i class="icon-pencil"></i> View</a> 
                                        <a href="{{url('/')}}/home/lecture/delete/{{$lecture->id}}" class="btn btn-xs btn-danger"><i class="icon-trash"></i> Delete</a> 
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
               
            </div>
        </div>
        <!-- END PAGE BASE CONTENT -->
    </div>
    <!-- END CONTENT BODY -->
</div>


<div class="modal fade" id="lecture" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Add Lecture</h4>
            </div>
            <div class="modal-body"> 
                <form role="form" method="POST" action="{{url('/')}}/home/lecture/store">
                    <input type="hidden" name="module_id" value="{{$module->id}}">
                    @csrf
                    <div class="form-body">
                        <div class="form-group form-md-line-input">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Full Lecture name">
                            <label for="name">Lecture Name</label>
                            <span class="help-block">Full Lecture or Course Name</span>
                        </div>
                        <div class="form-group form-md-line-input">
                            <input type="text" name="file" class="form-control" id="file" placeholder="skilshare code">
                            <label for="file">Code</label>
                            <span class="help-block">Lecture or Course skilshare code</span>
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

@foreach($module->lectures as $lecture)
<div class="modal fade" id="lecture{{$lecture->id}}" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Add Lecture</h4>
            </div>
            <div class="modal-body"> 
                <form role="form" method="POST" action="{{url('/')}}/home/lecture/update/{{$lecture->id}}">
                    <input type="hidden" name="module_id" value="{{$module->id}}">
                    @csrf
                    <div class="form-body">
                        <div class="form-group form-md-line-input">
                            <input type="text" value="{{$lecture->name}}" class="form-control" name="name" id="name" placeholder="Full Lecture name">
                            <label for="name">Lecture Name</label>
                            <span class="help-block">Full Lecture or Course Name</span>
                        </div>
                        <div class="form-group form-md-line-input">
                            <input type="text" value="{{$lecture->file}}" name="file" class="form-control" id="file" placeholder="skilshare code">
                            <label for="file">Code</label>
                            <span class="help-block">Lecture or Course skilshare code</span>
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
@endsection

@section('footer_scripts')
<!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{{url('/')}}/assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/pages/scripts/table-datatables-fixedheader.min.js" type="text/javascript"></script>

        <!-- END PAGE LEVEL PLUGINS -->
@endsection