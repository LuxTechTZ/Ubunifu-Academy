<div id="sideNav" class="col-auto u-sidebar-navigation-v1 u-sidebar-navigation--dark">
  <ul id="sideNavMenu" class="u-sidebar-navigation-v1-menu u-side-nav--top-level-menu g-min-height-100vh mb-0">

    <!-- Packages -->
    <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item">
      <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12 {{ Request::is('account/dashboard') ? 'active' : null }}" href="{{url('/')}}/home">
        <span class="d-flex align-self-center g-font-size-18 g-mr-18">
          <i class="hs-admin-layout-media-center-alt"></i>
        </span>
        <span class="media-body align-self-center">Dashboard</span>
      </a>
    </li>
    <!-- End Packages -->

    <!-- Packages -->
    <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item">
      <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12 {{ Request::is('account/dashboard') ? 'active' : null }}" >
        <span class="d-flex align-self-center g-font-size-18 g-mr-18">
          <i class=""></i>
        </span>
        <span class="media-body align-self-center">MANAGEMENT</span>
      </a>
    </li>
    <!-- End Packages -->



    <!-- User Settings -->
    <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu
    u-side-nav--top-level-menu-item {{ Request::is('admin/users*') || Request::is('admin/categories*') || Request::is('admin/courses*') ? 'u-side-nav-opened has-active' : null }}">
      <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12"
         href="#!" data-hssm-target="#subMenu2">
        <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
          <i class="hs-admin-settings"></i>
        </span>
        <span class="media-body align-self-center">System Management</span>
        <span class="d-flex align-self-center u-side-nav--control-icon">
          <i class="hs-admin-angle-right"></i>
        </span>
        <span class="u-side-nav--has-sub-menu__indicator"></span>
      </a>

      <!-- User Settings: Submenu-1 -->
      <ul id="subMenu2" class="u-sidebar-navigation-v1-menu u-side-nav--second-level-menu mb-0">
        <!-- Header Static -->
        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
          <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12 {{ Request::is('admin/users*') ? 'active' : null }}" href="{{url('/')}}/admin/users">
            <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
              <i class="hs-admin-layout-media-center-alt"></i>
            </span>
            <span class="media-body align-self-center">Users</span>
          </a>
        </li>

          <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
              <a class="media u-side-nav--second-level-menu-link
                g-px-15 g-py-12 {{ Request::is('admin/categories*') ? 'active' : null }}"
                 href="{{url('/')}}/admin/categories">
                <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                  <i class="hs-admin-layout-media-center-alt"></i>
                </span>
                <span class="media-body align-self-center">Categories</span>
              </a>
          </li>

          <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
              <a class="media u-side-nav--second-level-menu-link
                g-px-15 g-py-12 {{ Request::is('admin/courses*') ? 'active' : null }}"
                 href="{{url('/')}}/admin/courses">
                <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                  <i class="hs-admin-layout-media-center-alt"></i>
                </span>
                <span class="media-body align-self-center">Courses</span>
              </a>
          </li>
        <!-- End Header Static -->



      </ul>
      <!-- End User Settings: Submenu-1 -->
    </li>
    <!-- End User Settings -->


  @if(Auth::user()->hasRole('9'))
    <!-- Student Settings -->
    <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--top-level-menu-item {{ Request::is('users/create') ? 'u-side-nav-opened has-active' : null }}">
      <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="#!" data-hssm-target="#student">
        <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
          <i class="hs-admin-settings"></i>
        </span>
        <span class="media-body align-self-center">Student Management</span>
        <span class="d-flex align-self-center u-side-nav--control-icon">
          <i class="hs-admin-angle-right"></i>
        </span>
        <span class="u-side-nav--has-sub-menu__indicator"></span>
      </a>

      <!-- Student Settings: Submenu-1 -->
      <ul id="student" class="u-sidebar-navigation-v1-menu u-side-nav--second-level-menu mb-0">
        <!-- Header Static -->
        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
          <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="../layout-settings/header-static.html">
            <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
              <i class="hs-admin-layout-media-center-alt"></i>
            </span>
            <span class="media-body align-self-center">Users</span>
          </a>
        </li>
        <!-- End Header Static -->

        <!-- Hide Sidebar -->
        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
          <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="../layout-settings/sidebar-hide.html">
            <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
              <i class="hs-admin-layout-sidebar-none"></i>
            </span>
            <span class="media-body align-self-center">Roles</span>
          </a>
        </li>
        <!-- End Hide Sidebar -->

        <!-- Light Layout -->
        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
          <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="../layout-settings/layout-light.html">
            <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
              <i class="hs-admin-layout-media-left-alt"></i>
            </span>
            <span class="media-body align-self-center">Permissions</span>
          </a>
        </li>
        <!-- End Light Layout -->

      </ul>
      <!-- End Student Settings: Submenu-1 -->
    </li>
    <!-- End Student Settings -->
  @endif

    <!-- Courses -->
    <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item">
      <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12 {{ Request::is('account/dashboard') ? 'active' : null }}" >
        <span class="d-flex align-self-center g-font-size-18 g-mr-18">
          <i class=""></i>
        </span>
        <span class="media-body align-self-center">COURSES</span>
      </a>
    </li>
    <!-- End Courses -->

    <!-- Course Settings -->
    <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--top-level-menu-item {{ Request::is('courses*') ? 'u-side-nav-opened has-active' : null }}">
      <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="#!" data-hssm-target="#course">
        <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
          <i class="hs-admin-settings"></i>
        </span>
        <span class="media-body align-self-center">Course Management</span>
        <span class="d-flex align-self-center u-side-nav--control-icon">
          <i class="hs-admin-angle-right"></i>
        </span>
        <span class="u-side-nav--has-sub-menu__indicator"></span>
      </a>

      <!-- Course Settings: Submenu-1 -->
      <ul id="course" class="u-sidebar-navigation-v1-menu u-side-nav--second-level-menu mb-0">
        <!-- Header Static -->
        @if(Auth::user()->hasRole('5'))
        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
          <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12 {{ Request::is('courses/my_courses') ? 'active' : null }}" href="{{url('/')}}/courses/my_courses">
            <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
              <i class="hs-admin-layout-media-center-alt"></i>
            </span>
            <span class="media-body align-self-center">My Courses</span>
          </a>
        </li>
        @endif
        <!-- End Header Static -->
        @if(Auth::user()->hasRole('4'))
        <!-- Hide Sidebar -->
        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
          <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12 {{ Request::is('courses/my_courses') ? 'active' : null }}" href="{{url('/')}}/courses/my_courses">
            <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
              <i class="hs-admin-layout-sidebar-none"></i>
            </span>
            <span class="media-body align-self-center">Teaching Courses</span>
          </a>
        </li>
        <!-- End Hide Sidebar -->
        @endif


      </ul>
      <!-- End Course Settings: Submenu-1 -->
    </li>
    <!-- End Course Settings -->

  @if(Auth::user()->hasRole('9'))
    <!-- Income Settings -->
    <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--top-level-menu-item {{ Request::is('users/create') ? 'u-side-nav-opened has-active' : null }}">
      <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="#!" data-hssm-target="#Teachers">
        <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
          <i class="hs-admin-settings"></i>
        </span>
        <span class="media-body align-self-center">Income Management</span>
        <span class="d-flex align-self-center u-side-nav--control-icon">
          <i class="hs-admin-angle-right"></i>
        </span>
        <span class="u-side-nav--has-sub-menu__indicator"></span>
      </a>

      <!-- Income Settings: Submenu-1 -->
      <ul id="Teachers" class="u-sidebar-navigation-v1-menu u-side-nav--second-level-menu mb-0">
        <!-- Header Static -->
        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
          <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="../layout-settings/header-static.html">
            <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
              <i class="hs-admin-layout-media-center-alt"></i>
            </span>
            <span class="media-body align-self-center">Users</span>
          </a>
        </li>
        <!-- End Header Static -->

        <!-- Hide Sidebar -->
        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
          <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="../layout-settings/sidebar-hide.html">
            <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
              <i class="hs-admin-layout-sidebar-none"></i>
            </span>
            <span class="media-body align-self-center">Roles</span>
          </a>
        </li>
        <!-- End Hide Sidebar -->

        <!-- Light Layout -->
        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
          <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="../layout-settings/layout-light.html">
            <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
              <i class="hs-admin-layout-media-left-alt"></i>
            </span>
            <span class="media-body align-self-center">Permissions</span>
          </a>
        </li>
        <!-- End Light Layout -->

      </ul>
      <!-- End User Settings: Submenu-1 -->
    </li>
    <!-- End User Settings -->
  @endif

  </ul>
</div>
