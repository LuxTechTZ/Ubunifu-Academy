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
                    <h2 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">Saved Cards</h2>
                  </header>

                  <hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-25--md">

                  <form>
                    <label class="js-check g-pos-rel d-block g-mb-20">
                      <input class="g-pos-abs opacity-0" name="radGroup1" type="radio" checked="checked">

                      <div class="media-md align-items-center g-parent g-bg-gray-light-v8--sibling-checked g-brd-around g-brd-gray-light-v7 g-rounded-4 g-px-20 g-py-15">
                        <div class="d-flex-md text-center g-mb-20 g-mb-0--md">
                          <div class="d-inline-block u-icon-v3 u-icon-size--lg g-bg-gray-light-v8 g-bg-gray-light-v7--parent-sibling-checked g-font-size-24 g-color-secondary rounded-circle">
                            <i class="g-font-size-0">
                            <img class="img-fluid g-width-40" src="{{url('/')}}/academy/assets/img/icons/visa.svg" alt="Image description">
                          </i>
                          </div>
                        </div>

                        <div class="d-flex align-items-center g-font-size-12 g-font-size-default--md g-mb-10 g-mb-0--md g-mx-10--md">
                          <div class="g-width-220--md">Credit Card xxxx 4562</div>

                          <div class="text-right g-width-40--md g-color-gray-dark-v12 ml-auto">06/21</div>
                        </div>

                        <div class="d-flex align-items-center ml-auto">
                          <em class="d-flex align-items-center g-font-style-normal g-color-gray-dark-v6 opacity-0 g-opacity-1--parent-sibling-checked">
                          <span class="g-pos-rel g-width-20 g-height-20 g-bg-lightblue-v3 g-brd-around g-brd-lightblue-v3 rounded-circle">
                            <i class="hs-admin-check g-absolute-centered g-font-weight-800 g-font-size-12 g-color-white" title="Default"></i>
                          </span>
                          <span class="g-hidden-lg-down g-font-weight-300 g-font-size-default g-ml-10">Default</span>
                        </em>

                          <div class="g-pos-rel g-top-2 ml-auto g-ml-25--md">
                            <a id="dropDown1Invoker" class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-secondary--hover" href="#!" aria-controls="dropDown1" aria-haspopup="true" aria-expanded="false" data-dropdown-event="click" data-dropdown-target="#dropDown1"
                            data-dropdown-type="jquery-slide">
                              <i class="hs-admin-more-alt"></i>
                            </a>

                            <div id="dropDown1" class="u-shadow-v31 g-pos-abs g-top-100x g-right-0 g-z-index-2 g-bg-white" aria-labelledby="dropDown1Invoker">
                              <ul class="list-unstyled g-nowrap mb-0">
                                <li>
                                  <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
                                    <i class="hs-admin-pencil g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                    Edit
                                  </a>
                                </li>
                                <li>
                                  <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
                                    <i class="hs-admin-check g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                    Make Default
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
                        </div>
                      </div>
                    </label>

                    <label class="js-check g-pos-rel d-block g-mb-20">
                      <input class="g-pos-abs opacity-0" name="radGroup1" type="radio">

                      <div class="media-md align-items-center g-parent g-bg-gray-light-v8--sibling-checked g-brd-around g-brd-gray-light-v7 g-rounded-4 g-px-20 g-py-15">
                        <div class="d-flex-md text-center g-mb-20 g-mb-0--md">
                          <div class="d-inline-block u-icon-v3 u-icon-size--lg g-bg-gray-light-v8 g-bg-gray-light-v7--parent-sibling-checked g-font-size-24 g-color-secondary rounded-circle">
                            <i class="g-font-size-0">
                            <img class="img-fluid g-width-40" src="{{url('/')}}/academy/assets/img/icons/mastercard.svg" alt="Image description">
                          </i>
                          </div>
                        </div>

                        <div class="d-flex align-items-center g-font-size-12 g-font-size-default--md g-mb-10 g-mb-0--md g-mx-10--md">
                          <div class="g-width-220--md">Debit Card xxxx 4260</div>

                          <div class="text-right g-width-40--md g-color-gray-dark-v12 ml-auto">05/20</div>
                        </div>

                        <div class="d-flex align-items-center ml-auto">
                          <em class="d-flex align-items-center g-font-style-normal g-color-gray-dark-v6 opacity-0 g-opacity-1--parent-sibling-checked">
                          <span class="g-pos-rel g-width-20 g-height-20 g-bg-lightblue-v3 g-brd-around g-brd-lightblue-v3 rounded-circle">
                            <i class="hs-admin-check g-absolute-centered g-font-weight-800 g-font-size-12 g-color-white"></i>
                          </span>
                          <span class="g-hidden-lg-down g-font-weight-300 g-font-size-default g-ml-10">Default</span>
                        </em>

                          <div class="g-pos-rel g-top-2 ml-auto g-ml-25--md">
                            <a id="dropDown2Invoker" class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-secondary--hover" href="#!" aria-controls="dropDown1" aria-haspopup="true" aria-expanded="false" data-dropdown-event="click" data-dropdown-target="#dropDown2"
                            data-dropdown-type="jquery-slide">
                              <i class="hs-admin-more-alt"></i>
                            </a>

                            <div id="dropDown2" class="u-shadow-v31 g-pos-abs g-top-100x g-right-0 g-z-index-2 g-bg-white" aria-labelledby="dropDown2Invoker">
                              <ul class="list-unstyled g-nowrap mb-0">
                                <li>
                                  <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
                                    <i class="hs-admin-pencil g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                    Edit
                                  </a>
                                </li>
                                <li>
                                  <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
                                    <i class="hs-admin-check g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                    Make Default
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
                        </div>
                      </div>
                    </label>

                    <label class="g-pos-rel d-block g-mb-20">
                      <input class="g-pos-abs opacity-0" name="radGroup1" type="radio">

                      <div class="media-md align-items-center g-parent g-bg-gray-light-v8--sibling-checked g-brd-around g-brd-gray-light-v7 g-rounded-4 g-px-20 g-py-15">
                        <div class="d-flex-md text-center g-mb-20 g-mb-0--md">
                          <div class="d-inline-block u-icon-v3 u-icon-size--lg g-bg-gray-light-v8 g-bg-gray-light-v7--parent-sibling-checked g-font-size-24 g-color-secondary rounded-circle">
                            <i class="g-font-size-0">
                            <img class="img-fluid g-width-40" src="{{url('/')}}/academy/assets/img/icons/jcb.svg" alt="Image description">
                          </i>
                          </div>
                        </div>

                        <div class="d-flex align-items-center g-font-size-12 g-font-size-default--md g-mb-10 g-mb-0--md g-mx-10--md">
                          <div class="g-width-220--md">Debit Card xxxx 5640</div>

                          <div class="text-right g-width-40--md g-color-gray-dark-v12 ml-auto">02/18</div>
                        </div>

                        <div class="d-flex align-items-center ml-auto">
                          <em class="d-flex align-items-center g-font-style-normal g-color-gray-dark-v6 opacity-0 g-opacity-1--parent-sibling-checked">
                          <span class="g-pos-rel g-width-20 g-height-20 g-bg-lightblue-v3 g-brd-around g-brd-lightblue-v3 rounded-circle">
                            <i class="hs-admin-check g-absolute-centered g-font-weight-800 g-font-size-12 g-color-white"></i>
                          </span>
                          <span class="g-hidden-lg-down g-font-weight-300 g-font-size-default g-ml-10">Default</span>
                        </em>

                          <div class="g-pos-rel g-top-2 ml-auto g-ml-25--md">
                            <a id="dropDown3Invoker" class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-secondary--hover" href="#!" aria-controls="dropDown3" aria-haspopup="true" aria-expanded="false" data-dropdown-event="click" data-dropdown-target="#dropDown3"
                            data-dropdown-type="jquery-slide">
                              <i class="hs-admin-more-alt"></i>
                            </a>

                            <div id="dropDown3" class="u-shadow-v31 g-pos-abs g-top-100x g-right-0 g-z-index-2 g-bg-white" aria-labelledby="dropDown3Invoker">
                              <ul class="list-unstyled g-nowrap mb-0">
                                <li>
                                  <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
                                    <i class="hs-admin-pencil g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                    Edit
                                  </a>
                                </li>
                                <li>
                                  <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
                                    <i class="hs-admin-check g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                    Make Default
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
                        </div>
                      </div>
                    </label>

                    <a class="js-check u-link-v5 g-pos-rel d-block g-color-gray-dark-v12 g-color-secondary--hover g-mb-60" href="#!">
                      <div class="media align-items-center g-parent g-brd-around g-brd-style-dashed g-brd-gray-light-v7 g-rounded-4 g-px-20 g-py-15">
                        <div class="d-flex">
                          <div class="d-inline-block u-icon-v3 u-icon-size--lg g-bg-gray-light-v8 g-font-size-24 g-color-secondary rounded-circle">
                            <i class="hs-admin-credit-card"></i>
                          </div>
                        </div>

                        <div class="d-flex g-width-220 g-font-size-12 g-font-size-default--md g-ml-20">Add Debit or Credit Card</div>
                      </div>
                    </a>

                    <header>
                      <h2 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">Payment Accounts</h2>
                    </header>

                    <hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-25--md">

                    <label class="js-check g-pos-rel d-block g-mb-30">
                      <input class="g-pos-abs opacity-0" name="radGroup2" type="radio" checked="checked">

                      <div class="media-md align-items-center g-parent g-bg-gray-light-v8--sibling-checked g-brd-around g-brd-gray-light-v7 g-rounded-4 g-px-20 g-py-15">
                        <div class="d-flex-md text-center g-mb-20 g-mb-0--md">
                          <div class="d-inline-block u-icon-v3 u-icon-size--lg g-bg-gray-light-v8 g-bg-gray-light-v7--parent-sibling-checked g-font-size-24 g-color-secondary rounded-circle">
                            <i class="g-font-size-0">
                            <img class="img-fluid g-width-40" src="{{url('/')}}/academy/assets/img/icons/paypal.svg" alt="Image description">
                          </i>
                          </div>
                        </div>

                        <div class="d-md-flex text-center text-md-left g-width-220--md g-font-size-12 g-font-size-default--md g-mb-10 g-mb-0--md g-ml-20--md">Paypal</div>

                        <div class="media-body">
                          <div class="d-flex align-items-center">
                            <div class="g-font-size-12 g-font-size-default--md g-color-gray-dark-v12 g-mr-10">john.doe@gmail.com</div>

                            <div class="g-pos-rel g-top-2 ml-auto">
                              <a id="dropDown4Invoker" class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-secondary--hover" href="#!" aria-controls="dropDown4" aria-haspopup="true" aria-expanded="false" data-dropdown-event="click" data-dropdown-target="#dropDown4"
                              data-dropdown-type="jquery-slide">
                                <i class="hs-admin-more-alt"></i>
                              </a>

                              <div id="dropDown4" class="u-shadow-v31 g-pos-abs g-top-100x g-right-0 g-z-index-2 g-bg-white" aria-labelledby="dropDown4Invoker">
                                <ul class="list-unstyled g-nowrap mb-0">
                                  <li>
                                    <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
                                      <i class="hs-admin-pencil g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                      Edit
                                    </a>
                                  </li>
                                  <li>
                                    <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
                                      <i class="hs-admin-check g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                      Make Default
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
                          </div>
                        </div>
                      </div>
                    </label>

                    <label class="js-check g-pos-rel d-block g-mb-30">
                      <input class="g-pos-abs opacity-0" name="radGroup2" type="radio">

                      <div class="media-md align-items-center g-parent g-bg-gray-light-v8--sibling-checked g-brd-around g-brd-gray-light-v7 g-rounded-4 g-px-20 g-py-15">
                        <div class="d-flex-md text-center g-mb-20 g-mb-0--md">
                          <div class="d-inline-block u-icon-v3 u-icon-size--lg g-bg-gray-light-v8 g-bg-gray-light-v7--parent-sibling-checked g-font-size-24 g-color-secondary rounded-circle">
                            <i class="g-font-size-0">
                            <img class="img-fluid g-width-40" src="{{url('/')}}/academy/assets/img/icons/payoneer.svg" alt="Image description">
                          </i>
                          </div>
                        </div>

                        <div class="d-md-flex text-center text-md-left g-width-220--md g-font-size-12 g-font-size-default--md g-mb-10 g-mb-0--md g-ml-20--md">Payoneer</div>

                        <div class="media-body">
                          <div class="d-flex align-items-center">
                            <div class="g-font-size-12 g-font-size-default--md g-color-gray-dark-v12 g-mr-10">john.doe@gmail.com</div>

                            <div class="g-pos-rel g-top-2 ml-auto">
                              <a id="dropDown5Invoker" class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-secondary--hover" href="#!" aria-controls="dropDown5" aria-haspopup="true" aria-expanded="false" data-dropdown-event="click" data-dropdown-target="#dropDown5"
                              data-dropdown-type="jquery-slide">
                                <i class="hs-admin-more-alt"></i>
                              </a>

                              <div id="dropDown5" class="u-shadow-v31 g-pos-abs g-top-100x g-right-0 g-z-index-2 g-bg-white" aria-labelledby="dropDown5Invoker">
                                <ul class="list-unstyled g-nowrap mb-0">
                                  <li>
                                    <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
                                      <i class="hs-admin-pencil g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                      Edit
                                    </a>
                                  </li>
                                  <li>
                                    <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
                                      <i class="hs-admin-check g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                      Make Default
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
                          </div>
                        </div>
                      </div>
                    </label>

                    <label class="js-check g-pos-rel d-block g-mb-30">
                      <input class="g-pos-abs opacity-0" name="radGroup2" type="radio">

                      <div class="media-md align-items-center g-parent g-bg-gray-light-v8--sibling-checked g-brd-around g-brd-gray-light-v7 g-rounded-4 g-px-20 g-py-15">
                        <div class="d-flex-md text-center g-mb-20 g-mb-0--md">
                          <div class="d-inline-block u-icon-v3 u-icon-size--lg g-bg-gray-light-v8 g-bg-gray-light-v7--parent-sibling-checked g-font-size-24 g-color-secondary rounded-circle">
                            <i class="g-font-size-0">
                            <img class="img-fluid g-width-40" src="{{url('/')}}/academy/assets/img/icons/skrill.svg" alt="Image description">
                          </i>
                          </div>
                        </div>

                        <div class="d-md-flex text-center text-md-left g-width-220--md g-font-size-12 g-font-size-default--md g-mb-10 g-mb-0--md g-ml-20--md">Skrill</div>

                        <div class="media-body">
                          <div class="d-flex align-items-center">
                            <div class="g-font-size-12 g-font-size-default--md g-color-gray-dark-v12 g-mr-10">john.doe@gmail.com</div>

                            <div class="g-pos-rel g-top-2 ml-auto">
                              <a id="dropDown6Invoker" class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-secondary--hover" href="#!" aria-controls="dropDown6" aria-haspopup="true" aria-expanded="false" data-dropdown-event="click" data-dropdown-target="#dropDown6"
                              data-dropdown-type="jquery-slide">
                                <i class="hs-admin-more-alt"></i>
                              </a>

                              <div id="dropDown6" class="u-shadow-v31 g-pos-abs g-top-100x g-right-0 g-z-index-2 g-bg-white" aria-labelledby="dropDown6Invoker">
                                <ul class="list-unstyled g-nowrap mb-0">
                                  <li>
                                    <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
                                      <i class="hs-admin-pencil g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                      Edit
                                    </a>
                                  </li>
                                  <li>
                                    <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
                                      <i class="hs-admin-check g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                      Make Default
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
                          </div>
                        </div>
                      </div>
                    </label>

                    <a class="js-check u-link-v5 g-pos-rel d-block g-color-gray-dark-v12 g-color-secondary--hover g-mb-50" href="#!">
                      <div class="media align-items-center g-parent g-brd-around g-brd-style-dashed g-brd-gray-light-v7 g-rounded-4 g-px-20 g-py-15">
                        <div class="d-flex">
                          <div class="d-inline-block u-icon-v3 u-icon-size--lg g-bg-gray-light-v8 g-font-size-24 g-color-secondary rounded-circle">
                            <i class="hs-admin-wallet"></i>
                          </div>
                        </div>

                        <div class="d-flex g-width-220 g-font-size-12 g-font-size-default--md g-ml-20">Add Payment Account</div>
                      </div>
                    </a>

                    <div>
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