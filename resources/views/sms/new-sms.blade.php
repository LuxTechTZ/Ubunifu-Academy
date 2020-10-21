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
                <h1>Sent SMS
                    <small>Create new Message</small>
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
                <span class="active">New SMS</span>
            </li>
        </ul>
        <!-- END PAGE BREADCRUMB -->
        <!-- BEGIN PAGE BASE CONTENT -->
       
        <div class="row">
            <div class="col-md-12 ">
                <!-- BEGIN SAMPLE FORM PORTLET-->
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption font-red-sunglo">
                            <i class="icon-speech font-red-sunglo"></i>
                            <span class="caption-subject bold uppercase"> Create New Text Message</span>
                        </div>
                        <div class="actions">
                           <H2>Balance is <b> {{number_format($balance)}} TSH</b>, Can send <b>{{round($sms_can_send)}}</b> Text Messeges</H2>
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <form role="form" method="POST" enctype="multipart/form-data" action="{{url('/')}}/newsms/send">
                            @csrf
                            <div class="form-body">
                                <div class="form-group form-md-line-input has-info col-md-6">
                                    <textarea class="form-control" id="message" rows="5" placeholder="Type Message Here Boss!" name="message"></textarea>
                                   
                                    <label for="message">Tex Message input</label> 
                                </div>
                                <div class="form-group form-md-line-input has-info col-md-6">
                                    <select multiple class="form-control" id="form_control_1" name="phone">
                                        <option value=""></option>
                                        @foreach($contacts as $contact)
                                            <option selected="selected" value="{{$contact->phone}}">{{$contact->first_name}} {{$contact->last_name}} : {{$contact->phone}}
                                            </option>
                                        @endforeach
                                    </select>
                                    <label for="form_control_1">Contacts</label>
                                </div>
                            </div>
                            <div class="form-actions noborder">
                                <button type="submit" class="btn blue">Send</button>
                                <button type="button" class="btn default">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END SAMPLE FORM PORTLET-->
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