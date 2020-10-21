@extends('layouts.chuo.front')

@section('template_linked_css')
	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="{{url('/')}}/front_assets/assets/plugins/animate.css">
	<link rel="stylesheet" href="{{url('/')}}/front_assets/assets/plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="{{url('/')}}/front_assets/assets/plugins/font-awesome/css/font-awesome.min.css">

	<!-- CSS Theme -->
	<link rel="stylesheet" href="{{url('/')}}/front_assets/assets/css/theme-colors/default.css" id="style_color">
	<link rel="stylesheet" href="{{url('/')}}/front_assets/assets/css/theme-skins/dark.css">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="{{url('/')}}/front_assets/assets/css/custom.css">
@endsection

@section('content')

<!--=== Breadcrumbs v4 ===-->
<div class="breadcrumbs-v4">
	<div class="container">
		<h1>{{$faculty->main_college->acronym}} | {{$course->faculty->acronym}} | {{$course->acronym}}</h1>
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
		{{$course->name}} - Modules
	</h2>
	<hr>
	@if(!isset(Auth::User()->profile->course->id))
	<?php
		header("Location: /profile"); /* Redirect browser */

		/* Make sure that code below does not get executed when we redirect. */
		exit;
	?>
	@endif

	@if(Auth::User()->profile->course->id == $course->id)


	<div class="row">
	<h2>{{$course->acronym}} {{Auth::User()->profile->yos->year}}</h2>

	<div class="row">
	<h2>Semester {{Auth::User()->profile->semester->roman_value}} </h2>
	@foreach($course->moduless as $module)
	@if($module->yos_id == Auth::User()->profile->yos->id)
	@if($module->semester_id == Auth::User()->profile->semester->id)



		<div class="col-sm-6 sm-margin-bottom-40">
			<div class="funny-boxes funny-boxes-top-red">
				<div class="row">
					<div class="col-md-4 funny-boxes-img">
						<img class="img-responsive" src="{{url('/')}}/front_assets/assets/img/main/img12.jpg" alt="">
						<ul class="list-unstyled">
							<li><i class="fa-fw fa fa-briefcase"></i> Available Lectures: {{$module->lectures->count()}}</li>
							<li><i class="fa-fw fa fa-map-marker"></i> Available Past Pappers: 
							</li>
						</ul>
					</div>
					<div class="col-md-8">
						<h2><a href="{{url('/')}}/materials/course/module/{{$module->id}}">{{$module->name}} Sm: {{$module->semester_id}}</a></h2>
						<ul class="list-unstyled funny-boxes-rating">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
						</ul>
						<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et.</p>
					</div>
				</div>
			</div>
			<hr>
		</div>

	@endif
	@endif
	@endforeach
</div>

</div>

@else
<h1>No Access</h1>
@endif
</div>
<!-- End Top Bordered Funny Boxes -->


@endsection

@section('template_linked_js')
<!-- JS Implementing Plugins -->
	<script type="text/javascript" src="{{url('/')}}/front_assets/assets/plugins/back-to-top.js"></script>
	<script type="text/javascript" src="{{url('/')}}/front_assets/assets/plugins/smoothScroll.js"></script>
	<!-- JS Customization -->
	<script type="text/javascript" src="{{url('/')}}/front_assets/assets/js/custom.js"></script>
	<!-- JS Page Level -->
	<script type="text/javascript" src="{{url('/')}}/front_assets/assets/js/app.js"></script>
	<script type="text/javascript" src="{{url('/')}}/front_assets/assets/js/plugins/style-switcher.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function() {
			App.init();
			StyleSwitcher.initStyleSwitcher();
		});
	</script>
	<!-- JS Implementing Plugins -->
<script src="{{url('/')}}/chuo_assets/assets/plugins/back-to-top.js"></script>
<script src="{{url('/')}}/chuo_assets/assets/plugins/smoothScroll.js"></script>
<script src="{{url('/')}}/chuo_assets/assets/plugins/jquery.parallax.js"></script>
<script src="{{url('/')}}/chuo_assets/assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
<script src="{{url('/')}}/chuo_assets/assets/plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="{{url('/')}}/chuo_assets/assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="{{url('/')}}/chuo_assets/assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<!-- JS Customization -->
<script src="{{url('/')}}/chuo_assets/assets/js/custom.js"></script>
<!-- JS Page Level -->
<script src="{{url('/')}}/chuo_assets/assets/js/shop.app.js"></script>
<script src="{{url('/')}}/chuo_assets/assets/js/plugins/owl-carousel.js"></script>
<script src="{{url('/')}}/chuo_assets/assets/js/plugins/revolution-slider.js"></script>
<script src="{{url('/')}}/chuo_assets/assets/js/plugins/style-switcher.js"></script>
<script>
	jQuery(document).ready(function() {
		App.init();
		App.initScrollBar();
		App.initParallaxBg();
		OwlCarousel.initOwlCarousel();
		RevolutionSlider.initRSfullWidth();
		StyleSwitcher.initStyleSwitcher();
	});
</script>
@endsection