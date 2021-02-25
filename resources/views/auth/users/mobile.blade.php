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
            <h2 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">Primary Phone Numbers</h2>
          </header>

          <hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-25--md">

          <form>
            <div class="row g-mb-20">
              <div class="col-md-6">
                <label class="g-mb-10">Primary Phone Number</label>

                <div class="form-group g-pos-rel mb-0">
                  <input class="form-control h-100 form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-rounded-4 g-px-20 g-py-10" type="text" placeholder="Primary Phone" value="525-005-7106">
                  <em class="d-flex align-items-center g-absolute-centered--y g-right-15 g-font-style-normal g-color-gray-dark-v11">
                  <span class="g-pos-rel g-width-18 g-height-18 g-bg-secondary g-brd-around g-brd-secondary rounded-circle">
                    <i class="hs-admin-check g-absolute-centered g-font-weight-800 g-font-size-8 g-color-white" title="Confirmed"></i>
                  </span>
                  <span class="g-hidden-lg-down g-font-weight-300 g-font-size-default g-ml-8">Confirmed</span>
                </em>
                </div>
              </div>
            </div>

            <label class="g-mb-10">Secondary Phone Number</label>

            <div class="row g-mb-20">
              <div class="col-md-6">
                <div class="form-group g-pos-rel mb-0">
                  <input class="form-control h-100 form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-rounded-4 g-px-20 g-py-10" type="text" placeholder="Primary Phone" value="525-005-7134">
                  <a class="u-link-v5 g-absolute-centered--y g-right-15 g-font-style-normal g-color-secondary g-color-gray-dark-v11--hover" href="#!">
                    <i class="hs-admin-check" title="Confirmed"></i>
                    <span class="g-hidden-lg-down g-font-weight-300 g-font-size-default g-ml-8">Send Confirmed</span>
                  </a>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group g-pos-rel mb-0">
                  <input class="form-control h-100 form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-rounded-4 g-px-20 g-py-10" type="text" placeholder="Enter 4 digit code">
                  <a class="u-link-v5 g-absolute-centered--y g-right-15 g-font-style-normal g-color-secondary g-color-gray-dark-v11--hover" href="#!">
                    <i class="hs-admin-check" title="Confirmed"></i>
                    <span class="g-hidden-lg-down g-font-weight-300 g-font-size-default g-ml-8">Confirm</span>
                  </a>
                </div>
              </div>
            </div>

            <div class="d-flex g-mb-60">
              <a class="u-link-v5 d-flex align-items-center g-color-secondary" href="#!">
                <i class="hs-admin-check g-font-size-16"></i>
                <span class="g-ml-8">Save</span>
              </a>

              <a class="u-link-v5 d-flex align-items-center g-color-secondary g-ml-30" href="#!">
                <span class="u-badge-v2--xl g-pos-rel g-transform-origin--top-left g-bg-lightblue-v3 g-font-size-10 g-color-white">
                <i class="hs-admin-plus g-absolute-centered"></i>
              </span>
                <span class="g-ml-15">Add More</span>
              </a>
            </div>

            <header>
              <h2 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">Secondary Phone Number</h2>
            </header>

            <hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-25--md">

            <label class="g-mb-10">Home Phone Number</label>

            <div class="row g-mb-30">
              <div class="col-md-6 g-mb-20 g-mb-0--md">
                <div class="form-group u-select--v2 g-pos-rel g-brd-gray-light-v7 g-rounded-4 mb-0">
                  <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                  <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                </span>
                  <select name="language" class="js-select u-select--v2-select w-100" required="required" style="display: none;">
                    <option data-content='<span class="d-flex align-items-center"><img class="g-width-20 g-height-20 rounded-circle g-mr-8" src="{{url('/')}}/academy/assets/img/langs/us.png" alt="Image Description"><span class="g-line-height-1 g-color-black">English</span></span>'>English</option>
                    <option data-content='<span class="d-flex align-items-center"><img class="g-width-20 g-height-20 rounded-circle g-mr-8" src="{{url('/')}}/academy/assets/img/langs/de.png" alt="Image Description"><span class="g-line-height-1 g-color-black">Deutsche</span></span>'>Deutsche</option>
                    <option data-content='<span class="d-flex align-items-center"><img class="g-width-20 g-height-20 rounded-circle g-mr-8" src="{{url('/')}}/academy/assets/img/langs/ru.png" alt="Image Description"><span class="g-line-height-1 g-color-black">Русский</span></span>'>Русский</option>
                  </select>
                  <i class="hs-admin-angle-down g-absolute-centered--y g-right-0 g-color-gray-light-v6 ml-auto g-mr-15"></i>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group g-pos-rel mb-0 has-success">
                  <em class="g-absolute-centered--y g-left-0 g-z-index-minus-1 g-width-70 h-100 g-bg-gray-light-v8 g-font-style-normal g-color-gray-light-v11 g-rounded-left-4">
                  <span class="text-center g-absolute-centered g-font-weight-300 g-font-size-default">+44</span>
                </em>
                  <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                  <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                </span>
                  <input class="form-control h-100 form-control-md g-bg-transparent g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-rounded-4 g-pl-85 g-pr-40 g-py-10" type="text" placeholder="Primary Phone" value="211-898-2770">
                </div>
              </div>
            </div>

            <div class="d-flex g-mb-30">
              <a class="u-link-v5 d-flex align-items-center g-color-secondary" href="#!">
                <i class="hs-admin-check g-font-size-16"></i>
                <span class="g-ml-8">Save</span>
              </a>

              <a class="u-link-v5 d-flex align-items-center g-color-secondary g-ml-30" href="#!">
                <span class="u-badge-v2--xl g-pos-rel g-transform-origin--top-left g-bg-lightblue-v3 g-font-size-10 g-color-white">
                <i class="hs-admin-plus g-absolute-centered"></i>
              </span>
                <span class="g-ml-15">Add More</span>
              </a>
            </div>

            <div class="g-mt-15">
              <button class="btn btn-md btn-xl--md u-btn-secondary g-width-160--md g-font-size-12 g-font-size-default--md g-mr-10 g-mb-10" type="submit">Save Changes</button>
              <button class="btn btn-md btn-xl--md u-btn-outline-gray-dark-v6 g-font-size-12 g-font-size-default--md g-mb-10" type="reset">Cancel</button>
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