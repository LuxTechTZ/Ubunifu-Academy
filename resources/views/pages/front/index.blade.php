<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.ansonika.com/udema/index-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Oct 2020 22:31:54 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Jasiri a modern educational site template">
    <meta name="author" content="Ansonika">
    <title>@hasSection('template_title')@yield('template_title') | @endif {{ config('app.name', Lang::get('titles.app')) }}</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/vendors.css" rel="stylesheet">
    <link href="css/icon_fonts/css/all_icons.min.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">
    
    <!-- MODERNIZR SLIDER -->
    <script src="js/modernizr_slider.js"></script>

</head>

<body>
        
    <div id="page">
        
    <header class="header menu_2">
        <div id="preloader"><div data-loader="circle-side"></div></div><!-- /Preload -->
        <div id="logo">
            <a href="index.html"><img src="img/logo.png" width="149" height="42" alt=""></a>
        </div>
        <ul id="top_menu">
            <li><a href="login.html" class="login">{{ trans('titles.login') }}</a></li>
            <li><a href="#0" class="search-overlay-menu-btn">Search</a></li>
            <li class="hidden_tablet"><a href="admission.html" class="btn_1 rounded">{{ trans('titles.admission') }}</a></li>
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
                <li><span><a href="/">{{ trans('titles.home') }}</a></span>
                    
                </li>
                <li><span><a href="/">{{ trans('titles.courses') }}</a></span>
                    
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
    
    <main>
        <section class="slider">
            <div id="slider" class="flexslider">
                <ul class="slides">
                    <li>
                        <img src="img/flex_slides/slide_1.jpg" alt="">
                        <div class="meta">
                            <h3>Photography Advanced Course</h3>
                            <div class="info">
                                <p><strong>15</strong> Lessons - <strong>10</strong> Videos</p>
                            </div>
                            <a href="course-detail.html" class="btn_1">Read more</a>
                        </div>
                    </li>
                    <li>
                        <img src="img/flex_slides/slide_2.jpg" alt="">
                        <div class="meta">
                            <h3>Web Development Course</h3>
                            <div class="info">
                                <p><strong>25</strong> Lessons - <strong>20</strong> Videos</p>
                            </div>
                            <a href="course-detail.html" class="btn_1">Read more</a>
                        </div>
                    </li>
                    <li>
                        <img src="img/flex_slides/slide_3.jpg" alt="">
                        <div class="meta">
                            <h3>Photoshop Advanced Course</h3>
                            <div class="info">
                                <p><strong>25</strong> Lessons - <strong>20</strong> Videos</p>
                            </div>
                            <a href="course-detail.html" class="btn_1">Read more</a>
                        </div>
                    </li>
                    <li>
                        <img src="img/flex_slides/slide_4.jpg" alt="">
                        <div class="meta">
                            <h3>Painter Advanced Course</h3>
                            <div class="info">
                                <p><strong>25</strong> Lessons - <strong>20</strong> Videos</p>
                            </div>
                            <a href="course-detail.html" class="btn_1">Read more</a>
                        </div>
                    </li>
                </ul>
                <div id="icon_drag_mobile"></div>
            </div>
            <div id="carousel_slider_wp">
                <div id="carousel_slider" class="flexslider">
                    <ul class="slides">
                        <li>
                            <img src="img/flex_slides/slide_1_thumb.jpg" alt="">
                            <div class="caption">
                                <h3>Photography <span>Advanced</span></h3>
                                <small>60,000 TSH <em>150,000 TSH</em></small>
                            </div>
                        </li>
                        <li>
                            <img src="img/flex_slides/slide_2_thumb.jpg" alt="">
                            <div class="caption">
                                <h3>Web Development <span>Advanced</span></h3>
                                <small>60,000 TSH <em>150,000 TSH</em></small>
                            </div>
                        </li>
                        <li>
                            <img src="img/flex_slides/slide_3_thumb.jpg" alt="">
                            <div class="caption">
                                <h3>Photoshop <span>Advanced</span></h3>
                                <small>60,000 TSH <em>150,000 TSH</em></small>
                            </div>
                        </li>
                        <li>
                            <img src="img/flex_slides/slide_4_thumb.jpg" alt="">
                            <div class="caption">
                                <h3>Painter <span>Advanced</span></h3>
                                <small>60,000 TSH <em>150,000 TSH</em></small>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- /slider -->

        <div class="container-fluid margin_120_0">
            <div class="main_title_2">
                <span><em></em></span>
                <h2>Jasiri Kozi  maarufu</h2>
                <p>Hzi ni cozi zinazopendwa zaidi.</p>
            </div>
            <div id="reccomended" class="owl-carousel owl-theme">
                @foreach($courses as $course)
                <div class="item">
                    <div class="box_grid">
                        <figure>
                            <a href="#0" class="wish_bt"></a>
                            <a href="course-detail.html">
                                <div class="preview"><span>{{ trans('course.preview') }}</span></div><img src="img/course__list_1.jpg" class="img-fluid" alt=""></a>
                            <div class="price">65,000 TSH</div>

                        </figure>
                        <div class="wrapper">
                            <small>Picha na Video</small>
                            <h3>{{$course->title}}</h3>
                            <p>Jifunze .</p>
                            <div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></div>
                        </div>
                        <ul>
                            <li><i class="icon_clock_alt"></i> 1h 30min</li>
                            <li><i class="icon_like"></i> 890</li>
                            <li><a href="course-detail.html">{{ trans('titles.enrol') }}</a></li>
                        </ul>
                    </div>
                </div>
                @endforeach

            </div>
            <!-- /carousel -->
            <div class="container">
                <p class="btn_home_align"><a href="courses-grid.html" class="btn_1 rounded">{{ trans('course.viewAll') }}</a></p>
            </div>
            <!-- /container -->
            <hr>
        </div>
        <!-- /container -->

        <div class="container margin_30_95">
            <div class="main_title_2">
                <span><em></em></span>
                <h2>Aina ya kozi zilizopo</h2>
                <p>Mamia ya kozi za kijasiriamali zakukupa ujuzi wa kazini.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
                    <a href="#0" class="grid_item">
                        <figure class="block-reveal">
                            <div class="block-horizzontal"></div>
                            <img src="img/course_1.jpg" class="img-fluid" alt="">
                            <div class="info">
                                <small><i class="ti-layers"></i>15 Programmes</small>
                                <h3>Arts and Humanities</h3>
                            </div>
                        </figure>
                    </a>
                </div>
                <!-- /grid_item -->
                <div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
                    <a href="#0" class="grid_item">
                        <figure class="block-reveal">
                            <div class="block-horizzontal"></div>
                            <img src="img/course_2.jpg" class="img-fluid" alt="">
                            <div class="info">
                                <small><i class="ti-layers"></i>23 Programmes</small>
                                <h3>Engineering</h3>
                            </div>
                        </figure>
                    </a>
                </div>
                <!-- /grid_item -->
                <div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
                    <a href="#0" class="grid_item">
                        <figure class="block-reveal">
                            <div class="block-horizzontal"></div>
                            <img src="img/course_3.jpg" class="img-fluid" alt="">
                            <div class="info">
                                <small><i class="ti-layers"></i>23 Programmes</small>
                                <h3>Architecture</h3>
                            </div>
                        </figure>
                    </a>
                </div>
                <!-- /grid_item -->
                <div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
                    <a href="#0" class="grid_item">
                        <figure class="block-reveal">
                            <div class="block-horizzontal"></div>
                            <img src="img/course_4.jpg" class="img-fluid" alt="">
                            <div class="info">
                                <small><i class="ti-layers"></i>23 Programmes</small>
                                <h3>Science and Biology</h3>
                            </div>
                        </figure>
                    </a>
                </div>
                <!-- /grid_item -->
                <div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
                    <a href="#0" class="grid_item">
                        <figure class="block-reveal">
                            <div class="block-horizzontal"></div>
                            <img src="img/course_5.jpg" class="img-fluid" alt="">
                            <div class="info">
                                <small><i class="ti-layers"></i>23 Programmes</small>
                                <h3>Law and Criminology</h3>
                            </div>
                        </figure>
                    </a>
                </div>
                <!-- /grid_item -->
                <div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
                    <a href="#0" class="grid_item">
                        <figure class="block-reveal">
                            <div class="block-horizzontal"></div>
                            <img src="img/course_6.jpg" class="img-fluid" alt="">
                            <div class="info">
                                <small><i class="ti-layers"></i>23 Programmes</small>
                                <h3>Medical</h3>
                            </div>
                        </figure>
                    </a>
                </div>
                <!-- /grid_item -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->

        <div class="bg_color_1">
            <div class="container margin_120_95">
                <div class="main_title_2">
                    <span><em></em></span>
                    <h2>News and Events</h2>
                    <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <a class="box_news" href="#0">
                            <figure><img src="img/news_home_1.jpg" alt="">
                                <figcaption><strong>28</strong>Dec</figcaption>
                            </figure>
                            <ul>
                                <li>Mark Twain</li>
                                <li>20.11.2017</li>
                            </ul>
                            <h4>Pri oportere scribentur eu</h4>
                            <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                        </a>
                    </div>
                    <!-- /box_news -->
                    <div class="col-lg-6">
                        <a class="box_news" href="#0">
                            <figure><img src="img/news_home_2.jpg" alt="">
                                <figcaption><strong>28</strong>Dec</figcaption>
                            </figure>
                            <ul>
                                <li>Jhon Doe</li>
                                <li>20.11.2017</li>
                            </ul>
                            <h4>Duo eius postea suscipit ad</h4>
                            <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                        </a>
                    </div>
                    <!-- /box_news -->
                    <div class="col-lg-6">
                        <a class="box_news" href="#0">
                            <figure><img src="img/news_home_3.jpg" alt="">
                                <figcaption><strong>28</strong>Dec</figcaption>
                            </figure>
                            <ul>
                                <li>Luca Robinson</li>
                                <li>20.11.2017</li>
                            </ul>
                            <h4>Elitr mandamus cu has</h4>
                            <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                        </a>
                    </div>
                    <!-- /box_news -->
                    <div class="col-lg-6">
                        <a class="box_news" href="#0">
                            <figure><img src="img/news_home_4.jpg" alt="">
                                <figcaption><strong>28</strong>Dec</figcaption>
                            </figure>
                            <ul>
                                <li>Paula Rodrigez</li>
                                <li>20.11.2017</li>
                            </ul>
                            <h4>Id est adhuc ignota delenit</h4>
                            <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                        </a>
                    </div>
                    <!-- /box_news -->
                </div>
                <!-- /row -->
                <p class="btn_home_align"><a href="blog.html" class="btn_1 rounded">View all news</a></p>
            </div>
            <!-- /container -->
        </div>
        <!-- /bg_color_1 -->

        <div class="call_section">
            <div class="container clearfix">
                <div class="col-lg-5 col-md-6 float-right wow" data-wow-offset="250">
                    <div class="block-reveal">
                        <div class="block-vertical"></div>
                        <div class="box_1">
                            <h3>Enjoy a great students community</h3>
                            <p>Ius cu tamquam persequeris, eu veniam apeirian platonem qui, id aliquip voluptatibus pri. Ei mea primis ornatus disputationi. Menandri erroribus cu per, duo solet congue ut. </p>
                            <a href="#0" class="btn_1 rounded">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/call_section-->
    </main>
    <!-- /main -->

    <footer>
        <div class="container margin_120_95">
            <div class="row">
                <div class="col-lg-5 col-md-12 p-r-5">
                    <p><img src="img/logo.png" width="149" height="42" alt=""></p>
                    <p>Mea nibh meis philosophia eu. Duis legimus efficiantur ea sea. Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu. Nihil facilisi indoctum an vix, ut delectus expetendis vis.</p>
                    <div class="follow_us">
                        <ul>
                            <li>Follow us</li>
                            <li><a href="#0"><i class="ti-facebook"></i></a></li>
                            <li><a href="#0"><i class="ti-twitter-alt"></i></a></li>
                            <li><a href="#0"><i class="ti-google"></i></a></li>
                            <li><a href="#0"><i class="ti-pinterest"></i></a></li>
                            <li><a href="#0"><i class="ti-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 ml-lg-auto">
                    <h5>Useful links</h5>
                    <ul class="links">
                        <li><a href="#0">Admission</a></li>
                        <li><a href="#0">About</a></li>
                        <li><a href="#0">Login</a></li>
                        <li><a href="#0">Register</a></li>
                        <li><a href="#0">News &amp; Events</a></li>
                        <li><a href="#0">Contacts</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5>Contact with Us</h5>
                    <ul class="contacts">
                        <li><a href="tel://61280932400"><i class="ti-mobile"></i> + 61 23 8093 3400</a></li>
                        <li><a href="mailto:info@udema.com"><i class="ti-email"></i> info@udema.com</a></li>
                    </ul>
                    <div id="newsletter">
                    <h6>Newsletter</h6>
                    <div id="message-newsletter"></div>
                    <form method="post" action="http://www.ansonika.com/udema/assets/newsletter.php" name="newsletter_form" id="newsletter_form">
                        <div class="form-group">
                            <input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
                            <input type="submit" value="Submit" id="submit-newsletter">
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            <!--/row-->
            <hr>
            <div class="row">
                <div class="col-md-8">
                    <ul id="additional_links">
                        <li><a href="#0">Terms and conditions</a></li>
                        <li><a href="#0">Privacy</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <div id="copy">© Jasiri</div>
                </div>
            </div>
        </div>
    </footer>
    <!--/footer-->
    </div>
    <!-- page -->
    
    <!-- COMMON SCRIPTS -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/common_scripts.js"></script>
    <script src="js/main.js"></script>
    <script src="assets/validate.js"></script>
    
    <!-- FlexSlider -->
    <script defer src="js/jquery.flexslider.js"></script>
    <script>
        $(window).on('load',function() {
            'use strict';
            $('#carousel_slider').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: false,
                itemWidth: 280,
                itemMargin: 25,
                asNavFor: '#slider'
            });
            $('#carousel_slider ul.slides li').on('mouseover', function() {
                $(this).trigger('click');
            });
            $('#slider').flexslider({
                animation: "fade",
                controlNav: false,
                animationLoop: false,
                slideshow: false,
                sync: "#carousel_slider",
                start: function(slider) {
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
    
</body>

<!-- Mirrored from www.ansonika.com/udema/index-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Oct 2020 22:32:22 GMT -->
</html>