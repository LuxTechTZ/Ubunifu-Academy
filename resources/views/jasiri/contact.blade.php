@extends('jasiri.layouts.app')

@section('content')
<main>
		<section id="hero_in" class="contacts">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>Contact Ubunifu Academy</h1>
				</div>
			</div>
		</section>
		<!--/hero_in-->

		<div class="contact_info">
			<div class="container">
				<ul class="clearfix">
					<li>
						<i class="pe-7s-map-marker"></i>
						<h4>Address</h4>
						<span>NHC Samora House, 10<sup>th</sup> Floor<br>Dar es Salaam, Tanzania.</span>
					</li>
					<li>
						<i class="pe-7s-mail-open-file"></i>
						<h4>Email address</h4>
						<span><a href="mailto:info@ubunifuacademy.co.tz" style="color: aliceblue"> info@ubunifuacademy.co.tz </a><br><small>Monday to Friday 9am - 7pm</small></span>

					</li>
					<li>
						<i class="pe-7s-phone"></i>
						<h4>Contacts info</h4>
						<span><a href="tell:+255765204506" style="color: aliceblue"> +255 765 204 506</a><br><small>Monday to Saturday 9am - 7pm</small></span>
					</li>
				</ul>
			</div>
		</div>
		<!--/contact_info-->

		<div class="bg_color_1">
			<div class="container margin_120_95">
				<div class="row justify-content-between">
					<div class="col-lg-5">
						<div class="map_contact">
						</div>
						<!-- /map -->
					</div>
					<div class="col-lg-6">
						<h4>Send us a message</h4>
						<p>Either you have a question, you want to be a teacher or have something to say!<br> Be free to write us.</p>
						<div id="message-contact"></div>
						<form method="post" action="{{url('/')}}/" id="contactform" autocomplete="off">
							<div class="row">
								<div class="col-md-6">
									<span class="input">
										<input required class="input_field" type="text" id="name_contact" name="name_contact">
										<label class="input_label">
											<span class="input__label-content">Your Name</span>
										</label>
									</span>
								</div>
								<div class="col-md-6">
									<span class="input">
										<input required class="input_field" type="text" id="lastname_contact" name="lastname_contact">
										<label class="input_label">
											<span class="input__label-content">Last name</span>
										</label>
									</span>
								</div>
							</div>
							<!-- /row -->
							<div class="row">
								<div class="col-md-6">
									<span class="input">
										<input class="input_field" type="email" id="email_contact" name="email_contact">
										<label class="input_label">
											<span class="input__label-content">Your email</span>
										</label>
									</span>
								</div>
								<div class="col-md-6">
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
									<textarea class="input_field" id="message_contact" name="message_contact" style="height:150px;"></textarea>
									<label class="input_label">
										<span class="input__label-content">Your message</span>
									</label>
							</span>
							<p class="add_top_30">
                                <input type="submit" value="Submit" class="btn_1 rounded" id="submit-contact">
                            </p>
						</form>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_color_1 -->
	</main>
@endsection

@section('footer_script')
    <!-- SPECIFIC SCRIPTS -->
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyC82pAXRx54tLt3UmDDbysHPN-lSOvB4ao"></script>
	<script type="text/javascript" src="{{url('/')}}/js/mapmarker.jquery.js"></script>
	<script type="text/javascript" src="{{url('/')}}/js/mapmarker_func.jquery.js"></script>
@endsection
