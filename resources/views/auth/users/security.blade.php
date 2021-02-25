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
 <!-- BEGIN PAGE LEVEL PLUGINS -->
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
                    <h2 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">Security Questions</h2>
                  </header>

                  <hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-25--md">

                  <form>
                    <div class="row">
                      <div class="col-md-6 g-mb-20">
                        <label class="g-mb-12">Security Question #1</label>

                        <div class="form-group u-select--v2 g-pos-rel g-brd-gray-light-v7 g-rounded-4 mb-0">
                          <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                          <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                        </span>
                          <select name="question1" class="js-select u-select--v2-select w-100" title="Please select question" required="required" style="display: none;">
                            <option value="selectListItem1">Question 1</option>
                            <option value="selectListItem2">Question 2</option>
                            <option value="selectListItem3">Question 3</option>
                          </select>
                          <i class="hs-admin-angle-down g-absolute-centered--y g-right-0 g-color-gray-light-v6 ml-auto g-mr-15"></i>
                        </div>
                      </div>

                      <div class="col-md-6 g-mb-20">
                        <label class="g-mb-12">Answer #1</label>

                        <div class="form-group g-pos-rel mb-0">
                          <input class="form-control h-100 form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-rounded-4 g-px-20 g-py-10" type="text" placeholder="Enter your answer">
                        </div>
                      </div>
                    </div>

                    <div class="row g-mb-60">
                      <div class="col-md-6 g-mb-20 g-mb-0--md">
                        <label class="g-mb-12">Security Question #2</label>

                        <div class="form-group u-select--v2 g-pos-rel g-brd-gray-light-v7 g-rounded-4 mb-0">
                          <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                          <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                        </span>
                          <select name="question2" class="js-select u-select--v2-select w-100" title="Please select question" required="required" style="display: none;">
                            <option value="selectListItem1">Question 1</option>
                            <option value="selectListItem2">Question 2</option>
                            <option value="selectListItem3">Question 3</option>
                          </select>
                          <i class="hs-admin-angle-down g-absolute-centered--y g-right-0 g-color-gray-light-v6 ml-auto g-mr-15"></i>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <label class="g-mb-12">Answer #2</label>

                        <div class="form-group g-pos-rel mb-0">
                          <input class="form-control h-100 form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-rounded-4 g-px-20 g-py-10" type="text" placeholder="Enter your answer">
                        </div>
                      </div>
                    </div>

                    <header>
                      <h2 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">Security Settings</h2>
                    </header>

                    <hr class="d-flex g-brd-gray-light-v7 g-my-15 g-mt-25--md g-mb-35--md">

                    <div class="form-group d-flex align-items-center justify-content-between g-mb-20">
                      <span>Notify me via email when logging in</span>
                      <label class="u-check mb-0 g-ml-10">
                        <input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0" type="checkbox" checked>

                        <div class="u-check-icon-radio-v8 u-check-icon--md u-check-icon--lightblue-v3">
                          <i class="fa"></i>
                        </div>
                      </label>
                    </div>

                    <div class="form-group d-flex align-items-center justify-content-between g-mb-20">
                      <span>Send SMS confirmation for all online payments</span>
                      <label class="u-check mb-0 g-ml-10">
                        <input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0" type="checkbox">

                        <div class="u-check-icon-radio-v8 u-check-icon--md u-check-icon--lightblue-v3">
                          <i class="fa"></i>
                        </div>
                      </label>
                    </div>

                    <div class="form-group d-flex align-items-center justify-content-between g-mb-20">
                      <span>Check which devices accessed your account</span>
                      <label class="u-check mb-0 g-ml-10">
                        <input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0" type="checkbox">

                        <div class="u-check-icon-radio-v8 u-check-icon--md u-check-icon--lightblue-v3">
                          <i class="fa"></i>
                        </div>
                      </label>
                    </div>

                    <div class="form-group d-flex align-items-center justify-content-between g-mb-20">
                      <span>Find My Device, make sure your device can be found if it gets lost</span>
                      <label class="u-check mb-0 g-ml-10">
                        <input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0" type="checkbox" checked>

                        <div class="u-check-icon-radio-v8 u-check-icon--md u-check-icon--lightblue-v3">
                          <i class="fa"></i>
                        </div>
                      </label>
                    </div>

                    <div class="form-group d-flex align-items-center justify-content-between g-mb-20">
                      <span>Lock your device with a PIN, pattern, or password</span>
                      <label class="u-check mb-0 g-ml-10">
                        <input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0" type="checkbox" checked>

                        <div class="u-check-icon-radio-v8 u-check-icon--md u-check-icon--lightblue-v3">
                          <i class="fa"></i>
                        </div>
                      </label>
                    </div>

                    <div class="form-group d-flex align-items-center justify-content-between g-mb-20">
                      <span>Manage what apps have access to app-usage data on your device</span>
                      <label class="u-check mb-0 g-ml-10">
                        <input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0" type="checkbox">

                        <div class="u-check-icon-radio-v8 u-check-icon--md u-check-icon--lightblue-v3">
                          <i class="fa"></i>
                        </div>
                      </label>
                    </div>

                    <div class="g-pt-15">
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