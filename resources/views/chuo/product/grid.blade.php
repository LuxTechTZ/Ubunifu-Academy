@extends('layouts.chuo.front')

@section('template_linked_css')
 	<!-- CSS Header and Footer -->
 	<link rel="stylesheet" href="{{url('/')}}/chuo_assets/assets/css/headers/header-v5.css">
 	<link rel="stylesheet" href="{{url('/')}}/chuo_assets/assets/css/footers/footer-v4.css">

 	<!-- CSS Implementing Plugins -->
 	<link rel="stylesheet" href="{{url('/')}}/chuo_assets/assets/plugins/animate.css">
 	<link rel="stylesheet" href="{{url('/')}}/chuo_assets/assets/plugins/line-icons/line-icons.css">
 	<link rel="stylesheet" href="{{url('/')}}/chuo_assets/assets/plugins/font-awesome/css/font-awesome.min.css">
 	<link rel="stylesheet" href="{{url('/')}}/chuo_assets/assets/plugins/noUiSlider/jquery.nouislider.min.css">
 	<link rel="stylesheet" href="{{url('/')}}/chuo_assets/assets/plugins/scrollbar/css/jquery.mCustomScrollbar.css">

@endsection

@section('template_title')
@if(isset($category))
{{$category->name}}
@else
Products
@endif
@endsection

@section('content')
<div class="shop-product">
			<!-- Breadcrumbs v5 -->
			<div class="container">
				<ul class="breadcrumb-v5">
					<li><a href="/"><i class="fa fa-home"></i></a></li>
					<li class="active">Products</li>
				</ul>
			</div>
			<!-- End Breadcrumbs v5 -->
	<div class="container">
				<div class="row">


				<div class="col-md-12">
 					<div class="row margin-bottom-5">
 						<div class="col-sm-4 result-category">
 							<h2>
 							@if(isset($category))
							{{$category->name}}
							@else
							Products
							@endif</h2>
 							<small class="shop-bg-green badge-results">{{count($products)}} Results</small>
 						</div>
 						<div class="col-sm-8">
 							<ul class="list-inline clear-both">
 								
 								<li class="sort-list-btn">
 									<h3>Categories :</h3>
 									<div class="btn-group">
 										<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
 											All <span class="caret"></span>
 										</button>
 										<ul class="dropdown-menu" role="menu">
 											<li><a href="{{url('/')}}/products/list">All</a></li>
 											@foreach($categories as $category)
 											<li><a href="{{url('/')}}/products/category/{{$category->name}}">{{$category->name}}</a></li>
 											@endforeach

 										</ul>
 									</div>
 								</li>
 								<li class="sort-list-btn">
 									<h3>Show :</h3>
 									<div class="btn-group">
 										<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
 											20 <span class="caret"></span>
 										</button>
 										<ul class="dropdown-menu" role="menu">
 											<li><a href="#">All</a></li>
 											<li><a href="#">10</a></li>
 											<li><a href="#">5</a></li>
 											<li><a href="#">3</a></li>
 										</ul>
 									</div>
 								</li>
 							</ul>
 						</div>
 					</div><!--/end result category-->

 					<div class="filter-results">
 						<div class="row illustration-v2 margin-bottom-30">
 							<?php $j = 0 ;?>
 							@foreach($products as $product)
 							<?php $j++ ;?>
 							<div class="col-md-3">
 								<div class="product-img product-img-brd">

									<a href="{{url('/')}}/product/{{$product->id}}"><img class="full-width img-responsive"  src="{{url('/')}}/{{$product->images->first()->image}}" alt=""></a>

 									<a class="product-review" href="shop-ui-inner.html">Quick review</a>
 									<a class="add-to-cart" href="{{url('/')}}/adtocart/{{$product->id}}"><i class="fa fa-shopping-cart"></i>Add to cart</a>
 									<div class="shop-rgba-dark-green rgba-banner">New</div>
 								</div>
 								<div class="product-description product-description-brd margin-bottom-30">
 									<div class="overflow-h margin-bottom-5">
 										<div class="pull-left">
 											<h4 class="title-price"><a href="{{url('/')}}/product/{{$product->id}}">{{$product->name}}</a></h4>
 											<span class="gender text-uppercase" style="color: green">{{$product->category->name}}</span>
 										</div>
 										<div class="product-price">
 											<span class="title-price" style="color: black">{{number_format($product->price)}} TSH</span>
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
 							</div>
 							<?php 
 								$i = $j/4;
 								if (is_int($i)) {
 									echo "
						</div>
 						<div class='row illustration-v2 margin-bottom-30'>
 									";
 								}
 							?>
 							@endforeach

 						</div>
 					</div><!--/end filter resilts-->

 					<div class="text-center">
 						<ul class="pagination pagination-v2">
 							<li><a href="#"><i class="fa fa-angle-left"></i></a></li>
 							<li><a href="#">1</a></li>
 							<li class="active"><a href="#">2</a></li>
 							<li><a href="#">3</a></li>
 							<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
 						</ul>
 					</div><!--/end pagination-->
 				</div>

 			</div>
 		</div>

 			</div>

@endsection

@section('template_linked_js')
<!-- JS Implementing Plugins -->
 	<script src="{{url('/')}}/chuo_assets/assets/plugins/back-to-top.js"></script>
 	<script src="{{url('/')}}/chuo_assets/assets/plugins/smoothScroll.js"></script>
 	<script src="{{url('/')}}/chuo_assets/assets/plugins/noUiSlider/jquery.nouislider.all.min.js"></script>
 	<script src="{{url('/')}}/chuo_assets/assets/plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js"></script>
 	<!-- JS Customization -->
 	<script src="{{url('/')}}/chuo_assets/assets/js/custom.js"></script>
 	<!-- JS Page Level -->
 	<script src="{{url('/')}}/chuo_assets/assets/js/shop.app.js"></script>
 	<script src="{{url('/')}}/chuo_assets/assets/js/plugins/mouse-wheel.js"></script>
 	<script src="{{url('/')}}/chuo_assets/assets/js/plugins/style-switcher.js"></script>
 	<script>
 		jQuery(document).ready(function() {
 			App.init();
 			App.initScrollBar();
 			MouseWheel.initMouseWheel();
 			StyleSwitcher.initStyleSwitcher();
 		});
 	</script>
@endsection