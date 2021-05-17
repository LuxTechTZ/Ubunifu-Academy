@extends('jasiri.layouts.app')

@section('content')
<main>
    <section id="hero_in" class="courses">
        <div class="wrapper">
            <div class="container">
                <h1 class="fadeInUp"><span></span>{{trans('titles.Online courses')}}</h1>
            </div>
        </div>
    </section>
    <!--/hero_in-->

    @include('jasiri.courses.partials.toolbar')

    <div class="container margin_60_35">
        @foreach($courses as $course)
        <div class="box_list wow">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <figure class="block-reveal">
                        <div class="block-horizzontal"></div>
                        <a href="{{url('/')}}/courses/{{$course->category->title}}/{{$course->title}}">
                            <img src="{{url('/')}}/{{Illuminate\Support\Facades\Storage::url($course->image)}}" class="img-fluid" alt=""></a>
                        <div class="preview"><span>{{ trans('course.preview') }}</span></div>
                    </figure>
                </div>
                <div class="col-lg-7">
                    <div class="wrapper">
                        <a href="#0" class="wish_bt"></a>
                        <div class="price">{{number_format($course->price)}} TSH</div>
                        <small>{{$course->category->title}}</small>
                        <h3>{{$course->title}}</h3>
                        <p>{!! $course->description !!} .</p>
                        <div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></div>
                    </div>
                    <ul>
                        <li><i class="icon_clock_alt"></i> 1h 30min</li>
                        <li><i class="icon_like"></i> 890</li>
                        <li><a href="{{url('/')}}/courses/{{$course->category->title}}/{{$course->title}}">{{ trans('titles.enrol') }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
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
@endsection
