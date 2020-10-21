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
				<div class="">
					
					<form action="/home/order/create/{{$cart->id}}" method="POST">
						@csrf
					<div>
						
						<section class="billing-info col-md-6">
						<div class="header-tags">
							<div class="overflow-h">
								<h2>Billing info</h2>
								<p><i class="rounded-x fa fa-home"></i> Shipping and address info</p>
								
							</div>
						</div>
						<hr>
							<div class="row">
								<div class=" md-margin-bottom-40">
									<h2 class="title-type">Billing Address</h2>
									<div class="billing-info-inputs checkbox-list">
										<div class="row">
											<div class="col-sm-6">
												<input id="name" type="text" placeholder="First Name" name="first_name" required="required" class="form-control required">
												<input required="required" id="email" type="email" placeholder="Email" name="email" class="form-control required email">
											</div>
											<div class="col-sm-6">
												<input required="required" id="surname" type="text" placeholder="Last Name" name="last_name" class="form-control required">
												<input required="required" id="phone" type="tel" placeholder="Phone" name="phone" class="form-control required">
											</div>
										</div>
										<input required="required" id="billingAddress" type="text" placeholder="Address Line 1" name="address" class="form-control required">
										<input id="billingAddress2" type="text" placeholder="Address Line 2" name="address2" class="form-control">
										<div class="row">
											<div class="col-sm-6">
												<input required="required" id="city" type="text" placeholder="City" name="city" class="form-control required">
											</div>
											<div class="col-sm-6">
												<input id="zip" type="text" placeholder="Zip/Postal Code" name="zip" class="form-control">
											</div>
										</div>

										
									</div>
								</div>
								
							</div>
						</section>

						<section class="col-md-6">
						<div class="header-tags">
							<div class="overflow-h">
								<h2>Payment</h2>
								<p><i class="rounded-x fa fa-credit-card"></i> Select Payment method</p>
								
							</div>
						</div>
						<hr>
							<div class="row">
								<div class="col-md-12 md-margin-bottom-50">
									<h2 class="title-type">Choose a payment method</h2>
									<!-- Accordion -->
									<div class="accordion-v2">
										<div class="panel-group" id="accordion">
											<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
															<i class="fa fa-credit-card"></i>
															Mobile Payment
														</a>
													</h4>
												</div>
												<div id="collapseOne" class="panel-collapse collapse in">
													<div class="panel-body cus-form-horizontal">
														
														<div class="form-group">
															<label class="col-sm-4 no-col-space control-label">Payment Types</label>
															<div class="col-sm-8">
																<ul class="list-inline payment-type">
																	<li><i class="fa fa-cc-paypal"></i></li>
																	<li><i class="fa fa-cc-visa"></i></li>
																	<li><i class="fa fa-cc-mastercard"></i></li>
																	<li><i class="fa fa-cc-discover"></i></li>
																</ul>
															</div>
														</div>
														
													</div>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
															<i class="fa fa-paypal"></i>
															Pay on Deliverly
														</a>
													</h4>
												</div>
												<div id="collapseTwo" class="panel-collapse collapse">
													<div class="content margin-left-10">
														<a href="#"><img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/PP_logo_h_150x38.png" alt="PayPal"></a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- End Accordion -->
								</div>
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
									<button type="submit" class="btn-u btn-u-sea-shop pull-right">Confirm Order</button>
									
								</div>
							</div>
						</div>
					</div>
				</form>
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
@endsection