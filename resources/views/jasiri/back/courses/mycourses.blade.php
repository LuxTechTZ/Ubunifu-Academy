@extends('jasiri.back.layouts.clean')

@section('page')
  Create Course
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
                <h1>Create Course
                    <small>Fill the form Below to create course</small>
                </h1>
            </div>
            <!-- END PAGE TITLE -->
            <!-- BEGIN PAGE TOOLBAR -->
          
        </div>
        <!-- END PAGE HEAD-->
        <!-- BEGIN PAGE BREADCRUMB -->
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <a href="{{url('/')}}/account/dashboard">Home</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span class="active">Your Courses</span>
            </li>
        </ul>
        <!-- END PAGE BREADCRUMB -->
        <!-- BEGIN PAGE BASE CONTENT -->
        <div class="row">
            <div class="col-md-12">
                <div class="portlet light portlet-fit bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class=" icon-layers font-green"></i>
                            <span class="caption-subject font-green bold uppercase">List Of your Courses</span>
                            <!-- <div class="caption-desc font-grey-cascade"> Default list element style. Activate by adding <pre class="mt-code">.list-news ext-1</pre> class to the <pre class="mt-code">ul</pre> element. </div> -->
                        </div>
                        <div class="actions">
                           <a class="btn green" href="{{url('/')}}/account/courses/create">Add Course</a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="mt-element-list">
                            <div class="mt-list-head list-news ext-1 font-white bg-grey-gallery">
                                <div class="list-head-title-container">
                                    <h3 class="list-title">News Courses</h3>
                                </div>
                                <div class="list-count pull-right bg-red">{{count(Auth::user()->teacher->courses)}}</div>
                            </div>
                            <div class="mt-list-container list-news ext-1">
                                <ul>
                                    @foreach(Auth::user()->teacher->courses as $course)
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
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE BASE CONTENT -->
    </div>
    <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
@endsection


@section('footer_scripts') 
<!-- BEGIN PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
 <!-- END CORE PLUGINS -->
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

<!-- END PAGE LEVEL PLUGINS -->

@endsection