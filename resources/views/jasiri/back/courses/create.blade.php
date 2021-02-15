@extends('jasiri.back.layouts.app')

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
                <a href="index.html">Home</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span class="active">Create Course</span>
            </li>
        </ul>
        <!-- END PAGE BREADCRUMB -->
        <!-- BEGIN PAGE BASE CONTENT -->
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXTRAS PORTLET-->
                <div class="portlet light form-fit bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class=" icon-layers font-green"></i>
                            <span class="caption-subject font-green bold uppercase">Course Details</span>
                        </div>
                        <div class="actions">
                           
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <form method="post" class="form-horizontal form-bordered" action="{{url('/')}}/account/courses/store" enctype="multipart/form-data">
                        	@csrf
                            <div class="form-body">
                            	<div class="col-md-6">
									<div class="form-group">
										<label>Course Title</label>
										<input type="text" name="title" class="form-control" placeholder="Course name">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Select Category</label>
										<select class="form-control" name="category_id">
											<option></option>
											@foreach($categories as $category)
											<option value="{{$category->id}}">{{$category->title}} </option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Short Description</label>
										<textarea rows="5" class="form-control" name="description"></textarea>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Price</label>
										<input type="number" name="price" class="form-control" >
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Front Image</label>
										<input type="file" name="raw_image" class="form-control" accept="image/*">
									</div>
								</div>
								<div class="col-md-12">
	                                <div class="form-group">
	                                    <label>Course Description</label>
	                                    <div>
	                                        <textarea name="full_details" id="summernote_1"> </textarea>
	                                    </div>
	                                </div>
								</div>
                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-2 col-md-10">
                                        <button type="submit" class="btn green">
                                            <i class="fa fa-check"></i> Submit</button>
                                        <button type="button" class="btn default">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </form>
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