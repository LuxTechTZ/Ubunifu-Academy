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
        

       
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                @foreach($categories as $category)
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption font-dark">
                            <i class="icon-envelope-open font-dark"></i>
                            <span class="caption-subject bold uppercase">{{$category->name}}</span>
                        </div>
                        <div class="actions">
                           <a data-toggle="modal" href="#add{{$category->id}}" type="button" class="btn dark btn-outline"><i class="icon-plus"></i> Add Product</a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">
                            <thead>
                                <tr class="">
                                    <th> Product ID </th>
                                    <th> Image </th>
                                    <th> Product </th>
                                    <th> Price </th>
                                    <th> Stock </th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($category->products as $product)
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td class="product-in-table">
                                        <a href="{{url('/')}}/product/{{$product->id}}"><img class="full-width img-responsive" style="max-width: 60px" src="{{url('/')}}/{{$product->images->first()->image}}" alt=""></a>
                                    </td>
                                    <td>
                                        <h3>{{$product->name}}</h3>
                                        <span>Sed aliquam tincidunt tempus</span>
                                    </td>
                                    <td>{{number_format($product->price)}}</td>
                                    <td>{{$product->stock}}</td>
                                    <td style="max-width: 100px">
                                        <a href="{{url('/')}}/home/products/view/{{$product->id}}" class="btn btn-xs btn-success"><i class="icon-eye"></i> View</a> 
                                        <a data-toggle="modal" href="#edit-course{{$product->id}}" type="button" class="btn btn-xs btn-warning"><i class="icon-pencil"></i> Edit</a> 
                                        <a href="{{url('/')}}/home/products/delete/{{$product->id}}" class="btn btn-xs btn-danger"><i class="icon-eye"></i> Delete </a> 
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @endforeach
                <hr>

                <!-- END EXAMPLE TABLE PORTLET-->
               
            </div>
        </div>
        <!-- END PAGE BASE CONTENT -->
    </div>
    <!-- END CONTENT BODY -->
</div>

@foreach($categories as $category)
<div class="modal fade" id="add{{$category->id}}" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Add Product in {{$category->name}} </h4>
            </div>
            <div class="modal-body"> 
                <form role="form" method="POST" action="{{url('/')}}/home/products/create" enctype="multipart/form-data">
                    <input type="hidden" name="category_id" value="{{$category->id}}">
                    @csrf
                    <div class="form-body">
                        <div class="form-group form-md-line-input">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Full name">
                            <label for="name">Product Name</label>
                            <span class="help-block">Full Product Name</span>
                        </div>
                        
                        <div class="form-group form-md-line-input">
                            <label for="details" placeholder="Short Details" id="details" name="details" >Short Details</label>
                            <textarea class="form-control" name="details" rows="3"></textarea>
                            <span class="help-block">Short Description of the Product</span>
                        </div>
                        <div class="form-group form-md-line-input">
                            <label for="description" placeholder="Short Description" id="description" name="description" >Short Description</label>
                            <textarea class="form-control" name="description" rows="5"></textarea>
                            <span class="help-block">Full Description of the Product</span>
                        </div>
                        <div class="form-group form-md-line-input col-md-6">
                            <input type="text" class="form-control" name="price" id="price" placeholder="Price">
                            <label for="price">Price</label>
                            <span class="help-block">Product Price</span>
                        </div> 
                        <div class="form-group form-md-line-input col-md-6">
                            <input type="text" class="form-control" name="stock" id="stock" placeholder="Stock">
                            <label for="stock">Stock</label>
                            <span class="help-block">Available Stock</span>
                        </div>     
                        <div class="form-group form-md-line-input col-md-6">
                            <input type="file" multiple="multiple" class="form-control" name="images[]" id="images" placeholder="Price">
                            <label for="images">Images</label>
                            <span class="help-block">Product Images</span>
                        </div>                        
                    <hr>
                    </div>
                    <div class="form-actions noborder col-md-12">
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