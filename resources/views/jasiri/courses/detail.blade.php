@extends('jasiri.layouts.app')

@section('content')
<main>
    <section id="hero_in" class="courses">
        <div class="wrapper">
            <div class="container">
                <h1 class="fadeInUp"><span></span>{{$course->title}}</h1>
            </div>
        </div>
    </section>
    <!--/hero_in-->

    <div class="bg_color_1">
        <nav class="secondary_nav sticky_horizontal">
            <div class="container">
                <ul class="clearfix">
                    <li><a href="#description" class="active">Description</a></li>
                    <li><a href="#lessons">Lessons</a></li>
                    <li><a href="#reviews">Reviews</a></li>
                </ul>
            </div>
        </nav>
        <div class="container margin_60_35">
            <div class="row">
                <div class="col-lg-8">
                    <h2>Intro Video</h2>
                    <div itemscope itemtype="https://schema.org/VideoObject"><meta itemprop="uploadDate" content="Sat Oct 24 2020 08:49:02 GMT+0300 (East Africa Time)"/><meta itemprop="name" content="Alikiba - So Hot (1080 )"/><meta itemprop="description" content="Test Video for jasiri App"/><meta itemprop="duration" content="PT2M54.916S" /><meta itemprop="thumbnailUrl" content="https://content.jwplatform.com/thumbs/jKMvkpGt-1920.jpg"/><meta itemprop="contentUrl" content="https://content.jwplatform.com/videos/jKMvkpGt-X4gc1TeG.mp4"/><div style="position:relative; overflow:hidden; padding-bottom:56.25%"> <iframe src="https://cdn.jwplayer.com/players/jKMvkpGt-Ta53m8HE.html" width="100%" height="100%" frameborder="0" scrolling="auto" title="Alikiba - So Hot (1080 )" style="position:absolute;" allowfullscreen></iframe> </div></div>

                    {!! $course->full_details !!}
                    <!-- /section -->
                    
                    <section id="lessons">
                        <div class="intro_title">
                            <h2>Lessons</h2>
                            <ul>
                                <li>{{count($course->lessons)}} lessons</li>
                                <li>01:02:10</li>
                            </ul>
                        </div>
                        <div id="accordion_lessons" role="tablist" class="add_bottom_45">
                            @foreach($course->lessons as $lesson)
                            <div class="card">
                                <div class="card-header" role="tab" id="heading{{$lesson->id}}">
                                    <h5 class="mb-0">
                                        @if($lesson->order != 1)
                                        <a class="collapsed" data-toggle="collapse" href="#collapse{{$lesson->id}}" aria-expanded="false" aria-controls="collapse{{$lesson->id}}"><i class="indicator ti-plus"></i> {{$lesson->name}}</a>
                                        @else
                                        <a data-toggle="collapse" href="#collapse{{$lesson->id}}" aria-expanded="true" aria-controls="collapse{{$lesson->id}}"><i class="indicator ti-minus"></i> {{$lesson->name}}</a>
                                        @endif 

                                    </h5>
                                </div>

                                <div id="collapse{{$lesson->id}}" class="collapse @if($lesson->order == 1) show @endif" role="tabpanel" aria-labelledby="heading{{$lesson->id}}" data-parent="#accordion_lessons">
                                    <div class="card-body">
                                        <div class="list_lessons">
                                            <ul>
                                                @foreach($lesson->materials as $material)
                                                @if($material->type == "video")
                                                <li><a href="{{url('/')}}/video/Alikiba - SO HOT (Official Music Video) ( 1080 X 1080 ).mp4" class="video">{{$material->name}}</a><span>00:59</span></li>
                                                @elseif($material->type == "pdf")
                                                <li><a href="#0" class="txt_doc">{{$material->name}}</a><span>9 Pages</span></li>
                                                @endif
                                                @endforeach

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         
                            @endforeach
                        </div>
                        <!-- /accordion -->
                    </section>
                    <!-- /section -->
                    
                    <section id="reviews">
                        <h2>Reviews</h2>
                        <div class="reviews-container">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div id="review_summary">
                                        <strong>4.7</strong>
                                        <div class="rating">
                                            <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                        </div>
                                        <small>Based on 4 reviews</small>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="row">
                                        <div class="col-lg-10 col-9">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-3"><small><strong>5 stars</strong></small></div>
                                    </div>
                                    <!-- /row -->
                                    <div class="row">
                                        <div class="col-lg-10 col-9">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-3"><small><strong>4 stars</strong></small></div>
                                    </div>
                                    <!-- /row -->
                                    <div class="row">
                                        <div class="col-lg-10 col-9">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-3"><small><strong>3 stars</strong></small></div>
                                    </div>
                                    <!-- /row -->
                                    <div class="row">
                                        <div class="col-lg-10 col-9">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-3"><small><strong>2 stars</strong></small></div>
                                    </div>
                                    <!-- /row -->
                                    <div class="row">
                                        <div class="col-lg-10 col-9">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 0" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-3"><small><strong>1 stars</strong></small></div>
                                    </div>
                                    <!-- /row -->
                                </div>
                            </div>
                            <!-- /row -->
                        </div>

                        <hr>

                        <!-- /section -->
                        <section id="teachers">
                            <div class="intro_title">
                                <h2>Teachers</h2>
                            </div>
                            <p>Meet the proffesionals behind these courses.</p>
                            <div class="row add_top_20 add_bottom_30">
                                <div class="col-lg-6">
                                    <ul class="list_teachers">
                                        @foreach($course->teachers as $teacher)
                                        <li>
                                            <a href="{{url('/')}}/teacher/{{$teacher->id}}">
                                                <figure><img src="{{url('/')}}/img/teacher_1_thumb.jpg" alt=""></figure>
                                                <h5>{{$teacher->user->first_name}} {{$teacher->user->last_name}}</h5>
                                                <p>Category</p><i class="pe-7s-angle-right-circle"></i></a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                
                            <!-- /row -->
                        </section>
                        <!-- /section -->

                        <div class="reviews-container">

                            <div class="review-box clearfix">
                                <figure class="rev-thumb"><img src="{{url('/')}}/img/avatar1.jpg" alt="">
                                </figure>
                                <div class="rev-content">
                                    <div class="rating">
                                        <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                    </div>
                                    <div class="rev-info">
                                        Admin – April 03, 2020:
                                    </div>
                                    <div class="rev-text">
                                        <p>
                                            Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- /review-box -->
                            <div class="review-box clearfix">
                                <figure class="rev-thumb"><img src="{{url('/')}}/img/avatar2.jpg" alt="">
                                </figure>
                                <div class="rev-content">
                                    <div class="rating">
                                        <i class="icon-star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                    </div>
                                    <div class="rev-info">
                                        Ahsan – April 01, 2016:
                                    </div>
                                    <div class="rev-text">
                                        <p>
                                            Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- /review-box -->
                            <div class="review-box clearfix">
                                <figure class="rev-thumb"><img src="{{url('/')}}/img/avatar3.jpg" alt="">
                                </figure>
                                <div class="rev-content">
                                    <div class="rating">
                                        <i class="icon-star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                    </div>
                                    <div class="rev-info">
                                        Sara – March 31, 2016:
                                    </div>
                                    <div class="rev-text">
                                        <p>
                                            Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- /review-box -->
                        </div>
                        <!-- /review-container -->
                    </section>
                    <!-- /section -->
                </div>
                <!-- /col -->
                
                <aside class="col-lg-4" id="sidebar">
                    <div class="box_detail">
                        <figure>
                            <a href="https://youtu.be/N0NSCicIJz4" class="video"><i class="arrow_triangle-right"></i><img src="{{url('/')}}/img{{$course->image}}" alt="" class="img-fluid"><span>View course preview</span></a>
                        </figure>
                        <div class="price">{{number_format($course->price)}} TSH<!-- <span class="original_price"><em>$49</em>60% discount price</span> -->
                        </div>
                        <a href="{{url('/')}}/course/purchase/{{$course->id}}" class="btn_1 full-width">Purchase</a>
                        <a href="#0" class="btn_1 full-width outline"><i class="icon_heart"></i> Add to wishlist</a>
                        <div id="list_feat">
                            <h3>What's includes</h3>
                            <ul>
                                <li><i class="icon_mobile"></i>Mobile support</li>
                                <li><i class="icon_archive_alt"></i>Lesson archive</li>
                                <li><i class="icon_mobile"></i>Mobile support</li>
                                <li><i class="icon_chat_alt"></i>Tutor chat</li>
                                <li><i class="icon_document_alt"></i>Course certificate</li>
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /bg_color_1 -->
</main>


<script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
<script>
  (function(){
    // Replace with your asset's playback ID
    var playbackId = "uu8B8q4HScaRZT01LXTSVCu9NkXOQ1eXjIHiMmvy9zKo";
    var url = "https://stream.mux.com/"+playbackId+".m3u8";
    var video = document.getElementById("myVideo");
    
    // Let native HLS support handle it if possible
    if (video.canPlayType('application/vnd.apple.mpegurl')) {
      video.src = url;
    } else if (Hls.isSupported()) {
      // HLS.js-specific setup code
      hls = new Hls();
      hls.loadSource(url);
      hls.attachMedia(video);
    }
  })();
</script>

<script type="text/javascript">
    $(document).ready(function(){
       $('#videoElementID').bind('contextmenu',function() { return false; });
    });
</script>
@endsection