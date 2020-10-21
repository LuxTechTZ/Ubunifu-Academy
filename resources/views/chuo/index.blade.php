@extends('layouts.chuo.front')

@section('template_linked_css')
	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="{{url('/')}}/chuo_assets/assets/plugins/animate.css">
	<link rel="stylesheet" href="{{url('/')}}/chuo_assets/assets/plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="{{url('/')}}/chuo_assets/assets/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{url('/')}}/chuo_assets/assets/plugins/scrollbar/css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="{{url('/')}}/chuo_assets/assets/plugins/owl-carousel/owl-carousel/owl.carousel.css">
	<link rel="stylesheet" href="{{url('/')}}/chuo_assets/assets/plugins/revolution-slider/rs-plugin/css/settings.css">

	<!-- CSS Theme -->
	<link rel="stylesheet" href="{{url('/')}}/chuo_assets/assets/css/theme-colors/default.css" id="style_color">
@endsection

@section('template_title')
Home
@endsection

@section('content')
<!--=== Slider ===-->
	<div class="tp-banner-container">
		<div class="tp-banner">
		<ul>
				

		<!-- SLIDE -->
		<li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 5">
			<!-- MAIN IMAGE -->
			<img src="{{url('/')}}/images/sliders/naturalbeutytz1.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="right top" data-bgrepeat="no-repeat">

			<div class="tp-caption revolution-ch5 sft start"
			data-x="right"
			data-hoffset="5"
			data-y="130"
			data-speed="1500"
			data-start="500"
			data-easing="Back.easeInOut"
			data-endeasing="Power1.easeIn"
			data-endspeed="300">
			<strong>Natural </strong>Hair
		</div>

		<!-- LAYER -->
		<div class="tp-caption revolution-ch4 sft"
		data-x="right"
		data-hoffset="-14"
		data-y="210"
		data-speed="1400"
		data-start="2000"
		data-easing="Power4.easeOut"
		data-endspeed="300"
		data-endeasing="Power1.easeIn"
		data-captionhidden="off"
		style="z-index: 6">
		Beautifully Natural hair.<br>
		
		</div>

		<!-- LAYER -->
		<div class="tp-caption sft"
		data-x="right"
		data-hoffset="0"
		data-y="300"
		data-speed="1600"
		data-start="2800"
		data-easing="Power4.easeOut"
		data-endspeed="300"
		data-endeasing="Power1.easeIn"
		data-captionhidden="off"
		style="z-index: 6">
		<a href="{{url('/')}}/college" class="btn-u btn-brd btn-brd-hover btn-u-light">See Now</a>
		</div>
		</li>
		<!-- END SLIDE -->

		<!-- SLIDE -->
		<li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 5">
			<!-- MAIN IMAGE -->
			<img src="{{url('/')}}/images/sliders/naturalskin.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="right top" data-bgrepeat="no-repeat">

			<div class="tp-caption revolution-ch5 sft start"
			data-x="right"
			data-hoffset="5"
			data-y="130"
			data-speed="1500"
			data-start="500"
			data-easing="Back.easeInOut"
			data-endeasing="Power1.easeIn"
			data-endspeed="300">
			<strong>Skin</strong> Care
		</div>

		<!-- LAYER -->
		<div class="tp-caption revolution-ch4 sft"
		data-x="right"
		data-hoffset="-14"
		data-y="210"
		data-speed="1400"
		data-start="2000"
		data-easing="Power4.easeOut"
		data-endspeed="300"
		data-endeasing="Power1.easeIn"
		data-captionhidden="off"
		style="z-index: 6">
		Natural skin,<br> young and beautiful.
		</div>

		<!-- LAYER -->
		<div class="tp-caption sft"
		data-x="right"
		data-hoffset="0"
		data-y="300"
		data-speed="1600"
		data-start="2800"
		data-easing="Power4.easeOut"
		data-endspeed="300"
		data-endeasing="Power1.easeIn"
		data-captionhidden="off"
		style="z-index: 6">
		<a href="{{url('/')}}/products/list" class="btn-u btn-brd btn-brd-hover btn-u-light">Shop Now</a>
		</div>
		</li>
		<!-- END SLIDE -->

		<!-- SLIDE -->
		<li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 5">
			<!-- MAIN IMAGE -->
			<img src="{{url('/')}}/images/sliders/naturalfood.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="right top" data-bgrepeat="no-repeat">

			<div class="tp-caption revolution-ch5 sft start"
			data-x="right"
			data-hoffset="5"
			data-y="130"
			data-speed="1500"
			data-start="500"
			data-easing="Back.easeInOut"
			data-endeasing="Power1.easeIn"
			data-endspeed="300">
			<strong>Health Care</strong>
		</div>

		<!-- LAYER -->
		<div class="tp-caption revolution-ch4 sft"
		data-x="right"
		data-hoffset="-14"
		data-y="210"
		data-speed="1400"
		data-start="2000"
		data-easing="Power4.easeOut"
		data-endspeed="300"
		data-endeasing="Power1.easeIn"
		data-captionhidden="off"
		style="z-index: 6">
		Let your confidence shine
		</div>

		<!-- LAYER -->
		<div class="tp-caption sft"
		data-x="right"
		data-hoffset="0"
		data-y="300"
		data-speed="1600"
		data-start="2800"
		data-easing="Power4.easeOut"
		data-endspeed="300"
		data-endeasing="Power1.easeIn"
		data-captionhidden="off"
		style="z-index: 6">
		<a href="{{url('/')}}/products/category/Laptops" class="btn-u btn-brd btn-brd-hover btn-u-light">Shop Now</a>
		</div>
		</li>
		<!-- END SLIDE -->

		<!-- SLIDE -->
		<li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 5">
			<!-- MAIN IMAGE -->
			<img src="{{url('/')}}/images/sliders/beautyAccesories.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="right top" data-bgrepeat="no-repeat">

			<div class="tp-caption revolution-ch5 sft start"
			data-x="right"
			data-hoffset="5"
			data-y="130"
			data-speed="1500"
			data-start="500"
			data-easing="Back.easeInOut"
			data-endeasing="Power1.easeIn"
			data-endspeed="300">
			<strong>Hair Beauty</strong> Accessories
		</div>

		<!-- LAYER -->
		<div class="tp-caption revolution-ch4 sft"
		data-x="right"
		data-hoffset="-14"
		data-y="210"
		data-speed="1400"
		data-start="2000"
		data-easing="Power4.easeOut"
		data-endspeed="300"
		data-endeasing="Power1.easeIn"
		data-captionhidden="off"
		style="z-index: 6">
		Everything you want in one Place
		</div>

		<!-- LAYER -->
		<div class="tp-caption sft"
		data-x="right"
		data-hoffset="0"
		data-y="300"
		data-speed="1600"
		data-start="2800"
		data-easing="Power4.easeOut"
		data-endspeed="300"
		data-endeasing="Power1.easeIn"
		data-captionhidden="off"
		style="z-index: 6">
		<a href="{{url('/')}}/products/category/Smart%20Phones" class="btn-u btn-brd btn-brd-hover btn-u-light">Shop Now</a>
		</div>
		</li>
		<!-- END SLIDE -->
