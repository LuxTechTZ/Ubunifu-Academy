		<!--=== Footer ===-->
		<div id="footer-default" class="footer-default">
			<div class="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-4 md-margin-bottom-40">
							<!-- About -->
							<div class="headline"><h2>About</h2></div>
							<p class="margin-bottom-25 md-margin-bottom-40">Chuo Master is a project to help college and university students to persue their Studies Easily</p>
							<!-- End About -->

							<!-- Monthly Newsletter -->
							<div class="headline"><h2>Monthly Newsletter</h2></div>
							<p>Subscribe to our newsletter and stay up to date with the latest news and deals!</p>
							<form class="footer-subsribe">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Email Address">
									<span class="input-group-btn">
										<button class="btn-u" type="button">Subscribe</button>
									</span>
								</div>
							</form>
							<!-- End Monthly Newsletter -->
						</div><!--/col-md-4-->

						<div class="col-md-4 md-margin-bottom-40">
							<!-- Recent Blogs -->
							<div class="posts">
								<div class="headline"><h2>Recent Blog Entries</h2></div>
								@foreach(App\Models\Chuo\Blog::limit(4)->get() as $post)
								<dl class="dl-horizontal">
									<dt><a href="{{url('/')}}/blog#post-{{$post->id}}"><img src="{{url('/')}}/{{$post->images->first()->image}}" alt="" /></a></dt>
									<dd>
										<p><a href="{{url('/')}}/blog#post-{{$post->id}}">{{$post->title}}</a></p>
									</dd>
								</dl>
								@endforeach

							</div>
							<!-- End Recent Blogs -->
						</div><!--/col-md-4-->

						<div class="col-md-4">
							<!-- Contact Us -->
							<div class="headline"><h2>Contact Us</h2></div>
							<address class="md-margin-bottom-40">
								Kinondoni B, Dar es salaam<br />
								Phone: +255 765 204 506<br />
								Email: <a href="mailto:info@chuomaster.com" class="">info@chuomaster.com</a>
							</address>
							<!-- End Contact Us -->

							<!-- Social Links -->
							<div class="headline"><h2>Stay Connected</h2></div>
							<ul class="list-inline shop-social">
								<li><a href="https://web.facebook.com/chuomaster" target="_blank"><i class="fb rounded-md fa fa-facebook"></i></a></li>
								<li><a href="https://www.instagram.com/chuomaster/" target="_blank"><i class="yt rounded-md fa fa-instagram"></i></a></li>
							</ul>
							<!-- End Social Links -->
						</div><!--/col-md-4-->
					</div>
				</div>
			</div><!--/footer-->

			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<p>
								2020 &copy; Chuo Master. ALL Rights Reserved.
								 | Designed and developed by <a target="_blank" href="http://luxtechtz.com/">LuxTechTZ</a>
							</p>
						</div>
						<div class="col-md-4">
							<a href="index.html">
								<img style="max-width: 100px" class="pull-right" id="logo-footer" src="{{url('/')}}//uploads/logo/Chuo Master.png" alt="">
							</a>
						</div>
					</div>
				</div>
			</div><!--/copyright-->
		</div>
		<!--=== End Footer ===-->






<div class="modal fade" id="responsiveLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel4"><h2>Log in to your account</h2></h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
					 	
						<form id="sky-form1" method="POST" class="log-reg-block sky-form" action="{{ route('login') }}">
							 @csrf
							

							<section>
								<label class="input login-input">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<input type="email" placeholder="Email Address" name="email" class="form-control" value="{{ old('email') }}" required autofocus>
										@if ($errors->has('email'))
		                                    <span class="invalid-feedback">
		                                        <strong>{{ $errors->first('email') }}</strong>
		                                    </span>
		                                @endif
									</div>
								</label>
							</section>
							<section>
								<label class="input login-input no-border-top">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-lock"></i></span>
										<input type="password" placeholder="Password" name="password" class="form-control">
										@if ($errors->has('password'))
		                                    <span class="invalid-feedback">
		                                        <strong>{{ $errors->first('password') }}</strong>
		                                    </span>
		                                @endif
									</div>
								</label>
							</section>
							<div class="row margin-bottom-5">
								<div class="col-xs-6">
									<label class="checkbox">
										<input type="checkbox" name="checkbox"/>
										<i></i>
										Remember me
									</label>
								</div>
								<div class="col-xs-6 text-right">
									<a href="#">Forget your Password?</a>
								</div>
							</div>
							<button class="btn-u btn-u-sea-shop btn-block margin-bottom-20" type="submit">Log in</button>

						</form>

					</div>
						<div class="margin-bottom-20"></div>
						<p class="text-center">Don't have account yet? Learn more and <a href="{{url('/')}}/user_register">Sign Up</a></p>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn-u btn-u-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn-u btn-u-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
