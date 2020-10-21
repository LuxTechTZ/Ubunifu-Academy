@extends('layouts.chuo.front')

@section('template_linked_css')
	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="{{url('/')}}/chuo_assets/assets/plugins/animate.css">
	<link rel="stylesheet" href="{{url('/')}}/chuo_assets/assets/plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="{{url('/')}}/chuo_assets/assets/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{url('/')}}/chuo_assets/assets/plugins/scrollbar/css/jquery.mCustomScrollbar.css">

	<!-- CSS Page Style -->
	<link rel="stylesheet" href="{{url('/')}}/chuo_assets/assets/css/pages/log-reg-v3.css">

	<!-- Style Switcher -->
	<link rel="stylesheet" href="{{url('/')}}/chuo_assets/assets/css/plugins/style-switcher.css">

	<!-- CSS Theme -->
	<link rel="stylesheet" href="{{url('/')}}/chuo_assets/assets/css/theme-colors/default.css" id="style_color">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="{{url('/')}}/chuo_assets/assets/css/custom.css">
@endsection

@section('content')
			<!--=== Breadcrumbs v4 ===-->
		<div class="breadcrumbs-v4">
			<div class="container">
				<span class="page-name">Register</span>
				<h1>CHUO Master</h1>
				<ul class="breadcrumb-v4-in">
					<li><a href="index.html">Home</a></li>
					<li><a href="">Product</a></li>
					<li class="active">Log In</li>
				</ul>
			</div><!--/end container-->
		</div>
		<!--=== End Breadcrumbs v4 ===-->

		<!--=== Registre ===-->
		<div class="log-reg-v3 content-md margin-bottom-30">
			<div class="container">
				<div class="row">
					<div class="col-md-7 md-margin-bottom-50">
						<h2 class="welcome-title">Welcome to Chuo master</h2>
						<p>Karibu!</p><br>
						<div class="row margin-bottom-50">
							<div class="col-sm-4 md-margin-bottom-20">
								<div class="site-statistics">
									<span>20,039</span>
									<small>Notes</small>
								</div>
							</div>
							<div class="col-sm-4 md-margin-bottom-20">
								<div class="site-statistics">
									<span>54,283</span>
									<small>Past Papers</small>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="site-statistics">
									<span>3,760</span>
									<small>Products</small>
								</div>
							</div>
						</div>
						<div class="members-number">
							<h3>Join more than <span class="shop-green">530,000</span> members nationwide</h3>
							<img class="img-responsive" src="{{url('/')}}/chuo_assets/assets/img/map.png" alt="">
						</div>
					</div>

					<div class="col-md-5">
						<form id="sky-form4" class="log-reg-block sky-form" method="POST" action="{{ route('register') }}">
							@csrf
							<h2>Create New Account</h2>

							<div class="login-input reg-input">
								<div class="row">
									<div class="col-sm-6">
										<section>
											<label class="input">
												<input type="text" name="first_name" placeholder="First name" class="form-control" name="first_name" value="{{ old('first_name') }}" required autofocus>
												 @if ($errors->has('first_name'))
				                                    <span class="invalid-feedback">
				                                        <strong>{{ $errors->first('first_name') }}</strong>
				                                    </span>
				                                @endif
											</label>
										</section>
									</div>
									<div class="col-sm-6">
										<section>
											<label class="input">
												<input type="text" name="last_name" placeholder="Last name" class="form-control"  value="{{ old('last_name') }}" required autofocus>
												@if ($errors->has('last_name'))
				                                    <span class="invalid-feedback">
				                                        <strong>{{ $errors->first('last_name') }}</strong>
				                                    </span>
				                                @endif
											</label>
										</section>
									</div>
								</div>
								<label class="select margin-bottom-15">
									<select name="sex" class="form-control">
										<option value="0" selected disabled>Gender</option>
										<option value="M">Male</option>
										<option value="F">Female</option>
										<option value="O">Other</option>
									</select>
								</label>
								<label class="select margin-bottom-15">
									<select name="colege_id" class="form-control">
										<option value="0" selected disabled>College / University</option>

										@foreach(App\Models\Chuo\Colege::get() as $college)
										<option value="{{$college->id}}">{{$college->name}}</option>
										@endforeach
									</select>
								</label>
								
								<section>
									<label class="input">
										<input type="email" name="email" placeholder="Email address" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" required autofocus>
										@if ($errors->has('email'))
		                                    <span class="invalid-feedback">
		                                        <strong>{{ $errors->first('email') }}</strong>
		                                    </span>
		                                @endif
									</label>
								</section>
								<section>
									<label class="input">
										<input type="phone" name="phone" placeholder="Phone Number" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" value="{{ old('phone') }}" required autofocus>
										@if ($errors->has('phone'))
		                                    <span class="invalid-feedback">
		                                        <strong>{{ $errors->first('phone') }}</strong>
		                                    </span>
		                                @endif
									</label>
								</section>
								<section>
									<label class="input">
										<input type="password{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" id="password" class="form-control">
										 @if ($errors->has('password'))
		                                    <span class="invalid-feedback">
		                                        <strong>{{ $errors->first('password') }}</strong>
		                                    </span>
		                                @endif
									</label>
								</section>
								<section>
									<label class="input">
										<input type="password" id="password-confirm" name="password_confirmation" placeholder="Confirm password" class="form-control">
									</label>
								</section>
							</div>

							@if(config('settings.reCaptchStatus'))
	                            <div class="form-group">
	                                <div class="col-sm-6 col-sm-offset-4">
	                                    <div class="g-recaptcha" data-sitekey="{{ config('settings.reCaptchSite') }}"></div>
	                                </div>
	                            </div>
	                        @endif
							<label class="checkbox margin-bottom-10">
								<input type="checkbox" name="checkbox"/>
								<i></i>
								Subscribe to our newsletter to get the latest offers
							</label>
							<label class="checkbox margin-bottom-20">
								<input type="checkbox" name="checkbox"/>
								<i></i>
								I have read agreed with the <a href="{{url('/')}}/terms">terms &amp; conditions</a>
							</label>
							<button class="btn-u btn-u-sea-shop btn-block margin-bottom-20" type="submit">Create Account</button>
						</form>

						<div class="margin-bottom-20"></div>
						<p class="text-center">Already you have an account? <a href="{{url('/')}}/user_login">Sign In</a></p>
					</div>
				</div><!--/end row-->
			</div><!--/end container-->
		</div>
		<!--=== End Registre ===-->


