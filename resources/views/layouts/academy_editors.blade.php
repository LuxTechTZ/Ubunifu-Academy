<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from htmlstream.com/preview/unify-v2.6/admin-template/forms/forms-elemets-text-editors.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Feb 2021 07:45:58 GMT -->
<head>
  <!-- Title -->
  <title>Text Editors | Unify - Responsive Website Template</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- Favicon -->
  <link rel="shortcut icon" href="../../favicon.ico">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans%3A400%2C300%2C500%2C600%2C700%7CPlayfair+Display%7CRoboto%7CRaleway%7CSpectral%7CRubik">
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
  <link rel="stylesheet" href="{{url('/')}}/academy/assets/vendor/bootstrap-tagsinput/css/bootstrap-tagsinput.css">

  <link rel="stylesheet" href="{{url('/')}}/academy/assets2/vendor/hamburgers/hamburgers.min.css">

  <link rel="stylesheet" href="{{url('/')}}/academy/assets/vendor/summernote-themes/unify-lite.css">

  <!-- CSS Unify -->
  <link rel="stylesheet" href="{{url('/')}}/academy/assets/css/unify-admin.css">

  <!-- CSS Customization -->
  <link rel="stylesheet" href="{{url('/')}}/academy/assets2/css/custom.css">
</head>

<body>
  <main>
    <!-- Header -->
    @include('academy.partials.header')
    <!-- End Header -->


    <section class="container-fluid px-0 g-pt-65">
      <div class="row no-gutters g-pos-rel g-overflow-x-hidden">
        <!-- Sidebar Nav -->
        @include('academy.partials.sidebar')
        <!-- End Sidebar Nav -->


        <div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
          @yield('breadcrumb')


          @yield('content')

          <!-- Footer -->
          @include('academy.partials.footer')
          <!-- End Footer -->
        </div>
      </div>
    </section>
  </main>

  <div id="new-project-form" class="rounded-0 p-0" style="display: none; width: 790px; max-width: 100%;">
    <header class="g-bg-gray-light-v8 g-px-15 g-px-30--sm g-py-20">
      <h2 class="g-font-weight-300 g-font-size-16 g-color-black mb-0">Create New Project</h2>
    </header>

    <div class="g-pa-15 g-pa-30--sm">
      <form>
        <h3 class="g-mb-20">
