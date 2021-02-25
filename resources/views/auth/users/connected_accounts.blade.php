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
            <h2 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">Connected Accounts</h2>
          </header>

          <hr class="d-flex g-brd-gray-light-v7 g-my-15 g-mt-25--md g-mb-30--md">

          <form>
            <div class="row g-mx-minus-8 g-mb-60">
              <div class="col-md-3 g-px-8 g-mb-15">
                <div class="d-flex align-items-center h-100 g-brd-around g-brd-gray-light-v7 g-rounded-2 g-px-15 g-py-20">
                  <div class="w-100">
                    <header class="d-flex justify-content-end g-pos-rel g-mb-3">
                      <div class="g-pos-rel">
                        <a id="dropDown1Invoker" class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-secondary--hover" href="#!" aria-controls="dropDown1" aria-haspopup="true" aria-expanded="false" data-dropdown-event="click" data-dropdown-target="#dropDown1"
                        data-dropdown-type="jquery-slide">
                          <i class="hs-admin-more-alt"></i>
                        </a>

                        <div id="dropDown1" class="u-shadow-v31 g-pos-abs g-right-0 g-z-index-3 g-bg-white u-dropdown--jquery-slide u-dropdown--hidden" aria-labelledby="dropDown2Invoker" style="display: none;">
                          <ul class="list-unstyled g-nowrap mb-0">
                            <li>
                              <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
                                <i class="hs-admin-share g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                Share
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

                    <section class="text-center g-mb-15">
                      <div class="u-icon-v2 rounded-circle g-brd-facebook g-bg-facebook">
                        <i class="fa fa-facebook g-font-size-30 g-color-white"></i>
                      </div>
                    </section>

                    <footer class="text-center">
                      <h4 class="g-line-height-1 g-font-weight-300 g-font-size-default g-color-black mb-0">Facebook</h4>
                    </footer>
                  </div>
                </div>
              </div>

              <div class="col-md-3 g-px-8 g-mb-15">
                <div class="d-flex align-items-center h-100 g-brd-around g-brd-gray-light-v7 g-rounded-2 g-px-15 g-py-20">
                  <div class="w-100">
                    <header class="d-flex justify-content-end g-pos-rel g-mb-3">
                      <div class="g-pos-rel">
                        <a id="dropDown2Invoker" class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-secondary--hover" href="#!" aria-controls="dropDown2" aria-haspopup="true" aria-expanded="false" data-dropdown-event="click" data-dropdown-target="#dropDown2"
                        data-dropdown-type="jquery-slide">
                          <i class="hs-admin-more-alt"></i>
                        </a>

                        <div id="dropDown2" class="u-shadow-v31 g-pos-abs g-right-0 g-z-index-3 g-bg-white u-dropdown--jquery-slide u-dropdown--hidden" aria-labelledby="dropDown1Invoker" style="display: none;">
                          <ul class="list-unstyled g-nowrap mb-0">
                            <li>
                              <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
                                <i class="hs-admin-share g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                Share
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

                    <section class="text-center g-mb-15">
                      <div class="u-icon-v2 rounded-circle g-brd-twitter g-bg-twitter">
                        <i class="fa fa-twitter g-font-size-30 g-color-white"></i>
                      </div>
                    </section>

                    <footer class="text-center">
                      <h4 class="g-line-height-1 g-font-weight-300 g-font-size-default g-color-black mb-0">Twitter</h4>
                    </footer>
                  </div>
                </div>
              </div>

              <div class="col-md-3 g-px-8 g-mb-15">
                <div class="d-flex align-items-center h-100 g-brd-around g-brd-gray-light-v7 g-rounded-2 g-px-15 g-py-20">
                  <div class="w-100">
                    <header class="d-flex justify-content-end g-pos-rel g-mb-3">
                      <div class="g-pos-rel">
                        <a id="dropDown3Invoker" class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-secondary--hover" href="#!" aria-controls="dropDown3" aria-haspopup="true" aria-expanded="false" data-dropdown-event="click" data-dropdown-target="#dropDown3"
                        data-dropdown-type="jquery-slide">
                          <i class="hs-admin-more-alt"></i>
                        </a>

                        <div id="dropDown3" class="u-shadow-v31 g-pos-abs g-right-0 g-z-index-3 g-bg-white u-dropdown--jquery-slide u-dropdown--hidden" aria-labelledby="dropDown3Invoker" style="display: none;">
                          <ul class="list-unstyled g-nowrap mb-0">
                            <li>
                              <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
                                <i class="hs-admin-share g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                Share
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

                    <section class="text-center g-mb-15">
                      <div class="u-icon-v2 rounded-circle g-brd-linkedin g-bg-linkedin">
                        <i class="fa fa-linkedin g-font-size-30 g-color-white"></i>
                      </div>
                    </section>

                    <footer class="text-center">
                      <h4 class="g-line-height-1 g-font-weight-300 g-font-size-default g-color-black mb-0">Linkedin</h4>
                    </footer>
                  </div>
                </div>
              </div>

              <div class="col-md-3 g-px-8 g-mb-15">
                <div class="d-flex align-items-center h-100 g-brd-around g-brd-gray-light-v7 g-rounded-2 g-px-15 g-py-20">
                  <div class="w-100">
                    <header class="d-flex justify-content-end g-pos-rel g-mb-3">
                      <div class="g-pos-rel">
                        <a id="dropDown4Invoker" class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-secondary--hover" href="#!" aria-controls="dropDown4" aria-haspopup="true" aria-expanded="false" data-dropdown-event="click" data-dropdown-target="#dropDown4"
                        data-dropdown-type="jquery-slide">
                          <i class="hs-admin-more-alt"></i>
                        </a>

                        <div id="dropDown4" class="u-shadow-v31 g-pos-abs g-right-0 g-z-index-3 g-bg-white u-dropdown--jquery-slide u-dropdown--hidden" aria-labelledby="dropDown4Invoker" style="display: none;">
                          <ul class="list-unstyled g-nowrap mb-0">
                            <li>
                              <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
                                <i class="hs-admin-share g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                Share
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

                    <section class="text-center g-mb-15">
                      <div class="u-icon-v2 rounded-circle g-brd-gray-light-v8 g-bg-gray-light-v8">
                        <i class="g-font-size-0">
                        <img class="img-fluid g-width-40" src="{{url('/')}}/academy/assets/img/icons/google-drive.svg" alt="Image description">
                      </i>
                      </div>
                    </section>

                    <footer class="text-center">
                      <h4 class="g-line-height-1 g-font-weight-300 g-font-size-default g-color-black mb-0">Google Drive</h4>
                    </footer>
                  </div>
                </div>
              </div>

              <div class="col-md-3 g-px-8 g-mb-15">
                <div class="d-flex align-items-center h-100 g-brd-around g-brd-gray-light-v7 g-rounded-2 g-px-15 g-py-20">
                  <div class="w-100">
                    <header class="d-flex justify-content-end g-pos-rel g-mb-3">
                      <div class="g-pos-rel">
                        <a id="dropDown5Invoker" class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-secondary--hover" href="#!" aria-controls="dropDown5" aria-haspopup="true" aria-expanded="false" data-dropdown-event="click" data-dropdown-target="#dropDown5"
                        data-dropdown-type="jquery-slide">
                          <i class="hs-admin-more-alt"></i>
                        </a>

                        <div id="dropDown5" class="u-shadow-v31 g-pos-abs g-right-0 g-z-index-3 g-bg-white u-dropdown--jquery-slide u-dropdown--hidden" aria-labelledby="dropDown5Invoker" style="display: none;">
                          <ul class="list-unstyled g-nowrap mb-0">
                            <li>
                              <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
                                <i class="hs-admin-share g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                Share
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

                    <section class="text-center g-mb-15">
                      <div class="u-icon-v2 rounded-circle g-brd-gray-light-v8 g-bg-gray-light-v8">
                        <i class="g-font-size-0">
                        <img class="img-fluid g-width-40" src="{{url('/')}}/academy/assets/img/icons/dropbox.svg" alt="Image description">
                      </i>
                      </div>
                    </section>

                    <footer class="text-center">
                      <h4 class="g-line-height-1 g-font-weight-300 g-font-size-default g-color-black mb-0">Dropbox</h4>
                    </footer>
                  </div>
                </div>
              </div>

              <div class="col-md-3 g-px-8 g-mb-15">
                <div class="d-flex align-items-center h-100 g-brd-around g-brd-gray-light-v7 g-rounded-2 g-px-15 g-py-20">
                  <div class="w-100">
                    <header class="d-flex justify-content-end g-pos-rel g-mb-3">
                      <div class="g-pos-rel">
                        <a id="dropDown6Invoker" class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-secondary--hover" href="#!" aria-controls="dropDown6" aria-haspopup="true" aria-expanded="false" data-dropdown-event="click" data-dropdown-target="#dropDown6"
                        data-dropdown-type="jquery-slide">
                          <i class="hs-admin-more-alt"></i>
                        </a>

                        <div id="dropDown6" class="u-shadow-v31 g-pos-abs g-right-0 g-z-index-3 g-bg-white u-dropdown--jquery-slide u-dropdown--hidden" aria-labelledby="dropDown6Invoker" style="display: none;">
                          <ul class="list-unstyled g-nowrap mb-0">
                            <li>
                              <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
                                <i class="hs-admin-share g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                Share
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

                    <section class="text-center g-mb-15">
                      <div class="u-icon-v2 rounded-circle g-brd-gray-light-v8 g-bg-gray-light-v8">
                        <i class="g-font-size-0">
                        <img class="img-fluid g-width-40" src="{{url('/')}}/academy/assets/img/icons/slack.svg" alt="Image description">
                      </i>
                      </div>
                    </section>

                    <footer class="text-center">
                      <h4 class="g-line-height-1 g-font-weight-300 g-font-size-default g-color-black mb-0">Slack</h4>
                    </footer>
                  </div>
                </div>
              </div>

              <div class="col-md-3 g-px-8 g-mb-15">
                <div class="d-flex align-items-center h-100 g-bg-gray-light-v8 g-brd-around g-brd-gray-light-v8 g-rounded-2 g-px-15 g-py-20">
                  <div class="w-100">
                    <header class="d-flex justify-content-end g-pos-rel g-mb-3">
                      <div class="g-pos-rel">
                        <a id="dropDown7Invoker" class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-secondary--hover" href="#!" aria-controls="dropDown7" aria-haspopup="true" aria-expanded="false" data-dropdown-event="click" data-dropdown-target="#dropDown7"
                        data-dropdown-type="jquery-slide">
                          <i class="hs-admin-more-alt"></i>
                        </a>

                        <div id="dropDown7" class="u-shadow-v31 g-pos-abs g-right-0 g-z-index-3 g-bg-white u-dropdown--jquery-slide u-dropdown--hidden" aria-labelledby="dropDown7Invoker" style="display: none;">
                          <ul class="list-unstyled g-nowrap mb-0">
                            <li>
                              <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
                                <i class="hs-admin-share g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                Share
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

                    <section class="text-center g-mb-15">
                      <div class="u-icon-v2 rounded-circle g-brd-gray-light-v7 g-bg-gray-light-v7">
                        <i class="fa fa-trello g-font-size-30 g-color-white"></i>
                      </div>
                    </section>

                    <footer class="text-center">
                      <a class="u-link-v5 g-color-secondary g-color-lightred-v3--hover" href="#!">Connect Trello</a>
                    </footer>
                  </div>
                </div>
              </div>

              <div class="col-md-3 g-px-8 g-mb-15">
                <div class="d-flex align-items-center h-100 g-bg-gray-light-v8 g-brd-around g-brd-gray-light-v8 g-rounded-2 g-px-15 g-py-20">
                  <div class="w-100">
                    <header class="d-flex justify-content-end g-pos-rel g-mb-3">
                      <div class="g-pos-rel">
                        <a id="dropDown8Invoker" class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-secondary--hover" href="#!" aria-controls="dropDown8" aria-haspopup="true" aria-expanded="false" data-dropdown-event="click" data-dropdown-target="#dropDown8"
                        data-dropdown-type="jquery-slide">
                          <i class="hs-admin-more-alt"></i>
                        </a>

                        <div id="dropDown8" class="u-shadow-v31 g-pos-abs g-right-0 g-z-index-3 g-bg-white u-dropdown--jquery-slide u-dropdown--hidden" aria-labelledby="dropDown8Invoker" style="display: none;">
                          <ul class="list-unstyled g-nowrap mb-0">
                            <li>
                              <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
                                <i class="hs-admin-share g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                Share
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

                    <section class="text-center g-mb-15">
                      <div class="u-icon-v2 rounded-circle g-brd-gray-light-v7 g-bg-gray-light-v7">
                        <i class="fa fa-dribbble g-font-size-30 g-color-white"></i>
                      </div>
                    </section>

                    <footer class="text-center">
                      <a class="u-link-v5 g-color-secondary g-color-lightred-v3--hover" href="#!">Connect Dribble</a>
                    </footer>
                  </div>
                </div>
              </div>

              <div class="col-md-3 g-px-8 g-mb-15 g-mb-0--md">
                <div class="d-flex align-items-center h-100 g-bg-gray-light-v8 g-brd-around g-brd-gray-light-v8 g-rounded-2 g-px-15 g-py-20">
                  <div class="w-100">
                    <header class="d-flex justify-content-end g-pos-rel g-mb-3">
                      <div class="g-pos-rel">
                        <a id="dropDown9Invoker" class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-secondary--hover" href="#!" aria-controls="dropDown9" aria-haspopup="true" aria-expanded="false" data-dropdown-event="click" data-dropdown-target="#dropDown9"
                        data-dropdown-type="jquery-slide">
                          <i class="hs-admin-more-alt"></i>
                        </a>

                        <div id="dropDown9" class="u-shadow-v31 g-pos-abs g-right-0 g-z-index-3 g-bg-white u-dropdown--jquery-slide u-dropdown--hidden" aria-labelledby="dropDown9Invoker" style="display: none;">
                          <ul class="list-unstyled g-nowrap mb-0">
                            <li>
                              <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
                                <i class="hs-admin-share g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                Share
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

                    <section class="text-center g-mb-15">
                      <div class="u-icon-v2 rounded-circle g-brd-gray-light-v7 g-bg-gray-light-v7">
                        <i class="fa fa-behance g-font-size-30 g-color-white"></i>
                      </div>
                    </section>

                    <footer class="text-center">
                      <a class="u-link-v5 g-color-secondary g-color-lightred-v3--hover" href="#!">Connect Behance</a>
                    </footer>
                  </div>
                </div>
              </div>

              <div class="col-md-3 g-px-8 g-mb-15 g-mb-0--md">
                <div class="d-flex align-items-center h-100 g-bg-gray-light-v8 g-brd-around g-brd-gray-light-v8 g-rounded-2 g-px-15 g-py-20">
                  <div class="w-100">
                    <header class="d-flex justify-content-end g-pos-rel g-mb-3">
                      <div class="g-pos-rel">
                        <a id="dropDown10Invoker" class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-secondary--hover" href="#!" aria-controls="dropDown10" aria-haspopup="true" aria-expanded="false" data-dropdown-event="click" data-dropdown-target="#dropDown10"
                        data-dropdown-type="jquery-slide">
                          <i class="hs-admin-more-alt"></i>
                        </a>

                        <div id="dropDown10" class="u-shadow-v31 g-pos-abs g-right-0 g-z-index-3 g-bg-white u-dropdown--jquery-slide u-dropdown--hidden" aria-labelledby="dropDown10Invoker" style="display: none;">
                          <ul class="list-unstyled g-nowrap mb-0">
                            <li>
                              <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
                                <i class="hs-admin-share g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                Share
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

                    <section class="text-center g-mb-15">
                      <div class="u-icon-v2 rounded-circle g-brd-gray-light-v7 g-bg-gray-light-v7">
                        <i class="fa fa-google-plus g-font-size-24 g-color-white"></i>
                      </div>
                    </section>

                    <footer class="text-center">
                      <a class="u-link-v5 g-color-secondary g-color-lightred-v3--hover" href="#!">Connect Google+</a>
                    </footer>
                  </div>
                </div>
              </div>

              <div class="col-md-3 g-px-8 g-mb-15 g-mb-0--md">
                <div class="d-flex align-items-center h-100 g-bg-gray-light-v8 g-brd-around g-brd-gray-light-v8 g-rounded-2 g-px-15 g-py-20">
                  <div class="w-100">
                    <header class="d-flex justify-content-end g-pos-rel g-mb-3">
                      <div class="g-pos-rel">
                        <a id="dropDown11Invoker" class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-secondary--hover" href="#!" aria-controls="dropDown11" aria-haspopup="true" aria-expanded="false" data-dropdown-event="click" data-dropdown-target="#dropDown11"
                        data-dropdown-type="jquery-slide">
                          <i class="hs-admin-more-alt"></i>
                        </a>

                        <div id="dropDown11" class="u-shadow-v31 g-pos-abs g-right-0 g-z-index-3 g-bg-white u-dropdown--jquery-slide u-dropdown--hidden" aria-labelledby="dropDown11Invoker" style="display: none;">
                          <ul class="list-unstyled g-nowrap mb-0">
                            <li>
                              <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
                                <i class="hs-admin-share g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                Share
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

                    <section class="text-center g-mb-15">
                      <div class="u-icon-v2 rounded-circle g-brd-gray-light-v7 g-bg-gray-light-v7">
                        <i class="g-font-size-0">
                        <img class="img-fluid g-width-30" src="{{url('/')}}/academy/assets/img/icons/invision-white.svg" alt="Image description">
                      </i>
                      </div>
                    </section>

                    <footer class="text-center">
                      <a class="u-link-v5 g-color-secondary g-color-lightred-v3--hover" href="#!">Connect Invision</a>
                    </footer>
                  </div>
                </div>
              </div>
            </div>

            <header>
              <h2 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">Connected Devices</h2>
            </header>

            <hr class="d-flex g-brd-gray-light-v7 g-my-15 g-mt-25--md g-mb-30--md">

            <div class="row g-mx-minus-8">
              <div class="col-md-3 g-px-8 g-mb-15">
                <div class="d-flex align-items-center h-100 g-brd-around g-brd-gray-light-v7 g-rounded-2 g-px-15 g-py-20">
                  <div class="w-100">
                    <header class="d-flex justify-content-end g-pos-rel g-mb-3">
                      <div class="g-pos-rel">
                        <a id="dropDown12Invoker" class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-secondary--hover" href="#!" aria-controls="dropDown12" aria-haspopup="true" aria-expanded="false" data-dropdown-event="click" data-dropdown-target="#dropDown12"
                        data-dropdown-type="jquery-slide">
                          <i class="hs-admin-more-alt"></i>
                        </a>

                        <div id="dropDown12" class="u-shadow-v31 g-pos-abs g-right-0 g-z-index-3 g-bg-white u-dropdown--jquery-slide u-dropdown--hidden" aria-labelledby="dropDown12Invoker" style="display: none;">
                          <ul class="list-unstyled g-nowrap mb-0">
                            <li>
                              <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
                                <i class="hs-admin-share g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                Share
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

                    <section class="text-center g-mb-15">
                      <div class="u-icon-v2 rounded-circle g-brd-gray-light-v8 g-bg-gray-light-v8">
                        <i class="fa fa-apple g-font-size-30 g-color-secondary"></i>
                      </div>
                    </section>

                    <footer class="text-center">
                      <h4 class="g-line-height-1 g-font-weight-300 g-font-size-default g-color-black mb-0">Laptop</h4>
                    </footer>
                  </div>
                </div>
              </div>

              <div class="col-md-3 g-px-8 g-mb-15">
                <div class="d-flex align-items-center h-100 g-brd-around g-brd-gray-light-v7 g-rounded-2 g-px-15 g-py-20">
                  <div class="w-100">
                    <header class="d-flex justify-content-end g-pos-rel g-mb-3">
                      <div class="g-pos-rel">
                        <a id="dropDown13Invoker" class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-secondary--hover" href="#!" aria-controls="dropDown13" aria-haspopup="true" aria-expanded="false" data-dropdown-event="click" data-dropdown-target="#dropDown13"
                        data-dropdown-type="jquery-slide">
                          <i class="hs-admin-more-alt"></i>
                        </a>

                        <div id="dropDown13" class="u-shadow-v31 g-pos-abs g-right-0 g-z-index-3 g-bg-white u-dropdown--jquery-slide u-dropdown--hidden" aria-labelledby="dropDown13Invoker" style="display: none;">
                          <ul class="list-unstyled g-nowrap mb-0">
                            <li>
                              <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
                                <i class="hs-admin-share g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                Share
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

                    <section class="text-center g-mb-15">
                      <div class="u-icon-v2 rounded-circle g-brd-gray-light-v8 g-bg-gray-light-v8">
                        <i class="fa fa-android g-font-size-30 g-color-secondary"></i>
                      </div>
                    </section>

                    <footer class="text-center">
                      <h4 class="g-line-height-1 g-font-weight-300 g-font-size-default g-color-black mb-0">Smartphone</h4>
                    </footer>
                  </div>
                </div>
              </div>

              <div class="col-md-3 g-px-8 g-mb-15">
                <div class="d-flex align-items-center h-100 g-brd-around g-brd-gray-light-v7 g-rounded-2 g-px-15 g-py-20">
                  <div class="w-100">
                    <header class="d-flex justify-content-end g-pos-rel g-mb-3">
                      <div class="g-pos-rel">
                        <a id="dropDown14Invoker" class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-secondary--hover" href="#!" aria-controls="dropDown14" aria-haspopup="true" aria-expanded="false" data-dropdown-event="click" data-dropdown-target="#dropDown14"
                        data-dropdown-type="jquery-slide">
                          <i class="hs-admin-more-alt"></i>
                        </a>

                        <div id="dropDown14" class="u-shadow-v31 g-pos-abs g-right-0 g-z-index-3 g-bg-white u-dropdown--jquery-slide u-dropdown--hidden" aria-labelledby="dropDown14Invoker" style="display: none;">
                          <ul class="list-unstyled g-nowrap mb-0">
                            <li>
                              <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
                                <i class="hs-admin-share g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                Share
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

                    <section class="text-center g-mb-15">
                      <div class="u-icon-v2 rounded-circle g-brd-gray-light-v8 g-bg-gray-light-v8">
                        <i class="fa fa-windows g-font-size-30 g-color-secondary"></i>
                      </div>
                    </section>

                    <footer class="text-center">
                      <h4 class="g-line-height-1 g-font-weight-300 g-font-size-default g-color-black mb-0">Desktop</h4>
                    </footer>
                  </div>
                </div>
              </div>
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
    });
  </script>
@endsection