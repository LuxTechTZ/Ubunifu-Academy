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
		<h1>Notes & Materials</h1>
		<ul class="breadcrumb-v4-in">
			<li><a href="/">Home</a></li>
			<li class="active">Educational Materials</li>
		</ul>
	</div><!--/end container-->
</div>
<!--=== End Breadcrumbs v4 ===-->

<!-- Top Bordered Funny Boxes -->
<div class="container content-sm">


	@if(isset(Auth::User()->id))
	@if(!isset(Auth::User()->profile->course->id))
	<?php

		header("Location: /profile"); /* Redirect browser */

		/* Make sure that code below does not get executed when we redirect. */
		exit;
	?>
	@endif
	@endif

	@foreach($colleges as $college)
	@if(isset(Auth::user()->id))
		@if(Auth::user()->college->id == $college->id)
		<div class="row">
		<h2><b>{{$college->name}} ({{$college->acronym}})</b> </h2>
			@foreach($college->faculties as $faculty)
			@if(Auth::user()->profile->course->faculty->id == $faculty->id)
			<h3>
				* {{$faculty->name}}
			</h3>
			<hr>

			<div class="row">
			<?php $j = 0 ;?>
			@foreach($faculty->courses as $course)
			@if(Auth::user()->profile->course->id == $course->id)
			<?php $j++ ;?>
			<div class="col-sm-6 sm-margin-bottom-40">
				<div class="funny-boxes funny-boxes-top-red">
					<div class="row">
						<div class="col-md-4 funny-boxes-img">
							<img class="img-responsive" src="{{url('/')}}/front_assets/assets/img/main/img12.jpg" alt="">
							
						</div>
						<div class="col-md-8">
							<h2><a href="{{url('/')}}/materials/course/{{$course->id}}">{{$course->name}}</a></h2>
							<ul class="list-unstyled funny-boxes-rating">
								<li><i class="fa fa-star"></i></li>
								<li><i class="fa fa-star"></i></li>
								<li><i class="fa fa-star"></i></li>
								<li><i class="fa fa-star"></i></li>
								<li><i class="fa fa-star"></i></li>
							</ul>
							<ul class="list-unstyled">
								<li><i class="fa-fw fa fa-briefcase"></i> Available Modules: {{$course->moduless->count()}}</li>
								<li><i class="fa-fw fa fa-map-marker"></i> Available Materials: 
								</li>
							</ul>
						</div>
					</div>
				</div>
				<?php 
				$i = $j/2;
				if (is_int($i)) {
					echo "<br>";
					}
				?>
			</div>
			@endif
			@endforeach
			</div>
			@endif
			@endforeach
		</div>
		<hr>
		@endif
	@else
	
	<div class="row">
	<h2><b>{{$college->name}} ({{$college->acronym}})</b> </h2>
		@foreach($college->faculties as $faculty)
		<h3>
			* {{$faculty->name}}
		</h3>
		<hr>

		<div class="row">
		<?php $j = 0 ;?>
		@foreach($faculty->courses as $course)
		<?php $j++ ;?>
		<div class="col-sm-6 sm-margin-bottom-40">
			<div class="funny-boxes funny-boxes-top-red">
				<div class="row">
					<div class="col-md-4 funny-boxes-img">
						<img class="img-responsive" src="{{url('/')}}/front_assets/assets/img/main/img12.jpg" alt="">
						
					</div>
					<div class="col-md-8">
						<h2><a href="{{url('/')}}/materials/course/{{$course->id}}">{{$course->name}}</a></h2>
						<ul class="list-unstyled funny-boxes-rating">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
						</ul>
						<ul class="list-unstyled">
							<li><i class="fa-fw fa fa-briefcase"></i> Available Modules: {{$course->moduless->count()}}</li>
							<li><i class="fa-fw fa fa-map-marker"></i> Available Materials: 
							</li>
						</ul>
					</div>
				</div>
			</div>
			<?php 
			$i = $j/2;
			if (is_int($i)) {
				echo "<br>";
				}
			?>
		</div>
		@endforeach
		</div>
		@endforeach
	</div>
	<hr>
	@endif
	@endforeach
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