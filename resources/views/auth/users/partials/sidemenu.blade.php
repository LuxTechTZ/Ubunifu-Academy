<div class="col-md-3 g-mb-30 g-mb-0--md">
  <div class="h-100 g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md">
    <!-- User Information -->
    <section class="text-center g-mb-30 g-mb-50--md">
      <div class="d-inline-block g-pos-rel g-mb-20">
        <a class="u-badge-v2--lg u-badge--bottom-right g-width-32 g-height-32 g-bg-secondary g-bg-primary--hover g-transition-0_3 g-mb-20 g-mr-20" href="#!">
          <i class="hs-admin-pencil g-absolute-centered g-font-size-16 g-color-white"></i>
        </a>
            <img style="max-height: 150px" src="@if ($user->profile && $user->profile->avatar_status == 1) {{ $user->profile->avatar }} @else {{ Gravatar::get($user->email) }} @endif" alt="{{ $user->name }}" class="img-fluid rounded-circle">
        <!-- <img class="img-fluid rounded-circle" src="{{url('/')}}/academy/assets/img-temp/13img-fluid rounded-circle0x130/img1.jpg" alt="Image description"> -->
      </div>

      <h3 class="g-font-weight-300 g-font-size-20 g-color-black mb-0">{{$user->first_name}} {{$user->last_name}}</h3>
    </section>
    <!-- User Information -->

    <!-- Profile Completion -->
    <section class="g-mb-30 g-mb-50--md">
      <h4 class="media h6 g-font-weight-400 g-mb-15">
  			<span class="d-flex align-self-center g-color-gray-dark-v6">Profile Completion</span>
  			<span class="media-body align-self-center text-right g-color-gray-dark-v6">75%</span>
  		</h4>

      <div class="progress g-height-4 g-rounded-2">
        <div class="progress-bar g-bg-lightblue-v3 g-rounded-3" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
    </section>
    <!-- End Profile Completion -->

    <!-- Profile Sidebar -->
    <section>
      <ul class="list-unstyled mb-0">
        <li class="g-brd-top g-brd-gray-light-v7 mb-0">
          <a class="d-flex align-items-center u-link-v5 g-parent g-py-15 {{ Request::is('admin/users/profile*') ? 'active' : null }}" href="{{url('/')}}/admin/users/profile/{{$user->id}}">
            <span class="g-font-size-18 g-color-gray-light-v6 g-color-primary--parent-hover g-color-primary--parent-active g-mr-15">
	<i class="hs-admin-user"></i>
</span>
            <span class="g-color-gray-dark-v6 g-color-primary--parent-hover g-color-primary--parent-active">Profile Information</span>
          </a>
        </li>
        <li class="g-brd-top g-brd-gray-light-v7 mb-0">
          <a class="d-flex align-items-center u-link-v5 g-parent g-py-15 {{ Request::is('admin/users/bio*') ? 'active' : null }}" 
          href="{{url('/')}}/myprofile/{{$user->name}}"
          >
            <span class="g-font-size-18 g-color-gray-light-v6 g-color-primary--parent-hover g-color-primary--parent-active g-mr-15">
            	<i class="hs-admin-write"></i>
            </span>
            <span class="g-color-gray-dark-v6 g-color-primary--parent-hover g-color-primary--parent-active">Biography</span>
          </a>
        </li>
        <li class="g-brd-top g-brd-gray-light-v7 mb-0">
          <a class="d-flex align-items-center u-link-v5 g-parent g-py-15 {{ Request::is('admin/users/interests*') ? 'active' : null }}" href="{{url('/')}}/admin/users/interests/{{$user->id}}">
            <span class="g-font-size-18 g-color-gray-light-v6 g-color-primary--parent-hover g-color-primary--parent-active g-mr-15">
	<i class="hs-admin-medall"></i>
</span>
            <span class="g-color-gray-dark-v6 g-color-primary--parent-hover g-color-primary--parent-active">Interests</span>
          </a>
        </li>
        <li class="g-brd-top g-brd-gray-light-v7 mb-0">
          <a class="d-flex align-items-center u-link-v5 g-parent g-py-15 {{ Request::is('admin/users/mobile*') ? 'active' : null }}" href="{{url('/')}}/admin/users/mobile/{{$user->id}}">
            <span class="g-font-size-18 g-color-gray-light-v6 g-color-primary--parent-hover g-color-primary--parent-active g-mr-15">
	<i class="hs-admin-mobile"></i>
