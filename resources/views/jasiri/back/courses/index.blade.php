@extends('jasiri.back.layouts.app')

@section('page')
	Courses
@endsection

@section('content')
<div class="content-wrapper">
	<div class="container-fluid">
	  <!-- Breadcrumbs-->
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item">
	      <a href="#">Dashboard</a>
	    </li>
	    <li class="breadcrumb-item active">Your Courses</li>
	  </ol>
		<div class="box_general">
			<div class="header_box">
				<h2 class="d-inline-block">Your Courses</h2>
				<div class="filter">
					<select name="orderby" class="selectbox">
						<option value="Any status">Any status</option>
						<option value="Approved">Started</option>
						<option value="Pending">Pending</option>
						<option value="Cancelled">Cancelled</option>
					</select>
				</div>
			</div>
			<div class="list_general">
				<ul>
					@if(isset(Auth::user()->student->courses))
					@foreach(Auth::user()->student->courses as $course)
					<li>
						<figure><img src="{{url('/')}}/img{{$course->image}}" alt=""></figure>
						<h4>{{$course->title}} <i class="approved">Started</i></h4>
						<ul class="course_list">
							<li><strong>Start date</strong> {{date('d M Y',strtotime($course->pivot->created_at))}}</li>
							<li><strong>Expire date</strong> {{date('d M Y',strtotime($course->pivot->created_at)+10000000)}}</li>
							<li><strong>Category</strong>{{$course->category->title}}</li>
							<li><strong>Teacher</strong> {{$course->teacher->user->name}}</li>
						</ul>
						<h6>Course description</h6> 
						<p>{{$course->description}}</p>
						<ul class="buttons">
							<li><a href="{{url('/')}}/courses/{{$course->category->title}}/{{$course->title}}" class="btn_1 gray approve"><i class="fa fa-fw fa-check-circle-o"></i> Learn</a></li>
							<!-- <li><a href="#0" class="btn_1 gray delete"><i class="fa fa-fw fa-times-circle-o"></i> Cancel</a></li> -->
						</ul>
					</li>
					@endforeach
					@else
					<p>You dont have any course yet</p>
					@foreach(App\Models\Jasiri\Course::get() as $course)
					<li>
						<figure><img src="{{url('/')}}/back_assets/img/course_1.jpg" alt=""></figure>
						<small>{{$course->category->title}}</small>
						<h4>{{$course->title}} </h4>
						<p>{{$course->description}}</p>
						<p>
							<a href="{{url('/')}}/courses/{{$course->category->title}}/{{$course->title}}" class="btn_1 gray"><i class="fa fa-fw fa-eye"></i> View course</a>
							<a href="{{url('/')}}/course/purchase/{{$course->id}}" class="btn_1 blue"><i class="fa fa-fw fa-user"> </i> Buy course</a>
						</p>
						<ul class="buttons">
							<li><a href="#0" class="btn_1 gray delete wishlist_close"><i class="fa fa-fw fa-times-circle-o"></i> Unreleated</a></li>
						</ul>
					</li>
					@endforeach
					@endif
				</ul>
			</div>
		</div>
		<!-- /box_general-->
		<nav aria-label="...">
			<ul class="pagination pagination-sm add_bottom_30">
				<li class="page-item disabled">
					<a class="page-link" href="#" tabindex="-1">Previous</a>
				</li>
				<!-- <li class="page-item"><a class="page-link" href="#">1</a></li>
				<li class="page-item"><a class="page-link" href="#">2</a></li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
				<li class="page-item"> -->
					<a class="page-link" href="#">Next</a>
				</li>
			</ul>
		</nav>
		<!-- /pagination-->
	  </div>
	  <!-- /container-fluid-->
</div>
@endsection