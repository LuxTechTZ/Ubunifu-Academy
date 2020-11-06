@extends('jasiri.back.layouts.clean')

@section('page')
Add Material
@endsection



@section('template_linked_css')
 <!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="{{url('/')}}/assets/global/plugins/dropzone/dropzone.min.css" rel="stylesheet" type="text/css" />
<link href="{{url('/')}}/assets/global/plugins/dropzone/basic.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEAD-->
        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>Add Material to Part
                    <small>Fill the details Below</small>
                </h1>
            </div>
            <!-- END PAGE TITLE -->
            
        </div>
        <!-- END PAGE HEAD-->
        <!-- BEGIN PAGE BREADCRUMB -->
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <a href="/">Home</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span class="active">Countries</span>
            </li>
        </ul>
        <!-- END PAGE BREADCRUMB -->
        <!-- BEGIN PAGE BASE CONTENT -->
        @include('semi.alert')
<div class="row">
    <div class="col-md-12">
        <div class="m-heading-1 border-green m-bordered">
            <h3>Dropzone</h3>
            <p> DropzoneJS is an open source library that provides drag’n’drop file uploads with image previews. It’s lightweight, doesn’t depend on any other library (like jQuery) and is highly customizable. </p>
            
            <p>
                <span class="label label-danger">NOTE:</span> &nbsp; This plugins works only on Latest Chrome, Firefox, Safari, Opera & Internet Explorer 10. </p>
        </div>
        <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-red-sunglo">
                                        <i class="icon-settings font-red-sunglo"></i>
                                        <span class="caption-subject bold uppercase"> Line Inputs</span>
                                    </div>
                                    <div class="actions">
                                        <div class="btn-group">
                                            <a class="btn btn-sm green dropdown-toggle" href="javascript:;" data-toggle="dropdown"> Actions
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-menu pull-right">
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-pencil"></i> Edit </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-trash-o"></i> Delete </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-ban"></i> Ban </a>
                                                </li>
                                                <li class="divider"> </li>
                                                <li>
                                                    <a href="javascript:;"> Make admin </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <form role="form">
                                        <div class="form-body">
                                            <div class="form-group form-md-line-input">
                                                <input type="text" class="form-control" id="form_control_1" placeholder="Enter your name">
                                                <label for="form_control_1">Regular input</label>
                                                <span class="help-block">Some help goes here...</span>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <input type="text" class="form-control" id="form_control_1" placeholder="Enter your email">
                                                <label for="form_control_1">Input with help</label>
                                                <span class="help-block">Some help goes here...</span>
                                            </div>
                                            <div class="form-group form-md-line-input has-success">
                                                <input type="text" class="form-control" id="form_control_1" placeholder="Success state">
                                                <label for="form_control_1">Success input</label>
                                            </div>
                                            <div class="form-group form-md-line-input has-warning">
                                                <input type="text" class="form-control" id="form_control_1" placeholder="Warning state">
                                                <label for="form_control_1">Warning input</label>
                                            </div>
                                            <div class="form-group form-md-line-input has-error">
                                                <input type="text" class="form-control" id="form_control_1" placeholder="Error state">
                                                <label for="form_control_1">Error input</label>
                                            </div>
                                            <div class="form-group form-md-line-input has-info">
                                                <input type="text" class="form-control" id="form_control_1" placeholder="Info state">
                                                <label for="form_control_1">Info input</label>
                                            </div>
                                            <div class="form-group form-md-line-input has-info">
                                                <select class="form-control" id="form_control_1">
                                                    <option value=""></option>
                                                    <option value="1">Option 1</option>
                                                    <option value="2">Option 2</option>
                                                    <option value="3">Option 3</option>
                                                    <option value="4">Option 4</option>
                                                </select>
                                                <label for="form_control_1">Dropdown sample</label>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <textarea class="form-control" rows="3" placeholder="Enter more text"></textarea>
                                                <label for="form_control_1">Textarea input</label>
                                            </div>
                                            <div class="form-group form-md-line-input has-error">
                                                <input type="text" class="form-control" disabled id="form_control_1" placeholder="Disable">
                                                <label for="form_control_1">Disabled</label>
                                            </div>
                                            <div class="form-group form-md-line-input has-error">
                                                <input type="text" class="form-control" readonly value="You can't edit this" id="form_control_1">
                                                <label for="form_control_1">Readonly</label>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <div class="form-control form-control-static"> email@example.com </div>
                                                <label for="form_control_1">Static Control</label>
                                            </div>
                                            <div class="form-group form-md-line-input has-info">
                                                <input type="text" class="form-control input-sm" id="form_control_1" placeholder=".input-sm">
                                                <label for="form_control_1">Small input</label>
                                            </div>
                                            <div class="form-group form-md-line-input has-info">
                                                <input type="text" class="form-control input-lg" id="form_control_1" placeholder=".input-lg">
                                                <label for="form_control_1">Large input</label>
                                            </div>
                                        </div>
                                        <div class="form-actions noborder">
                                            <button type="button" class="btn blue">Submit</button>
                                            <button type="button" class="btn default">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
        <form action="../assets/global/plugins/dropzone/upload.php" class="dropzone dropzone-file-area" id="my-dropzone" style="width: 500px; margin-top: 50px;">
            <h3 class="sbold">Drop files here or click to upload</h3>
            <p> This is just a demo dropzone. Selected files are not actually uploaded. </p>
        </form>
    </div>
</div>
        <!-- END PAGE BASE CONTENT -->
    </div>
    <!-- END CONTENT BODY -->
</div>
@endsection


@section('footer_scripts') 
<!-- BEGIN PAGE LEVEL PLUGINS -->
 <script src="{{url('/')}}/assets/global/plugins/dropzone/dropzone.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="{{url('/')}}/assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{url('/')}}/assets/pages/scripts/form-dropzone.min.js" type="text/javascript"></script>
@endsection