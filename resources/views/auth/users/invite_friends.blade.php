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
  <link rel="stylesheet" href="{{url('/')}}/academy/assets/vendor/bootstrap-tagsinput/css/bootstrap-tagsinput.css">

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
            <h2 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">Invite Friends</h2>
          </header>

          <hr class="d-flex g-brd-gray-light-v7 g-my-15 g-mt-25--md g-mb-30--md">

          <div class="g-mb-60">
            <div class="media-md align-items-center g-mb-30">
              <div class="d-flex">
                <div class="media">
                  <a class="d-flex align-self-center g-mr-10 g-mr-15--md" href="#!">
                    <img class="g-width-40 g-width-50--md g-height-40 g-height-50--md rounded-circle" src="{{url('/')}}/academy/assets2/img-temp/100x100/img7.jpg" alt="Image Description">
                  </a>

                  <div class="media-body align-self-center g-width-100 g-width-auto--md">
                    <h3 class="g-font-weight-300 g-font-size-16 g-color-black g-mb-5">D<span class="g-hidden-md-up">.</span><span class="g-hidden-md-down">evin&nbsp;</span>Newman</h3>
                    <em class="d-inline-block d-md-block w-100 g-width-auto--md g-text-overflow-ellipsis g-font-style-normal g-font-weight-300 g-color-gray-dark-v6">newman.devin@htmlstream.com</em>
                  </div>
                </div>
              </div>

              <div class="d-flex ml-auto">
                <span class="u-tags-v1 text-center g-width-145--md g-brd-around g-brd-teal-v2 g-bg-teal-v2 g-color-white g-rounded-50 g-py-4 g-px-15"><span class="g-hidden-md-down">Invite&nbsp;</span>Accepted</span>
              </div>
            </div>

            <div class="media-md align-items-center g-mb-30">
              <div class="d-flex">
                <div class="media">
                  <a class="d-flex align-self-center g-mr-10 g-mr-15--md" href="#!">
                    <img class="g-width-40 g-width-50--md g-height-40 g-height-50--md rounded-circle" src="{{url('/')}}/academy/assets2/img-temp/100x100/img14.jpg" alt="Image Description">
                  </a>

                  <div class="media-body align-self-center g-width-100 g-width-auto--md">
                    <h3 class="g-font-weight-300 g-font-size-16 g-color-black g-mb-5">A<span class="g-hidden-md-up">.</span><span class="g-hidden-md-down">ntonio&nbsp;</span>Cook</h3>
                    <em class="d-inline-block d-md-block w-100 g-width-auto--md g-text-overflow-ellipsis g-font-style-normal g-font-weight-300 g-color-gray-dark-v6">antonio.cook@htmlstream.com</em>
                  </div>
                </div>
              </div>

              <div class="d-flex ml-auto">
                <span class="u-tags-v1 text-center g-width-145--md g-brd-around g-brd-teal-v2 g-bg-teal-v2 g-color-white g-rounded-50 g-py-4 g-px-15"><span class="g-hidden-md-down">Invite&nbsp;</span>Accepted</span>
              </div>
            </div>

            <div class="media-md align-items-center g-mb-30">
              <div class="d-flex">
                <div class="media">
                  <a class="d-flex align-self-center g-mr-10 g-mr-15--md" href="#!">
                    <div class="g-pos-rel g-width-40 g-width-50--md g-height-40 g-height-50--md rounded-circle g-bg-gray-light-v8">
                      <span class="text-uppercase g-absolute-centered g-font-size-16 g-color-gray-light-v11">MB</span>
                    </div>
                  </a>

                  <div class="media-body align-self-center g-width-100 g-width-auto--md">
                    <h3 class="g-font-weight-300 g-font-size-16 g-color-black g-mb-5">M<span class="g-hidden-md-up">.</span><span class="g-hidden-md-down">ittie&nbsp;</span>Burton</h3>
                    <em class="d-inline-block d-md-block w-100 g-width-auto--md g-text-overflow-ellipsis g-font-style-normal g-font-weight-300 g-color-gray-dark-v6">burton.mittie@gmail.com</em>
                  </div>
                </div>
              </div>

              <div class="d-flex ml-auto">
                <span class="u-tags-v1 text-center g-width-145--md g-brd-around g-brd-teal-v2 g-bg-teal-v2 g-color-white g-rounded-50 g-py-4 g-px-15"><span class="g-hidden-md-down">Invite&nbsp;</span>Accepted</span>
              </div>
            </div>

            <div class="media-md align-items-center g-mb-30">
              <div class="d-flex g-mb-10 g-mb-0--md">
                <div class="media">
                  <a class="d-flex align-self-center g-mr-10 g-mr-15--md" href="#!">
                    <div class="g-pos-rel g-width-40 g-width-50--md g-height-40 g-height-50--md rounded-circle g-bg-gray-light-v8">
                      <span class="text-uppercase g-absolute-centered g-font-size-16 g-color-gray-light-v11">MM</span>
                    </div>
                  </a>

                  <div class="media-body align-self-center g-width-100 g-width-auto--md">
                    <em class="d-inline-block d-md-block w-100 g-width-auto--md g-text-overflow-ellipsis g-font-style-normal g-font-weight-300 g-color-gray-dark-v6">margarette.miller@htmlstream.com</em>
                  </div>
                </div>
              </div>

              <div class="d-flex ml-auto">
                <span class="u-tags-v1 text-center g-width-145--md g-brd-around g-brd-gray-light-v8 g-bg-gray-light-v8 g-color-gray-dark-v11 g-rounded-50 g-py-4 g-px-15"><span class="g-hidden-md-down">Invite&nbsp;</span>Sent</span>
              </div>
            </div>

            <form>
              <label class="g-font-weight-300 g-mb-10">Send Invite by Email</label>

              <div class="u-tagsinput--v2--gray g-brd-around g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-rounded-4 g-px-6 g-py-5 g-mb-30">
                <input type="text" value="john.doe@gmail.com, micaela.torp@gmail.com" data-role="tagsinput">
              </div>

              <button class="btn btn-md btn-xl--md u-btn-secondary g-width-145 g-font-size-default--md g-py-12" type="submit">Send Invites</button>
            </form>
          </div>

          <header>
            <h2 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">Share your link &amp; invite friends</h2>
          </header>

          <hr class="d-flex g-brd-gray-light-v7 g-my-15 g-mt-25--md g-mb-30--md">

          <div class="media-md g-mb-30">
            <div class="media-body-md align-self-center g-mb-20 g-mb-0--md">
              <h3 class="g-line-height-1_5 g-font-weight-400 g-font-size-16 g-color-black g-mb-5">Reward Credits Balance</h3>
              <p class="d-block g-font-weight-300 g-color-gray-dark-v6 mb-0">The StarTribune doesn’t just hand</p>
            </div>

            <div class="d-md-flex flex-column ml-auto">
              <strong class="d-block g-line-height-1 g-font-weight-400 g-font-size-24 g-color-teal-v3 g-mb-5">$400.00</strong>
              <em class="d-block g-font-style-normal g-font-weight-300 g-color-gray-dark-v6">Available</em>
            </div>

            <div class="d-md-flex flex-column g-brd-top g-brd-top-none--md g-brd-left--md g-brd-gray-light-v7 g-pt-20 g-pt-0--md g-pl-35--md g-mt-20 g-mt-0--md g-ml-35--md g-mr-15--md">
              <strong class="d-block g-line-height-1 g-font-weight-400 g-font-size-24 g-color-darkblue-v9 g-mb-5">$160.00</strong>
              <em class="d-block g-font-style-normal g-font-weight-300 g-color-gray-dark-v6">Pending</em>
            </div>
          </div>

          <h4 class="g-font-weight-300 g-font-size-default g-color-black g-mb-10">Earn More by Sharing Referal Link</h4>

          <div class="media-md align-items-center g-bg-gray-light-v8 g-rounded-4 g-px-20 g-py-10">
            <span id="copyLink" class="d-inline-block d-md-flex w-100 g-width-auto--md g-text-overflow-ellipsis g-color-gray-dark-v6 g-mb-5 g-mb-0--md">http://htmlstrem.com/645johndoe</span>
            <a class="js-copy d-flex align-items-center u-link-v5 g-color-secondary g-color-primary--hover ml-auto" href="#!" data-content-target="#copyLink" data-success-text="Copied">
              <i class="hs-admin-link g-mr-8"></i>
              Copy Link
            </a>
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
  <script src="{{url('/')}}/academy/assets/vendor/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
  <script src="{{url('/')}}/academy/assets2/vendor/clipboard/dist/clipboard.min.js"></script>

  <!-- JS Unify -->
  <script src="{{url('/')}}/academy/assets2/js/hs.core.js"></script>

  <script src="{{url('/')}}/academy/assets2/js/components/hs.scrollbar.js"></script>
  <script src="{{url('/')}}/academy/assets2/js/components/hs.dropdown.js"></script>
  <script src="{{url('/')}}/academy/assets2/js/helpers/hs.hamburgers.js"></script>
  <script src="{{url('/')}}/academy/assets/js/components/hs.side-nav.js"></script>
  <script src="{{url('/')}}/academy/assets2/js/components/hs.markup-copy.js"></script>

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
  
      // initialization of copy code
      $.HSCore.components.HSMarkupCopy.init('.js-copy');
    });
  </script>
@endsection