</ul>
<div class="tp-bannertimer tp-bottom"></div>
</div>
</div>
<!--=== End Slider ===-->

<!--=== Product Content ===-->
<div class="container content-md">
	<!--=== Illustration v1 ===-->
	<div class="row margin-bottom-60">
		<div class="col-md-6 md-margin-bottom-30">
			<div class="overflow-h">
				<div class="illustration-v1 illustration-img1">
					<div class="illustration-bg">
						<div class="illustration-ads ad-details-v1">
							<h3>BLACK FRIDAY <strong>SALE</strong> 30% - 60% <strong>off</strong></h3>
							<a class="btn-u btn-brd btn-brd-hover btn-u-light" href="{{url('/')}}/products/list">Shop Now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="overflow-h">
				<a class="illustration-v1 illustration-img2" href="{{url('/')}}/college">
					<span class="illustration-bg">
						<span class="illustration-ads ad-details-v2">
							<span class="item-time">Premium </span>
							<span class="item-name">Best Brands </span>
						</span>
					</span>
				</a>
			</div>
		</div>
	</div><!--/end row-->
	<!--=== End Illustration v1 ===-->

	<div class="heading heading-v1 margin-bottom-20">
		<h2>Some of Our Best Selling Broducts</h2>
		<p>Buy now our best selling Products to get offers of up to 50%.</p>
	</div>

	<!--=== Illustration v2 ===-->
	<div class="illustration-v2 margin-bottom-60">
		<div class="customNavigation margin-bottom-25">
			<a class="owl-btn prev rounded-x"><i class="fa fa-angle-left"></i></a>
			<a class="owl-btn next rounded-x"><i class="fa fa-angle-right"></i></a>
		</div>

		<ul class="list-inline owl-slider">
			@foreach($products as $product)
			<li class="item">
				<div class="product-img">
					<a href="{{url('/')}}/product/{{$product->id}}"><img class="full-width img-responsive"  src="{{url('/')}}/{{$product->images->first()->image}}" alt=""></a>
					<a class="product-review" href="{{url('/')}}/product/{{$product->id}}">Quick review</a>
					<a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>Add to cart</a>
				</div>
				<div class="product-description product-description-brd">
					<div class="overflow-h margin-bottom-5">
						<div class="pull-left">
							<h4 class="title-price"><a href="{{url('/')}}/product/{{$product->id}}">{{$product->name}}</a></h4>
							<span class="gender text-uppercase" style="color: green">{{$product->category->name}}</span>
						</div>
						<div class="product-price">
							<span class="title-price">{{number_format($product->price)}} TSH</span>
						</div>
					</div>
					<ul class="list-inline product-ratings">
						<li><i class="rating-selected fa fa-star"></i></li>
						<li><i class="rating-selected fa fa-star"></i></li>
						<li><i class="rating-selected fa fa-star"></i></li>
						<li><i class="rating fa fa-star"></i></li>
						<li><i class="rating fa fa-star"></i></li>
						<li class="like-icon"><a data-original-title="Add to wishlist" data-toggle="tooltip" data-placement="left" class="tooltips" href="#"><i class="fa fa-heart"></i></a></li>
					</ul>
				</div>
			</li>
			@endforeach
			
			
		</ul>
	</div>
	<!--=== End Illustration v2 ===-->

	<!--=== Illustration v3 ===-->
	<div class="row margin-bottom-50">
		<div class="col-md-4 md-margin-bottom-30">
			<div class="overflow-h">
				<a class="illustration-v3 illustration-img1" href="#">
					<span class="illustration-bg">
						<span class="illustration-ads">
							<span class="illustration-v3-category">
								<span class="product-category">Hair</span>
								<span class="product-amount">56 Items</span>
							</span>
						</span>
					</span>
				</a>
			</div>
		</div>
		<div class="col-md-4 md-margin-bottom-30">
			<div class="overflow-h">
				<a class="illustration-v3 illustration-img2" href="#">
					<span class="illustration-bg">
						<span class="illustration-ads">
							<span class="illustration-v3-category">
								<span class="product-category">Skin</span>
								<span class="product-amount">68 Items</span>
							</span>
						</span>
					</span>
				</a>
			</div>
		</div>
		<div class="col-md-4">
			<div class="overflow-h">
				<a class="illustration-v3 illustration-img3" href="#">
					<span class="illustration-bg">
						<span class="illustration-ads">
							<span class="illustration-v3-category">
								<span class="product-category">Accessories</span>
								<span class="product-amount">250 Items</span>
							</span>
						</span>
					</span>
				</a>
			</div>
		</div>
	</div>
	<!--=== End Illustration v3 ===-->

	<div class="heading heading-v1 margin-bottom-40">
		<h2>Latest products</h2>
	</div>

	<!--=== Illustration v2 ===-->
	<div class="row illustration-v2">
		
	</div>
	<!--=== End Illustration v2 ===-->
