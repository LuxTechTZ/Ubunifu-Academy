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
            <li class="nav-item {{ (Request::is('account/dashboard*')) || (Request::is('/')) ? 'active open' : null }}">
                <a href="{{url('/')}}/account/dashboard" class="nav-link">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                    <span class="selected"></span>
                </a>
            </li>
            <li class="nav-item {{ (Request::is('account/messages/*')) || (Request::is('/')) ? 'active open' : null }}">
                <a href="{{url('/')}}/account/messages" class="nav-link">
                    <i class="icon-envelope"></i>
                    <span class="title">Messages</span>
                    <span class="selected"></span>
                </a>
            </li>
            <li class="heading">
                <h3 class="uppercase">Student</h3>
            </li>
            @if(isset(Auth::user()->student->id))

            <li class="nav-item {{ (Request::is('account/student/courses*')) || (Request::is('/')) ? 'active open' : null }}">
                <a href="{{url('/')}}/account/student/courses" class="nav-link">
                    <i class="icon-envelope"></i>
                    <span class="title">My Paid Courses</span>
                    <span class="selected"></span>
                </a>
            </li>

            @endif
            <li class="heading">
                <h3 class="uppercase">Teacher</h3>
            </li>
            @if(isset(Auth::user()->teacher->id))

            <li class="nav-item {{ (Request::is('account/mycourses*')) || (Request::is('/')) ? 'active open' : null }}">
                <a href="{{url('/')}}/account/mycourses" class="nav-link">
                    <i class="icon-envelope"></i>
                    <span class="title">Teachers Courses</span>
                    <span class="selected"></span>
                </a>
            </li>

            @else
            
            @if(Auth::user()->level() >= 8)
            <li class="heading">
                <h3 class="uppercase">Management</h3>
            </li>
            <li class="nav-item  {{ (Request::is('admin/users*')) || (Request::is('admin/roles*')) ? 'active open' : null }}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-pointer"></i>
                    <span class="title">User management</span>
                    <span class="selected"></span>
                    <span class="arrow {{ (Request::is('admin/users*')) ? 'open' : null }} "></span>

                </a>
                <ul class="sub-menu">
                    <li class="nav-item {{ (Request::is('admin/users*')) ? 'active open' : null }}">
                        <a href="{{url('/')}}/admin/users" class="nav-link ">
                            <span class="title">Users</span>
                        </a>
                    </li>
                    <li class="nav-item  {{ (Request::is('admin/roles*')) || (Request::is('/')) ? 'active open' : null }}">
                        <a href="{{url('/')}}/admin/roles" class="nav-link ">
                            <span class="title">Roles</span>
                        </a>
                    </li>
                    <li class="nav-item  {{ (Request::is('home/management/users')) || (Request::is('/')) ? 'active open' : null }}">
                        <a href="maps_vector.html" class="nav-link ">
                            <span class="title">Permissions</span>
                        </a>
                    </li>
                </ul>
            </li>
            @endif
                @if(Auth::user()->level() >= 8)
                <li class="nav-item {{ (Request::is('admin/countries')) || (Request::is('/')) ? 'active open' : null }}">
                    <a href="{{url('/')}}/admin/countries" class="nav-link">
                        <i class="icon-home"></i>
                        <span class="title">Countries</span>
                        <span class="selected"></span>
                    </a>
                </li>
                @endif
                @if(Auth::user()->level() > 5)
                <li class="nav-item {{ (Request::is('admin/zone')) || (Request::is('/')) ? 'active open' : null }}">
                    <a href="{{url('/')}}/admin/zone" class="nav-link">
                        <i class="icon-home"></i>
                        <span class="title">Zone</span>
                        <span class="selected"></span>
                    </a>
                </li>
                @endif
                @if(Auth::user()->level() > 4)
                <li class="nav-item {{ (Request::is('admin/regions')) || (Request::is('/')) ? 'active open' : null }}">
                    <a href="{{url('/')}}/admin/regions" class="nav-link">
                        <i class="icon-home"></i>
                        <span class="title">Regions</span>
                        <span class="selected"></span>
                    </a>
                </li>
                @endif
                @if(Auth::user()->level() > 3)
                <li class="nav-item {{ (Request::is('admin/councils')) || (Request::is('/')) ? 'active open' : null }}">
                    <a href="{{url('/')}}/admin/councils" class="nav-link">
                        <i class="icon-home"></i>
                        <span class="title">Councils</span>
                        <span class="selected"></span>
                    </a>
                </li>
                @endif
                @if(Auth::user()->level() > 4)
                <li class="nav-item {{ (Request::is('admin/facilities*')) || (Request::is('/')) ? 'active open' : null }}">
                    <a href="{{url('/')}}/admin/facilities" class="nav-link">
                        <i class="icon-home"></i>
                        <span class="title">All Facilities</span>
                        <span class="selected"></span>
                    </a>
                </li>
                @endif
                @if(Auth::user()->level() >= 1)
                <li class="nav-item {{ (Request::is('home/facilities/me')) || (Request::is('/me')) ? 'active open' : null }}">
                    <a href="{{url('/')}}/home/facilities/me" class="nav-link">
                        <i class="icon-home"></i>
                        <span class="title">My Facilities</span>
                        <span class="selected"></span>
                    </a>
                </li>
                @endif
                @if(Auth::user()->level() >= 7)
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="icon-settings"></i>
                        <span class="title">Settings</span>
                    </a>
                </li>
                @endif
            @endif
            
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>


