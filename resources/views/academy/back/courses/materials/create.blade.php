@extends('layouts.academy')

@section('page')
  Lessons
@endsection

@section('template_linked_css')
 <!-- BEGIN PAGE LEVEL PLUGINS -->

  <link rel="stylesheet" href="{{url('/')}}/academy/assets2/vendor/bootstrap/bootstrap.min.css">
  <!-- CSS Global Icons -->
  <link rel="stylesheet" href="{{url('/')}}/academy/assets2/vendor/icon-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{url('/')}}/academy/assets2/vendor/icon-line/css/simple-line-icons.css">
  <link rel="stylesheet" href="{{url('/')}}/academy/assets2/vendor/icon-etlinefont/style.css">
  <link rel="stylesheet" href="{{url('/')}}/academy/assets2/vendor/icon-line-pro/style.css">
  <link rel="stylesheet" href="{{url('/')}}/academy/assets2/vendor/icon-hs/style.css">

  <link rel="stylesheet" href="{{url('/')}}/academy/assets/vendor/hs-admin-icons/hs-admin-icons.css">
  <link rel="stylesheet" href="{{url('/')}}/academy/assets2/vendor/animate.css">
  <link rel="stylesheet" href="{{url('/')}}/academy/assets2/vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css">
  <link rel="stylesheet" href="{{url('/')}}/academy/assets/vendor/bootstrap-select/css/bootstrap-select.min.css">
  <link rel="stylesheet" href="{{url('/')}}/academy/assets/vendor/bootstrap-tagsinput/css/bootstrap-tagsinput.css">

  <link rel="stylesheet" href="{{url('/')}}/academy/assets2/vendor/hamburgers/hamburgers.min.css">

  <!-- CSS Unify -->
  <link rel="stylesheet" href="{{url('/')}}/academy/assets/css/unify-admin.css">

  <!-- CSS Customization -->
  <link rel="stylesheet" href="{{url('/')}}/academy/assets2/css/custom.css">
@endsection

@section('breadcrumb')
<!-- Breadcrumb-v1 -->
<div class="g-hidden-sm-down g-bg-gray-light-v8 g-pa-20">
<ul class="u-list-inline g-color-gray-dark-v6">

  <li class="list-inline-item g-mr-10">
    <a class="u-link-v5 g-color-gray-dark-v6 g-color-secondary--hover g-valign-middle"
       href="{{url('/')}}/home">Dashboard</a>
    <i class="hs-admin-angle-right g-font-size-12 g-color-gray-light-v6 g-valign-middle g-ml-10"></i>
  </li>
    <li class="list-inline-item g-mr-10">
    <a class="u-link-v5 g-color-gray-dark-v6 g-color-secondary--hover g-valign-middle"
       href="{{url('/')}}/admin/courses">Courses</a>
    <i class="hs-admin-angle-right g-font-size-12 g-color-gray-light-v6 g-valign-middle g-ml-10"></i>
  </li>
  <li class="list-inline-item">
    <span class="g-valign-middle">Lessons</span>
  </li>
</ul>
</div>
<!-- End Breadcrumb-v1 -->
@endsection

@section('content')
<div class="g-pa-20">
            <h1 class="g-font-weight-300 g-font-size-28 g-color-black g-mb-28"><b>{{$lesson->name}}</b>  Materials</h1>

            <div class="g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md">



              <hr class="g-brd-gray-light-v7 g-mx-minus-20">
                <input hidden id="lesson" value="{{$lesson->id}}">

              <!-- Advanced File Input -->
              <div class="form-group mb-0">
                <h4 class="h6 g-font-weight-600 g-color-black g-mb-20">Upload Materials in Order</h4>
                <input class="js-file-attachment" name="fileAttachment2[]"
                       type="file" accept="video/mp4, video/3gp, video/avi, video/mov, video/flv, video/wmv">
              </div>
              <!-- End Advanced File Input -->
            </div>
          </div>
@endsection


@section('footer_scripts')
<!-- BEGIN PAGE LEVEL PLUGINS -->
   <!-- JS Global Compulsory -->
  <script src="{{url('/')}}/academy/assets/vendor/jquery/jquery.min.js"></script>
  <script src="{{url('/')}}/academy/assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>

  <script src="{{url('/')}}/academy/assets2/vendor/popper.min.js"></script>
  <script src="{{url('/')}}/academy/assets2/vendor/bootstrap/bootstrap.min.js"></script>

  <script src="{{url('/')}}/academy/assets2/vendor/cookiejs/jquery.cookie.js"></script>


  <!-- JS Plugins Init. -->
  <script src="{{url('/')}}/academy/assets2/vendor/appear.js"></script>
  <script src="{{url('/')}}/academy/assets/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
  <script src="{{url('/')}}/academy/assets2/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="{{url('/')}}/academy/assets/vendor/bloodhound-js/js/bloodhound.min.js"></script>
  <script src="{{url('/')}}/academy/assets/vendor/bloodhound-js/js/typeahead.jquery.min.js"></script>
  <script src="{{url('/')}}/academy/assets/vendor/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
  <script src="{{url('/')}}/academy/assets2/vendor/jquery.filer/js/jquery.filer.min.js"></script>

  <!-- JS Unify -->
  <script src="{{url('/')}}/academy/assets2/js/hs.core.js"></script>
  <script src="{{url('/')}}/academy/assets/js/components/hs.side-nav.js"></script>
  <script src="{{url('/')}}/academy/assets2/js/helpers/hs.hamburgers.js"></script>
  <script src="{{url('/')}}/academy/assets2/js/components/hs.dropdown.js"></script>
  <script src="{{url('/')}}/academy/assets2/js/components/hs.scrollbar.js"></script>
  <script src="{{url('/')}}/academy/assets2/js/components/hs.count-qty.js"></script>
  <script src="{{url('/')}}/academy/assets2/js/helpers/hs.focus-state.js"></script>
  <script src="{{url('/')}}/academy/assets2/js/helpers/hs.file-attachments.js"></script>
  <script src="{{url('/')}}/academy/assets2/js/components/hs.file-attachement.js"></script>

  <!-- JS Custom -->
  <script src="{{url('/')}}/academy/assets2/js/custom.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
      // initialization of custom select
      $('.js-select').selectpicker();

      // initialization of sidebar navigation component
      $.HSCore.components.HSSideNav.init('.js-side-nav');

      // initialization of hamburger
      $.HSCore.helpers.HSHamburgers.init('.hamburger');

      // initialization of HSDropdown component
      $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {
        dropdownHideOnScroll: false
      });

      // initialization of forms
      $.HSCore.helpers.HSFileAttachments.init();
      $.HSCore.components.HSFileAttachment.init('.js-file-attachment');
      $.HSCore.helpers.HSFocusState.init();

      // initialization of custom scrollbar
      $.HSCore.components.HSScrollBar.init($('.js-custom-scroll'));

      // initialization of forms
      $.HSCore.components.HSCountQty.init('.js-quantity');
    });
  </script>
@endsection