</div>
<!--=== End Product Content ===-->

<!--=== Twitter-Block ===-->
<div class="parallaxBg twitter-block margin-bottom-60">
	<div class="container">
		<div class="heading heading-v1 margin-bottom-20">
			<h2>Latest Posts</h2>
		</div>
		<script src="https://assets.juicer.io/embed.js" type="text/javascript"></script>
		<link href="https://assets.juicer.io/embed.css" media="all" rel="stylesheet" type="text/css" />
		<ul class="juicer-feed" data-feed-id="tzphotolabs" data-per="3"></ul>
		</div>
	</div>
	<!--=== End Twitter-Block ===-->

	<div class="container">
		<!--=== Product Service ===-->
		<div class="row margin-bottom-60">
			<div class="col-md-4 product-service md-margin-bottom-30">
				<div class="product-service-heading">
					<i class="fa fa-truck"></i>
				</div>
				<div class="product-service-in">
					<h3>Free Delivery</h3>
					
				</div>
			</div>
			<div class="col-md-4 product-service md-margin-bottom-30">
				<div class="product-service-heading">
					<i class="icon-earphones-alt"></i>
				</div>
				<div class="product-service-in">
					<h3>Customer Service</h3>

				</div>
			</div>
			<div class="col-md-4 product-service">
				<div class="product-service-heading">
					<i class="icon-refresh"></i>
				</div>
				<div class="product-service-in">
					<h3>Free Returns</h3>
					
				</div>
			</div>
		</div><!--/end row-->
		<!--=== End Product Service ===-->

		<!--=== Illustration v4 ===-->
		<div class="row illustration-v4 margin-bottom-40">
			<div class="col-md-4">
				<div class="heading heading-v1 margin-bottom-20">
					<h2>Top Rated</h2>
				</div>
				
			</div>
			<div class="col-md-4">
				<div class="heading heading-v1 margin-bottom-20">
					<h2>Best Sellers</h2>
				</div>
				
			</div>
			<div class="col-md-4 padding">
				<div class="heading heading-v1 margin-bottom-20">
					<h2>Sale Items</h2>
				</div>

			</div>
		</div><!--/end row-->
		<!--=== End Illustration v4 ===-->
	</div><!--/end cotnainer-->

	<!--=== Collection Banner ===-->
