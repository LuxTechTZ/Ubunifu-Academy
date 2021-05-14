@extends('layouts.academy')

@section('page')
  Categories
@endsection

@section('template_linked_css')
 <!-- BEGIN PAGE LEVEL PLUGINS -->
<!-- CSS Global Compulsory -->
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
    <a class="u-link-v5 g-color-gray-dark-v6 g-color-secondary--hover g-valign-middle" href="{{url('/')}}/home">Dashboard</a>
    <i class="hs-admin-angle-right g-font-size-12 g-color-gray-light-v6 g-valign-middle g-ml-10"></i>
  </li>
  <li class="list-inline-item">
    <span class="g-valign-middle">Categories</span>
  </li>
</ul>
</div>
<!-- End Breadcrumb-v1 -->
@endsection

@section('content')
<div class="g-pa-20">
    <h1 class="g-font-weight-300 g-font-size-28 g-color-black g-mb-28">Create Category</h1>

    <div class="row">
        <!-- 1-st column -->
        <div class="col-md-12">
            <!-- Basic Text Inputs -->
            <form method="POST" action="{{route('store_category')}}" enctype="multipart/form-data">
                @csrf
                <div class="g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md g-mb-30">
                  <h3 class="d-flex align-self-center text-uppercase g-font-size-12 g-font-size-default--md g-color-black g-mb-20">
                      Category Details
                  </h3>
                  <!-- Default Input -->
                    <div class="row">
                      <div class="form-group g-mb-30 col-md-6">
                        <label class="g-mb-10" for="inputGroup-1_1">Name</label>
                        <div class="g-pos-rel">
                          <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                            <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                            </span>
                          <input id="title" required
                                 class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-14 g-py-10"
                                 type="text"
                                 name="title">
                        </div>
                      </div>

                        <div class="form-group g-mb-30 col-md-6">
                            <label class="g-mb-10" for="inputGroup-1_1">Description</label>
                            <div class="g-pos-rel">
                              <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                                <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                                </span>
                              <input id="details" required
                                     class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-14 g-py-10"
                                     type="text"
                                     name="details">
                            </div>
                        </div>

                        <div class="form-group g-mb-30 col-md-6">
                        <label class="g-mb-10" for="inputGroup-1_1">Image</label>

                        <div class="g-pos-rel">
                          <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                            <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                            </span>
                          <input id="img" required
                                 class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-14 g-py-10"
                                 type="file" accept="image/jpeg,image/png"
                                 name="img">
                        </div>
                      </div>
                    </div>
                  <!-- End Default Input -->
                    <div class="media-body align-self-center text-right">
                        <button class="js-fancybox btn btn-xl u-btn-secondary g-width-160--md g-font-size-default g-ml-10"
                           h
                        type="submit">
                            Save Category
                        </button>
                      </div>
                </div>
            </form>
            <!-- End Basic Text Inputs -->
        </div>
        <!-- End 1-st column -->
    </div>
</div>
@endsection


@section('footer_scripts')
  <script src="{{url('/')}}/academy/assets/vendor/jquery/jquery.min.js"></script>
  <script src="{{url('/')}}/academy/assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>

  <script src="{{url('/')}}/academy/assets2/vendor/popper.min.js"></script>
  <script src="{{url('/')}}/academy/assets2/vendor/bootstrap/bootstrap.min.js"></script>

  <script src="{{url('/')}}/academy/assets2/vendor/cookiejs/jquery.cookie.js"></script>


  <!-- JS Plugins Init. -->
  <script src="{{url('/')}}/academy/assets2/vendor/appear.js"></script>
  <script src="{{url('/')}}/academy/assets/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
  <script src="{{url('/')}}/academy/assets2/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="{{url('/')}}/academy/assets/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
  <script src="{{url('/')}}/academy/assets/vendor/datatables/media/js/dataTables.select.js"></script>
  <script src="{{url('/')}}/academy/assets/vendor/table-edits/build/table-edits.min.js"></script>

  <!-- JS Unify -->
  <script src="{{url('/')}}/academy/assets2/js/hs.core.js"></script>
  <script src="{{url('/')}}/academy/assets/js/components/hs.side-nav.js"></script>
  <script src="{{url('/')}}/academy/assets2/js/helpers/hs.hamburgers.js"></script>
  <script src="{{url('/')}}/academy/assets2/js/components/hs.dropdown.js"></script>
  <script src="{{url('/')}}/academy/assets2/js/components/hs.scrollbar.js"></script>
  <script src="{{url('/')}}/academy/assets2/js/helpers/hs.focus-state.js"></script>
  <script src="{{url('/')}}/academy/assets/js/components/hs.datatables.js"></script>

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
        dropdownHideOnScroll: false,
        dropdownType: 'css-animation',
        dropdownAnimationIn: 'fadeIn',
        dropdownAnimationOut: 'fadeOut'
      });

      // initialization of custom scrollbar
      $.HSCore.components.HSScrollBar.init($('.js-custom-scroll'));

      // initialization of editable table
      $('.js-editable-table tr').editable({
        keyboard: true,
        dblclick: true,
        button: true,
        buttonSelector: '.js-edit',
        maintainWidth: true,
        edit: function (values) {
          $('.js-edit i', this).removeClass('hs-admin-pencil').addClass('hs-admin-check g-color-secondary');
        },
        save: function (values) {
          $('.js-edit i', this).removeClass('hs-admin-check g-color-secondary').addClass('hs-admin-pencil');
        }
      });

      // initialization of datatables
      $.HSCore.components.HSDatatables.init('.js-datatable');
    });
  </script>
@endsection
