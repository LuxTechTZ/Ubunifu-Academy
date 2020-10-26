@extends('jasiri.layouts.app')

@section('content')
<main>
		<section id="hero_in" class="cart_section">
			<div class="wrapper">
				<div class="container">
					<div class="bs-wizard clearfix">
						<div class="bs-wizard-step active">
							<div class="text-center bs-wizard-stepnum">Your cart</div>
							<div class="progress">
								<div class="progress-bar"></div>
							</div>
							<a href="#0" class="bs-wizard-dot"></a>
						</div>

						<div class="bs-wizard-step disabled">
							<div class="text-center bs-wizard-stepnum">Payment</div>
							<div class="progress">
								<div class="progress-bar"></div>
							</div>
							<a href="#0" class="bs-wizard-dot"></a>
						</div>

						<div class="bs-wizard-step disabled">
							<div class="text-center bs-wizard-stepnum">Finish!</div>
							<div class="progress">
								<div class="progress-bar"></div>
							</div>
							<a href="#0" class="bs-wizard-dot"></a>
						</div>
					</div>
					<!-- End bs-wizard -->
				</div>
			</div>
		</section>
		<!--/hero_in-->

		<div class="bg_color_1">
			<div class="container margin_60_35">
				<div class="row">
					<div class="col-lg-8">
						<div class="box_cart">
						<table class="table table-striped cart-list">
							<thead>
								<tr>
									<th>
										Item
									</th>
									<th>
										Discount
									</th>
									<th>
										Price
									</th>
									<th>
										Actions
									</th>
								</tr>
							</thead>
							<tbody>
								@foreach($cart->items as $item)
								<tr>
									<td>
										<div class="thumb_cart">
											<img src="{{url('/')}}/img{{$item->course->image}}" alt="Image">
										</div>
										<span class="item_cart">{{$item->course->title}}</span>
									</td>
									<td>
										0%
									</td>
									<td>
										<strong>{{number_format($item->total_price)}} TSH</strong>
									</td>
									<td class="options" style="width:5%; text-align:center;">
										<a href="#"><i class="icon-trash"></i></a>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
						<div class="cart-options clearfix">
							<div class="float-left">
								<div class="apply-coupon">
									<div class="form-group">
										<input type="text" name="coupon-code" value="" placeholder="Your Coupon Code" class="form-control">
									</div>
									<div class="form-group">
										<button type="button" class="btn_1 outline">Apply Coupon</button>
									</div>
								</div>
							</div>
							<div class="float-right fix_mobile">
								<button type="button" class="btn_1 outline">Update Cart</button>
							</div>
						</div>
						<!-- /cart-options -->
					</div>
					</div>
					<!-- /col -->
					
					<aside class="col-lg-4" id="sidebar">
						<div class="box_detail">
							<div id="total_cart">
								Total <span class="float-right">{{number_format($cart->total_price)}} TSH</span>
							</div>
							<div class="add_bottom_30">Lorem ipsum dolor sit amet, sed vide <strong>moderatius</strong> ad. Ex eius soleat sanctus pro, enim conceptam in quo, <a href="#0">brute convenire</a> appellantur an mei.</div>
							<a href="{{url('/')}}/course/purchase/chekout/{{$cart->id}}" class="btn_1 full-width">Checkout</a>
							<a href="courses-grid-sidebar.html" class="btn_1 full-width outline"><i class="icon-right"></i> Continue Shopping</a>
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
@endsection