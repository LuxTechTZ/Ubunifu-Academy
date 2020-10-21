@extends('layouts.chuo.front')

@section('template_linked_css')
	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="{{url('/')}}/front_assets/assets/plugins/animate.css">
	<link rel="stylesheet" href="{{url('/')}}/front_assets/assets/plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="{{url('/')}}/front_assets/assets/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{url('/')}}/front_assets/assets/plugins/scrollbar/css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="{{url('/')}}/front_assets/assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
	<link rel="stylesheet" href="{{url('/')}}/front_assets/assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">

	<!-- CSS Page Style -->
	<link rel="stylesheet" href="{{url('/')}}/front_assets/assets/css/pages/profile.css">
	<link rel="stylesheet" href="{{url('/')}}/front_assets/assets/css/pages/shortcode_timeline2.css">

	<!-- CSS Theme -->
	<link rel="stylesheet" href="{{url('/')}}/front_assets/assets/css/theme-colors/default.css" id="style_color">
	<link rel="stylesheet" href="{{url('/')}}/front_assets/assets/css/theme-skins/dark.css">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="{{url('/')}}/front_assets/assets/css/custom.css">
@endsection

@section('content')
<!--=== Profile ===-->
<hr>
<div class="container content profile">
	<div class="row">
		@include('part_chuo.left_side')

		<!-- Profile Content -->
		<div class="col-md-9">
			<div class="profile-body">

				<!--Table Search v1-->
				<h2>Your Orders</h2>
				<div class="table-search-v1 margin-bottom-20">
					<div class="table-responsive">
						<table class="table table-hover table-bordered table-striped">
							<thead>
								<tr>
									<th>Order ID</th>
									<th class="hidden-sm">Description</th>
									<th style="width: 100px;">Status</th>
								</tr>
							</thead>
							<tbody>
								@foreach($orders as $order)
								<tr>
									<td>
										<a href="#">{{$order->id}}</a>
									</td>
									<td class="td-width">
										<ul class="list-group sidebar-nav-v1 margin-bottom-40">
											@foreach($order->cart->cart_items as $cart_item)
											<li class="list-group-item">
												<a href="{{url('/')}}/product/{{$cart_item->product->id}}"><img class="" style="max-width: 70px" src="{{url('/')}}/{{$cart_item->product->images->first()->image}}" alt="">    {{$cart_item->product->name}} || <b> Price:</b>  {{number_format($cart_item->product->price)}} TSH <b> Qty:</b>  {{$cart_item->quantity}}  <br><b> Total:</b>  {{number_format($cart_item->total)}} TSH</a>
	
											</li>
											<h4 class="pull-right">Total {{number_format($order->total)}} TSH
											</h4>
											@endforeach
										</ul>
									</td>
									
									<td>
										@if($order->status == 1)
										<button class="btn-u btn-u-green btn-block btn-u-xs"><i class="glyphicon glyphicon-ok margin-right-5"></i> Deliverd</button></td>
										@else
										<button class="btn-u btn-u-yellow btn-block btn-u-xs"><i class="glyphicon glyphicon-times margin-right-5"></i> Pending</button></td>
										@endif
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
				<!--End Table Search v1-->

			</div>
		</div>
		<!-- End Profile Content -->
	</div>
</div>
<!--=== End Profile ===-->	

@endsection

@section('template_linked_js')
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
			StyleSwitcher.initStyleSwitcher();
		});
	</script>
@endsection