@extends('layouts.chuo.front')

@section('template_linked_css')

@endsection

@section('content')
<!--=== Breadcrumbs v4 ===-->
<div class="breadcrumbs-v4">
	<div class="container">
		<h1>{{$module->name}}</h1>
		<ul class="breadcrumb-v4-in">
			<li><a href="index.html">Home</a></li>
			<li class="active">Educational Materials</li>
		</ul>
	</div><!--/end container-->
</div>
<!--=== End Breadcrumbs v4 ===-->

<!-- Top Bordered Funny Boxes -->
<div class="container content-sm">
	<h2>
		{{$module->name}} - Materials
	</h2>
	<hr>
	<div class="row">

	@foreach($module->lectures as $lecture)
		<div class="col-sm-4 sm-margin-bottom-40">
			<div class="funny-boxes funny-boxes-top-red">
				<div class="row">
					
						<h2><a href="{{url('/')}}/materials/course/lecture/{{$lecture->id}}">{{$lecture->name}}</a></h2>
						<iframe src="//www.slideshare.net/slideshow/embed_code/key/{{$lecture->file}}" width="595" height="300" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> <div style="margin-bottom:5px"> </div>

				</div>
			</div>
			<hr>
		</div>
	@endforeach
</div>
</div>
	

@endsection

@section('template_linked_js')

@endsection