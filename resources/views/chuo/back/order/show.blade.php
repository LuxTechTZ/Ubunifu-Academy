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
                <h1>Order Number: <b>{{$order->id}}</b>
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
                <a href="{{url('/')}}/home/orders">Orders</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span class="active">{{$order->id}}</span>
            </li>
        </ul>
        <!-- END PAGE BREADCRUMB -->
        
        <div class="m-heading-1 border-green m-bordered">
            <h2 style="text-align: center">ORDER DETAILS</h2>
            <hr>
            <div class="row">
                
            <h3 class="col-md-4">Orderd By: {{$order->user->name}}</h3>
            <h3 class="col-md-4">Orderd Date: {{date('d M Y',strtotime($order->created_at))}}</h3>
            <h3 class="col-md-4">Total Amount: {{number_format($order->total)}} TSH</h3>
            </div>
        </div>

        <div class="m-heading-1 border-green m-bordered">
            <h2 style="text-align: center">DELIVERLY DETAILS</h2>
            <hr>
            <div class="row">
                <h4 class="col-md-4">Name: {{$order->cart->ship_info->first_name}} {{$order->cart->ship_info->last_name}}</h4>
                <h4 class="col-md-4">Phone: {{$order->cart->ship_info->phone}}</h4>
                <h4 class="col-md-4">Email: {{$order->cart->ship_info->email}}</h4>
                <h4 class="col-md-4">Address: {{$order->cart->ship_info->address}}</h4>
                <h4 class="col-md-4">City: {{$order->cart->ship_info->city}}</h4>
                <h4 class="col-md-4"> 
                    @if($order->status == 1)
                        <span class="btn-u btn-success btn-block btn-u-xs"><i class="glyphicon glyphicon-ok margin-right-5"></i> Deliverd</span>
                    @else
                        <span class="btn-u btn-warning btn-block btn-u-xs"><i class="glyphicon glyphicon-plus margin-right-5"></i> Pending</span>
                    @endif
                </h4>
            </div>
        </div>
        <div class="m-heading-1 border-green m-bordered">
            <h2 style="text-align: center">PAYMENT DETAILS</h2>
            <hr>
            <div class="row">
                <h4 class="col-md-4">Method: {{$order->payment->method->name}} </h4>
                <h4 class="col-md-4">Pyment Code: {{$order->payment->method->payment_code}}</h4>
                <h4 class="col-md-4">Email: {{$order->cart->ship_info->email}}</h4>
               
            </div>
        </div>
        <!-- BEGIN PAGE BASE CONTENT -->
       
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption font-dark">
                            <i class="icon-envelope-open font-dark"></i>
                            <span class="caption-subject bold uppercase">Items Orderd</span>
                        </div>
                        <div class="actions">
                           <h2>Total:  {{number_format($order->total)}} TSH     </h2>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">
                            <thead>
                                <tr class="">
                                    <th> Name </th>
                                    <th> Quantity </th>
                                    <th> Price </th>
                                    <th> Total Price </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($order->cart->cart_items as $item)
                                <tr>
                                    <td>{{$item->product->name}}</td>
                                    <td>{{$item->quantity}} </td>
                                    <td style="text-align: right;">{{number_format($item->price)}} TSH</td>
                                    <td style="text-align: right;">{{number_format($item->total)}} TSH</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>           
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