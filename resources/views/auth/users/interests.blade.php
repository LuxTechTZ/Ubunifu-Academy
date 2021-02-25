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
  <link rel="stylesheet" href="{{url('/')}}/academy/assets/vendor/multiselect/css/multi-select.css">

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
                    <h2 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">Your Interests</h2>
                  </header>

                  <hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-25--md">

                  <form>
                    <label class="g-mb-15">Select Interests</label>

                    <div class="form-group g-pos-rel g-overflow-hidden g-brd-around g-brd-gray-light-v7 mb-0">
                      <select class="js-multi-select" multiple="multiple" data-multiselect-class="u-multi-select--v1 u-multi-select--items-icons u-multi-select--items-lg u-multi-select--rounded-0 g-ma-minus-1" data-multiselect-divider='<span class="g-absolute-centered--md d-block text-center g-font-size-18 g-color-gray-dark-v9 g-my-15 g-mt-25--md g-mb-0--md"><i class="g-pos-rel g-top-8 g-left-minus-3 hs-admin-arrow-left"></i><i class="g-pos-rel g-top-1 g-right-3 hs-admin-arrow-right"></i></span>'>
                        <option value="listItem1">Design</option>
                        <option value="listItem2">Development</option>
                        <option value="listItem3">Advertising</option>
                        <option value="listItem4">Lifestyle</option>
                        <option value="listItem5">Technology</option>
                        <option value="listItem6">Sports</option>
                        <option value="listItem7">Beauty &amp; Fashion</option>
                        <option value="listItem8" selected="selected">Html &amp; Css</option>
                        <option value="listItem9" selected="selected">JavaScript</option>
                        <option value="listItem10" selected="selected">C#</option>
                        <option value="listItem11" selected="selected">Ruby on Rails</option>
                        <option value="listItem12" selected="selected">Swift</option>
                        <option value="listItem13" selected="selected">Python</option>
                        <option value="listItem14" selected="selected">PHP</option>
                      </select>
                    </div>
                  </form>
                </div>
              </div>
    </div>
</div>
@endsection


@section('footer_scripts') 
<!-- BEGIN PAGE LEVEL PLUGINS -->
  <!-- JS Global Compulsory -->
  <!-- JS Global Compulsory -->
  <script src="{{url('/')}}/academy/assets/vendor/jquery/jquery.min.js"></script>
  <script src="{{url('/')}}/academy/assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>

  <script src="{{url('/')}}/academy/assets2/vendor/popper.min.js"></script>
  <script src="{{url('/')}}/academy/assets2/vendor/bootstrap/bootstrap.min.js"></script>

  <script src="{{url('/')}}/academy/assets2/vendor/cookiejs/jquery.cookie.js"></script>


  <script src="{{url('/')}}/academy/assets2/vendor/appear.js"></script>
  <script src="{{url('/')}}/academy/assets2/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

  <script src="{{url('/')}}/academy/assets/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
  <script src="{{url('/')}}/academy/assets/vendor/multiselect/js/jquery.multi-select.js"></script>

  <!-- JS Unify -->
  <script src="{{url('/')}}/academy/assets2/js/hs.core.js"></script>

  <script src="{{url('/')}}/academy/assets2/js/components/hs.scrollbar.js"></script>
  <script src="{{url('/')}}/academy/assets2/js/components/hs.dropdown.js"></script>
  <script src="{{url('/')}}/academy/assets2/js/helpers/hs.hamburgers.js"></script>
  <script src="{{url('/')}}/academy/assets/js/components/hs.side-nav.js"></script>
  <script src="{{url('/')}}/academy/assets/js/components/hs.multi-select.js"></script>

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
  
      // initialization of custom multi select
      $.HSCore.components.HSMultiSelect.init('.js-multi-select', {
        selectableHeader: '<h3 class="u-heading-v1-4 g-top-100x--before g-left-50x--before g-font-weight-400 g-font-size-default g-brd-top g-brd-gray-light-v7 g-px-20 g-py-20 mb-0">Categories</h3>',
        selectionHeader: '<h3 class="g-font-weight-400 g-font-size-default g-brd-top g-brd-gray-light-v7 g-px-20 g-py-20 mb-0">Selected</h3>'
      });
    });
  </script>
@endsection