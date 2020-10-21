<!--Left Sidebar-->
<div class="col-md-3 md-margin-bottom-40">
	@if (isset(Auth::User()->profile))
        <img src="{{ Auth::user()->profile->avatar }}" alt="{{ Auth::user()->name }}" class="img-responsive profile-img margin-bottom-20">
    @else
        <img class="img-responsive profile-img margin-bottom-20" src="{{url('/')}}/uploads/avatar/admin.jpg" alt="">
    @endif

	<ul class="list-group sidebar-nav-v1 margin-bottom-40" id="sidebar-nav-1">
		
	
		<li class="list-group-item active">
			<a href="{{url('/')}}/profile"><i class="fa fa-user"></i> Profile</a>
		</li>

		<li class="list-group-item">
			<a href="{{url('/')}}/orders"><i class="fa fa-user"></i> Orders</a>
		</li>
		
		<li class="list-group-item">
			<a href="{{url('/')}}/edit_profile"><i class="fa fa-cog"></i> Settings</a>
		</li>
	</ul>


	<hr>



	<div class="margin-bottom-50"></div>

	<!--Datepicker-->
	<form action="#" id="sky-form2" class="sky-form">
		<div id="inline-start"></div>
	</form>
	<!--End Datepicker-->
</div>
<!--End Left Sidebar-->