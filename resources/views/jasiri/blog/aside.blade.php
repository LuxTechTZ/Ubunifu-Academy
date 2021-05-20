<aside class="col-lg-3">
					<div class="widget">
						<form>
							<div class="form-group">
								<input type="text" name="search" id="search" class="form-control" placeholder="Search...">
							</div>
							<button type="submit" id="submit" class="btn_1 rounded"> Search</button>
						</form>
					</div>
					<!-- /widget -->
					<div class="widget">
						<div class="widget-title">
							<h4>Recent Posts</h4>
						</div>
						<ul class="comments-list">
                            @foreach(\App\Models\Jasiri\Blog::limit(6)->get() as $blog)
							<li>
								<div class="alignleft">
									<a href="{{url('/blog/'.$blog->id.'/'.$blog->title)}}"><img src="{{url('/')}}/{{Storage::url($blog->image)}}" alt="{{$blog->title}}"></a>
								</div>
								<small>
                                    {{date('M d, Y',strtotime($blog->date_posted))}}
                                </small>
								<h3>
                                    <a href="{{url('/blog/'.$blog->id.'/'.$blog->title)}}" title="">{{$blog->title}}</a></h3>
                                <br>
                                    @if (strlen($blog->article) > 30)
                                        {!! $blog->article = substr($blog->article, 0, 27) . '...' !!}
                                    @else
                                        {!! $blog->article !!}
                                    @endif
							</li>
                            @endforeach


						</ul>
					</div>
					<!-- /widget -->
    <!--
					<div class="widget">
						<div class="widget-title">
							<h4>Blog Categories</h4>
						</div>
						<ul class="cats">
							<li><a href="#">Admissions <span>(12)</span></a></li>
							<li><a href="#">News <span>(21)</span></a></li>
							<li><a href="#">Events <span>(44)</span></a></li>
							<li><a href="#">Focus in the lab <span>(31)</span></a></li>
						</ul>
					</div>
					-->
					<!-- /widget -->
					<div class="widget">
						<div class="widget-title">
							<h4>Popular Tags</h4>
						</div>
						<div class="tags">
							<a href="#">Information tecnology</a>
							<a href="#">Students</a>
							<a href="#">Community</a>
							<a href="#">Carreers</a>
							<a href="#">Literature</a>
							<a href="#">Seminars</a>
						</div>
					</div>
					<!-- /widget -->
				</aside>
