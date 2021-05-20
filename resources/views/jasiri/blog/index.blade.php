@extends('jasiri.layouts.app')

@section('custom_css')
    <!-- SPECIFIC CSS -->
    <link href="{{url('/')}}/css/blog.css" rel="stylesheet">
@endsection
@section('content')
<main>
		<section id="hero_in" class="general">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>{{ trans('titles.blog') }}</h1>
				</div>
			</div>
		</section>
		<!--/hero_in-->

		<div class="container margin_60_35">
			<div class="row">
				<div class="col-lg-9">


                    @foreach($blogs as $blog)
					<article class="blog wow fadeIn">
						<div class="row no-gutters">
							<div class="col-lg-7">
								<figure>
									<a href="{{url('/blog/'.$blog->id.'/'.$blog->title)}}"><img
                                            src="{{url('/')}}/{{Storage::url($blog->image)}}" alt="{{$blog->title}}">
										<div class="preview"><span>Read more</span></div>
									</a>
								</figure>
							</div>
							<div class="col-lg-5">
								<div class="post_info">
									<small>{{date('M d, Y',strtotime($blog->date_posted))}}</small>
									<h3><a href="{{url('/blog/'.$blog->id.'/'.$blog->title)}}">
                                        {{$blog->title}}
                                        </a></h3>
									<p>
                                        @if (strlen($blog->article) > 200)
                                            {!! $blog->article = substr($blog->article, 0, 197) . '...' !!}
                                        @else
                                            {!! $blog->article !!}
                                        @endif
                                    </p>
									<ul>
										<li>
											<div class="thumb">
                                                <img src="img/thumb_blog.jpg" alt="">
                                            </div> {{$blog->author}}
										</li>
										<li><i class="icon_comment_alt"></i> 20</li>
									</ul>
								</div>
							</div>
						</div>
					</article>
					<!-- /article -->
                    @endforeach

					<nav aria-label="...">
						<ul class="pagination pagination-sm">
							<li class="page-item disabled">
								<a class="page-link" href="#" tabindex="-1">Previous</a>
							</li>
							<li class="page-item"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item">
								<a class="page-link" href="#">Next</a>
							</li>
						</ul>
					</nav>
					<!-- /pagination -->
				</div>
				<!-- /col -->

				@include('jasiri.blog.aside')
				<!-- /aside -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</main>
@endsection
