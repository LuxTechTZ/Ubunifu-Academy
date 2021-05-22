<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Online video educational Website">
    <meta name="author" content="LuxTechTZ">
    <title>@hasSection('template_title')@yield('template_title') | @endif {{ config('app.name', Lang::get('titles.app')) }}</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{url('/')}}/favicon.ico" type="image/x-icon">

    <link rel="apple-touch-icon" type="image/x-icon" href="{{url('/')}}/img/y.png">


    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{url('/')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{url('/')}}/css/style.css" rel="stylesheet">
    <link href="{{url('/')}}/css/vendors.css" rel="stylesheet">
    <link href="{{url('/')}}/css/icon_fonts/css/all_icons.min.css" rel="stylesheet">

    @yield('custom_css')

    <!-- YOUR CUSTOM CSS -->
    <link href="{{url('/')}}/css/custom.css" rel="stylesheet">

    <!-- MODERNIZR SLIDER -->
    <script src="{{url('/')}}/js/modernizr_slider.js"></script>

</head>

<body>

    <div id="page">

    @include('jasiri.partials.header')

    @yield('content')

    @include('jasiri.partials.footer')
    <!--/footer-->
    </div>
    <!-- page -->

    <!-- COMMON SCRIPTS -->
    <script src="{{url('/')}}/js/jquery-3.5.1.min.js"></script>
    <script src="{{url('/')}}/js/common_scripts.js"></script>
    <script src="{{url('/')}}/js/main.js"></script>
    <script src="{{url('/')}}/assets/validate.js"></script>

    @yield('footer_script')

</body>

</html>
