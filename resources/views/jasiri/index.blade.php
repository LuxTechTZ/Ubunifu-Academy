@extends('jasiri.layouts.app')

@section('content')
<main>
    		<section class="hero_single version_2">
			<div class="wrapper">
				<div class="container">
					<h3>{{trans('index.whatToLearn')}}</h3>
					<p>{{trans('index.increaseChance')}}</p>
					<form>
						<div id="custom-search-input">
							<div class="input-group">
								<input type="text" class=" search-query"
                                       placeholder="Ex. Architecture, Specialization...">
								<input type="submit" class="btn_search" value="{{trans('index.search')}}">
							</div>
						</div>
					</form>
				</div>
			</div>
		</section>
		<!-- /hero_single -->

		<div class="features clearfix">
			<div class="container">
				<ul>
					<li><i class="pe-7s-study"></i>
						<h4>+200 courses</h4><span>Explore a variety of fresh topics</span>
					</li>
					<li><i class="pe-7s-cup"></i>
						<h4>Expert teachers</h4><span>Find the right instructor for you</span>
					</li>
					<li><i class="pe-7s-target"></i>
						<h4>Focus on target</h4><span>Increase your personal expertise</span>
					</li>
				</ul>
			</div>
		</div>
		<!-- /features -->

    <div class="container-fluid margin_120_0">
        <div class="main_title_2">
            <span><em></em></span>
            <h2>{{trans('course.Jasiri Famous Courses')}}</h2>
            <p>{{trans('titles.These are the most popular courses')}}</p>
        </div>
        <div id="reccomended" class="owl-carousel owl-theme">
        	@foreach($popula_courses as $course)
            <div class="item">
                <div class="box_grid">
                    <figure>
                        <a href="#0" class="wish_bt"></a>
                        <a href="{{url('/')}}/courses/{{$course->category->title}}/{{$course->title}}">
                            <div class="preview"><span>{{ trans('course.preview') }}</span></div><img src="{{url('/')}}/{{$course->image}}" class="img-fluid" alt=""></a>
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
            <h2>{{trans('course.Types of courses available')}}</h2>
            <p>{{trans('course.Hundreds of entrepreneurial courses give you on the job skills')}}</p>
        </div>
        <div class="row">
            @foreach($categories as $category)
            <div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
                <a href="{{url('/')}}/courses-grid/{{$category->title}}" class="grid_item">
                    <figure class="block-reveal">
                        <div class="block-horizzontal"></div>
                        <img src="{{url('/')}}/{{Illuminate\Support\Facades\Storage::url($category->image)}}" class="img-fluid" alt="">
                        <div class="info">
                            <small><i class="ti-layers"></i>{{count($category->courses)}} Courses</small>
                            <h3>{{$category->title}}</h3>
                        </div>
                    </figure>
                </a>
            </div>
            @endforeach
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->

    <div class="bg_color_1">
        <div class="container margin_120_95">
            <div class="main_title_2">
                <span><em></em></span>
                <h2>{{trans('course.News and Events')}}</h2>
                <p>{{trans('course.Cum doctus civibus efficiantur in imperdiet deterruisset')}}</p>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <a class="box_news" href="#0">
                        <figure><img src="img/news_home_1.jpg" alt="">
                            <figcaption><strong>20</strong>Oct</figcaption>
                        </figure>
                        <ul>
                            <li>Mark Twain</li>
                            <li>20.10.2020</li>
                        </ul>
                        <h4>Technologia na Uchaguzi</h4>
                        <p>Biashara 7 Za kukutoa baada ya uchaguzi</p>
                    </a>
                </div>
                <!-- /box_news -->
                <div class="col-lg-6">
                    <a class="box_news" href="#0">
                        <figure><img src="img/news_home_2.jpg" alt="">
                            <figcaption><strong>28</strong>Sept</figcaption>
                        </figure>
                        <ul>
                            <li>Jhon Doe</li>
                            <li>20.11.2020</li>
                        </ul>
                        <h4>Waalimu wa biashara</h4>
                        <p>Tumeongeza waaalimu wa biashara.</p>
                    </a>
                </div>
                <!-- /box_news -->
                <div class="col-lg-6">
                    <a class="box_news" href="#0">
                        <figure><img src="img/news_home_3.jpg" alt="">
                            <figcaption><strong>30</strong>Mar</figcaption>
                        </figure>
                        <ul>
                            <li>Luca Robinson</li>
                            <li>30.05.2020</li>
                        </ul>
                        <h4>Kukuza viwanda</h4>
                        <p>Ushirikiano wa serikali kukuza biashara za viwanda vidogo.</p>
                    </a>
                </div>
                <!-- /box_news -->
                <div class="col-lg-6">
                    <a class="box_news" href="#0">
                        <figure><img src="img/news_home_4.jpg" alt="">
                            <figcaption><strong>05</strong>Oct</figcaption>
                        </figure>
                        <ul>
                            <li>Tengeneza biashara mtandaoni</li>
                            <li>05.10.2020</li>
                        </ul>
                        <h4>Maajabu ya bishsara za mtandaoni</h4>
                        <p>Ongezeko la vijana wajasiriliamali linakuza viwanda.</p>
                    </a>
                </div>
                <!-- /box_news -->
            </div>
            <!-- /row -->
            <p class="btn_home_align"><a href="blog.html" class="btn_1 rounded">{{trans('titles.View all news')}}</a></p>
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
                        <h3>{{trans('course.Enjoy a great students community')}}</h3>
                        <p>Kaa karibu na sisi tukuweke karibu na communitu kubwa zaidi ya wanafunzi na wajasiriamali walioamua kubadilish atanzania kiuchumi.. </p>
                        <a href="#0" class="btn_1 rounded">{{trans('titles.Read more')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/call_section-->
</main>
<!-- /main -->
@endsection
