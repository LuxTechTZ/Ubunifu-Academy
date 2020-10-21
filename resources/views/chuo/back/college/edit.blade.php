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
                <h1>Add new College/University
                    <small>Add</small>
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
                <span class="active">Create College</span>
            </li>
        </ul>
        <!-- END PAGE BREADCRUMB -->
        
  
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption font-dark">
                            <i class="icon-envelope-open font-dark"></i>
                            <span class="caption-subject bold uppercase">Fill The Details</span>
                        </div>
                        <div class="actions">
                           
                        </div>
                    </div>
                    <div class="portlet-body form" >
                        <form role="form" method="POST" action="{{url('/')}}/home/colleges/update/{{$college->id}}">
                            @csrf
                            <div class="form-body">
                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" name="name" id="name" value="{{$college->name}}" placeholder="Full name">
                                    <label for="name">College Name</label>
                                    <span class="help-block">Full College or University Name</span>
                                </div>
                                <div class="form-group form-md-line-input">
                                    <input type="text" value="{{$college->acronym}}" name="acronym" class="form-control" id="acronym" placeholder="Abreviation">
                                    <label for="acronym">Acronym</label>
                                    <span class="help-block">Short Form Of the Name eg.IFM</span>
                                </div>
                                 <div class="form-group form-md-line-input">
                                    <input type="text" value="{{$college->region}}" name="region" class="form-control" id="region" placeholder="Location">
                                    <label for="region">Region</label>
                                    <span class="help-block"></span>
                                </div>
                                 <div class="form-group form-md-line-input">
                                    <input type="text" value="{{$college->district}}" name="district" class="form-control" id="district" placeholder="Location">
                                    <label for="district">District</label>
                                    <span class="help-block">Short Form Of the Name eg.IFM</span>
                                </div>
                                
                            </div>
                            <div class="form-actions noborder">
                                <button type="submit" class="btn blue">Submit</button>
                                <button type="button" class="btn default">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
                <hr>
               
               
            </div>
        </div>
        <!-- END PAGE BASE CONTENT -->
    </div>
    <!-- END CONTENT BODY -->
</div>
@endsection

@section('footer_scripts')
<!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{{url('/')}}/assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/pages/scripts/table-datatables-fixedheader.min.js" type="text/javascript"></script>

        <!-- END PAGE LEVEL PLUGINS -->
@endsection