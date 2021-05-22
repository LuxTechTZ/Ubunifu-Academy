<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Online video Educational Website">
    <meta name="author" content="LuxTechTZ">
    <title>{{$book->title}} | {{ config('app.name', Lang::get('titles.app')) }}</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{url('/')}}/favicon.ico" type="image/x-icon">

    <link rel="apple-touch-icon" type="image/x-icon" href="{{url('/')}}/img/y.png">


    <!-- GOOGLE WEB FONT -->
    <link href="{{url('/')}}/https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{url('/')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{url('/')}}/css/style.css" rel="stylesheet">
	<link href="{{url('/')}}/css/vendors.css" rel="stylesheet">
	<link href="{{url('/')}}/css/icon_fonts/css/all_icons.min.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{url('/')}}/css/custom.css" rel="stylesheet">

</head>

<body>

	<div id="page" class="theia-exception">

	@include('jasiri.partials.header')
	<!-- /header -->

	<main>
		<section id="hero_in" class="courses">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>{{$book->title}} </h1>
				</div>
			</div>
		</section>
		<!--/hero_in-->

		<div class="bg_color_1">
			<nav class="secondary_nav sticky_horizontal">
				<div class="container">
					<ul class="clearfix">
						<li><a href="{{url('/')}}/#description" class="active">Description</a></li>
						<li><a href="{{url('/')}}/#lessons">Lessons</a></li>
						<li><a href="{{url('/')}}/#reviews">Reviews</a></li>
					</ul>
				</div>
			</nav>
			<div class="container margin_60_35">
				<div class="row">
					<div class="col-lg-8">

						<section id="description">
							<h2>{{$book->title}} </h2>
                            <hr>
                            {!! $book->full_details !!}
							<!-- /row -->
                            <div class="row">
                                <div class="col-md-6">
                                    <img style="width: 100%" src="{{url('/')}}/{{Storage::url($book->cover_image)}}" alt="{{$book->title}}">
                                </div>
                                <div class="col-md-6" style="font-size: 20px">
                                    <ul>
                                        <li><b>Title:</b> {{$book->title}}</li>
                                        <li><b>Pub:</b> {{$book->publisher}}</li>
                                        <li><b>Pages:</b> {{$book->pages}}</li>
                                        @if(isset($book->weight))
                                        <li><b>Weight:</b> {{$book->weight}}</li>
                                        @endif
                                        <li><b>ISBN:</b> {{$book->isbn}}</li>
                                        <li><b>Lng:</b> {{$book->language}}</li>
                                    </ul>
                                </div>
                            </div>
						</section>
						<!-- /section -->


						<section id="lessons">
							{!! $book->description !!}
                        <div id="accordion_lessons" role="tablist" class="add_bottom_45">

                        </div>
							<!-- /accordion -->
						</section>
						<!-- /section -->

						<section id="reviews">
							<h2>Reviews</h2>
							<div class="reviews-container">
								<div class="row">
									<div class="col-lg-3">
										<div id="review_summary">
											<strong>4.7</strong>
											<div class="rating">
												<i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
											</div>
											<small>Based on 4 reviews</small>
										</div>
									</div>
									<div class="col-lg-9">
										<div class="row">
											<div class="col-lg-10 col-9">
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<div class="col-lg-2 col-3"><small><strong>5 stars</strong></small></div>
										</div>
										<!-- /row -->
										<div class="row">
											<div class="col-lg-10 col-9">
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<div class="col-lg-2 col-3"><small><strong>4 stars</strong></small></div>
										</div>
										<!-- /row -->
										<div class="row">
											<div class="col-lg-10 col-9">
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<div class="col-lg-2 col-3"><small><strong>3 stars</strong></small></div>
										</div>
										<!-- /row -->
										<div class="row">
											<div class="col-lg-10 col-9">
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<div class="col-lg-2 col-3"><small><strong>2 stars</strong></small></div>
										</div>
										<!-- /row -->
										<div class="row">
											<div class="col-lg-10 col-9">
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: 0" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<div class="col-lg-2 col-3"><small><strong>1 stars</strong></small></div>
										</div>
										<!-- /row -->
									</div>
								</div>
								<!-- /row -->
							</div>

							<hr>
                            <!--
							<div class="reviews-container">

								<div class="review-box clearfix">
									<figure class="rev-thumb"><img src="{{url('/')}}/img/avatar1.jpg" alt="">
									</figure>
									<div class="rev-content">
										<div class="rating">
											<i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
										</div>
										<div class="rev-info">
											Admin – April 03, 2016:
										</div>
										<div class="rev-text">
											<p>
												Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
											</p>
										</div>
									</div>
								</div>
								-->
								<!-- /review-box -->


							<!-- /review-container -->
						</section>
						<!-- /section -->
					</div>
					<!-- /col -->

					<aside class="col-lg-4" id="sidebar">
						<div class="box_detail">
                            <img src="{{Storage::url($book->cover_image)}}" alt="{{$book->title}} " class="img-fluid">
							<div class="price">
								{{number_format($book->price)}} TSH<br> <span class="original_price"><em>{{number_format($book->price * 1.6)}} TSH </em>60% discount price</span>
							</div>
							<a href="{{url('/')}}/book/purchase/{{$book->id}}" class="btn_1 full-width">Purchase</a>
							<a href="{{url('/')}}/#0" class="btn_1 full-width outline"><i class="icon_heart"></i> Add to wishlist</a>
							<div id="list_feat">
								<h3>What's includes</h3>
								<ul>
									<li><i class="icon_mobile"></i>Mobile support</li>
									<li><i class="icon_archive_alt"></i>Lesson archive</li>
									<li><i class="icon_mobile"></i>Mobile support</li>
									<li><i class="icon_chat_alt"></i>Tutor chat</li>
									<li><i class="icon_document_alt"></i>Course certificate</li>
								</ul>
							</div>
						</div>
					</aside>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_color_1 -->
	</main>
	<!--/main-->

	@include('jasiri.partials.footer')
	<!--/footer-->
	</div>
	<!-- page -->

	<!-- COMMON SCRIPTS -->
    <script src="{{url('/')}}/js/jquery-3.5.1.min.js"></script>
    <script src="{{url('/')}}/js/common_scripts.js"></script>
    <script src="{{url('/')}}/js/main.js"></script>
	<script src="{{url('/')}}/assets/validate.js"></script>


</body>

</html>
