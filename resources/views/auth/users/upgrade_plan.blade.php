@extends('layouts.academy')

@section('page')
  {{$user->name}}
@endsection

@section('breadcrumb')
<!-- Breadcrumb-v1 -->
<div class="g-hidden-sm-down g-bg-gray-light-v8 g-pa-20">
<ul class="u-list-inline g-color-gray-dark-v6">

  <li class="list-inline-item g-mr-10">
    <a class="u-link-v5 g-color-gray-dark-v6 g-color-secondary--hover g-valign-middle" href="{{url('/')}}/home">Dashboard</a>
    <i class="hs-admin-angle-right g-font-size-12 g-color-gray-light-v6 g-valign-middle g-ml-10"></i>
  </li>
  <li class="list-inline-item g-mr-10">
    <a class="u-link-v5 g-color-gray-dark-v6 g-color-secondary--hover g-valign-middle" href="{{url('/')}}/admin/users">Users</a>
    <i class="hs-admin-angle-right g-font-size-12 g-color-gray-light-v6 g-valign-middle g-ml-10"></i>
  </li>
  <li class="list-inline-item">
    <span class="g-valign-middle">{{$user->name}}</span>
  </li>
</ul>
</div>
<!-- End Breadcrumb-v1 -->
@endsection

@section('template_linked_css')
  <link rel="stylesheet" href="{{url('/')}}/academy/assets/vendor/hs-admin-icons/hs-admin-icons.css">

  <link rel="stylesheet" href="{{url('/')}}/academy/assets2/vendor/animate.css">
  <link rel="stylesheet" href="{{url('/')}}/academy/assets2/vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css">

  <link rel="stylesheet" href="{{url('/')}}/academy/assets/vendor/bootstrap-select/css/bootstrap-select.min.css">

  <link rel="stylesheet" href="{{url('/')}}/academy/assets2/vendor/hamburgers/hamburgers.min.css">

  <!-- CSS Unify -->
  <link rel="stylesheet" href="{{url('/')}}/academy/assets/css/unify-admin.css">

  <!-- CSS Customization -->
  <link rel="stylesheet" href="{{url('/')}}/academy/assets2/css/custom.css">
@endsection

