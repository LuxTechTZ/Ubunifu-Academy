@extends('layouts.chuo.front')
	<!-- CSS Implementing Plugins -->
	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="{{url('/')}}/front_assets/assets/plugins/animate.css">
	<link rel="stylesheet" href="{{url('/')}}/front_assets/assets/plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="{{url('/')}}/front_assets/assets/plugins/font-awesome/css/font-awesome.min.css">

	<!-- CSS Page Style -->
	<link rel="stylesheet" href="{{url('/')}}/front_assets/assets/css/pages/shortcode_timeline1.css">

	<!-- CSS Theme -->
	<link rel="stylesheet" href="{{url('/')}}/front_assets/assets/css/theme-colors/default.css" id="style_color">
	<link rel="stylesheet" href="{{url('/')}}/front_assets/assets/css/theme-skins/dark.css">







		<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="{{url('/')}}/front_assets/assets/plugins/animate.css">
	<link rel="stylesheet" href="{{url('/')}}/front_assets/assets/plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="{{url('/')}}/front_assets/assets/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{url('/')}}/front_assets/assets/plugins/scrollbar/css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="{{url('/')}}/front_assets/assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
	<link rel="stylesheet" href="{{url('/')}}/front_assets/assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">


		<!-- CSS Page Style -->
	<link rel="stylesheet" href="{{url('/')}}/front_assets/assets/css/pages/profile.css">

@section('template_linked_css')

@section('template_title')
Blank
@endsection

@endsection

@section('content')
<!--=== Breadcrumbs v4 ===-->
<div class="breadcrumbs-v4">
	<div class="container">
		<h1>Blog</h1>
		<ul class="breadcrumb-v4-in">
			<li><a href="/">Home</a></li>
			<li><a href="/">Entertainment</a></li>
			<li class="active">Blog</li>
		</ul>
	</div><!--/end container-->
</div>
<!--=== End Breadcrumbs v4 ===-->

		<!--=== Content Part ===-->
		<div class="container content">
			<ul class="timeline-v1">

			@foreach($posts as $post)
			@if(is_int($loop->iteration/2))
			<li class="timeline-inverted" id="post-{{$post->id}}">
			@else
			<li id="post-{{$post->id}}">
			@endif
				<div class="timeline-badge primary"><i class="glyphicon glyphicon-record"></i></div>
				<div class="timeline-panel">
					<div class="timeline-heading">
					@if(isset($post->images))
					<!-- Carousel -->
					<div id="myCarousel{{$post->id}}" class="carousel slide carousel-v1">
						<div class="carousel-inner">
					@foreach($post->images as $image)
						@if($image->is_main == 1)
							<div class="item active">
						@else	
							<div class="item">
						@endif	
								<img src="{{url('/')}}/{{$image->image}}" alt="">
								<div class="carousel-caption">
									<p>{{$image->id}}</p>
								</div>
							</div>
					@endforeach
							
						</div>

						<div class="carousel-arrow">
							<a class="left carousel-control" href="#myCarousel{{$post->id}}" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							</a>
							<a class="right carousel-control" href="#myCarousel{{$post->id}}" data-slide="next">
								<i class="fa fa-angle-right"></i>
							</a>
						</div>
					</div>
					</div>
					
					@endif
					<!-- End Carousel -->


					<div class="timeline-body text-justify">
						<h2 class="font-light"><a href="#">{{$post->title}}</a></h2>
						<div class="tab-v1">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#sumary{{$post->id}}" data-toggle="tab" aria-expanded="true">Summary</a></li>
							<li class=""><a href="#more{{$post->id}}" data-toggle="tab" aria-expanded="false">Read More</a></li>
							<li class=""><a href="#comments{{$post->id}}" data-toggle="tab" aria-expanded="false"><i class="fa fa-comments-o"></i> {{count($post->comments)}} Comments</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="sumary{{$post->id}}">
								<div class="row">
									
									<div class="col-md-12">
									<p>{{$post->intro}}</p>
										
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="more{{$post->id}}">
								<p>{{$post->details}}</p>
							</div>
							<div class="tab-pane fade" id="comments{{$post->id}}">
								<div class="panel panel-profile">
									
									<div id="scrollbar3" class="panel-body no-padding mCustomScrollbar" data-mcs-theme="minimal-dark">
										@if(isset($post->comments))
										@foreach($post->comments as $comment)
										<div class="alert-blocks alert-dismissable">
											<img src="{{url('/')}}/{{$comment->user->profile->avatar }}" alt="">
											<div class="overflow-h">
												<strong>{{$comment->user->name }}<small class="pull-right"> {{date('dS M Y H:i',strtotime($comment->created_at))}}</small></strong>
												<p>{{$comment->comment}} </p>
												<ul class="list-inline comment-list">
													<li><a href="#"><i class="fa fa-heart"></i></a>23</li>
													
												</ul>
											</div>
										</div>
										@endforeach
										@endif
										
									</div>
								</div>
								@if(isset(Auth::user()->id))
								<form class="sky-form" action="{{url('/')}}/blog/comment/{{$post->id}}" method="POST">
									@csrf
								<label for="file" class="input input-file">
									<button class="button"><input  type="tetx" id="file">Post</button><input name="comment" type="text" >
								</label>
								</form>
								@else
								<button class="btn-u" data-toggle="modal" data-target="#responsiveLogin">Login To Comment</button>
							
								@endif

							</div>
							
						</div>
					</div>
					</div>
					<div class="timeline-footer">
						<ul class="list-unstyled list-inline blog-info">
							<li><i class="fa fa-clock-o"></i> March 28, 2014</li>
							<li><i class="fa fa-comments-o"></i> <a href="#">7 Comments</a></li>
						</ul>
						<a class="likes" href="#"><i class="fa fa-heart"></i>239</a>
					</div>
				</div>
			</li>
		@endforeach
				

				<li class="clearfix" style="float: none;"></li>
			</ul>
		</div><!--/container-->
		<!-- End Content Part -->

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
	<script type="text/javascript" src="{{url('/')}}/front_assets/assets/plugins/back-to-top.js"></script>
	<script type="text/javascript" src="{{url('/')}}/front_assets/assets/plugins/smoothScroll.js"></script>
	<script type="text/javascript" src="{{url('/')}}/front_assets/assets/plugins/circles-master/circles.js"></script>
	<script type="text/javascript" src="{{url('/')}}/front_assets/assets/plugins/sky-forms-pro/skyforms/js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="{{url('/')}}/front_assets/assets/plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<!-- JS Customization -->
	<script type="text/javascript" src="{{url('/')}}/front_assets/assets/js/custom.js"></script>





		<!-- JS Page Level -->
	<script type="text/javascript" src="{{url('/')}}/front_assets/assets/js/app.js"></script>
	<script type="text/javascript" src="{{url('/')}}/front_assets/assets/js/plugins/datepicker.js"></script>
	<script type="text/javascript" src="{{url('/')}}/front_assets/assets/js/plugins/circles-master.js"></script>
	<script type="text/javascript" src="{{url('/')}}/front_assets/assets/js/plugins/style-switcher.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function() {
			App.init();
			App.initScrollBar();
			Datepicker.initDatepicker();
			CirclesMaster.initCirclesMaster1();
			S
@endsection