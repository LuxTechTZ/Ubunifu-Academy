<!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-default fixed-top" id="mainNav">
    <a class="navbar-brand" href="{{url('/')}}/"><img src="{{url('/')}}/back_assets/img/logo.png" data-retina="true" alt="" width="163" height="36"></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item  {{ (Request::is('account/dashboard')) || (Request::is('account/dashboard*')) ? 'active open' : null }}" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="{{url('/')}}/account/dashboard">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
		<li class="nav-item {{ (Request::is('account/messages')) || (Request::is('account/messages*')) ? 'active open' : null }}" data-toggle="tooltip" data-placement="right" title="Messages">
          <a class="nav-link" href="{{url('/')}}/account/messages">
            <i class="fa fa-fw fa-envelope-open"></i>
            <span class="nav-link-text">Messages</span>
          </a>
        </li>
		<li class="nav-item  {{ (Request::is('account/courses')) || (Request::is('account/courses')) ? 'active open' : null }}" data-toggle="tooltip" data-placement="right" title="Bookings">
          <a class="nav-link" href="{{url('/')}}/account/courses">
            <i class="fa fa-fw fa-archive"></i>
            <span class="nav-link-text">My Courses</span>
          </a>
    </li>
    <li class="nav-item  {{ (Request::is('account/courses/new')) || (Request::is('account/courses/new*')) ? 'active open' : null }}" data-toggle="tooltip" data-placement="right" title="Bookings">
          <a class="nav-link" href="{{url('/')}}/account/courses">
            <i class="fa fa-fw fa-archive"></i>
            <span class="nav-link-text">Student Courses </span>
          </a>
    </li>
		<!-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Reviews">
          <a class="nav-link" href="reviews.html">
            <i class="fa fa-fw fa-star"></i>
            <span class="nav-link-text">Reviews</span>
          </a>
        </li>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Bookmarks">
          <a class="nav-link" href="bookmarks.html">
            <i class="fa fa-fw fa-heart"></i>
            <span class="nav-link-text">Bookmarks</span>
          </a>
        </li> -->

    @if(isset(Auth::user()->student->id))
    <!-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Add listing">
          <a class="nav-link" href="add-listing.html">
            <i class="fa fa-fw fa-plus-circle"></i>
            <span class="nav-link-text">Add listing</span>
          </a>
    </li> -->
    <li class="nav-item {{ (Request::is('account/profile')) || (Request::is('account/profile*')) ? 'active open' : null }}" data-toggle="tooltip" data-placement="right" title="Add listing">
          <a class="nav-link" href="{{url('/')}}/account/profile">
            <i class="fa fa-fw fa-user"></i>
            <span class="nav-link-text">Student Profile</span>
          </a>
    </li>
    @endif

    @if(isset(Auth::user()->teacher->id))
    <hr>
    <li class="nav-item  {{ (Request::is('account/courses/new')) || (Request::is('account/courses/new*')) ? 'active open' : null }}" data-toggle="tooltip" data-placement="right" title="Bookings">
          <a class="nav-link" href="{{url('/')}}/account/courses">
            <i class="fa fa-fw fa-archive"></i>
            <span class="nav-link-text">Teachers Courses </span>
          </a>
    </li>
		<li class="nav-item {{ (Request::is('account/courses/create')) || (Request::is('account/courses/new*')) ? 'active open' : null }}" data-toggle="tooltip" data-placement="right" title="Add listing">
          <a class="nav-link" href="{{url('/')}}/account/courses/create">
            <i class="fa fa-fw fa-plus-circle"></i>
            <span class="nav-link-text">Add Course</span>
          </a>
    </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Add listing">
          <a class="nav-link" href="{{url('/')}}/account/profile">
            <i class="fa fa-fw fa-user"></i>
            <span class="nav-link-text">Teacher's Profile</span>
          </a>
    </li>
    @endif
    
		<!-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-gear"></i>
            <span class="nav-link-text">Components</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="charts.html">Charts</a>
            </li>
			       <li>
              <a href="tables.html">Tables</a>
            </li>
          </ul>
      </li> -->

      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="cartDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-user"></i>
            <span class="d-lg-none">Cart 
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              @if(isset(App\Models\Jasiri\Cart::where('session_id','=',Session::getId())->first()->id ))
              <p class="badge badge-pill badge-primary">{{count(App\Models\Jasiri\Cart::where('session_id','=',Session::getId())->first()->items)}}</p>
              @endif
              <i class=""></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">Items In Cart:</h6>
              @if(isset(App\Models\Jasiri\Cart::where('session_id','=',Session::getId())->first()->id ))
            @foreach(App\Models\Jasiri\Cart::where('session_id','=',Session::getId())->first()->items as $item)
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{url('/')}}/course/purchase/{{$item->course->id}}">
              <strong>{{$item->course->title}}</strong>
              <span class="small float-right text-muted">{{number_format($item->course->price)}} TSH</span>
              <div class="dropdown-message small">{{$item->course->description}}</div>
            </a>
            @endforeach
              @endif
            

            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all messages</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">New Messages:</h6>
                <div class="dropdown-divider"></div>
                <!-- <a class="dropdown-item" href="#">
                  <strong>David Miller</strong>
                  <span class="small float-right text-muted">11:21 AM</span>
                  <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
                </a> -->
                
            <a class="dropdown-item small" href="{{url('/')}}/account/messages">View all messages</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">New Alerts:</h6>
            <div class="dropdown-divider"></div>
            <!-- <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div> -->
            <a class="dropdown-item small" href="#">View all alerts</a>
          </div>
        </li>
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control search-top" type="text" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="login">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        </li>
      </ul>
    </div>
  </nav>
  <!-- /Navigation-->