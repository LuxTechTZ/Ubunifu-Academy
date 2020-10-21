@extends('layouts.sms')

@section('template_linked_css')
 <!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="{{ url('/')}}/assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
<link href="{{ url('/')}}/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
<link href="{{ url('/')}}/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
<link href="{{ url('/')}}/assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
<link href="{{ url('/')}}/assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEAD-->
        <div class="page-head">
<h1 class="page-title"> {{$product->name}}
    <small>edit product</small>
</h1>
<!-- END PAGE TITLE-->
<!-- END PAGE HEADER-->
<div class="row">
    <div class="col-md-12">
       
            <div class="portlet">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-shopping-cart"></i>Edit Product  </div>
                    <div class="actions btn-set">
                        <button type="button" name="back" class="btn btn-secondary-outline">
                            <i class="fa fa-angle-left"></i> Back</button>

                    </div>
                </div>
                <div class="portlet-body">
                    <div class="tabbable-bordered">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#tab_general" data-toggle="tab"> General </a>
                            </li>
                           
                            <li>
                                <a href="#tab_images" data-toggle="tab"> Images </a>
                            </li>
                            @if(isset($product->id))
                            <li>
                                <a href="#tab_reviews" data-toggle="tab"> Reviews
                                    <span class="badge badge-success"> 3 </span>
                                </a>
                            </li>
                            <li>
                                <a href="#tab_history" data-toggle="tab"> History </a>
                            </li>
                            @endif
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_general">
                                <form class="form-horizontal form-row-seperated" action="
                        @if(isset($product->id))
                        {{ url('/')}}/home/products/updtae/{{$product->id}}
                        @else
                        {{ url('home/products/store') }}
                        @endif
                        " method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}

                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Name:
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-10">
                                            <input type="text" required="required" autocomplete="off" value="{{ $product->name }}{{ old('name')}}" class="form-control" name="name"> </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Description:
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" required="required" name="details">@if(isset($product->product_details)){{ $product->product_details->details }}@endif{{ old('description')}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Short Description:
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" required="required" name="description">@if(isset($product->product_details)){{ $product->product_details->description }}@endif{{ old('short_description')}}</textarea>

                                            <span class="help-block"> shown in product listings </span>
                                        </div>


                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Categories:
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-10">
                                            <div class="form-control height-auto">
                                                <div class="scroller" data-always-visible="1">
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            @foreach($categories as $category)
                                                            @if(!isset($category->main_category))
                                                            <label>
                                                                <input type="checkbox" name="product[categories][]" value="{{$category->id}}">{{$category->name}}
                                                            </label>
                                                                @foreach($categories as $category2)
                                                                @if($category->id == $category2->main_category)
                                                                <ul class="list-unstyled">
                                                                    <li>
                                                                        <label>
                                                                            <input type="checkbox" name="product[categories][]" value="{{$category2->id}}">{{$category2->name}}</label>
                                                                    </li>
                                                                   
                                                                </ul>
                                                                @endif
                                                                @endforeach
                                                            @endif
                                                            @endforeach
                                                        </li>
                                                       
                                                    </ul>
                                                </div>
                                            </div>
                                            <span class="help-block"> select one or more categories </span>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Quantity:
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-10">
                                            <input type="text" required="required" value="{{ $product->stock }}{{ old('stock')}}" class="form-control" name="stock" placeholder=""> </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Price:
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-10">
                                            <input type="text" required="required" value="{{ $product->price }}{{ old('price')}}" class="form-control" name="price" placeholder=""> </div>
                                    </div>
                                    <button type="submit" class="btn btn-success">
                                <i class="fa fa-check"></i> Save</button>
                                </div>
                            </form>
                            </div>
                            
                            <div class="tab-pane" id="tab_images">
                                

                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr role="row" class="heading">
                                            <th width="8%"> Image </th>
                                            <th width="10%"> Image Type</th>
                                            <th width="10%"> Thumbnail </th>
                                            <th width="10%"> </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($product->images as $image)
                                        <tr>
                                            <td>
                                                <a href="{{ url('/')}}/products/images/{{$image->url}}" class="fancybox-button" data-rel="fancybox-button">
                                                    <img class="img-responsive" src="{{ url('/')}}/{{$image->image}}" alt=""> </a>
                                            </td>

                                            <td>
                                                <label>
                                                    <input type="radio" name="main" value="1" @if($image->is_main == 1) checked @endif> </label>
                                            </td>
                                           
                                            <td>
                                                <p>{{$image->extension}}</p>
                                            </td>
                                            <td>
                                                <a href="{{ url('/')}}/home/products/imagedelete/{{$image->id}}" class="btn btn-default btn-sm">
                                                    <i class="fa fa-times"></i> Remove </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                    <form class="form-horizontal form-row-seperated" action="
                                    @if(isset($product->id))
                                    {{ url('/')}}/home/products/updateImages/{{$product->id}}
                                    @else
                                    {{ url('home/products/store') }}
                                    @endif
                                    " method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                        <div id="tab_images_uploader_container" class="text-align-reverse margin-bottom-10 pull-right">
                                        <input class="btn btn-success" type="file" name="img[]" multiple>
                                        </div>
                                        <button type="submit" class="btn btn-success pull-right">
                                    <i class="fa fa-check"></i> Save</button>
                                    </form>
                                    </tfoot>
                                     
                                </table>

                            </div>
                            <div class="tab-pane" id="tab_reviews">
                                <div class="table-container">
                                    <table class="table table-striped table-bordered table-hover" id="datatable_reviews">
                                        <thead>
                                            <tr role="row" class="heading">
                                                <th width="5%"> Review&nbsp;# </th>
                                                <th width="10%"> Review&nbsp;Date </th>
                                                <th width="10%"> Customer </th>
                                                <th width="20%"> Review&nbsp;Content </th>
                                                <th width="10%"> Status </th>
                                                <th width="10%"> Actions </th>
                                            </tr>
                                            <tr role="row" class="filter">
                                                <td>
                                                    <input type="text" class="form-control form-filter input-sm" name="product_review_no"> </td>
                                                <td>
                                                    <div class="input-group date date-picker margin-bottom-5" data-date-format="dd/mm/yyyy">
                                                        <input type="text" class="form-control form-filter input-sm" readonly name="product_review_date_from" placeholder="From">
                                                        <span class="input-group-btn">
                                                            <button class="btn btn-sm default" type="button">
                                                                <i class="fa fa-calendar"></i>
                                                            </button>
                                                        </span>
                                                    </div>
                                                    <div class="input-group date date-picker" data-date-format="dd/mm/yyyy">
                                                        <input type="text" class="form-control form-filter input-sm" readonly name="product_review_date_to" placeholder="To">
                                                        <span class="input-group-btn">
                                                            <button class="btn btn-sm default" type="button">
                                                                <i class="fa fa-calendar"></i>
                                                            </button>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control form-filter input-sm" name="product_review_customer"> </td>
                                                <td>
                                                    <input type="text" class="form-control form-filter input-sm" name="product_review_content"> </td>
                                                <td>
                                                    <select name="product_review_status" class="form-control form-filter input-sm">
                                                        <option value="">Select...</option>
                                                        <option value="pending">Pending</option>
                                                        <option value="approved">Approved</option>
                                                        <option value="rejected">Rejected</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="margin-bottom-5">
                                                        <button class="btn btn-sm btn-success filter-submit margin-bottom">
                                                            <i class="fa fa-search"></i> Search</button>
                                                    </div>
                                                    <button class="btn btn-sm btn-danger filter-cancel">
                                                        <i class="fa fa-times"></i> Reset</button>
                                                </td>
                                            </tr>
                                        </thead>
                                        <tbody> </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_history">
                                <div class="table-container">
                                    <table class="table table-striped table-bordered table-hover" id="datatable_history">
                                        <thead>
                                            <tr role="row" class="heading">
                                                <th width="25%"> Datetime </th>
                                                <th width="55%"> Description </th>
                                                <th width="10%"> Notification </th>
                                                <th width="10%"> Actions </th>
                                            </tr>
                                            <tr role="row" class="filter">
                                                <td>
                                                    <div class="input-group date datetime-picker margin-bottom-5" data-date-format="dd/mm/yyyy hh:ii">
                                                        <input type="text" class="form-control form-filter input-sm" readonly name="product_history_date_from" placeholder="From">
                                                        <span class="input-group-btn">
                                                            <button class="btn btn-sm default date-set" type="button">
                                                                <i class="fa fa-calendar"></i>
                                                            </button>
                                                        </span>
                                                    </div>
                                                    <div class="input-group date datetime-picker" data-date-format="dd/mm/yyyy hh:ii">
                                                        <input type="text" class="form-control form-filter input-sm" readonly name="product_history_date_to" placeholder="To">
                                                        <span class="input-group-btn">
                                                            <button class="btn btn-sm default date-set" type="button">
                                                                <i class="fa fa-calendar"></i>
                                                            </button>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control form-filter input-sm" name="product_history_desc" placeholder="To" /> </td>
                                                <td>
                                                    <select name="product_history_notification" class="form-control form-filter input-sm">
                                                        <option value="">Select...</option>
                                                        <option value="pending">Pending</option>
                                                        <option value="notified">Notified</option>
                                                        <option value="failed">Failed</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="margin-bottom-5">
                                                        <button class="btn btn-sm btn-default filter-submit margin-bottom">
                                                            <i class="fa fa-search"></i> Search</button>
                                                    </div>
                                                    <button class="btn btn-sm btn-danger-outline filter-cancel">
                                                        <i class="fa fa-times"></i> Reset</button>
                                                </td>
                                            </tr>
                                        </thead>
                                        <tbody> </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection

