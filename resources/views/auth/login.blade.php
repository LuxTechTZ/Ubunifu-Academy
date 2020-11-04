<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.ansonika.com/udema/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Oct 2020 22:31:38 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Udema a modern educational site template">
    <meta name="author" content="Ansonika">
    <title>Login | {{ config('app.name', Lang::get('titles.app')) }}</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{url('/')}}/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{url('/')}}/img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{url('/')}}/img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{url('/')}}/img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{url('/')}}/img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="{{url('/')}}/https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{url('/')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{url('/')}}/css/style.css" rel="stylesheet">
    <link href="{{url('/')}}/css/vendors.css" rel="stylesheet">
    <link href="{{url('/')}}/css/icon_fonts/css/all_icons.min.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{url('/')}}/css/custom.css" rel="stylesheet">

</head>

<body id="login_bg">
    
    <nav id="menu" class="fake_menu"></nav>
    
    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div>
    <!-- End Preload -->
    
    <div id="login">
        <aside>
            <figure>
                <a href="{{url('/')}}"><img src="{{url('/')}}/img/logo.png" width="149" height="42" alt=""></a>
            </figure>
              <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="access_social">
                    <!-- <a href="{{url('/')}}/#0" class="social_bt facebook">Login with Facebook</a>
                    <a href="{{url('/')}}/#0" class="social_bt google">Login with Google</a>
                    <a href="{{url('/')}}/#0" class="social_bt linkedin">Login with Linkedin</a> -->
                </div>
                <!-- <div class="divider"><span>Or</span></div> -->
                <div class="form-group">
                    <span class="input">
                    <input  id="email" type="email" class="input_field{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" autocomplete="off" value="{{ old('email') }}" required autofocus>
                        <label class="input_label">
                        <span class="input__label-content">Your email</span>
                    </label>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    </span>

                    <span class="input">
                    <input id="password" class="input_field{{ $errors->has('password') ? ' is-invalid' : '' }}" required type="password" autocomplete="new-password" name="password">
                        <label class="input_label">
                        <span class="input__label-content">Your password</span>
                    </label>
                     @if ($errors->has('password'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    </span>
                    <small><a href="{{url('/')}}/#0">Forgot password?</a></small>
                </div>
                <button type="submit" class="btn_1 rounded full-width add_top_60">Login to {{ config('app.name', Lang::get('titles.app')) }}</button>
                <div class="text-center add_top_10">New to {{ config('app.name', Lang::get('titles.app')) }}? <strong><a href="{{url('/')}}/register">Sign up!</a></strong></div>
            </form>
            <div class="copy">© 2020 {{ config('app.name', Lang::get('titles.app')) }}</div>
        </aside>
    </div>
    <!-- /login -->
        
    <!-- COMMON SCRIPTS -->
    <script src="{{url('/')}}/js/jquery-3.5.1.min.js"></script>
    <script src="{{url('/')}}/js/common_scripts.js"></script>
    <script src="{{url('/')}}/js/main.js"></script>
    <script src="{{url('/')}}/assets/validate.js"></script>  
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-179224387-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-179224387-1');
</script>

</body>

<!-- Mirrored from www.ansonika.com/udema/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Oct 2020 22:31:38 GMT -->
</html>