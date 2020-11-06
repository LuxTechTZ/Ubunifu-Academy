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
            @if(Request::is('home/facility*') == true)

            <li class="nav-item {{ (Request::is('home/facilities/me')) || (Request::is('/')) ? 'active open' : null }}">
                <a href="{{url('/')}}/home/facilities/me" class="nav-link">
                    <i class="icon-home"></i>
                    <span class="title">My Facilities</span>
                    <span class="selected"></span>
                </a>
            </li>
             <li class="nav-item {{ (Request::is('home/facility/'.$facility->id)) || (Request::is('/')) ? 'active open' : null }}">
                <a href="{{url('/')}}/home/facility/{{$facility->id}}" class="nav-link">
                    <i class="icon-home"></i>
                    <span class="title">{{$facility->facility_name}} Dashboard</span>
                    <span class="selected"></span>
                </a>
            </li>
            @if(isset($test_code))
            <li class="nav-item {{ (Request::is('home/facility/*/*/requests*')) || (Request::is('home/facility/*/*/request/create')) ? 'active open' : null }}">
                <a href="{{url('/')}}/home/facility/{{$facility->id}}/{{$test_code}}/requests" class="nav-link">
                    <i class="icon-home"></i>
                    <span class="title"><span class="uppercase">{{$test_code}}</span> Requests</span>
                    <span class="selected"></span>
                </a>
            </li>
            <li class="nav-item {{ (Request::is('home/facility/*/*/recieved*')) || (Request::is('/')) ? 'active open' : null }}">
                <a href="{{url('/')}}/home/facility/{{$facility->id}}/{{$test_code}}/recieved" class="nav-link">
                    <i class="icon-home"></i>
                    <span class="title"><span class="uppercase">{{$test_code}}</span> Recieved Requests</span>
                    <span class="selected"></span>
                </a>
            </li>
            <li class="nav-item {{ (Request::is('home/facility/*/*/rejections*')) || (Request::is('/')) ? 'active open' : null }}">
                <a href="{{url('/')}}/home/facility/{{$facility->id}}/{{$test_code}}/rejections" class="nav-link">
                    <i class="icon-home"></i>
                    <span class="title"><span class="uppercase">{{$test_code}}</span> Rejections</span>
                    <span class="selected"></span>
                </a>
            </li>
            <li class="nav-item {{  (Request::is('home/facility/*/*/results*')) || (Request::is('/')) ? 'active open' : null }}">
                <a href="{{url('/')}}/home/facility/{{$facility->id}}/{{$test_code}}/results" class="nav-link">
                    <i class="icon-home"></i>
                    <span class="title"><span class="uppercase">{{$test_code}}</span> Results</span>
                    <span class="selected"></span>
                </a>
            </li>
            <li class="nav-item {{ (Request::is('home/facility/*/*/manifests*')) ? 'active open' : null }}">
                <a href="{{url('/')}}/home/facility/{{$facility->id}}/{{$test_code}}/manifests" class="nav-link">
                    <i class="icon-home"></i>
                    <span class="title"><span class="uppercase">{{$test_code}}</span> Manifest</span>
                    <span class="selected"></span>
                </a>
            </li>
            <li class="nav-item {{ (Request::is('home/facility/*/*/reports*')) || (Request::is('/')) ? 'active open' : null }}">
                <a href="{{url('/')}}/home/facility/{{$facility->id}}/{{$test_code}}/reports" class="nav-link">
                    <i class="icon-home"></i>
                    <span class="title"><span class="uppercase">{{$test_code}}</span> Reports</span>
                    <span class="selected"></span>
                </a>
            </li>
            @endif
            <li class="nav-item {{ (Request::is('home/facility/'.$facility->id.'reports')) || (Request::is('/')) ? 'active open' : null }}">
                <a href="#" class="nav-link">
                    <i class="icon-home"></i>
                    <span class="title">Facility Reports</span>
                    <span class="selected"></span>
                </a>
            </li>

            <li class="nav-item {{ (Request::is('home/facility/'.$facility->id.'/settings')) || (Request::is('/')) ? 'active open' : null }}">
                <a href="#" class="nav-link">
                    <i class="icon-home"></i>
                    <span class="title">Facility Settings</span>
                    <span class="selected"></span>
                </a>
            </li>

            @else
            <li class="nav-item {{ (Request::is('home')) || (Request::is('/')) ? 'active open' : null }}">
                <a href="{{url('/')}}/home" class="nav-link">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                    <span class="selected"></span>
                </a>
            </li>
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


