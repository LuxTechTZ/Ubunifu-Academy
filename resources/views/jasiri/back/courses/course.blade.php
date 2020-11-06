@extends('jasiri.back.layouts.clean')

@section('page')
  Course
@endsection

@section('template_linked_css')
 <!-- BEGIN PAGE LEVEL PLUGINS -->

@endsection

@section('content')
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEAD-->
        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>Edit Course Details
                    <small>Course Details</small>
                </h1>
            </div>
            <!-- END PAGE TITLE -->
            
        </div>
        <!-- END PAGE HEAD-->
        <!-- BEGIN PAGE BREADCRUMB -->
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <a href="{{url('/')}}/account/dashboard">Home</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <a href="{{url('/')}}/account/mycourses">My Courses</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span class="active">Countries</span>
            </li>
        </ul>
        <!-- END PAGE BREADCRUMB -->
        <!-- BEGIN PAGE BASE CONTENT -->
        @include('semi.alert')
        <div class="m-heading-1 border-green m-bordered">
       
            <h3>{{$course->title}} <br> 
               
                <hr>
                <h3>Selected Batch</h3>
                <div class="row">
                    
                <div class="col-md-4">
                    <p><b>Title: </b> {{$course->category->title}}</p>
                </div>
                <div class="col-md-4">
                    
                    <p><b>Details: </b> {{$course->description}}</p>
                </div>
                <div class="col-md-4">
                    
                    <p><b>Price: </b> {{$course->price}}</p>
                </div>
                <div class="col-md-4">
                    
                    <p><b>Discount Price: </b> {{$course->discount_price}}</p>
                </div>
                <div class="col-md-4">
                    <p><b>Image:</b> {{$course->image}}</p>
                </div>
                <div class="col-md-12">

                    <p>{!! $course->full_details !!}</p>
                    
                </div>
                </div>
            </h3>

        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->

                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption font-dark">
                            <i class="icon-settings font-dark"></i>
                            <span class="caption-subject bold uppercase">Header Fixed</span>
                        </div>
                        <div class="actions">
                            <div class="btn-group btn-group-devided" data-toggle="buttons">
                                <label class="btn btn-transparent dark btn-outline btn-circle btn-sm active">
                                    <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                                <label class="btn btn-transparent dark btn-outline btn-circle btn-sm">
                                    <input type="radio" name="options" class="toggle" id="option2">Settings</label>
                            </div>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">
                            <thead>
                                <tr class="">
                                    <th> Rendering engine </th>
                                    <th> Browser </th>
                                    <th> Platform(s) </th>
                                    <th> Engine version </th>
                                    <th> CSS grade </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> Trident </td>
                                    <td> Internet Explorer 4.0 </td>
                                    <td> Win 95+ </td>
                                    <td> 4 </td>
                                    <td> X </td>
                                </tr>
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

@endsection