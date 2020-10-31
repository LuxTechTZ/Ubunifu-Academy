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
							@if(!isset($cart->items))
							<tr>
								<td ><p>Your cart is Empty</p></td> 
								<td></td>
								<td></td>
								<td></td>
							</tr>
							@else
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
							@endif
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
							Total <span class="float-right">
								@if(isset($cart->items))
								{{number_format($cart->total_price)}} TSH
								@else
								0 TSH
								@endif
							</span>
						</div>
						<div class="add_bottom_30">Gharama zimejumlishwa na VAT <strong>Karibu.</strong> Eandapo haujaridhika na kozi hii, una siku <strong>3</strong>  za kughairi. <a href="#0">Wasiliana nasi</a> endapo unapata tatizo lolote.</div>
						@if(isset($cart->items))
						<a href="{{url('/')}}/course/purchase/chekout/{{$cart->id}}" class="btn_1 full-width">Checkout</a>
						@endif
						<a href="{{url('/')}}/courses-grid" class="btn_1 full-width outline"><i class="icon-right"></i> Continue Shopping</a>
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