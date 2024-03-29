@extends('jasiri.back.layouts.app')

@section('page')
  Create Course
@endsection

@section('content')
<link href="{{url('/')}}/bootstrap-summernote/summernote.css" rel="stylesheet" type="text/css" />

<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Account</a>
        </li>
        <li class="breadcrumb-item active">Add Course</li>
      </ol>

		<div class="box_general padding_bottom">
			<div class="header_box version_2">
				<h2><i class="fa fa-user"></i>Course details</h2>
			</div>
			<div class="row">
				
				<div class="col-md-12 add_top_30">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Course Title</label>
								<input type="text" class="form-control" placeholder="Course name">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Select Category</label>
								<select class="form-control" name="category_id">
									@foreach($categories as $category)
									<option value="{{$category->id}}">{{$category->title}} </option>
									@endforeach
								</select>
							</div>
						</div>
					</div>
					<!-- /row-->
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Front Image</label>
								<input type="file" class="form-control" name="image" accept="image/*">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Email</label>
								<input type="email" class="form-control" placeholder="Your email">
							</div>
						</div>
					</div>
					<!-- /row-->
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Personal info</label>
								<textarea style="height:100px;" class="form-control" placeholder="Personal info"></textarea>
							</div>
							<div class="form-group last">
                                <label class="control-label col-md-2">Default Editor</label>
                                <div class="col-md-10">
                                    <div name="summernote" id="summernote_1"> </div>
                                </div>
                            </div>
						</div>
					</div>
					<!-- /row-->
				</div>
			</div>
		</div>

		<!-- /box_general-->
		<div class="row">
			<div class="col-md-6">
				<div class="box_general padding_bottom">
					<div class="header_box version_2">
						<h2><i class="fa fa-lock"></i>Change password</h2>
					</div>
					<div class="form-group">
						<label>Old password</label>
						<input class="form-control" type="password">
					</div>
					<div class="form-group">
						<label>New password</label>
						<input class="form-control" type="password">
					</div>
					<div class="form-group">
						<label>Confirm new password</label>
						<input class="form-control" type="password">
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="box_general padding_bottom">
					<div class="header_box version_2">
						<h2><i class="fa fa-envelope"></i>Change email</h2>
					</div>
					<div class="form-group">
						<label>Old email</label>
						<input class="form-control" name="old_email" id="old_email" type="email">
					</div>
					<div class="form-group">
						<label>New email</label>
						<input class="form-control" name="new_email" id="new_email" type="email">
					</div>
					<div class="form-group">
						<label>Confirm new email</label>
						<input class="form-control" name="confirm_new_email" id="confirm_new_email" type="email">
					</div>
				</div>
			</div>
		</div>
		<!-- /row-->
		<p><a href="#0" class="btn_1 medium">Save</a></p>
	</div>
	  <!-- /.container-fluid-->

	  <form method="post" action="{{url('/')}}/account/courses/upload_to_jw" enctype="multipart/form-data">
	  	@csrf
	  	<input type="file" name="file">
	  	<button type="submit">Upload</button>
	  </form>
</div>

<script src="{{url('/')}}/back_assets/vendor/dropzone.min.js"></script>

<script src="{{url('/')}}/bootstrap-summernote/summernote.min.js" type="text/javascript"></script>

@endsection