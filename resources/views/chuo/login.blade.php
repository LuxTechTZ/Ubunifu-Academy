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
				<span class="page-name">Log In</span>
				<h1>Login To your Account</h1>
				<ul class="breadcrumb-v4-in">
					<li><a href="index.html">Home</a></li>
					<li><a href="">Product</a></li>
					<li class="active">Log In</li>
				</ul>
			</div><!--/end container-->
		</div>
		<!--=== End Breadcrumbs v4 ===-->

		<!--=== Login ===-->
		<div class="log-reg-v3 content-md">
			<div class="container">
				<div class="row">
					<div class="col-md-7 md-margin-bottom-50">
						<h2 class="welcome-title">Welcome Back to Chuo Master</h2>
						
					</div>

					<div class="col-md-5">
						<form id="sky-form1" method="POST" class="log-reg-block sky-form" action="{{ route('login') }}">
							 @csrf
							<h2>Log in to your account</h2>

							<section>
								<label class="input login-input">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<input type="email" placeholder="Email Address" name="email" class="form-control" value="{{ old('email') }}" required autofocus>
										@if ($errors->has('email'))
		                                    <span class="invalid-feedback">
		                                        <strong>{{ $errors->first('email') }}</strong>
		                                    </span>
		                                @endif
									</div>
								</label>
							</section>
							<section>
								<label class="input login-input no-border-top">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-lock"></i></span>
										<input type="password" placeholder="Password" name="password" class="form-control">
										@if ($errors->has('password'))
		                                    <span class="invalid-feedback">
		                                        <strong>{{ $errors->first('password') }}</strong>
		                                    </span>
		                                @endif
									</div>
								</label>
							</section>
							<div class="row margin-bottom-5">
								<div class="col-xs-6">
									<label class="checkbox">
										<input type="checkbox" name="checkbox"/>
										<i></i>
										Remember me
									</label>
								</div>
								<div class="col-xs-6 text-right">
									<a href="{{ route('password.request') }}">Forget your Password?</a>
								</div>
							</div>
							<button class="btn-u btn-u-sea-shop btn-block margin-bottom-20" type="submit">Log in</button>

							<div class="border-wings">
								<span>or</span>
							</div>

							
						</form>

						<div class="margin-bottom-20"></div>
						<p class="text-center">Don't have account yet? Learn more and <a href="{{url('/')}}/user_register">Sign Up</a></p>
					</div>
				</div><!--/end row-->
			</div><!--/end container-->
		</div>
		<!--=== End Login ===-->

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