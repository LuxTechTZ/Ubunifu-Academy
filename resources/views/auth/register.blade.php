<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.ansonika.com/udema/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Oct 2020 22:34:20 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Udema a modern educational site template">
    <meta name="author" content="Ansonika">
    <title>Register | {{ config('app.name', Lang::get('titles.app')) }}</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{url('/')}}/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{url('/')}}/img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{url('/')}}/img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{url('/')}}/img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{url('/')}}/img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{url('/')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{url('/')}}/css/style.css" rel="stylesheet">
    <link href="{{url('/')}}/css/vendors.css" rel="stylesheet">
    <link href="{{url('/')}}/css/icon_fonts/css/all_icons.min.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{url('/')}}/css/custom.css" rel="stylesheet">

</head>

<body id="register_bg">
    
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
            <form autocomplete="off" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">

                    <span class="input">
                    <input id="first_name" class="input_field {{ $errors->has('first_name') ? ' is-invalid' : '' }}" type="text"  name="first_name" value="{{ old('first_name') }}" required autofocus>
                        <label class="input_label">
                        <span class="input__label-content">Your {{ __('First Name') }}</span>
                    </label>
                        @if ($errors->has('first_name'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('first_name') }}</strong>
                            </span>
                        @endif
                    </span>

                    <span class="input">
                    <input id="last_name" class="input_field {{ $errors->has('last_name') ? ' is-invalid' : '' }}" type="text" name="last_name" value="{{ old('last_name') }}" required autofocus>
                        <label class="input_label">
                        <span class="input__label-content">Your {{ __('Last Name') }}</span>
                    </label>
                        @if ($errors->has('last_name'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('last_name') }}</strong>
                            </span>
                        @endif
                    </span>

                    <span class="input">
                    <input id="email" class="input_field{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"  type="email" value="{{ old('email') }}" required>
                        <label class="input_label">
                        <span class="input__label-content">Your {{ __('E-Mail Address') }}</span>
                    </label>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    </span>

                    <span class="input">
                    <input id="password1" class="input_field{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" type="password" required>
                        <label class="input_label">
                        <span class="input__label-content">Your {{ __('Password') }}</span>
                    </label>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    </span>

                    <span class="input">
                    <input class="input_field" type="password" id="password2" name="password_confirmation">
                        <label class="input_label">
                        <span class="input__label-content">Confirm {{ __('Password') }}</span>
                    </label>
                    </span>
                    
                    <div id="pass-info" class="clearfix"></div>
                </div>
                <button type="submit" href="{{url('/')}}/#0" class="btn_1 rounded full-width add_top_30">Register to {{ config('app.name', Lang::get('titles.app')) }}</button>
                <div class="text-center add_top_10">Already have an acccount? <strong><a href="{{url('/')}}/login">Sign In</a></strong></div>
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
    
    <!-- SPECIFIC SCRIPTS -->
    <script src="{{url('/')}}/js/pw_strenght.js"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-179224387-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-179224387-1');
</script>

</body>

<!-- Mirrored from www.ansonika.com/udema/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Oct 2020 22:34:22 GMT -->
</html>