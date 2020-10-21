<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<title>@hasSection('template_title')@yield('template_title') | @endif {{ config('app.name', Lang::get('titles.app')) }}</title>
	<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
	<META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="
	<?php
		if (is_null(Auth::user())) {
			$idd = null;
			}else{

			$idd = App\Models\Chuo\Cart::where('user_id','=',Auth::user()->id)->where("status","=",0)->first();
			echo $idd;

		}
	?>
	
	">

	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Web Fonts -->
	<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800&subset=cyrillic,latin'>

	<!-- CSS Global Compulsory -->
	<link rel="stylesheet" href="{{url('/')}}/chuo_assets/assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{url('/')}}/chuo_assets/assets/css/shop.style.css">

	<!-- CSS Header and Footer -->
	<link rel="stylesheet" href="{{url('/')}}/chuo_assets/assets/css/headers/header-v5.css">
	<link rel="stylesheet" href="{{url('/')}}/chuo_assets/assets/css/footers/footer-default.css">
					



	@yield('template_linked_css')

	<!-- CSS Customization -->
	<link rel="stylesheet" href="{{url('/')}}/chuo_assets/assets/css/custom.css">
</head>

<body class="header-fixed">

	<div class="wrapper">
		@include('part_chuo.header')
		@if(session()->has('errors'))
		    <div class="alert alert-danger fade in">
		        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		        <h4>Following errors occurred:</h4>
		        <ul>
		            @foreach($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
		@yield('content')

	 	@include('part_chuo.footer')
</div><!--/wrapper-->


<!-- JS Global Compulsory -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-176338498-1', 'auto');
@if(isset(Auth::user()->id))
  ga('set', 'userId', '{{Auth::user()->id}}');
@endif

  ga('send', 'pageview');
</script>
	<script src="{{url('/')}}/chuo_assets/assets/plugins/jquery/jquery.min.js"></script>
	<script src="{{url('/')}}/chuo_assets/assets/plugins/jquery/jquery-migrate.min.js"></script>
	<script src="{{url('/')}}/chuo_assets/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
@yield('template_linked_js')


<!--[if lt IE 9]>
	<script src="{{url('/')}}/chuo_assets/assets/plugins/respond.js"></script>
	<script src="{{url('/')}}/chuo_assets/assets/plugins/html5shiv.js"></script>
	<script src="{{url('/')}}/chuo_assets/assets/js/plugins/placeholder-IE-fixes.js"></script>
	<![endif]-->

</body>
</html>
<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<!-- Localized -->