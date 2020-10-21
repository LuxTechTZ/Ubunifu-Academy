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
        
        <div class="m-heading-1 border-green m-bordered">
            <h3>{{$package->name}}</h3>
        </div>
        <!-- BEGIN PAGE BASE CONTENT -->
       
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption font-dark">
                            <i class="icon-envelope-open font-dark"></i>
                            <span class="caption-subject bold uppercase">Subscribers</span>
                        </div>
                        <div class="actions">
                           
                        </div>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">
                            <thead>
                                <tr class="">
                                    <th> Name </th>
                                    <th> Course </th>
                                    <th> Start Date </th>
                                    <th> End Date </th>
                                    <th> Days Left </th>
                                    <th> Amount Paid </th>
                                    <th> Actions </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($package->subscriptions as $subscription)
                                <tr>
                                    <td>{{$subscription->user->first_name}} {{$subscription->user->last_name}}</td>
                                    <td>{{$subscription->course->name}}</td>
                                    <td>{{date('D d M Y', strtotime($subscription->start))}}</td>
                                    <td>{{date('D d M Y', strtotime($subscription->end))}}</td>
                                    <td>{{round((strtotime($subscription->end) - time())/(60 * 60 * 24) )}}</td>
                                    <td>{{$package->price}}</td>
                                    <td style="max-width: 70px">
                                        <a href="{{url('/')}}/home/packages/view/{{$subscription->id}}" class="btn btn-xs btn-success"><i class="icon-eye"></i> View</a> 
                                        <a href="{{url('/')}}/home/packages/edit/{{$subscription->id}}" class="btn btn-xs btn-warning"><i class="icon-pencil"></i> Edit</a> 
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <hr>
               
                <!-- END EXAMPLE TABLE PORTLET-->
               
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