</span>
            <span class="g-color-gray-dark-v6 g-color-primary--parent-hover g-color-primary--parent-active">Mobile</span>
          </a>
        </li>
        <li class="g-brd-top g-brd-gray-light-v7 mb-0">
          <a class="d-flex align-items-center u-link-v5 g-parent g-py-15 {{ Request::is('admin/users/media*') ? 'active' : null }}" href="{{url('/')}}/admin/users/media/{{$user->id}}">
            <span class="g-font-size-18 g-color-gray-light-v6 g-color-primary--parent-hover g-color-primary--parent-active g-mr-15">
	<i class="hs-admin-image"></i>
</span>
            <span class="g-color-gray-dark-v6 g-color-primary--parent-hover g-color-primary--parent-active">Photos &amp; Videos</span>
          </a>
        </li>
        <li class="g-brd-top g-brd-gray-light-v7 mb-0">
          <a class="d-flex align-items-center u-link-v5 g-parent g-py-15 {{ Request::is('admin/users/payment*') ? 'active' : null }}" href="{{url('/')}}/admin/users/payment/{{$user->id}}">
            <span class="g-font-size-18 g-color-gray-light-v6 g-color-primary--parent-hover g-color-primary--parent-active g-mr-15">
	<i class="hs-admin-wallet"></i>
</span>
            <span class="g-color-gray-dark-v6 g-color-primary--parent-hover g-color-primary--parent-active">Payment Methods</span>
          </a>
        </li>
        <li class="g-brd-top g-brd-gray-light-v7 mb-0">
          <a class="d-flex align-items-center u-link-v5 g-parent g-py-15 {{ Request::is('admin/users/transactions*') ? 'active' : null }}" href="{{url('/')}}/admin/users/transactions/{{$user->id}}">
            <span class="g-font-size-18 g-color-gray-light-v6 g-color-primary--parent-hover g-color-primary--parent-active g-mr-15">
	<i class="hs-admin-loop"></i>
</span>
            <span class="g-color-gray-dark-v6 g-color-primary--parent-hover g-color-primary--parent-active">Transactions</span>
          </a>
        </li>
        <li class="g-brd-top g-brd-gray-light-v7 mb-0">
          <a class="d-flex align-items-center u-link-v5 g-parent g-py-15 {{ Request::is('admin/users/security*') ? 'active' : null }}" href="{{url('/')}}/admin/users/security/{{$user->id}}">
            <span class="g-font-size-18 g-color-gray-light-v6 g-color-primary--parent-hover g-color-primary--parent-active g-mr-15">
	<i class="hs-admin-lock"></i>
</span>
            <span class="g-color-gray-dark-v6 g-color-primary--parent-hover g-color-primary--parent-active">Security</span>
          </a>
        </li>
        <li class="g-brd-top g-brd-gray-light-v7 mb-0">
          <a class="d-flex align-items-center u-link-v5 g-parent g-py-15 {{ Request::is('admin/users/upgrade_plan*') ? 'active' : null }}" href="{{url('/')}}/admin/users/upgrade_plan/{{$user->id}}">
            <span class="g-font-size-18 g-color-gray-light-v6 g-color-primary--parent-hover g-color-primary--parent-active g-mr-15">
	<i class="hs-admin-cup"></i>
</span>
            <span class="g-color-gray-dark-v6 g-color-primary--parent-hover g-color-primary--parent-active">Upgrade My Plan</span>
          </a>
        </li>
        <li class="g-brd-top g-brd-gray-light-v7 mb-0">
          <a class="d-flex align-items-center u-link-v5 g-parent g-py-15 {{ Request::is('admin/users/invite_friends*') ? 'active' : null }}" href="{{url('/')}}/admin/users/invite_friends/{{$user->id}}">
            <span class="g-font-size-18 g-color-gray-light-v6 g-color-primary--parent-hover g-color-primary--parent-active g-mr-15">
	<i class="hs-admin-announcement"></i>
</span>
            <span class="g-color-gray-dark-v6 g-color-primary--parent-hover g-color-primary--parent-active">Invited Friends</span>
          </a>
        </li>
        <li class="g-brd-top g-brd-gray-light-v7 mb-0">
          <a class="d-flex align-items-center u-link-v5 g-parent g-py-15 {{ Request::is('admin/users/connected_accounts*') ? 'active' : null }}" href="{{url('/')}}/admin/users/connected_accounts/{{$user->id}}">
            <span class="g-font-size-18 g-color-gray-light-v6 g-color-primary--parent-hover g-color-primary--parent-active g-mr-15">
	<i class="hs-admin-link"></i>
</span>
            <span class="g-color-gray-dark-v6 g-color-primary--parent-hover g-color-primary--parent-active">Connected Accounts</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- End Profile Sidebar -->
  </div>

</div>