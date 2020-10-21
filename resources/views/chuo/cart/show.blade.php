@extends('layouts.chuo.front')

@section('template_linked_css')
<!-- CSS Header and Footer -->
<link rel="stylesheet" href="{{url('/')}}/chuo_assets/assets/css/headers/header-v5.css">
<link rel="stylesheet" href="{{url('/')}}/chuo_assets/assets/css/footers/footer-v4.css">

<!-- CSS Implementing Plugins -->
<link rel="stylesheet" href="{{url('/')}}/chuo_assets/assets/plugins/animate.css">
<link rel="stylesheet" href="{{url('/')}}/chuo_assets/assets/plugins/line-icons/line-icons.css">
<link rel="stylesheet" href="{{url('/')}}/chuo_assets/assets/plugins/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="{{url('/')}}/chuo_assets/assets/plugins/jquery-steps/css/custom-jquery.steps.css">
<link rel="stylesheet" href="{{url('/')}}/chuo_assets/assets/plugins/scrollbar/css/jquery.mCustomScrollbar.css">

<!-- Style Switcher -->
<link rel="stylesheet" href="{{url('/')}}/chuo_assets/assets/css/plugins/style-switcher.css">

<!-- CSS Theme -->
<link rel="stylesheet" href="{{url('/')}}/chuo_assets/assets/css/theme-colors/default.css" id="style_color">

<!-- CSS Customization -->
<link rel="stylesheet" href="{{url('/')}}/chuo_assets/assets/css/custom.css">
@endsection

@section('template_title')
Cart
@endsection

@section('content')
<!--=== Breadcrumbs v4 ===-->
<div class="breadcrumbs-v4">
	<div class="container">
		<h1>Educational Materials</h1>
		<ul class="breadcrumb-v4-in">
			<li><a href="/">Home</a></li>
			<li class="active">Cart</li>
		</ul>
	</div><!--/end container-->
</div>
<!--=== End Breadcrumbs v4 ===-->

<!--=== Content Medium Part ===-->
		<div class="content-md margin-bottom-30">
			<div class="container">
					
					<div >
						<div class="header-tags">
							<div class="overflow-h">
								<h2>Shopping Cart</h2>
								<p>Review &amp; edit your products</p>
								<i class="rounded-x fa fa-check"></i>
							</div>
						</div>
						<section>
							<div class="table-responsive">
								<!-- Products Form -->
								<div class="shopping-cart" >
								<table class="table table-striped">
									<thead>
										<tr>
											<th>Product</th>
											<th>Price</th>
											<th>Qty</th>
											<th>Total</th>
										</tr>
									</thead>
									<tbody>
										@foreach($cart->cart_items as $cart_item)
										<tr>
											<td class="product-in-table">
											<a href="{{url('/')}}/product/{{$cart_item->product->id}}"><img class="full-width img-responsive"  src="{{url('/')}}/{{$cart_item->product->images->first()->image}}" alt=""></a>
												<div class="product-it-in">
													<h3>{{$cart_item->product->name}}</h3>
													<span>Sed aliquam tincidunt tempus</span>
												</div>
											</td>
											<td>{{number_format($cart_item->product->price)}} TSH</td>
										<form action="{{url('/')}}/home/cart/update/{{$cart_item->product->id}}" method="post">
												@csrf
												<input type="hidden" name="cart_id" value="{{$cart->id}}">
											<td>
												<button type='button' class="quantity-button" name='subtract' onclick='javascript: sub{{$cart_item->product->id}}();' value='-'>-</button>
												<input type='text' class="quantity-field" name='qty{{$cart_item->product->id}}' value="{{$cart_item->quantity}}" id='qty{{$cart_item->product->id}}'/>
												<button type='button' class="quantity-button" name='add' onclick='javascript: document.getElementById("qty{{$cart_item->product->id}}").value++;' value='+'>+</button>
											</td>
											<td class="shop-red">{{number_format($cart_item->total)}} TSH</td>
											<td>
												<button type="submit" class="btn">Update</button>
												<a type="button" href="{{url('/')}}/cart/remove/{{$cart_item->product->id}}" class="close"><span>&times;</span><span class="sr-only">Remove</span></a>
											</td>
										</form>
										</tr>
										@endforeach

									</tbody>
								</table>
								</div>
								<!-- End Product Form -->
							</div>
						</section>

						<div class="coupon-code ">
							<div class="row">
								<div class="col-sm-4 sm-margin-bottom-30">
									<h3>Discount Code</h3>
									<p>Enter your coupon code</p>
									<input class="form-control margin-bottom-10" name="code" type="text">
									<button type="button" class="btn-u btn-u-sea-shop">Apply Coupon</button>
								</div>
								<div class="col-sm-4 col-sm-offset-3">
							<div class="panel panel-green margin-bottom-40">
								<div class="panel-heading">
									<h3 class="panel-title"><i class="fa fa-money"></i> Cost Summary</h3>
								</div>
								<table class="table table-hover">
									<thead>
										<tr>
											
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><h4>Subtotal:</h4> </td>
											<td class="text-right">
												<h4>{{number_format($cart->total)}} TSH</h4> 

										</td>
										</tr>
										<tr>
											<td><h4>Shipping:</h4> </td>
											<td class="text-right"> - - - - </td>
										</tr>
										<tr>
											<td><h4>Total:</h4> </td>
											<td class="text-right" style="font-style: bold"> <h3>{{number_format($cart->total)}} TSH</h3> 
											</td>
										</tr>
										
									</tbody>
								</table>
							</div>
									<a href="{{url('/')}}/chekout" type="button" class="btn-u btn-u-sea-shop pull-right">Chek Out</a>
									
								</div>
							</div>
						</div>
					</div>
			</div><!--/end container-->
		</div>
		<!--=== End Content Medium Part ===-->

@endsection

@section('template_linked_js')
<!-- JS Implementing Plugins -->
<script src="{{url('/')}}/chuo_assets/assets/plugins/back-to-top.js"></script>
<script src="{{url('/')}}/chuo_assets/assets/plugins/smoothScroll.js"></script>
<script src="{{url('/')}}/chuo_assets/assets/plugins/jquery-steps/build/jquery.steps.js"></script>
<script src="{{url('/')}}/chuo_assets/assets/plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="{{url('/')}}/chuo_assets/assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js"></script>
<!-- JS Customization -->
<script src="{{url('/')}}/chuo_assets/assets/js/custom.js"></script>
<!-- JS Page Level -->
<script src="{{url('/')}}/chuo_assets/assets/js/shop.app.js"></script>
<script src="{{url('/')}}/chuo_assets/assets/js/forms/page_login.js"></script>
<script src="{{url('/')}}/chuo_assets/assets/js/plugins/stepWizard.js"></script>
<script src="{{url('/')}}/chuo_assets/assets/js/forms/product-quantity.js"></script>
<script src="{{url('/')}}/chuo_assets/assets/js/plugins/style-switcher.js"></script>
<script>
	jQuery(document).ready(function() {
		App.init();
		Login.initLogin();
		App.initScrollBar();
		StepWizard.initStepWizard();
		StyleSwitcher.initStyleSwitcher();
	});
</script>
<script type="text/javascript">
	@foreach($cart->cart_items as $cart_item)
	function sub{{$cart_item->product->id}}(){
    if(document.getElementById("qty{{$cart_item->product->id}}").value - 1 < 0)
        return;
    else
        document.getElementById("qty{{$cart_item->product->id}}").value--;
}
	@endforeach
</script>
@endsection