@endsection

@section('template_linked_js')
	<!-- JS Implementing Plugins -->
	<script src="{{url('/')}}/chuo_assets/assets/plugins/back-to-top.js"></script>
	<script src="{{url('/')}}/chuo_assets/assets/plugins/smoothScroll.js"></script>
	<script src="{{url('/')}}/chuo_assets/assets/plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="{{url('/')}}/chuo_assets/assets/plugins/sky-forms-pro/skyforms/js/jquery.form.min.js"></script>
	<script src="{{url('/')}}/chuo_assets/assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js"></script>
	<!-- JS Customization -->
	<script src="{{url('/')}}/chuo_assets/assets/js/custom.js"></script>
	<!-- JS Page Level -->
	<script src="{{url('/')}}/chuo_assets/assets/js/shop.app.js"></script>
	<script src="{{url('/')}}/chuo_assets/assets/js/forms/page_login.js"></script>
	<script src="{{url('/')}}/chuo_assets/assets/js/plugins/style-switcher.js"></script>
	<script src="{{url('/')}}/chuo_assets/assets/js/forms/page_contact_form.js"></script>
	<script>
		jQuery(document).ready(function() {
			App.init();
			Login.initLogin();
			App.initScrollBar();
			StyleSwitcher.initStyleSwitcher();
			PageContactForm.initPageContactForm();
		});
	</script>
@endsection