@extends('layouts.chuo.front')

@section('template_linked_css')
	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="{{url('/')}}/front_assets/assets/plugins/animate.css">
	<link rel="stylesheet" href="{{url('/')}}/front_assets/assets/plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="{{url('/')}}/front_assets/assets/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{url('/')}}/front_assets/assets/plugins/scrollbar/css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="{{url('/')}}/front_assets/assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
	<link rel="stylesheet" href="{{url('/')}}/front_assets/assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">

	<!-- CSS Page Style -->
	<link rel="stylesheet" href="{{url('/')}}/front_assets/assets/css/pages/profile.css">
	<link rel="stylesheet" href="{{url('/')}}/front_assets/assets/css/pages/shortcode_timeline2.css">

	<!-- CSS Theme -->
	<link rel="stylesheet" href="{{url('/')}}/front_assets/assets/css/theme-colors/default.css" id="style_color">
	<link rel="stylesheet" href="{{url('/')}}/front_assets/assets/css/theme-skins/dark.css">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="{{url('/')}}/front_assets/assets/css/custom.css">
@endsection

@section('content')
<!--=== Profile ===-->
<hr>
		<div class="container content profile">
			<div class="row">
				@include('part_chuo.left_side')

				<!-- Profile Content -->
				<div class="col-md-9">
					<div class="profile-body margin-bottom-20">
						<div class="tab-v1">
							<ul class="nav nav-justified nav-tabs">
								<li class="active"><a data-toggle="tab" href="#profile">Edit Profile</a></li>
								<li><a data-toggle="tab" href="#passwordTab">Educational Details</a></li>
								<li><a data-toggle="tab" href="#payment">Payment & Balance</a></li>
								<li><a data-toggle="tab" href="#settings">Notification Settings</a></li>
							</ul>
							<div class="tab-content">
								<div id="profile" class="profile-edit tab-pane fade in active">
								<form method="POST" action="{{url('/')}}/user/profile/update/{{Auth::User()->id}}">
									@csrf
									<h2 class="heading-md">Manage your Name, ID and Email Addresses.</h2>
									<p>Below are the name and email addresses on file for your account.</p>
									<br>
									<dl class="dl-horizontal">
										<dt><strong>Your name </strong></dt>
										<dd>
											<input type="text" name="first_name" value="{{Auth::User()->first_name}}">
											<input type="text" name="last_name" value="{{Auth::User()->last_name}}">
											<span>
												<a class="pull-right" href="#">
													<i class="fa fa-pencil"></i>
												</a>
											</span>
										</dd>
										<hr>
										<dt><strong>Your ID </strong></dt>
										<dd>
											{{Auth::User()->id}}
											<span>
												<a class="pull-right" href="#">
												</a>
											</span>
										</dd>
										<hr>
										
										<dt><strong>Email Address </strong></dt>
										<dd>
											{{Auth::User()->email}}
											<span>
												<a class="pull-right" href="#">
												</a>
											</span>
										</dd>
										<hr>
										<dt><strong>Phone Number </strong></dt>
										<dd>
											<input type="text" name="phone" value="{{Auth::User()->phone}}">
											<span>
												<a class="pull-right" href="#">
													<i class="fa fa-pencil"></i>
												</a>
											</span>
										</dd>
										<hr>
									</dl>
									<button type="submit" class="btn-u">Update Details</button>
							</form>
								</div>

								<div id="passwordTab" class="profile-edit tab-pane fade">
									<h2 class="heading-md">Manage your University/College Details</h2>
									<br>
									@if(isset(Auth::User()->profile->course->id))
									<form method="POST" action="{{url('/')}}/user/profile/update/{{Auth::User()->id}}">
										@csrf
										
										<br>
										<dl class="dl-horizontal">
											
											<dt><strong>College/University Name </strong></dt>
											<dd>
												{{Auth::User()->college->name}}
												<span>
													<a class="pull-right" href="#">
													</a>
												</span>
											</dd>
											<hr>
											
											@if(isset(Auth::User()->profile->course->name))
											<dt><strong>Course </strong></dt>
											<dd>
												{{Auth::User()->profile->course->name}} <br> Year:{{Auth::User()->profile->yos->year}} Semester:{{Auth::User()->profile->semester->roman_value}}
												<span>
													<a class="pull-right" href="#">
													</a>
												</span>
											</dd>
											@else
											<dt><strong>Select Course </strong></dt>
											<section class="col col-5">
												<label class="select">
													<select name="college_id">
														<option>Select Your Course</option>
															@foreach($college->courses as $college)
															<option value="{{$college->id}}">{{$college->name}}</option>
															@endforeach
													</select>
													<i></i>
												</label>
											</section>
											@endif

										</dl>
										<button type="submit" class="btn-u">Edit Details</button>
								</form>
									@else
									<form class="sky-form" id="sky-form4" action="{{url('/')}}/save_college" method="POST">
										 @csrf
										
										<div class="row">
											<label class="label col col-2">Select College</label>
											<section class="col col-5">
												<label class="select">
													<select name="course_id">
														<option disabled="disabled">Course</option>
															@foreach(App\Models\Chuo\Course::get() as $course)
															<option value="{{$course->id}}">{{$course->name}}</option>
															@endforeach
													</select>
													<i></i>
												</label>
											</section>
											<section class="col col-3">
												<label class="select">
													<select name="yos_id">
														<option>Yaer</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
															
													</select>
													<i></i>
												</label>
											</section>
											<section class="col col-2">
												<label class="select">
													<select name="semester_id">
														<option>Semester</option>
														<option value="1">1</option>
														<option value="2">2</option>
													</select>
													<i></i>
												</label>
											</section>
										</div>
										
										<br>
										
										<button type="button" class="btn-u btn-u-default">Cancel</button>
										<button class="btn-u" type="submit">Save Changes</button>
									</form>
									@endif
									
								</div>

								<div id="payment" class="profile-edit tab-pane fade">
									<h2 class="heading-md">Manage your Payments and Balance</h2>
									<p>Below are the payments for your account.</p>
									<hr>
									<h2><b>Your Balance:</b> 20,000 TSH</h2>
									<br>
									<form class="sky-form" id="sky-form" action="#">
										<!--Checkout-Form-->
									<div class="col-md-12">
										<div class="panel panel-yellow margin-bottom-40">
											<div class="panel-heading">
												<h3 class="panel-title"><i class="fa fa-money"></i> Previos Expenses</h3>
											</div>
											<table class="table table-hover">
												<thead>
													<tr>
														<th>#</th>
														<th>Date</th>
														<th>Used For</th>
														<th>Amount</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>452</td>
														<td>15 Mar 2020</td>
														<td>Week Subscription</td>
														<td>2,000 TSH</td>
													</tr>
													<tr>
														<td>131</td>
														<td>20 June 2020</td>
														<td>Week Subscription</td>
														<td>2,000 TSH</td>
													</tr>
													<tr>
														<td>5436</td>
														<td>10 Aug 2020</td>
														<td>Order Payment</td>
														<td>120,000 TSH</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>


										<button class="btn-u" type="button">Topup Account</button>
										<!--End Checkout-Form-->
									</form>
								</div>

								<div id="settings" class="profile-edit tab-pane fade">
									<h2 class="heading-md">Manage your Notifications.</h2>
									<p>Below are the notifications you may manage.</p>
									<br>
									<form class="sky-form" id="sky-form3" action="#">
										<label class="toggle"><input type="checkbox" checked="" name="checkbox-toggle-1"><i class="no-rounded"></i>Email notification</label>
										<hr>
										<label class="toggle"><input type="checkbox" checked="" name="checkbox-toggle-1"><i class="no-rounded"></i>Send me email notification when a user comments on my blog</label>
										<hr>
										<label class="toggle"><input type="checkbox" checked="" name="checkbox-toggle-1"><i class="no-rounded"></i>Send me email notification for the latest update</label>
										<hr>
										<label class="toggle"><input type="checkbox" checked="" name="checkbox-toggle-1"><i class="no-rounded"></i>Send me email notification when a user sends me message</label>
										<hr>
										<label class="toggle"><input type="checkbox" checked="" name="checkbox-toggle-1"><i class="no-rounded"></i>Receive our monthly newsletter</label>
										<hr>
										<button type="button" class="btn-u btn-u-default">Reset</button>
										<button class="btn-u" type="submit">Save Changes</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Profile Content -->
			</div>
		</div>
		<!--=== End Profile ===-->	
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>
$(document).ready(function(){
    $("select.country").change(function(){
        var selectedCountry = $(".country option:selected").val();
        $.ajax({
            type: "POST",
            url: "process-request.php",
            data: { country : selectedCountry } 
        }).done(function(data){
            $("#response").html(data);
        });
    });
});
</script>
<form>
    <table>
        <tr>
            <td>
                <label>Country:</label>
                <select class="country">
                    <option>Select</option>
                    <option value="1">United States</option>
                    <option value="india">India</option>
                    <option value="uk">United Kingdom</option>
                </select>
            </td>
            <td id="response">
                <!--Response will be inserted here-->
            </td>
        </tr>
    </table>