<!-- 	<div class="collection-banner">
		<div class="container">
			<div class="col-md-7 md-margin-bottom-50">
				<h2>Free First Week</h2>
				<p>Start Your trail Now</p><br>
			</div>
			<div class="col-md-5">
				<div class="overflow-h">
					<span class="percent-numb" style="font-size: 100px">100</span>
					<div class="percent-off">
						<span class="discount-percent">%</span>
						<span class="discount-off">Free</span>
					</div>
					<div class="new-offers shop-bg-green rounded-x">
						<p>Free</p>
						<span>Week</span>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!--=== End Collection Banner ===-->

	<!--=== Sponsors ===-->
	<div class="container content">
		<div class="heading heading-v1 margin-bottom-40">
			<h2>Sponsors</h2>
			
		</div>

		<ul class="list-inline owl-slider-v2">
			<li class="item first-child">
				<img src="{{url('/')}}//uploads/logo/Chuo Master.png" alt="">
			</li>
			<li class="item first-child">
				<img src="{{url('/')}}//uploads/logo/luxtechtz.png" alt="">
			</li>
			<li class="item first-child">
				<img src="{{url('/')}}//uploads/logo/ubunifu.jpg" alt="">
			</li>
		</ul><!--/end owl-carousel-->
	</div>
	<!--=== End Sponsors ===-->


@endsection

@section('template_linked_js')

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