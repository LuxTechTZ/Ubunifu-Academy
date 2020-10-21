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
                <h1>Subscription Packages
                    <small></small>
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
                <span class="active">Subscription Packages</span>
            </li>
        </ul>
        <!-- END PAGE BREADCRUMB -->
        
        <div class="m-heading-1 border-green m-bordered">
            <h3>Your Ballance And Transaction History</h3>
            <h2><small>Current Balance:</small><b></b> <small>TSH</small> </h2>
        </div>
        <!-- BEGIN PAGE BASE CONTENT -->
       
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption font-dark">
                            <i class="icon-envelope-open font-dark"></i>
                            <span class="caption-subject bold uppercase">Expense History</span>
                        </div>
                        <div class="actions">
                           
                        </div>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">
                            <thead>
                                <tr class="">
                                    <th> Name </th>
                                    <th> Amount </th>
                                    <th> Subscribers </th>
                                    <th> Options </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($packages as $package)
                                <tr>
                                    
                                    <td>{{$package->name}}</td>
                                    <td>{{$package->price}}</td>
                                    <td>{{count($package->subscriptions)}}</td>
                                    <td style="max-width: 70px">
                                    	<a href="{{url('/')}}/home/packages/view/{{$package->id}}" class="btn btn-sm btn-success"><i class="icon-eye"></i> View</a> 
                                    	<a href="{{url('/')}}/home/packages/edit/{{$package->id}}" class="btn btn-sm btn-warning"><i class="icon-pencil"></i> Edit</a> 
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <hr>
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption font-dark">
                            <i class="icon-wallet font-dark"></i>
                            <span class="caption-subject bold uppercase">Top up History</span>
                        </div>
                        <div class="actions">
                            
                        </div>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_2">
                            <thead>
                                <tr class="">
                                    <th> Time </th>
                                    <th> Ammount </th>
                                    <th> Remained Balance </th>
                                    <th> Status </th>
                                </tr>
                            </thead>
                            <tbody>
                               
                               
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
@endsection

@section('footer_scripts')
<!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{{url('/')}}/assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/pages/scripts/table-datatables-fixedheader.min.js" type="text/javascript"></script>

        <!-- END PAGE LEVEL PLUGINS -->
@endsection