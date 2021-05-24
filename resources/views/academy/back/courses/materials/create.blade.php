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
    <li class="list-inline-item g-mr-10">
        <a class="u-link-v5 g-color-gray-dark-v6 g-color-secondary--hover g-valign-middle"
           href="{{url('/')}}/admin/courses/lessons">Lessons</a>
        <i class="hs-admin-angle-right g-font-size-12 g-color-gray-light-v6 g-valign-middle g-ml-10"></i>
    </li>
  <li class="list-inline-item">
    <span class="g-valign-middle">Materials</span>
  </li>
</ul>
</div>
<!-- End Breadcrumb-v1 -->
@endsection

@section('content')
    <div class="g-pa-20">
        <h1 class="g-font-weight-300 g-font-size-28 g-color-black g-mb-28"><b>{{$lesson->name}}:</b>
            <small>Materials</small>
        </h1>
        <div class="g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md">
            <div class="row">
                @foreach($lesson->materials as $material)
                  <div class="col-md-4 g-mb-30">
                    <div class="d-flex flex-wrap h-100 g-brd-around g-brd-gray-light-v7 g-rounded-2 g-pa-25">
                      <header class="w-100 align-self-start text-right justify-content-end g-pos-rel g-mb-10">
                        <span class="u-badge-v2--xs g-absolute-centered--y g-left-0 g-transform-origin--top-left g-bg-darkblue-v2"></span>

                        <div class="g-pos-rel g-z-index-2">
                          <a id="dropDown1Invoker" class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-secondary--hover" href="#!" aria-controls="dropDown1" aria-haspopup="true" aria-expanded="false" data-dropdown-event="click" data-dropdown-target="#dropDown1"
                          data-dropdown-type="jquery-slide">
                            <i class="hs-admin-more-alt"></i>
                          </a>

                          <div id="dropDown1" class="u-shadow-v31 g-pos-abs g-right-0 g-bg-white u-dropdown--jquery-slide u-dropdown--hidden" aria-labelledby="dropDown1Invoker" style="display: none;">
                            <ul class="list-unstyled g-nowrap mb-0">
                              <li>
                                <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
                                  <i class="hs-admin-pencil g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                  Edit
                                </a>
                              </li>
                              <li>
                                <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
                                  <i class="hs-admin-cloud-up g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                  Archive
                                </a>
                              </li>
                              <li>
                                <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
                                  <i class="hs-admin-bookmark g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                  Add to Favorites
                                </a>
                              </li>
                              <li>
                                <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
                                  <i class="hs-admin-trash g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                  Delete
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </header>

                      <section class="w-100 align-self-center text-center g-color-darkblue-v2 g-mb-30">
                        <svg width="50px" height="64px" viewbox="0 0 58 74" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-359.000000, -868.000000)" fill="#FF4B00">
                              <g transform="translate(284.000000, 730.000000)">
                                <g transform="translate(0.000000, 76.000000)">
                                  <g transform="translate(75.000000, 62.000000)">
                                    <rect opacity="0.15" x="0" y="36" width="58" height="27"></rect>
                                    <path d="M40.0002553,0 L0,0 L0,74 L58,74 L58,17.9894 L40.0002553,0 Z M40.7234043,4.2106 L53.7869787,17.2666667 L40.7234043,17.2666667 L40.7234043,4.2106 Z M2.46808511,71.5333333 L2.46808511,2.46666667 L38.2553191,2.46666667 L38.2553191,19.7333333 L55.5319149,19.7333333 L55.5319149,71.5333333 L2.46808511,71.5333333 Z"
                                    fill-rule="nonzero"></path>
                                    <text font-size="14" font-weight="normal" letter-spacing="0.209999993">
                                      <tspan x="12.0208985" y="52">.{{$material->type}}</tspan>
                                    </text>
                                  </g>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </section>

                      <footer class="w-100 align-self-end text-center">
                        <div class="d-flex align-items-center justify-content-center g-mb-10">
                          <span class="g-line-height-1_2 g-font-size-default g-color-black">
                              {{$material->name}}
                          </span>
                        </div>

                        <p class="g-font-weight-300 g-font-size-default g-color-gray-dark-v6 mb-0">
                            {{number_format($material->size/1000/1024,2)}} MB
                        </p>
                      </footer>
                    </div>
                  </div>
                @endforeach
                  <div class="col-md-4 g-mb-30">
                    <div class="d-flex flex-wrap h-100 g-brd-around g-brd-gray-light-v7 g-rounded-2 g-pa-25">
                      <header class="w-100 align-self-start text-right justify-content-end g-pos-rel g-mb-10">
                        <div class="g-pos-rel g-z-index-2">
                          <a id="dropDown11Invoker" class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-secondary--hover" href="#!" aria-controls="dropDown11" aria-haspopup="true" aria-expanded="false" data-dropdown-event="click" data-dropdown-target="#dropDown11"
                          data-dropdown-type="jquery-slide">
                            <i class="hs-admin-more-alt"></i>
                          </a>

                          <div id="dropDown11" class="u-shadow-v31 g-pos-abs g-right-0 g-bg-white u-dropdown--jquery-slide u-dropdown--hidden" aria-labelledby="dropDown11Invoker" style="display: none;">
                            <ul class="list-unstyled g-nowrap mb-0">
                              <li>
                                <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
                                  <i class="hs-admin-pencil g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                  Edit
                                </a>
                              </li>
                              <li>
                                <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
                                  <i class="hs-admin-cloud-up g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                  Archive
                                </a>
                              </li>
                              <li>
                                <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
                                  <i class="hs-admin-bookmark g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                  Add to Favorites
                                </a>
                              </li>
                              <li>
                                <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
                                  <i class="hs-admin-trash g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                  Delete
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </header>

                      <section class="w-100 align-self-center text-center g-color-darkblue-v2 g-mb-30">
                        <img class="img-fluid g-rounded-2" src="{{url('/')}}/academy/assets/img-temp/354x180/img1.jpg" alt="Image description">
                      </section>

                      <footer class="w-100 align-self-end text-center">
                        <div class="d-flex align-items-center justify-content-center g-mb-10">
                          <span class="g-line-height-1_2 g-font-size-default g-color-black">Photo.png</span>
                        </div>

                        <p class="g-font-weight-300 g-font-size-default g-color-gray-dark-v6 mb-0">1.1 mb</p>
                      </footer>
                    </div>
                  </div>
            </div>
              <hr class="g-brd-gray-light-v7 g-mx-minus-20">
                <input hidden id="lesson" value="{{$lesson->id}}">

              <!-- Advanced File Input -->
              <div class="form-group mb-0">
                <h4 class="h6 g-font-weight-600 g-color-black g-mb-20">Upload Materials in Order</h4>
                <input class="js-file-attachment" name="fileAttachment2[]"
                       type="file"
                       accept="video/mp4, video/3gp, video/avi, video/mov, video/flv, video/wmv,application/pdf">
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
