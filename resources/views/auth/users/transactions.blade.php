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
  <link rel="stylesheet" href="{{url('/')}}/academy/assets/vendor/flatpickr/dist/css/flatpickr.min.css">

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
                    <h2 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">Transactions</h2>
                  </header>

                  <hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-25--md">

                  <form>
                    <div class="row">
                      <div class="col-md-6 g-mb-20">
                        <label class="g-mb-10" for="#dateFrom">From</label>

                        <div class="form-group mb-0">
                          <div class="form-group mb-0">
                            <div id="dateFromWrapper" class="u-datepicker-right u-datepicker--v3 g-pos-rel w-100 g-cursor-pointer g-brd-around g-brd-gray-light-v7 g-rounded-4">
                              <input id="dateFrom" class="form-control h-100 form-control-md g-bg-white g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-rounded-4 g-px-20 g-py-10" type="text" data-rp-wrapper="#dateFromWrapper" data-rp-date-format="d M Y" data-rp-default-date='["01 Jul 2017"]'>
                              <span class="g-pos-abs g-top-0 g-right-0 g-z-index-2 g-width-40 h-100 g-font-size-18 g-color-gray-light-v6 rounded-0">
                              <i class="hs-admin-calendar g-absolute-centered"></i>
                            </span>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6 g-mb-20">
                        <label class="g-mb-10" for="#dateTo">To</label>

                        <div class="form-group mb-0">
                          <div id="dateToWrapper" class="u-datepicker-right u-datepicker--v3 w-100 g-pos-rel g-cursor-pointer g-brd-around g-brd-gray-light-v7 g-rounded-4">
                            <input id="dateTo" class="form-control h-100 form-control-md g-bg-white g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-rounded-4 g-px-20 g-py-10" type="text" data-rp-wrapper="#dateToWrapper" data-rp-date-format="d M Y" data-rp-default-date='["10 Nov 2017"]'>
                            <span class="g-pos-abs g-top-0 g-right-0 g-z-index-2 g-width-40 h-100 g-font-size-18 g-color-gray-light-v6 rounded-0">
                            <i class="hs-admin-calendar g-absolute-centered"></i>
                          </span>
                          </div>
                        </div>
                      </div>
                    </div>

                    <header class="d-flex align-items-center">
                      <h2 class="text-uppercase g-font-weight-400 g-font-size-12 g-font-size-default--md g-color-black mb-0">July 2017</h2>

                      <div class="ml-auto">
                        <span class="u-tags-v1 text-center g-width-150--md g-brd-around g-brd-gray-light-v8 g-bg-gray-light-v8 g-font-size-12 g-font-size-default--md g-color-gray-dark-v11 g-rounded-50 g-py-4 g-px-15">4 Transactions</span>
                      </div>
                    </header>

                    <hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-25--md">

                    <div class="g-py-20">
                      <div class="media g-mb-15">
                        <div class="media-body align-self-start">
                          <h3 class="text-uppercase g-font-size-12 g-font-size-16--md g-font-weight-300 g-line-height-1">Taxi.unify.com</h3>
                          <p class="g-font-size-12 g-font-size-default--md g-color-gray-dark-v12 mb-0 g-mt-5">Credit Card **** 4390</p>
                        </div>

                        <div class="d-flex flex-column text-right g-color-lightblue-v2 ml-auto">
                          <p class="g-font-weight-300 g-font-size-12 g-font-size-16--md g-color-gray-dark-v6 mb-0">-$12.00</p>
                          <em class="g-font-style-normal g-font-size-12 g-font-size-16--md g-color-gray-dark-v12">Transport</em>
                        </div>

                        <div class="d-flex g-mt-5 g-ml-12">
                          <i class="hs-admin-check g-font-size-default g-font-size-16--md g-color-secondary"></i>
                        </div>
                      </div>

                      <div class="media g-mb-15">
                        <div class="media-body align-self-start">
                          <h3 class="text-uppercase g-font-size-12 g-font-size-16--md g-font-weight-300 g-line-height-1">Taxi.unify.com</h3>
                          <p class="g-font-size-12 g-font-size-default--md g-color-gray-dark-v12 mb-0 g-mt-5">
                            <a class="u-link-v5 g-color-lightblue-v9 g-mr-12" href="#!">2 Transactions</a>
                            Credit Card **** 4390
                          </p>
                        </div>

                        <div class="d-flex flex-column text-right g-color-lightblue-v2 ml-auto">
                          <p class="g-font-weight-300 g-font-size-12 g-font-size-16--md g-color-gray-dark-v6 mb-0">-$36.20</p>
                          <em class="g-font-style-normal g-font-size-12 g-font-size-16--md g-color-gray-dark-v12">Transport</em>
                        </div>

                        <div class="d-flex g-mt-5 g-ml-12">
                          <i class="hs-admin-check g-font-size-default g-font-size-16--md g-color-secondary"></i>
                        </div>
                      </div>

                      <div class="g-bg-gray-light-v8 g-px-15 g-px-30--md g-py-15 g-mx-minus-15 g-mx-minus-30--md g-mb-25">
                        <div class="media align-items-center g-mb-5">
                          <div class="d-flex g-font-size-12 g-font-size-default--md g-color-gray-dark-v11">05:42PM</div>

                          <div class="d-flex g-font-size-12 g-font-size-default--md g-color-gray-dark-v12 g-ml-10 g-ml-50--md">Transaction #1</div>

                          <div class="d-flex ml-auto g-mr-30">
                            <p class="g-font-weight-300 g-font-size-12 g-font-size-16--md g-color-gray-dark-v6 mb-0">-$16.00</p>
                          </div>
                        </div>

                        <div class="media align-items-center">
                          <div class="d-flex g-font-size-12 g-font-size-default--md g-color-gray-dark-v11">05:52PM</div>

                          <div class="d-flex g-font-size-12 g-font-size-default--md g-color-gray-dark-v12 g-ml-10 g-ml-50--md">Transaction #2</div>

                          <div class="d-flex ml-auto g-mr-30">
                            <p class="g-font-weight-300 g-font-size-12 g-font-size-16--md g-color-gray-dark-v6 mb-0">-$10.20</p>
                          </div>
                        </div>
                      </div>

                      <div class="media g-mb-35">
                        <div class="media-body align-self-start">
                          <h3 class="text-uppercase g-font-size-12 g-font-size-16--md g-font-weight-300 g-line-height-1">Order.unify.com</h3>
                          <p class="g-font-size-12 g-font-size-default--md g-color-gray-dark-v12 mb-0 g-mt-5">Paypal</p>
                        </div>

                        <div class="d-flex flex-column text-right g-color-lightblue-v2 ml-auto">
                          <p class="g-font-weight-300 g-font-size-12 g-font-size-16--md g-color-gray-dark-v6 mb-0">-$800.00</p>
                          <em class="g-font-style-normal g-font-size-12 g-font-size-16--md g-color-gray-dark-v12">Services</em>
                        </div>

                        <div class="d-flex g-mt-5 g-ml-12">
                          <i class="hs-admin-time g-font-size-default g-font-size-18--md g-color-gray-light-v6"></i>
                        </div>
                      </div>

                      <header class="d-flex align-items-center">
                        <h2 class="text-uppercase g-font-weight-400 g-font-size-12 g-font-size-default--md g-color-black mb-0">August 2017</h2>

                        <div class="ml-auto">
                          <span class="u-tags-v1 text-center g-width-150--md g-brd-around g-brd-gray-light-v8 g-bg-gray-light-v8 g-font-size-12 g-font-size-default--md g-color-gray-dark-v11 g-rounded-50 g-py-4 g-px-15">5 Transactions</span>
                        </div>
                      </header>

                      <hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-25--md">

                      <div class="media g-mb-15">
                        <div class="media-body align-self-start">
                          <h3 class="text-uppercase g-font-size-12 g-font-size-16--md g-font-weight-300 g-line-height-1">Taxi.unify.com</h3>
                          <p class="g-font-size-12 g-font-size-default--md g-color-gray-dark-v12 mb-0 g-mt-5">Credit Card **** 4390</p>
                        </div>

                        <div class="d-flex flex-column text-right g-color-lightblue-v2 ml-auto">
                          <p class="g-font-weight-300 g-font-size-12 g-font-size-16--md g-color-gray-dark-v6 mb-0">-$48.20</p>
                          <em class="g-font-style-normal g-font-size-12 g-font-size-16--md g-color-gray-dark-v12">Transport</em>
                        </div>

                        <div class="d-flex g-mt-5 g-ml-12">
                          <i class="hs-admin-check g-font-size-default g-font-size-16--md g-color-secondary"></i>
                        </div>
                      </div>

                      <div class="media g-mb-15">
                        <div class="media-body align-self-start">
                          <h3 class="text-uppercase g-font-size-12 g-font-size-16--md g-font-weight-300 g-line-height-1">Taxi.unify.com</h3>
                          <p class="g-font-size-12 g-font-size-default--md g-color-gray-dark-v12 mb-0 g-mt-5">Credit Card **** 4390</p>
                        </div>

                        <div class="d-flex flex-column text-right g-color-lightblue-v2 ml-auto">
                          <p class="g-font-weight-300 g-font-size-12 g-font-size-16--md g-color-gray-dark-v6 mb-0">-$136.50</p>
                          <em class="g-font-style-normal g-font-size-12 g-font-size-16--md g-color-gray-dark-v12">Transport</em>
                        </div>

                        <div class="d-flex g-mt-5 g-ml-12">
                          <i class="hs-admin-time g-font-size-default g-font-size-18--md g-color-gray-light-v6"></i>
                        </div>
                      </div>

                      <div class="media g-mb-15">
                        <div class="media-body align-self-start">
                          <h3 class="text-uppercase g-font-size-12 g-font-size-16--md g-font-weight-300 g-line-height-1">Order.unify.com</h3>
                          <p class="g-font-size-12 g-font-size-default--md g-color-gray-dark-v12 mb-0 g-mt-5">Paypal</p>
                        </div>

                        <div class="d-flex flex-column text-right g-color-lightblue-v2 ml-auto">
                          <p class="g-font-weight-300 g-font-size-12 g-font-size-16--md g-color-gray-dark-v6 mb-0">-$12.800.00</p>
                          <em class="g-font-style-normal g-font-size-12 g-font-size-16--md g-color-gray-dark-v12">Services</em>
                        </div>

                        <div class="d-flex g-mt-5 g-ml-12">
                          <i class="hs-admin-time g-font-size-default g-font-size-18--md g-color-gray-light-v6"></i>
                        </div>
                      </div>

                      <div class="media g-mb-15">
                        <div class="media-body align-self-start">
                          <h3 class="text-uppercase g-font-size-12 g-font-size-16--md g-font-weight-300 g-line-height-1">Taxi.unify.com</h3>
                          <p class="g-font-size-12 g-font-size-default--md g-color-gray-dark-v12 mb-0 g-mt-5">Debit Card Card **** 4450</p>
                        </div>

                        <div class="d-flex flex-column text-right g-color-lightblue-v2 ml-auto">
                          <p class="g-font-weight-300 g-font-size-12 g-font-size-16--md g-color-gray-dark-v6 mb-0">-$56.00</p>
                          <em class="g-font-style-normal g-font-size-12 g-font-size-16--md g-color-gray-dark-v12">Transport</em>
                        </div>

                        <div class="d-flex g-mt-5 g-ml-12">
                          <i class="hs-admin-check g-font-size-default g-font-size-16--md g-color-secondary"></i>
                        </div>
                      </div>

                      <div class="media g-mb-45">
                        <div class="media-body align-self-start">
                          <h3 class="text-uppercase g-font-size-12 g-font-size-16--md g-font-weight-300 g-line-height-1">Order.unify.com</h3>
                          <p class="g-font-size-12 g-font-size-default--md g-color-gray-dark-v12 mb-0 g-mt-5">Payoneer</p>
                        </div>

                        <div class="d-flex flex-column text-right g-color-lightblue-v2 ml-auto">
                          <p class="g-font-weight-300 g-font-size-12 g-font-size-16--md g-color-gray-dark-v6 mb-0">-$456.20</p>
                          <em class="g-font-style-normal g-font-size-12 g-font-size-16--md g-color-gray-dark-v12">Services</em>
                        </div>

                        <div class="d-flex g-mt-5 g-ml-12">
                          <i class="hs-admin-check g-font-size-default g-font-size-16--md g-color-secondary"></i>
                        </div>
                      </div>

                      <a class="d-flex align-items-center u-link-v5 g-font-style-normal g-color-secondary" href="#!">
                        <i class="hs-admin-reload g-font-size-20"></i>
                        <span class="g-font-size-12 g-font-size-default--md g-ml-12">Load more</span>
                      </a>
                    </div>
                  </form>
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

  <!-- JS Unify -->
  <script src="{{url('/')}}/academy/assets2/js/hs.core.js"></script>

  <script src="{{url('/')}}/academy/assets2/js/components/hs.scrollbar.js"></script>

  <script src="{{url('/')}}/academy/assets/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
  <script src="{{url('/')}}/academy/assets/vendor/flatpickr/dist/js/flatpickr.min.js"></script>

  <script src="{{url('/')}}/academy/assets2/js/components/hs.dropdown.js"></script>
  <script src="{{url('/')}}/academy/assets2/js/helpers/hs.hamburgers.js"></script>
  <script src="{{url('/')}}/academy/assets/js/components/hs.side-nav.js"></script>

  <script src="{{url('/')}}/academy/assets/js/components/hs.range-datepicker.js"></script>

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
  
      // initialization of range datepicker
      $.HSCore.components.HSRangeDatepicker.init('#dateFrom, #dateTo');
    });
  </script>
@endsection