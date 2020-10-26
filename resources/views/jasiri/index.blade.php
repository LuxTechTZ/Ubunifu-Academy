@extends('jasiri.layouts.app')

@section('content')
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
                        <a href="{{url('/')}}/courses/{{$course->category->title}}/{{$course->title}}">
                            <div class="preview"><span>{{ trans('course.preview') }}</span></div><img src="{{url('/')}}/img{{$course->image}}" class="img-fluid" alt=""></a>
                        <div class="price">{{number_format($course->price)}} TSH</div>

                    </figure>
                    <div class="wrapper">
                        <small>{{$course->category->title}}</small>
                        <h3>{{$course->title}}</h3>
                        <p>{{$course->description}} .</p>
                        <div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></div>
                    </div>
                    <ul>
                        <li><i class="icon_clock_alt"></i> 1h 30min</li>
                        <li><i class="icon_like"></i> 890</li>
                        <li><a href="{{url('/')}}/courses/{{$course->category->title}}/{{$course->title}}">{{ trans('titles.enrol') }}</a></li>
                    </ul>
                </div>
            </div>
            @endforeach

        </div>
        <!-- /carousel -->
        <div class="container">
            <p class="btn_home_align"><a href="{{url('/')}}/courses-grid" class="btn_1 rounded">{{ trans('course.viewAll') }}</a></p>
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
@endsection