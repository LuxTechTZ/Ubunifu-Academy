<header class="header menu_2">
    <div id="preloader"><div data-loader="circle-side"></div></div><!-- /Preload -->
    <div id="logo">
        <a href="{{url('/')}}"><img src="{{url('/')}}/img/logo.png" width="149" height="42" alt=""></a>
    </div>
    <ul id="top_menu">
        <li><a href="login" class="login">{{ trans('titles.login') }}</a></li>
        <li style="font-size: 25px;"><a  href="login" class="title"><span class="pe-7s-cart"></span></a></li>
        <li><a href="#0" class="search-overlay-menu-btn">Search</a></li>
        @if(!isset(Auth::user()->id))
        <li class="hidden_tablet"><a href="/account/dashboard" class="btn_1 rounded">{{ trans('titles.admission') }}</a></li>
        @else
        <li class="hidden_tablet"><a href="/account/dashboard" class="btn_1 rounded">My Account</a></li>
        @endif
    </ul>
    <!-- /top_menu -->
    <a href="#menu" class="btn_mobile">
        <div class="hamburger hamburger--spin" id="hamburger">
            <div class="hamburger-box">
                <div class="hamburger-inner"></div>
            </div>
        </div>
    </a>
    <nav id="menu" class="main-menu">
        <ul>
            <li><span><a href="/">{{ trans('titles.home') }}</a></span></li>
            <li><span><a href="{{url('/')}}/courses-grid">{{ trans('titles.courses') }}</a></span>
                
            </li>
            <li><span><a href="/">{{ trans('titles.pages') }}</a></span>
                
            </li>
            
        </ul>
    </nav>
    <!-- Search Menu -->
    <div class="search-overlay-menu">
        <span class="search-overlay-close"><span class="closebt"><i class="ti-close"></i></span></span>
        <form role="search" id="searchform" method="get">
            <input value="" name="q" type="search" placeholder="Search..." />
            <button type="submit"><i class="icon_search"></i>
            </button>
        </form>
    </div><!-- End Search Menu -->
</header>
<!-- /header -->

