@extends('jasiri.back.layouts.clean')

@section('page')
  Paid Courses
@endsection



@section('template_linked_css')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="{{url('/')}}/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css" />
<link href="{{url('/')}}/assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
<link href="{{url('/')}}/assets/global/plugins/bootstrap-summernote/summernote.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
@endsection

@section('content')
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEAD-->
        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>Your Paid Courses
                    <small>List of your Courses</small>
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
                <span class="active">Paid Courses</span>
            </li>
        </ul>
        <!-- END PAGE BREADCRUMB -->
        <!-- BEGIN PAGE BASE CONTENT -->
        @include('semi.alert')
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption font-dark">
                            <i class="icon-settings font-dark"></i>
                            <span class="caption-subject bold uppercase">Paid Courses</span>
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
                        <div class="mt-element-list">
                            <div class="mt-list-head list-news ext-1 font-white bg-grey-gallery">
                                <div class="list-head-title-container">
                                    <h3 class="list-title">News Courses</h3>
                                </div>
                                <div class="list-count pull-right bg-red">{{count(Auth::user()->student->courses)}}</div>
                            </div>
                            <div class="mt-list-container list-news ext-1">
                                <ul>
                                    @if(isset(Auth::user()->student->courses))
                                    @foreach(Auth::user()->student->courses as $course)
                                    <li class="mt-list-item">
                                        <div class="list-icon-container">
                                            <a href="javascript:;">
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                        <div class="list-thumb">
                                            <a href="javascript:;">
                                                <img alt="" src="{{url('/')}}/{{$course->image}}" />
                                            </a>
                                        </div>
                                        <div class="list-datetime bold uppercase font-red"> {{date('j M, Y',strtotime($course->pivot->created_at))}} </div>
                                        <div class="list-item-content">
                                            <div class="col-md-6">
                                                <ul class="">
                                                    <li><strong>Start date</strong> {{date('d M Y',strtotime($course->pivot->created_at))}}</li>
                                                    <li><strong>Expire date</strong> {{date('d M Y',strtotime($course->pivot->created_at)+10000000)}}</li>
                                                   
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <ul>
                                                     <li><strong>Category</strong>{{$course->category->title}}</li>
                                                    <li><strong>Teacher</strong> {{$course->teacher->user->name}}</li>
                                                </ul>
                                            </div>
                                            <h3 class="uppercase">
                                                <a href="{{url('/')}}/account/courses/edit/{{$course->id}}">{{$course->title}}</a>
                                            </h3>
                                            <p>{{$course->description}} </p>
                                        </div>
                                    </li>
                                    @endforeach
                                    @else
                                    <p>You dont have any course yet</p>
                                    @foreach(App\Models\Jasiri\Course::get() as $course)
                                    <li class="mt-list-item">
                                        <div class="list-icon-container">
                                            <a href="javascript:;">
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                        <div class="list-thumb">
                                            <a href="javascript:;">
                                                <img alt="" src="{{url('/')}}/{{$course->image}}" />
                                            </a>
                                        </div>
                                        <div class="list-datetime bold uppercase font-red"> {{date('j M, Y',strtotime($course->pivot->created_at))}} </div>
                                        <div class="list-item-content">
                                            <h3 class="uppercase">
                                                <a href="{{url('/')}}/account/courses/edit/{{$course->id}}">{{$course->title}}</a>
                                            </h3>
                                            <p>{{$course->description}} </p>
                                        </div>
                                    </li>
                                    @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>

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
 <!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{url('/')}}/assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets/global/plugins/bootstrap-markdown/lib/markdown.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets/global/plugins/bootstrap-summernote/summernote.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="{{url('/')}}/assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{url('/')}}/assets/pages/scripts/components-editors.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
@endsection