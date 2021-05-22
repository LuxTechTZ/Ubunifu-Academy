@extends('jasiri.layouts.app')

@section('content')
<main>
	<section id="hero_in" class="cart_section">
		<div class="wrapper">
			<div class="container">
				<div class="bs-wizard clearfix">
					<div class="bs-wizard-step">
						<div class="text-center bs-wizard-stepnum">Your cart</div>
						<div class="progress">
							<div class="progress-bar"></div>
						</div>
						<a href="/cart" class="bs-wizard-dot"></a>
					</div>

					<div class="bs-wizard-step active">
						<div class="text-center bs-wizard-stepnum">Payment</div>
						<div class="progress">
							<div class="progress-bar"></div>
						</div>
						<a class="bs-wizard-dot"></a>
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
			<form id="chekout-data" name="chekout-data" method="post"
                  action="{{url('/')}}/course/purchase/chekout/{{$cart->id}}/order">
				@csrf
			<div class="row">
				<div class="col-lg-8">
					<div class="box_cart">
					@if(!isset(Auth::user()->id))
					<div class="message">
						<p>Exisitng Customer? <a href="{{route('cart_login')}}" class="">Click here to login</a></p>
					</div>
					@endif
					<div class="form_title">
						<h3><strong>1</strong>Your Details</h3>
						<p>
							Please fill your personal Details
						</p>
					</div>
					@if(isset(Auth::user()->id))
					<div class="step">
						<div class="row">
							<div class="col-sm-6">
								<span class="input">
									<input value="{{Auth::user()->first_name}}" disabled="" class="input_field" type="text">
									<label class="input_label">
										<span class="input__label-content">First name</span>
									</label>
								</span>
							</div>
							<div class="col-sm-6">
								<span class="input">
									<input value="{{Auth::user()->last_name}}" disabled="" class="input_field" type="text">
									<label class="input_label">
										<span class="input__label-content">Last name</span>
									</label>
								</span>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<span class="input">
									<input value="{{Auth::user()->email}}" disabled="" class="input_field" type="email">
									<label class="input_label">
										<span class="input__label-content">Email</span>
									</label>
								</span>
							</div>

							<div class="col-sm-6">
								<span class="input">
									<input value="{{Auth::user()->profile->phone}}" name="phone" class="input_field" type="text">
									<label class="input_label">
										<span class="input__label-content">Phone</span>
									</label>
								</span>
							</div>
						</div>
					</div>
					@else
					<div class="step">
						<div class="row">
							<div class="col-sm-6">
								<span class="input">
									<input name="first_name" required="" class="input_field" type="text" value="{{ old('first_name') }}">
									<label class="input_label">
										<span class="input__label-content">First name</span>
									</label>
									@if ($errors->has('first_name'))
			                            <span style="color: red">
			                                <strong>{{ $errors->first('first_name') }}</strong>
			                            </span>
			                        @endif
			                        @if ($errors->has('role'))
			                            <span style="color: red">
			                                <strong>{{ $errors->first('role') }}</strong>
			                            </span>
			                        @endif
								</span>
							</div>
							<div class="col-sm-6">
								<span class="input">
									<input name="last_name" required="" class="input_field" type="text" value="{{ old('last_name') }}">
									<label class="input_label">
										<span class="input__label-content">Last name</span>
									</label>
									@if ($errors->has('last_name'))
			                            <span style="color: red">
			                                <strong>{{ $errors->first('last_name') }}</strong>
			                            </span>
			                        @endif
								</span>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<span class="input">
									<input value="{{ old('email') }}" name="email" required="" class="input_field" type="email">
									<label class="input_label">
										<span class="input__label-content">Email</span>
									</label>
									@if ($errors->has('email'))
			                            <span style="color: red">
			                                <strong>{{ $errors->first('email') }}</strong>
			                            </span>
			                        @endif
								</span>
							</div>
							<div class="col-sm-6">
								<span class="input">
									<input value="{{ old('phone') }}" name="phone" required="" class="input_field" type="text">
									<label class="input_label">
										<span class="input__label-content">Phone (With country code)</span>
									</label>
									@if ($errors->has('phone'))
			                            <span style="color: red">
			                                <strong>{{ $errors->first('phone') }}</strong>
			                            </span>
			                        @endif
								</span>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<span class="input">
									<input name="password" required="" class="input_field" type="password">
									<label class="input_label">
										<span class="input__label-content">Password</span>
									</label>
									@if ($errors->has('password'))
				                        <span style="color: red">
				                            <strong>{{ $errors->first('password') }}</strong>
				                        </span>
				                    @endif
								</span>
							</div>
							<div class="col-sm-6">
								<span class="input">
									<input name="password_confirmation" required="" class="input_field" type="password">
									<label class="input_label">
										<span class="input__label-content">Confirm Password</span>
									</label>
								</span>
							</div>
						</div>
                        <button type="submit" form="chekout-data"
                                href="{{url('/')}}/dpo/end/{{$cart->id}}"
                                class="btn_1 full-width">Submit</button>
					</div>
					@endif
					<hr>
					<!--End step -->
                        @if(isset(Auth::user()->id))
                            <div class="form_title">
                                <h3><strong>2</strong>Payment Completion</h3>
                                <p>
                                    Click the button bellow to complete Payment.
                                </p>
                            </div>
                            <div class="step">
                                <p>
                                    Complete Your Payment
                                </p>
                                <p>
                                <a href="{{url('/')}}/dpo/end/{{$cart->id}}">
                                    <img alt="Ubunifu Academy Payment"
                                         src="{{url('/')}}/img/payments.png"/>
                                </a>

                                </p>
                            </div>
					        <hr>
                        @endif

					<!--End step -->
					<div id="policy">
						<h5>Cancellation policy</h5>
						<p class="nomargin">Gharama zimejumlishwa na VAT <strong>Karibu.</strong> Eandapo haujaridhika na kozi hii, una siku <strong>3</strong>  za kughairi. <a href="#0">Wasiliana nasi</a> endapo unapata tatizo lolote.</p>
					</div>
					</div>
				</div>
				<!-- /col -->

				<aside class="col-lg-4" id="sidebar">
					<div class="box_detail">
						<div id="total_cart">
							Total <span class="float-right">{{number_format($cart->total_price)}} TSH</span>
						</div>
						<div class="add_bottom_30">Gharama zimejumlishwa na VAT <strong>Karibu.</strong> Eandapo haujaridhika na kozi hii, una siku <strong>3</strong>  za kughairi. <a href="#0">Wasiliana nasi</a> endapo unapata tatizo lolote.</div>
                        @if(isset(Auth::user()->id))
						<a type="button" form="chekout-data"
                                href="{{url('/')}}/dpo/end/{{$cart->id}}"
                                class="btn_1 full-width">Proceed to Payment</a>
                        @endif
						<a href="{{url('/')}}/courses-grid" class="btn_1 full-width outline"><i class="icon-right"></i> Continue Shopping</a>
					</div>
				</aside>
			</div>
			</form>


			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /bg_color_1 -->

</main>


@endsection
