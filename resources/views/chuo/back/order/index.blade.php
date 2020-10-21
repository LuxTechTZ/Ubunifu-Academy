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
                <h1>All Orders
                    <small>List of all Orders</small>
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
                <span class="active">Orders</span>
            </li>
        </ul>
        <!-- END PAGE BREADCRUMB -->
        
       
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption font-dark">
                            <i class="icon-wallet font-dark"></i>
                            <span class="caption-subject bold uppercase">Pending Orders</span>
                        </div>
                        <div class="actions">
                            
                        </div>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_2">
                            <thead>
                                <tr class="">
                                    <th> ID </th>
                                    <th> Oderd by </th>
                                    <th> Date </th>
                                    <th> Amount </th>
                                    <th> Status </th>
                                    <th> Actions </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $order)
                                @if($order->status == 0)
                                <tr>
                                    <td>{{$order->id}}</td>
                                    <td>{{$order->user->name}}</td>
                                    <td>{{date('d-m-y',strtotime($order->created_at))}}</td>
                                    <td class="pull-right">{{number_format($order->total)}}</td>
                                    <td>@if($order->status == 0)
                                            <span class="btn-u btn-block btn-warning" style="align-items: center"><i class="icon-eye"></i> Pending</span>
                                        @endif</td>
                                    <td>
                                         <a href="{{url('/')}}/home/orders/view/{{$order->id}}" class="btn btn-xs btn-success"><i class="icon-eye"></i> View</a> 
                                        <!-- <a href="{{url('/')}}/home/order/edit/{{$order->id}}" class="btn btn-xs btn-warning"><i class="icon-pencil"></i> Edit</a>  -->
                                    </td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
                <hr>
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption font-dark">
                            <i class="icon-wallet font-dark"></i>
                            <span class="caption-subject bold uppercase">Deliverd Orders</span>
                        </div>
                        <div class="actions">
                            
                        </div>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">
                            <thead>
                                <tr class="">
                                    <th> ID </th>
                                    <th> Oderd by </th>
                                    <th> Date </th>
                                    <th> Amount </th>
                                    <th> Status </th>
                                    <th> Actions </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $order)
                                @if($order->status == 1)
                                <tr>
                                    <td>{{$order->id}}</td>
                                    <td>{{$order->user->name}}</td>
                                    <td>{{date('d-m-y',strtotime($order->created_at))}}</td>
                                    <td class="pull-right">{{number_format($order->total)}}</td>
                                    <td style="align-items: center;">
                                        @if($order->status == 1)
                                            <span class="btn-u btn-u-green btn-block btn-u-xs"><i class="glyphicon glyphicon-ok margin-right-5"></i> Deliverd</span>
                                        @endif
                                    </td>
                                    <td>
                                         <a href="{{url('/')}}/home/orders/view/{{$order->id}}" class="btn btn-xs btn-success"><i class="icon-eye"></i> View</a> 
                                    </td>
                                </tr>
                                @endif
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
@endsection

@section('footer_scripts')
<!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{{url('/')}}/assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/pages/scripts/table-datatables-fixedheader.min.js" type="text/javascript"></script>

        <!-- END PAGE LEVEL PLUGINS -->
@endsection