@section('content00')
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEAD-->
        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>{{$product->name}}
                    <small>Details</small>
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
                <a href="{{url('/')}}/home/products">Products</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span class="active">{{$product->name}}</span>
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
                        <form role="form" method="POST" action="{{url('/')}}/home/colleges/store">
                            @csrf
                            <div class="form-body">
                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Full name">
                                    <label for="name">College Name</label>
                                    <span class="help-block">Full College or University Name</span>
                                </div>
                                <div class="form-group form-md-line-input">
                                    <input type="text" name="acronym" class="form-control" id="acronym" placeholder="Abreviation">
                                    <label for="acronym">Acronym</label>
                                    <span class="help-block">Short Form Of the Name eg.IFM</span>
                                </div>
                                 <div class="form-group form-md-line-input">
                                    <input type="text" name="region" class="form-control" id="region" placeholder="Location">
                                    <label for="region">Region</label>
                                    <span class="help-block"></span>
                                </div>
                                 <div class="form-group form-md-line-input">
                                    <input type="text" name="district" class="form-control" id="district" placeholder="Location">
                                    <label for="district">District</label>
                                    <span class="help-block">Short Form Of the Name eg.IFM</span>
                                </div>
                                <div class="form-group form-md-line-input has-info">
                                    <select class="form-control" name="leader_id" id="leader_id">
                                        <option value=""></option>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                        <option value="4">Option 4</option>
                                    </select>
                                    <label for="leader_id">College Leader</label>
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
</div>
</div>
</div>
@endsection

@section('footer_scripts')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{ url('/')}}/assets/global/scripts/datatable.js" type="text/javascript"></script>
<script src="{{ url('/')}}/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
<script src="{{ url('/')}}/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
<script src="{{ url('/')}}/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="{{ url('/')}}/assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="{{ url('/')}}/assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
<script src="{{ url('/')}}/assets/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script>
<script src="{{ url('/')}}/assets/global/plugins/plupload/js/plupload.full.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="{{ url('/')}}/assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ url('/')}}/assets/pages/scripts/ecommerce-products-edit.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
@endsection