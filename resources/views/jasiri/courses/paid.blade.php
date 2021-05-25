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
                    <li><a href="#teachers">Teachers</a></li>
                </ul>
            </div>
        </nav>
        <div class="container margin_60_35">
            <div class="row">
                <div class="col-lg-7">
                    <section id="description">
                        <div class="box_highlight">
                            <ul class="additional_info">
                                <li><i class="pe-7s-timer"></i>Course Progress<strong>20 %</strong></li>
                                <li><i class="pe-7s-date">
                                    </i>Course Start<strong>{{date('d M Y',strtotime($course->pivot->created_at))}}</strong></li>
                            </ul>
                        </div>
                        <!-- /box_highlight -->
                        {!! $course->full_details !!}
                        <!-- /row -->
                    </section>
                    <!-- /section -->

                    <section id="lessons">
                        <div class="intro_title">
                            <h2>Lessons</h2>
                        </div>
                        <div  role="tablist" class="add_bottom_45">
                            @foreach($course->lessons as $lesson)
                            <div class="card">
                                <div class="card-header" role="tab" id="headingOne">
                                    <h5 class="mb-0">
                                        @if($lesson->order != 1)
                                        <a class="collapsed" data-toggle="collapse" href="#collapse{{$lesson->id}}" aria-expanded="false" aria-controls="collapse{{$lesson->id}}"><i class="indicator ti-plus"></i> {{$lesson->name}}</a>
                                        @else
                                        <a data-toggle="collapse" href="#collapse{{$lesson->id}}" aria-expanded="true" aria-controls="collapse{{$lesson->id}}"><i class="indicator ti-plus"></i> {{$lesson->name}}</a>
                                        @endif
                                    </h5>
                                </div>

                                <div id="collapse{{$lesson->id}}" class="collapse @if($lesson->order == 1) show @endif" role="tabpanel" aria-labelledby="heading{{$lesson->id}}" >

                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet, pro ea <strong>mediocrem sapientem</strong>. Et his copiosae vivendum, corpora contentiones vel ei. Ne etiam graecis vis. Nec omnis alienum no, in quas corpora inimicus his, nec pertinacia disputando voluptatibus ei. In eam suas perpetua accusamus. Ad sit virtute rationibus efficiantur, sed hinc explicari ea.</p>

                                        <h6>Part 1</h6>
                                        <div class="list_lessons_2">
                                            <ul>
                                                @foreach($lesson->materials as $material)
                                                @if($material->type == "video")
                                                <li>
                                                    <a href="https://cdn.jwplayer.com/players/{{$material->key}}-S2YTpsbY.html" class="video">
                                                        <i class="ti-check"></i> {{$material->name}}
                                                    </a><span><i class="ti-layout-width-default"></i> {{$material->video_length}}</span></li>
                                                @elseif($material->type == "pdf")
                                                <li>
                                                    <a
                                                       href="{{url('/')}}/{{Illuminate\Support\Facades\Storage::url($material->path)}}"
                                                       class="video">
                                                        {{$material->name}}
                                                    </a>
                                                    <span><i class="ti-book"></i>  {{$material->pages}} Pages</span>
                                                </li>
                                                @elseif($material->type == "test")
                                                <li onclick="openTest{{$material->id}}()">{{$material->name}}<span><a href="#detail-{{$material->id}}"><i class="fs1" aria-hidden="true" data-icon="l"> </i> Test</a></span></li>
                                                @endif
                                                @endforeach
                                            </ul>
                                        </div>

                                        <h6>Part 2</h6>

                                    </div>
                                </div>
                            </div>
                            <!-- /card -->
                            @endforeach

                        </div>
                        <!-- /accordion -->
                    </section>
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
                                                <figure>
                                                    <img src="@if ($teacher->user->profile && $teacher->user->profile->avatar_status == 1)
                                                    {{ $teacher->user->profile->avatar }}
                                                    @else
                                                    {{ Gravatar::get($teacher->user->email) }}
                                                    @endif" alt="">
                                                </figure>
                                                <h5>{{$teacher->user->first_name}} {{$teacher->user->last_name}}</h5>
                                                <p>Instructor</p><i class="pe-7s-angle-right-circle"></i></a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                        <!-- /row -->
                    </section>
                </div>
                <!-- /col -->

                <aside class="col-lg-5" id="sidebar">
                    @foreach($course->lessons as $lesson)
                    @foreach($lesson->materials as $material)
                    @if($material->type == "test")
                    <div id="detail-{{$material->id}}" class="box_detail" style="display: none;">
                        <h4>{{$material->name}}</h4>
                        <p class="nopadding">Please compeate the test to proceed to the next part.</p>
                        <div id="message-contact"></div>
                        <hr>
                        <form method="post" action="{{url('/')}}" id="contactform" autocomplete="off">
                            <div class="row">
                                <div class="col-xl-6 col-lg-12 col-sm-6">
                                <p>Who is the first president of Tanzania?</p>
                                    <span class="input">
                                        <div class="md-radio-inline">
                                                <div class="md-radio">
                                                    <input type="radio" id="radio14" name="radio33" class="md-radiobtn">
                                                    <label for="radio14">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Magufuli JP </label>
                                                </div>
                                                <div class="md-radio has-error">
                                                    <input type="radio" id="radio15" name="radio33" class="md-radiobtn" >
                                                    <label for="radio15">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Kikwete JK </label>
                                                </div>
                                                <div class="md-radio has-warning">
                                                    <input type="radio" id="radio16" name="radio33" class="md-radiobtn">
                                                    <label for="radio16">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Julius JK </label>
                                                </div>
                                            </div>
                                        <input class="input_field" type="radio" id="name_contact" name="name_contact">
                                    </span>
                                </div>
                                <div class="col-xl-6 col-lg-12 col-sm-6">
                                <p>Whta was the first name of Tanzania?</p>
                                    <span class="input">
                                        <div class="md-radio-inline">
                                                <div class="md-radio">
                                                    <input type="radio" id="radio14" name="radio1" class="md-radiobtn">
                                                    <label for="radio14">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Tanganyika</label>
                                                </div>
                                                <div class="md-radio has-error">
                                                    <input type="radio" id="radio15" name="radio1" class="md-radiobtn" >
                                                    <label for="radio15">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Mtyanganyika</label>
                                                </div>
                                                <div class="md-radio has-warning">
                                                    <input type="radio" id="radio16" name="radio1" class="md-radiobtn">
                                                    <label for="radio16">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Bagamoyo </label>
                                                </div>
                                            </div>
                                        <input class="input_field" type="radio" id="name_contact" name="name_contact">
                                    </span>
                                </div>

                            </div>
                            <!-- /row -->
                            <div class="row">
                                <div class="col-xl-6 col-lg-12 col-sm-6">
                                    <span class="input">
                                        <input class="input_field" type="email" id="email_contact" name="email_contact">
                                        <label class="input_label">
                                            <span class="input__label-content">Your email</span>
                                        </label>
                                    </span>
                                </div>
                                <div class="col-xl-6 col-lg-12 col-sm-6">
                                    <span class="input">
                                        <input class="input_field" type="text" id="phone_contact" name="phone_contact">
                                        <label class="input_label">
                                            <span class="input__label-content">Your telephone</span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                            <!-- /row -->
                            <span class="input">
                                    <textarea class="input_field" id="message_contact" name="message_contact" style="height:120px;"></textarea>
                                    <label class="input_label">
                                        <span class="input__label-content">Your message</span>
                                    </label>
                            </span>
                            <span class="input">
                                    <input class="input_field" type="text" id="verify_contact" name="verify_contact">
                                    <label class="input_label">
                                    <span class="input__label-content">Are you human? 3 + 1 =</span>
                                    </label>
                            </span>
                            <hr>
                            <div style="position:relative;"><input type="submit" value="Enquire Now" class="btn_1 full-width" id="submit-contact"></div>
                        </form>
                    </div>
                    @endif
                    @endforeach
                    @endforeach
                </aside>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /bg_color_1 -->
</main>

<script type="text/javascript">
    @foreach($course->lessons as $lesson)
    @foreach($lesson->materials as $material)
    @if($material->type == "test")
    function openTest{{$material->id}}() {
        // body...
        var x = document.getElementById('detail-{{$material->id}}');
        // var y = document.getElementById('detailyy');

        // var selectedValue = x.options[x.selectedIndex].value;
        x.style.display = "block";
        // y.style.display = "none";


    }
    @endif
    @endforeach
    @endforeach

     function openDetail2() {
        // body...
        var x = document.getElementById('detailxx');
        var y = document.getElementById('detailyy');

        // var selectedValue = x.options[x.selectedIndex].value;
        x.style.display = "none";
        y.style.display = "block";


    }
</script>
@endsection