@section('content')
<div class="g-pa-20">
    <div class="row">
      	@include('auth.users.partials.sidemenu')


      <div class="col-md-9">
                <div class="g-pos-rel h-100 g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-30--md">
                  <header>
                    <h2 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">Upgrade My Plan</h2>
                  </header>

                  <hr class="d-flex g-brd-gray-light-v7 g-my-15 g-mt-25--md g-mb-30--md">

                  <div class="row g-mx-minus-10 g-mb-60">
                    <div class="col-md-4 g-px-10 g-mb-20 g-mb-0--md">
                      <article class="g-bg-white g-overflow-hidden g-brd-around g-brd-gray-light-v7 g-rounded-4">
                        <header class="text-center g-bg-gray-light-v8 g-pa-20">
                          <h4 class="h6 text-uppercase g-font-weight-400 g-font-size-16 g-color-black mb-0">Basic</h4>
                        </header>

                        <div class="g-px-20 g-py-30">
                          <strong class="d-block text-center g-color-secondary g-font-weight-400 g-font-size-30 g-line-height-0_8 g-mb-25">
                          <sup class="g-font-size-18">$</sup>15
                          <span class="g-font-size-default g-color-gray-light-v11">/mo</span>
                        </strong>

                          <ul class="list-unstyled g-color-gray-dark-v12 g-min-height-200 g-px-10 g-mb-30">
                            <li class="g-mb-20">
                              <i class="hs-admin-check g-color-secondary g-mr-14"></i>
                              10 Projects
                            </li>
                            <li class="g-mb-20">
                              <i class="hs-admin-check g-color-secondary g-mr-14"></i>
                              10 gb Cloud Space
                            </li>
                            <li class="mb-0">
                              <i class="hs-admin-check g-color-secondary g-mr-14"></i>
                              10 Mail Accounts
                            </li>
                          </ul>

                          <a class="btn btn-md btn-xl--md btn-block u-btn-secondary g-font-size-default--md" href="#!">Activate</a>
                        </div>
                      </article>
                    </div>

                    <div class="col-md-4 g-px-10 g-mb-20 g-mb-0--md">
                      <article class="g-bg-white g-overflow-hidden g-brd-around g-brd-gray-light-v7 g-rounded-4">
                        <header class="text-center g-bg-gray-light-v8 g-pa-20">
                          <h4 class="h6 text-uppercase g-font-weight-400 g-font-size-16 g-color-black mb-0">Standart</h4>
                        </header>

                        <div class="g-px-20 g-py-30">
                          <strong class="d-block text-center g-color-secondary g-font-weight-400 g-font-size-30 g-line-height-0_8 g-mb-25">
                          <sup class="g-font-size-18">$</sup>25
                          <span class="g-font-size-default g-color-gray-light-v11">/mo</span>
                        </strong>

                          <ul class="list-unstyled g-color-gray-dark-v12 g-min-height-200 g-px-10 g-mb-30">
                            <li class="g-mb-20">
                              <i class="hs-admin-check g-color-secondary g-mr-14"></i>
                              Unlimited Projects
                            </li>
                            <li class="g-mb-20">
                              <i class="hs-admin-check g-color-secondary g-mr-14"></i>
                              10 gb Cloud Space
                            </li>
                            <li class="g-mb-20">
                              <i class="hs-admin-check g-color-secondary g-mr-14"></i>
                              10 Mail Accounts
                            </li>
                            <li class="mb-0">
                              <i class="hs-admin-check g-color-secondary g-mr-14"></i>
                              Free Domain
                            </li>
                          </ul>

                          <a class="btn btn-md btn-xl--md btn-block u-btn-secondary g-font-size-default--md" href="#!">Activate</a>
                        </div>
                      </article>
                    </div>

                    <div class="col-md-4 g-px-10">
                      <article class="g-bg-white g-overflow-hidden g-brd-around g-brd-gray-light-v7 g-rounded-4">
                        <header class="text-center g-bg-gray-light-v8 g-pa-20">
                          <h4 class="h6 text-uppercase g-font-weight-400 g-font-size-16 g-color-black mb-0">Premium</h4>
                        </header>

                        <div class="g-px-20 g-py-30">
                          <strong class="d-block text-center g-color-secondary g-font-weight-400 g-font-size-30 g-line-height-0_8 g-mb-25">
                          <sup class="g-font-size-18">$</sup>35
                          <span class="g-font-size-default g-color-gray-light-v11">/mo</span>
                        </strong>

                          <ul class="list-unstyled g-color-gray-dark-v12 g-min-height-200 g-px-10 g-mb-30">
                            <li class="g-mb-20">
                              <i class="hs-admin-check g-color-secondary g-mr-14"></i>
                              Unlimited Projects
                            </li>
                            <li class="g-mb-20">
                              <i class="hs-admin-check g-color-secondary g-mr-14"></i>
                              10 gb Cloud Space
                            </li>
                            <li class="g-mb-20">
                              <i class="hs-admin-check g-color-secondary g-mr-14"></i>
                              10 Mail Accounts
                            </li>
                            <li class="g-mb-20">
                              <i class="hs-admin-check g-color-secondary g-mr-14"></i>
                              Free Domain
                            </li>
                            <li class="mb-0">
                              <i class="hs-admin-check g-color-secondary g-mr-14"></i>
                              Phone Support
                            </li>
                          </ul>

                          <a class="btn btn-md btn-xl--md btn-block u-btn-secondary g-font-size-default--md" href="#!">Activate</a>
                        </div>
                      </article>
                    </div>
                  </div>

                  <header>
                    <h2 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">Upgrade My Plan</h2>
                  </header>

                  <hr class="d-flex g-brd-gray-light-v7 g-my-15 g-mt-25--md g-mb-30--md">

                  <h4 class="g-font-weight-300 g-font-size-default g-color-black g-mb-20">My Current Plan</h4>

                  <div class="g-mb-30">
                    <div class="media align-items-center u-link-v5 g-mb-15">
                      <span class="media-body g-font-weight-300">Unlimited Projects, 1Tb Storage, Free Domain</span>
                      <span class="d-flex ml-auto">700 Gb / 1Tb</span>
                    </div>

                    <div class="progress g-height-6 g-bg-gray-light-v12 g-rounded-3">
                      <div class="progress-bar g-bg-lightblue-v3 g-rounded-3" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>

                  <h4 class="g-font-weight-300 g-font-size-default g-color-black g-mb-10">Activate New Plan</h4>

                  <div class="row">
                    <div class="col-md g-mb-10">
                      <div class="form-group u-select--v3 g-pos-rel g-brd-gray-light-v7 g-rounded-4 mb-0">
                        <select class="js-select u-select--v3-select u-sibling w-100" required="required" title="Placeholder" style="display: none;">
                          <option value="selectListItem1">$10 - 5 Projects, 5Tb Storage</option>
                          <option value="selectListItem2" selected>$20 - Unlimited Projects, 5Tb Storage, Free Domain</option>
                          <option value="selectListItem3">$30 - Unlimited Projects, 5Tb Storage, Free Domain, Phone Support</option>
                        </select>

                        <div class="d-flex align-items-center g-absolute-centered--y g-right-0 g-color-gray-light-v6 g-color-lightblue-v9--sibling-opened g-mr-15">
                          <i class="hs-admin-angle-down"></i>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-auto g-mb-10">
                      <a class="btn btn-md btn-xl--md u-btn-secondary g-width-145 g-font-size-default--md g-py-12" href="#!">Activate</a>
                    </div>
                  </div>
                </div>
              </div>
    </div>