</form>

<?php
if(isset($_POST["country"])){
    // Capture selected country
    $country = $_POST["country"];
     
    // Define country and city array
    $countryArr = array(
                    "usa" => array("New Yourk", "Los Angeles", "California"),
                    "india" => array("Mumbai", "New Delhi", "Bangalore"),
                    "uk" => array("London", "Manchester", "Liverpool")
                );
     
    // Display city dropdown based on country name
    if($country !== 'Select'){
        echo "<label>City:</label>";
        echo "<select>";
        foreach($countryArr[$country] as $value){
            echo "<option>". $value . "</option>";
        }
        echo "</select>";
    } 
}
?>
@endsection

@section('template_linked_js')
	<!-- JS Implementing Plugins -->
	<script type="text/javascript" src="{{url('/')}}/front_assets/assets/plugins/back-to-top.js"></script>
	<script type="text/javascript" src="{{url('/')}}/front_assets/assets/plugins/smoothScroll.js"></script>
	<script type="text/javascript" src="{{url('/')}}/front_assets/assets/plugins/circles-master/circles.js"></script>
	<script type="text/javascript" src="{{url('/')}}/front_assets/assets/plugins/sky-forms-pro/skyforms/js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="{{url('/')}}/front_assets/assets/plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<!-- JS Customization -->
	<script type="text/javascript" src="{{url('/')}}/front_assets/assets/js/custom.js"></script>
	<!-- JS Page Level -->
	<script type="text/javascript" src="{{url('/')}}/front_assets/assets/js/app.js"></script>
	<script type="text/javascript" src="{{url('/')}}/front_assets/assets/js/plugins/datepicker.js"></script>
	<script type="text/javascript" src="{{url('/')}}/front_assets/assets/js/plugins/circles-master.js"></script>
	<script type="text/javascript" src="{{url('/')}}/front_assets/assets/js/plugins/style-switcher.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function() {
			App.init();
			App.initScrollBar();
			Datepicker.initDatepicker();
			CirclesMaster.initCirclesMaster1();
			StyleSwitcher.initStyleSwitcher();
		});
	</script>
@endsection