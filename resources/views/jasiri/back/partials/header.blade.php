<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu   " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            <li class="nav-item  {{ (Request::is('account/dashboard')) || (Request::is('account/dashboard*')) ? 'active open' : null }}" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="{{url('/')}}/account/dashboard">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
            <li class="nav-item {{ (Request::is('account/messages/*')) || (Request::is('/')) ? 'active open' : null }}">
                <a href="{{url('/')}}/account/messages" class="nav-link">
                    <i class="icon-envelope"></i>
                    <span class="title">Messages</span>
                    <span class="selected"></span>
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
       <hr>
            <li class="heading">
                <h3 class="uppercase">Teacher</h3>
            </li>
           @if(isset(Auth::user()->teacher->id))
  
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
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>