</div>
@endsection


@section('footer_scripts') 
  <!-- JS Global Compulsory -->
  <script src="{{url('/')}}/academy/assets/vendor/jquery/jquery.min.js"></script>
  <script src="{{url('/')}}/academy/assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>

  <script src="{{url('/')}}/academy/assets2/vendor/popper.min.js"></script>
  <script src="{{url('/')}}/academy/assets2/vendor/bootstrap/bootstrap.min.js"></script>

  <script src="{{url('/')}}/academy/assets2/vendor/cookiejs/jquery.cookie.js"></script>


  <script src="{{url('/')}}/academy/assets2/vendor/appear.js"></script>
  <script src="{{url('/')}}/academy/assets2/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

  <script src="{{url('/')}}/academy/assets/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>

  <!-- JS Unify -->
  <script src="{{url('/')}}/academy/assets2/js/hs.core.js"></script>

  <script src="{{url('/')}}/academy/assets2/js/components/hs.scrollbar.js"></script>
  <script src="{{url('/')}}/academy/assets2/js/components/hs.dropdown.js"></script>
  <script src="{{url('/')}}/academy/assets2/js/helpers/hs.hamburgers.js"></script>
  <script src="{{url('/')}}/academy/assets/js/components/hs.side-nav.js"></script>

  <!-- JS Custom -->
  <script src="{{url('/')}}/academy/assets2/js/custom.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
      // initialization of custom scrollbar
      $.HSCore.components.HSScrollBar.init($('.js-custom-scroll'));
  
      // initialization of HSDropdown component
      $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {dropdownHideOnScroll: false});
  
      // initialization of hamburger
      $.HSCore.helpers.HSHamburgers.init('.hamburger');
  
      // initialization of sidebar navigation component
      $.HSCore.components.HSSideNav.init('.js-side-nav');
  
      // initialization of custom select
      $('.js-select').selectpicker();
    });
  </script>
@endsection