<!--         <span class="d-inline-block g-line-height-1_6 g-font-weight-300 g-font-size-20 g-color-black g-brd-bottom--dashed g-brd-gray-light-v6">Dropbox design</span>
        <i class="hs-admin-pencil g-font-size-18 g-color-gray-light-v6 g-ml-15"></i> -->
        <span class="g-font-weight-300 g-font-size-20 g-color-black">Dropbox design</span>
      </h3>

        <div class="form-group g-mb-35">
          <textarea class="form-control form-control-md g-resize-none g-line-height-1_6 g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-pa-20" rows="5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit blanditiis, doloremque libero assumenda et qui, vel placeat quos in consequuntur iure quam alias modi quidem, praesentium. Voluptatibus tenetur deleniti eaque! periam et facere voluptas
            commodi natus blanditiis laborum quasi ea, possimus quae cupiditate distinctio, tenetur ullam quidem inventore fuga eaque incidunt reiciendis. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</textarea>
        </div>

        <table class="g-mb-35">
          <thead>
            <tr>
              <th class="g-width-340 g-font-weight-300 g-font-size-16 g-color-black g-pb-20">Team Member</th>
              <th class="g-width-460 g-font-weight-300 g-font-size-16 g-color-black g-pb-20">Role</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td class="g-pb-15">
                <img class="g-width-40 g-height-40 rounded-circle g-mr-12" src="{{url('/')}}/academy/assets2/img-temp/125x125/img3.jpg" alt="Image Description">
                <span class="g-hidden-sm-down g-line-height-1 g-color-gray-dark-v6">Carlos Castillo</span>
              </td>
              <td class="g-pb-15">
                <div class="u-select--v2 g-width-280--md g-brd-gray-light-v7 g-rounded-3">
                  <select class="js-select u-select--v2-select w-100 g-color-gray-dark-v6" style="display: none;">
                    <option>Designer</option>
                    <option>Manager</option>
                    <option>Programmer</option>
                  </select>
                  <i class="hs-admin-angle-down g-absolute-centered--y g-right-20 g-color-gray-light-v6"></i>
                </div>
              </td>
            </tr>

            <tr>
              <td class="g-pb-15">
                <img class="g-width-40 g-height-40 rounded-circle g-mr-12" src="{{url('/')}}/academy/assets2/img-temp/125x125/img6.jpg" alt="Image Description">
                <span class="g-hidden-sm-down g-line-height-1 g-color-gray-dark-v6">Micheal Schultz</span>
              </td>
              <td class="g-pb-15">
                <div class="u-select--v2 g-width-280--md g-brd-gray-light-v7 g-rounded-3">
                  <select class="js-select u-select--v2-select w-100 g-color-gray-dark-v6" style="display: none;">
                    <option>Manager</option>
                    <option>Designer</option>
                    <option>Programmer</option>
                  </select>
                  <i class="hs-admin-angle-down g-absolute-centered--y g-right-20 g-color-gray-light-v6"></i>
                </div>
              </td>
            </tr>

            <tr>
              <td colspan="2">
                <a class="d-flex align-items-center pull-left u-link-v5 g-parent" href="#!">
                  <span class="d-inline-block g-pos-rel g-width-40 g-height-40 g-bg-secondary--parent-hover g-font-size-14 g-color-secondary g-color-white--parent-hover g-brd-around g-brd-secondary rounded-circle g-mr-12">
                <i class="hs-admin-plus g-absolute-centered"></i>
              </span>
                  <span class="g-hidden-sm-down g-line-height-1 g-color-secondary">Add Member</span>
                </a>
              </td>
            </tr>
          </tbody>
        </table>

        <div class="g-mb-30">
          <div class="media g-mb-30">
            <h3 class="d-flex align-self-center g-font-weight-300 g-font-size-16 g-color-black mb-0 g-mr-20">Set Project Budget</h3>
            <span class="media-body align-self-center text-right g-font-size-16 g-color-gray-dark-v6">
            <span class="g-font-weight-300">Total:</span>
            <i class="g-font-style-normal g-color-black">$</i>
            <span id="regularSliderAmount" class="g-color-black">45000</span>
            </span>
          </div>

          <div id="regularSlider" class="u-slider--v3 g-mb-15" data-result-container="regularSliderAmount" data-default="45000" data-min="0" data-max="99000"></div>

          <div class="media">
            <span class="d-flex align-self-center g-font-weight-300 g-color-gray-dark-v6 g-mr-20">$0</span>
            <span class="media-body align-self-center text-right g-font-weight-300 g-color-gray-dark-v6">$99000</span>
          </div>
        </div>

        <div class="g-mb-35">
          <h3 class="g-font-weight-300 g-font-size-16 g-color-black g-mb-20">Set Project Budget</h3>
          <div class="u-tagsinput--v1">
            <input class="js-tagsinput" type="text">
          </div>
        </div>

        <div class="g-mb-45">
          <h3 class="g-font-weight-300 g-font-size-16 g-color-black g-mb-20">Subtasks</h3>

          <div class="media g-brd-bottom g-brd-gray-light-v7 g-pb-15">
            <div class="d-flex align-self-center align-items-center">
              <label class="form-check-inline u-check g-color-gray-dark-v6 g-pl-35 mb-0">
                <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                <div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0 g-width-20 g-height-20">
                  <i class="hs-admin-icons g-bg-lightblue-v3--parent-checked g-brd-gray-light-v7 g-brd-lightblue-v3--parent-checked g-rounded-2" data-check-icon="&#xe936"></i>
                </div>
                <span class="g-color-gray-dark-v7--checked g-text-strike--checked">Profiles Of The Powerful Advertising Exec Steve Grasse</span>
              </label>
            </div>

            <div class="media-body d-flex align-self-center align-items-center justify-content-end g-ml-10 g-ml-0--sm">
              <span class="g-hidden-sm-down g-color-gray-dark-v6 g-mr-12">Assign To:</span>

              <div class="u-select--v1 g-width-185--md g-pr-20">
                <select class="js-select u-select--v1-select w-100" style="display: none;">
                  <option data-content='<span class="d-flex align-items-center"><img class="g-width-40 g-height-40 rounded-circle g-mr-12--sm" src="{{url('/')}}/academy/assets2/img-temp/125x125/img3.jpg" alt="Image Description"><span class="g-hidden-sm-down g-line-height-1 g-color-black">Carlos Castillo</span></span>'>Carlos Castillo</option>
                  <option data-content='<span class="d-flex align-items-center"><img class="g-width-40 g-height-40 rounded-circle g-mr-12--sm" src="{{url('/')}}/academy/assets2/img-temp/125x125/img6.jpg" alt="Image Description"><span class="g-hidden-sm-down g-line-height-1 g-color-black">John Doe</span></span>'>John Doe</option>
                  <option data-content='<span class="d-flex align-items-center"><img class="g-width-40 g-height-40 rounded-circle g-mr-12--sm" src="{{url('/')}}/academy/assets2/img-temp/125x125/img5.jpg" alt="Image Description"><span class="g-hidden-sm-down g-line-height-1 g-color-black">Franc Doe</span></span>'>Franc Doe</option>
                </select>
                <i class="hs-admin-angle-down g-absolute-centered--y g-right-0 g-color-gray-light-v6 ml-auto"></i>
              </div>
            </div>
          </div>

          <div class="media g-brd-bottom g-brd-gray-light-v7 g-py-15">
            <div class="d-flex align-self-center align-items-center">
              <label class="form-check-inline u-check g-color-gray-dark-v6 g-pl-35 mb-0">
                <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" checked>
                <div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0 g-width-20 g-height-20">
                  <i class="hs-admin-icons g-bg-lightblue-v3--parent-checked g-brd-gray-light-v7 g-brd-lightblue-v3--parent-checked g-rounded-2" data-check-icon="&#xe936"></i>
                </div>
                <span class="g-color-gray-dark-v7--checked g-text-strike--checked">7 Ways To Advertise Your Business For Free</span>
              </label>
            </div>

            <div class="media-body d-flex align-self-center align-items-center justify-content-end g-ml-0--sm">
              <span class="g-hidden-sm-down g-color-gray-dark-v6 g-mr-12">Assign To:</span>

              <div class="u-select--v1 g-width-185--md g-pr-20">
                <select class="js-select u-select--v1-select w-100" style="display: none;">
                  <option data-content='<span class="d-flex align-items-center"><img class="g-width-40 g-height-40 rounded-circle g-mr-12--sm" src="{{url('/')}}/academy/assets2/img-temp/125x125/img6.jpg" alt="Image Description"><span class="g-hidden-sm-down g-line-height-1 g-color-black">John Doe</span></span>'>John Doe</option>
                  <option data-content='<span class="d-flex align-items-center"><img class="g-width-40 g-height-40 rounded-circle g-mr-12--sm" src="{{url('/')}}/academy/assets2/img-temp/125x125/img3.jpg" alt="Image Description"><span class="g-hidden-sm-down g-line-height-1 g-color-black">Carlos Castillo</span></span>'>Carlos Castillo</option>
                  <option data-content='<span class="d-flex align-items-center"><img class="g-width-40 g-height-40 rounded-circle g-mr-12--sm" src="{{url('/')}}/academy/assets2/img-temp/125x125/img5.jpg" alt="Image Description"><span class="g-hidden-sm-down g-line-height-1 g-color-black">Franc Doe</span></span>'>Franc Doe</option>
                </select>
                <i class="hs-admin-angle-down g-absolute-centered--y g-right-0 g-color-gray-light-v6 ml-auto"></i>
              </div>
            </div>
          </div>

          <div class="media g-brd-bottom g-brd-gray-light-v7 g-py-15">
            <div class="d-flex align-self-center align-items-center">
              <label class="form-check-inline u-check g-color-secondary g-pl-35 mb-0">
                <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                <div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0 g-width-20 g-height-20">
                  <i class="hs-admin-icons g-bg-lightblue-v3--parent-checked g-brd-gray-light-v7 g-brd-lightblue-v3--parent-checked g-rounded-2" data-check-icon="&#xe936"></i>
                </div>
                Add New Task
              </label>
            </div>

            <div class="media-body d-flex align-self-center align-items-center justify-content-end g-ml-0--sm">
              <span class="g-hidden-sm-down g-color-gray-dark-v6 g-mr-12">Assign To:</span>

              <div class="u-select--v1 g-width-185--md g-pr-20">
                <select class="js-select u-select--v1-select w-100" style="display: none;">
                  <option data-content='<span class="d-flex align-items-center g-mr-12--sm"><span class="d-flex align-items-center justify-content-center g-width-40 g-height-40 g-bg-gray-light-v8 g-font-size-18 g-color-gray-light-v6 rounded-circle"><i class="hs-admin-user"></i></span><span class="g-hidden-sm-down g-line-height-1 g-color-black">Unknown</span></span>'>Unknown</option>
                  <option data-content='<span class="d-flex align-items-center"><img class="g-width-40 g-height-40 rounded-circle g-mr-12--sm" src="{{url('/')}}/academy/assets2/img-temp/125x125/img3.jpg" alt="Image Description"><span class="g-hidden-sm-down g-line-height-1 g-color-black">Carlos Castillo</span></span>'>Carlos Castillo</option>
                  <option data-content='<span class="d-flex align-items-center"><img class="g-width-40 g-height-40 rounded-circle g-mr-12--sm" src="{{url('/')}}/academy/assets2/img-temp/125x125/img6.jpg" alt="Image Description"><span class="g-hidden-sm-down g-line-height-1 g-color-black">John Doe</span></span>'>John Doe</option>
                  <option data-content='<span class="d-flex align-items-center"><img class="g-width-40 g-height-40 rounded-circle g-mr-12--sm" src="{{url('/')}}/academy/assets2/img-temp/125x125/img5.jpg" alt="Image Description"><span class="g-hidden-sm-down g-line-height-1 g-color-black">Franc Doe</span></span>'>Franc Doe</option>
                </select>
                <i class="hs-admin-angle-down g-absolute-centered--y g-right-0 g-color-gray-light-v6 ml-auto"></i>
              </div>
            </div>
          </div>
        </div>

        <div class="media g-bg-gray-light-v8 g-px-20 g-py-10 g-mb-35">
          <div class="d-flex align-self-center align-items-center g-mr-10">
            <span class="g-hidden-sm-down g-color-gray-dark-v6 g-mr-12">Assign To:</span>

            <div class="u-select--v1 g-width-185--md g-pr-20">
              <select class="js-select u-select--v1-select w-100" style="display: none;">
                <option data-content='<span class="d-flex align-items-center"><img class="g-width-40 g-height-40 rounded-circle g-mr-12--sm" src="{{url('/')}}/academy/assets2/img-temp/125x125/img3.jpg" alt="Image Description"><span class="g-hidden-sm-down g-line-height-1 g-color-black">Carlos Castillo</span></span>'>Carlos Castillo</option>
                <option data-content='<span class="d-flex align-items-center"><img class="g-width-40 g-height-40 rounded-circle g-mr-12--sm" src="{{url('/')}}/academy/assets2/img-temp/125x125/img6.jpg" alt="Image Description"><span class="g-hidden-sm-down g-line-height-1 g-color-black">John Doe</span></span>'>John Doe</option>
                <option data-content='<span class="d-flex align-items-center"><img class="g-width-40 g-height-40 rounded-circle g-mr-12--sm" src="{{url('/')}}/academy/assets2/img-temp/125x125/img5.jpg" alt="Image Description"><span class="g-hidden-sm-down g-line-height-1 g-color-black">Franc Doe</span></span>'>Franc Doe</option>
              </select>
              <i class="hs-admin-angle-down g-absolute-centered--y g-right-0 g-color-gray-light-v6 ml-auto"></i>
            </div>
          </div>

          <div class="d-flex align-self-center align-items-center ml-auto">
            <span class="g-hidden-sm-down g-color-gray-dark-v6 g-mr-12">Due Date:</span>

            <div class="form-group mb-0">
              <div id="datepickerWrapper" class="u-datepicker-right u-datepicker--v3 g-pos-rel g-width-140 g-width-180--sm g-cursor-pointer g-brd-around g-brd-gray-light-v7 g-rounded-4">
                <span class="g-hidden-sm-down g-pos-abs g-top-0 g-left-0 g-z-index-2 g-width-40 h-100 g-font-size-18 g-color-gray-light-v6 rounded-0">
                <i class="hs-admin-calendar g-absolute-centered"></i>
              </span>
                <input id="datepicker" class="g-bg-transparent g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-pr-40 g-pl-40--sm g-py-12" type="text" data-rp-wrapper="#datepickerWrapper" data-rp-date-format="d M Y" data-rp-default-date='["20 Jun 2017"]'>
                <span class="g-pos-abs g-top-0 g-right-0 g-z-index-2 g-width-40 h-100 g-font-size-default g-color-gray-light-v6 rounded-0">
                <i class="hs-admin-angle-down g-absolute-centered"></i>
              </span>
              </div>
            </div>

            <a class="u-link-v5 g-font-size-18 g-color-gray-light-v6 g-color-secondary--hover g-ml-15" href="#!">
              <i class="hs-admin-share"></i>
            </a>
          </div>
        </div>

        <div class="g-mb-35">
          <h3 class="g-font-weight-300 g-font-size-16 g-color-black g-mb-20">Project Visibility</h3>

          <div class="g-mb-15">
            <label class="form-check-inline u-check g-pl-35 ml-0 g-mr-10 g-mr-40--sm">
              <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline1_1" type="radio" checked="">
              <div class="u-check-icon-radio-v4 g-absolute-centered--y g-left-0 g-width-20 g-height-20 g-brd-lightblue-v3--checked">
                <i class="g-absolute-centered d-block g-width-16 g-height-16 g-bg-lightblue-v3--parent-checked"></i>
              </div>
              Everyone
            </label>

            <label class="form-check-inline u-check g-pl-35 ml-0 g-mr-10 g-mr-40--sm">
              <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline1_1" type="radio">
              <div class="u-check-icon-radio-v4 g-absolute-centered--y g-left-0 g-width-20 g-height-20 g-brd-lightblue-v3--checked">
                <i class="g-absolute-centered d-block g-width-16 g-height-16 g-bg-lightblue-v3--parent-checked"></i>
              </div>
              Friends
            </label>

            <label class="form-check-inline u-check g-pl-35 ml-0 g-mr-10 g-mr-40--sm">
              <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline1_1" type="radio">
              <div class="u-check-icon-radio-v4 g-absolute-centered--y g-left-0 g-width-20 g-height-20 g-brd-lightblue-v3--checked">
                <i class="g-absolute-centered d-block g-width-16 g-height-16 g-bg-lightblue-v3--parent-checked"></i>
              </div>
              Collegues
            </label>
          </div>
        </div>

        <div class="g-mb-35">
          <h3 class="g-font-weight-300 g-font-size-16 g-color-black g-mb-20">Attachments</h3>

          <a class="js-file-upload d-flex align-items-center u-link-v5 g-color-secondary mb-0" href="#!" data-element-classes="d-flex align-items-center g-parent g-mb-15" data-icon-classes="hs-admin-file g-font-size-18 g-color-gray-light-v6 g-color-secondary--parent-hover g-mr-15"
          data-text-classes="g-color-gray-dark-v6 g-color-secondary--parent-hover" data-remove-btn-classes="hs-admin-close g-font-size-14 g-color-primary opacity-0 g-opacity-1--parent-hover g-cursor-pointer g-ml-15">
            <i class="hs-admin-plus g-font-size-16 g-mr-15"></i>
            Add New Attachment
          </a>
        </div>

        <div class="d-flex">
          <button class="btn btn-xl u-btn-secondary g-width-160--md g-font-size-14 g-mr-15" type="submit">Create Project</button>
          <button class="btn btn-xl u-btn-outline-gray-dark-v6 g-width-160--md g-font-size-14" type="reset" data-fancybox-close>Cancel</button>
        </div>
      </form>
    </div>
  </div>

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
  <script src="{{url('/')}}/academy/assets/vendor/summernote/dist/summernote-bs4.min.js"></script>

  <!-- JS Unify -->
  <script src="{{url('/')}}/academy/assets2/js/hs.core.js"></script>
  <script src="{{url('/')}}/academy/assets/js/components/hs.side-nav.js"></script>
  <script src="{{url('/')}}/academy/assets2/js/helpers/hs.hamburgers.js"></script>
  <script src="{{url('/')}}/academy/assets2/js/components/hs.dropdown.js"></script>
  <script src="{{url('/')}}/academy/assets2/js/components/hs.scrollbar.js"></script>
  <script src="{{url('/')}}/academy/assets2/js/components/hs.count-qty.js"></script>
  <script src="{{url('/')}}/academy/assets/js/components/hs.text-editor.js"></script>
  <script src="{{url('/')}}/academy/assets2/js/helpers/hs.focus-state.js"></script>

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

      // initialization of custom scrollbar
      $.HSCore.components.HSScrollBar.init($('.js-custom-scroll'));

      // initialization of forms
      $.HSCore.components.HSCountQty.init('.js-quantity');

      // initialization of text editors
      $.HSCore.components.HSTextEditor.init('.js-text-editor');
    });
  </script>
</body>


<!-- Mirrored from htmlstream.com/preview/unify-v2.6/admin-template/forms/forms-elemets-text-editors.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Feb 2021 07:46:00 GMT -->
</html>
