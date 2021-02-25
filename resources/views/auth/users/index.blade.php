@extends('layouts.academy')

@section('page')
  Users
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
    <span class="g-valign-middle">Users</span>
  </li>
</ul>
</div>
<!-- End Breadcrumb-v1 -->
@endsection

@section('content')
<div class="g-pa-20">
<h1 class="g-font-weight-300 g-font-size-28 g-color-black g-mb-30">Users</h1>

<div class="media-md align-items-center g-mb-30">
  <div class="d-flex g-mb-15 g-mb-0--md">
    <h3 class="g-font-weight-400 g-font-size-16 g-color-black mb-0">All users of the system</h3>
  </div>

  <div class="media d-md-flex align-items-center ml-auto">
    <div class="d-flex align-items-center">
      <span class="g-hidden-sm-down g-color-gray-dark-v6 g-mr-12">Show:</span>

      <div class="u-select--v1 g-pr-20">
        <select id="datatableEntries2" class="js-select u-select--v1-select w-100" style="display: none;">
          <option data-content='<span class="d-flex align-items-center g-line-height-1_2 g-color-black">10 Entries</span>' value="10">10 Entries</option>
          
          <option data-content='<span class="d-flex align-items-center g-line-height-1_2 g-color-black">15 Entries</span>' value="15">15 Entries</option>
          <option data-content='<span class="d-flex align-items-center g-line-height-1_2 g-color-black">20 Entries</span>' value="20">20 Entries</option>
          <option data-content='<span class="d-flex align-items-center g-line-height-1_2 g-color-black">25 Entries</span>' value="25">25 Entries</option>
        </select>
        <i class="hs-admin-angle-down g-absolute-centered--y g-right-0 g-color-gray-light-v6 ml-auto"></i>
      </div>
    </div>

    <div class="d-flex g-ml-15 g-ml-55--md">
      <div class="input-group g-pos-rel g-width-320--md">
        <input id="datatableSearch2" class="form-control g-font-size-default g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-rounded-20 g-pl-20 g-pr-50 g-py-10" type="text" placeholder="Search for name, position">
        <button class="btn g-pos-abs g-top-0 g-right-0 g-z-index-2 g-width-60 h-100 g-bg-transparent g-font-size-16 g-color-primary g-color-secondary--hover rounded-0" type="submit">
          <i class="hs-admin-search g-absolute-centered"></i>
        </button>
      </div>
    </div>
  </div>
</div>

