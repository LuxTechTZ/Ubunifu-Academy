@extends('jasiri.layouts.app')

@section('content')
<main>
    <section id="hero_in" class="courses">
        <div class="wrapper">
            <div class="container">
                <h1 class="fadeInUp"><span></span>Online courses</h1>
            </div>
        </div>
    </section>
    <!--/hero_in-->
    @include('jasiri.courses.partials.toolbar')
    
    <!-- /filters -->

    <div class="container margin_60_35">
        <div class="row">
            @foreach($courses as $course)
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="box_grid wow">
                    <figure class="block-reveal">
                        <div class="block-horizzontal"></div>
                        <a href="#0" class="wish_bt"></a>
                        <a href="{{url('/')}}/courses/{{$course->category->title}}/{{$course->title}}"><img src="{{url('/')}}/img{{$course->image}}" class="img-fluid" alt=""></a>
                        <div class="price">{{number_format($course->price)}} TSH</div>
                        <div class="preview"><span>{{ trans('course.preview') }}</span></div>
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
                        <li><a href="course-detail.html">{{ trans('titles.enrol') }}</a></li>
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
        <!-- /row -->
        <p class="text-center"><a href="#0" class="btn_1 rounded add_top_30">Load more</a></p>
    </div>
    <!-- /container -->
    <div class="bg_color_1">
        <div class="container margin_60_35">
            <div class="row">
                <div class="col-md-4">
                    <a href="#0" class="boxed_list">
                        <i class="pe-7s-help2"></i>
                        <h4>Need Help? Contact us</h4>
                        <p>Cum appareat maiestatis interpretaris et, et sit.</p>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#0" class="boxed_list">
                        <i class="pe-7s-wallet"></i>
                        <h4>Payments and Refunds</h4>
                        <p>Qui ea nemore eruditi, magna prima possit eu mei.</p>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#0" class="boxed_list">
                        <i class="pe-7s-note2"></i>
                        <h4>Quality Standards</h4>
                        <p>Hinc vituperata sed ut, pro laudem nonumes ex.</p>
                    </a>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /bg_color_1 -->
</main>
<form action="/home/upload/demo" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file">
    <button type="submit">Upload</button>
</form>
@endsection