<div class="g-mb-40">
  <div class="table-responsive">
    <table class="js-datatable table table-striped u-table--v3 u-editable-table--v1 g-color-black" data-dt-info="#datatableInfo2" data-dt-search="#datatableSearch2" data-dt-entries="#datatableEntries2" data-dt-is-show-paging="true" data-dt-pagination="datatablePagination2"
    data-dt-page-length="10" data-dt-is-responsive="false" data-dt-pagination-classes="list-inline text-right mb-0" data-dt-pagination-items-classes="list-inline-item g-hidden-sm-down" data-dt-pagination-links-classes="u-pagination-v1__item u-pagination-v1-2 g-bg-secondary--active g-color-white--active g-brd-gray-light-v7 g-brd-secondary--hover g-brd-secondary--active g-rounded-4 g-py-8 g-px-15"
    data-dt-pagination-next-classes="list-inline-item" data-dt-pagination-next-link-classes="u-pagination-v1__item u-pagination-v1-2 g-brd-gray-light-v7 g-brd-secondary--hover g-rounded-4 g-py-8 g-px-12" data-dt-pagination-next-link-markup='<span class="g-line-height-1 g-valign-middle" aria-hidden="true"><i class="hs-admin-angle-right"></i></span><span class="sr-only">Next</span>'
    data-dt-pagination-prev-classes="list-inline-item" data-dt-pagination-prev-link-classes="u-pagination-v1__item u-pagination-v1-2 g-brd-gray-light-v7 g-brd-secondary--hover g-rounded-4 g-py-8 g-px-12" data-dt-pagination-prev-link-markup='<span class="g-line-height-1 g-valign-middle" aria-hidden="true"><i class="hs-admin-angle-left"></i></span><span class="sr-only">Prev</span>'>
      <thead>
        <tr>
          <th class="g-hidden-xs-up"></th>
          <th class="g-first-child">
            <div class="media">
              <div class="d-flex align-self-center">Name</div>

              <div class="d-flex align-self-center ml-auto">
                <span class="d-inline-block g-width-10 g-line-height-1 g-font-size-10">
                <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover" href="#!">
                  <i class="hs-admin-angle-up"></i>
                </a>
                <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover" href="#!">
                  <i class="hs-admin-angle-down"></i>
                </a>
              </span>
              </div>
            </div>
          </th>
          <th>
            <div class="media">
              <div class="d-flex align-self-center">Category</div>

              <div class="d-flex align-self-center ml-auto">
                <span class="d-inline-block g-width-10 g-line-height-1 g-font-size-10">
                <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover" href="#!">
                  <i class="hs-admin-angle-up"></i>
                </a>
                <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover" href="#!">
                  <i class="hs-admin-angle-down"></i>
                </a>
              </span>
              </div>
            </div>
          </th>
          <th>
            <div class="media">
              <div class="d-flex align-self-center">Role</div>

              <div class="d-flex align-self-center ml-auto">
                <span class="d-inline-block g-width-10 g-line-height-1 g-font-size-10">
                <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover" href="#!">
                  <i class="hs-admin-angle-up"></i>
                </a>
                <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover" href="#!">
                  <i class="hs-admin-angle-down"></i>
                </a>
              </span>
              </div>
            </div>
          </th>
          <th>
            <div class="media">
              <div class="d-flex align-self-center">Phone</div>

              <div class="d-flex align-self-center ml-auto">
                <span class="d-inline-block g-width-10 g-line-height-1 g-font-size-10">
                <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover" href="#!">
                  <i class="hs-admin-angle-up"></i>
                </a>
                <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover" href="#!">
                  <i class="hs-admin-angle-down"></i>
                </a>
              </span>
              </div>
            </div>
          </th>
          <th>
            <div class="media">
              <div class="d-flex align-self-center">Email</div>

              <div class="d-flex align-self-center ml-auto">
                <span class="d-inline-block g-width-10 g-line-height-1 g-font-size-10">
                <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover" href="#!">
                  <i class="hs-admin-angle-up"></i>
                </a>
                <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover" href="#!">
                  <i class="hs-admin-angle-down"></i>
                </a>
              </span>
              </div>
            </div>
          </th>
          <th></th>
        </tr>
      </thead>

      <tbody>
      	@foreach($users as $user)
        <tr>
          <td class="g-hidden-xs-up">1</td>
          <td class="g-first-child">
            <div class="media align-items-center">
              <div class="d-flex">
                    <img src="@if ($user->profile && $user->profile->avatar_status == 1) {{ $user->profile->avatar }} @else {{ Gravatar::get($user->email) }} @endif" alt="{{ $user->name }}" class="g-width-40 g-height-40 rounded-circle g-mr-14">
              </div>
              <div class="media-body text-left g-ml-15">{{$user->name}}</div>
            </div>
          </td>
          <td>
            <div class="d-inline-block">
              <span class="d-flex align-items-center justify-content-center u-tags-v1 g-brd-around g-bg-white g-font-size-default g-color-gray-dark-v6 g-brd-white g-rounded-50 g-py-4 g-px-15">
              <span class="u-badge-v2--md g-pos-stc g-transform-origin--top-left g-bg-lightblue-v3 g-mr-8"></span>
              Employees
              </span>
            </div>
          </td>
          <td>Product Manager</td>
          <td>{{$user->profile->phone}}</td>
          <td>{{$user->email}}</td>
          <td class="text-right">
            <div class="g-pos-rel g-top-3 d-inline-block">
              <a id="dropDown2_1Invoker" class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-secondary--hover" href="#!" aria-controls="dropDown2_{{$user->id}}" aria-haspopup="true" aria-expanded="false" data-dropdown-event="click" data-dropdown-target="#dropDown2_{{$user->id}}">
                <i class="hs-admin-more-alt"></i>
              </a>

              <div id="dropDown2_{{$user->id}}" class="u-shadow-v31 g-pos-abs g-right-0 g-z-index-2 g-bg-white" aria-labelledby="dropDown2_1Invoker">
                <ul class="list-unstyled g-nowrap mb-0">
                  <li>
                    <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="{{url('/')}}/admin/users/profile/{{$user->id}}">
                      <i class="hs-admin-pencil g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                      Edit
                    </a>
                  </li>
                  <li>
                    <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
                      <i class="hs-admin-archive g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                      Archive
                    </a>
                  </li>
                  <li>
                    <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
                      <i class="hs-admin-check g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                      Mark as Done
                    </a>
                  </li>
                  <li>
                    <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
                      <i class="hs-admin-plus g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                      New Task
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
          </td>
        </tr>                    
      	@endforeach
      </tbody>
    </table>
  </div>
</div>

<div class="media align-items-center g-mb-45">
  <div id="datatableInfo2" class="media-body"></div>

  <nav id="datatablePagination2" class="d-flex ml-auto" aria-label="Page Navigation"></nav>
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