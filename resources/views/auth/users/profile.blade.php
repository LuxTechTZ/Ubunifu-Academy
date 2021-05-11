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


  <link rel="stylesheet" href="{{url('/')}}/academy/assets2/vendor/animate.css">
  <link rel="stylesheet" href="{{url('/')}}/academy/assets2/vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css">

  <link rel="stylesheet" href="{{url('/')}}/academy/assets2/vendor/hamburgers/hamburgers.min.css">

  <link rel="stylesheet" href="{{url('/')}}/academy/assets/vendor/bootstrap-select/css/bootstrap-select.min.css">
  <link rel="stylesheet" href="{{url('/')}}/academy/assets/vendor/flatpickr/dist/css/flatpickr.min.css">

  <link rel="stylesheet" href="{{url('/')}}/academy/assets/vendor/chartist-js/chartist.min.css">
  <link rel="stylesheet" href="{{url('/')}}/academy/assets/vendor/chartist-js-tooltip/chartist-plugin-tooltip.css">
  <link rel="stylesheet" href="{{url('/')}}/academy/assets2/vendor/fancybox/jquery.fancybox.min.css">

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
        <div class="h-100 g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md">
          <form class="js-validate">
            <header>
              <h2 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">General information</h2>
            </header>

            <hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-30--md">

            <div class="row g-mb-20">
              <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                <label class="mb-0" for="#firstName">First Name</label>
              </div>

              <div class="col-md-9 align-self-center">
                <div class="form-group g-pos-rel mb-0">
                  <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                  <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                </span>
                  <input id="firstName" name="firstName" class="form-control h-100 form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-primary--error g-rounded-4 g-px-20 g-py-12" type="text" value="Charlie" required="required" data-msg="This field is mandatory"
                  data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
                </div>
              </div>
            </div>

            <div class="row g-mb-20">
              <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                <label class="mb-0" for="#lastName">Last Name</label>
              </div>

              <div class="col-md-9 align-self-center">
                <div class="form-group g-pos-rel mb-0">
                  <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                  <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                </span>
                  <input id="lastName" name="lastName" class="form-control h-100 form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-primary--error g-rounded-4 g-px-20 g-py-12" type="text" value="Bailey" required="required" data-msg="This field is mandatory"
                  data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
                </div>
              </div>
            </div>

            <div class="row g-mb-20">
              <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                <label class="mb-0">I’m</label>
              </div>

              <div class="col-md-9 align-self-center">
                <div class="row g-mx-minus-10">
                  <div class="col-md-auto align-self-center g-width-180--md g-px-10">
                    <div class="form-group u-select--v2 g-pos-rel g-brd-gray-light-v7 g-rounded-4 mb-0">
                      <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                      <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                    </span>
                      <select class="js-select u-select--v2-select w-100" required="required" style="display: none;">
                        <option value="Male" selected="selected">Male</option>
                        <option value="Female">Female</option>
                        <option value="Others">Others</option>
                      </select>
                      <i class="hs-admin-angle-down g-absolute-centered--y g-right-0 g-color-gray-light-v6 ml-auto g-mr-15"></i>
                    </div>
                  </div>

                  <div class="col align-self-center g-hidden-md-down g-px-10">
                    <span class="g-font-weight-300 g-color-gray-dark-v6">We use this only for statistics</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="row g-mb-20">
              <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                <label class="mb-0">Birth Date</label>
              </div>

              <div class="col-md-9 align-self-center">
                <div class="row g-mx-minus-10">
                  <div class="col-md align-self-center g-px-10 g-mb-20 g-mb-0--md">
                    <div class="form-group u-select--v2 g-pos-rel g-brd-gray-light-v7 g-rounded-4 mb-0">
                      <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                      <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                    </span>
                      <select class="js-select u-select--v2-select w-100" required="required" style="display: none;">
                        <option>January</option>
                        <option>February</option>
                        <option>March</option>
                        <option selected="selected">April</option>
                        <option>May</option>
                        <option>June</option>
                        <option>July</option>
                        <option>August</option>
                        <option>September</option>
                        <option>October</option>
                        <option>November</option>
                        <option>December</option>
                      </select>
                      <i class="hs-admin-angle-down g-absolute-centered--y g-right-0 g-color-gray-light-v6 ml-auto g-mr-15"></i>
                    </div>
                  </div>

                  <div class="col-6 col-md-auto align-self-center g-width-100--md g-px-10">
                    <div class="form-group u-select--v2 g-pos-rel g-brd-gray-light-v7 g-rounded-4 mb-0">
                      <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                      <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                    </span>
                      <select class="js-select u-select--v2-select w-100" required="required" style="display: none;">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option selected="selected">12</option>
                        <option>13</option>
                        <option>14</option>
                        <option>15</option>
                        <option>16</option>
                        <option>17</option>
                        <option>18</option>
                        <option>19</option>
                        <option>20</option>
                        <option>21</option>
                        <option>22</option>
                        <option>23</option>
                        <option>24</option>
                        <option>25</option>
                        <option>26</option>
                        <option>27</option>
                        <option>28</option>
                        <option>29</option>
                        <option>30</option>
                        <option>31</option>
                      </select>
                      <i class="hs-admin-angle-down g-absolute-centered--y g-right-0 g-color-gray-light-v6 ml-auto g-mr-15"></i>
                    </div>
                  </div>

                  <div class="col-6 col-md-auto align-self-center g-width-135--md g-px-10">
                    <div class="form-group u-select--v2 g-pos-rel g-brd-gray-light-v7 g-rounded-4 mb-0">
                      <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                      <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                    </span>
                      <select class="js-select u-select--v2-select w-100" required="required" style="display: none;">
                        <option>1900</option>
                        <option>1901</option>
                        <option>1902</option>
                        <option>1903</option>
                        <option>1904</option>
                        <option>1905</option>
                        <option>1906</option>
                        <option>1907</option>
                        <option>1908</option>
                        <option>1909</option>
                        <option>1910</option>
                        <option>1911</option>
                        <option>1912</option>
                        <option>1913</option>
                        <option>1914</option>
                        <option>1915</option>
                        <option>1916</option>
                        <option>1917</option>
                        <option>1918</option>
                        <option>1919</option>
                        <option>1920</option>
                        <option>1921</option>
                        <option>1922</option>
                        <option>1923</option>
                        <option>1924</option>
                        <option>1925</option>
                        <option>1926</option>
                        <option>1927</option>
                        <option>1928</option>
                        <option>1929</option>
                        <option>1930</option>
                        <option>1931</option>
                        <option>1932</option>
                        <option>1933</option>
                        <option>1934</option>
                        <option>1935</option>
                        <option>1936</option>
                        <option>1937</option>
                        <option>1938</option>
                        <option>1939</option>
                        <option>1940</option>
                        <option>1941</option>
                        <option>1942</option>
                        <option>1943</option>
                        <option>1944</option>
                        <option>1945</option>
                        <option>1946</option>
                        <option>1947</option>
                        <option>1948</option>
                        <option>1949</option>
                        <option>1950</option>
                        <option>1951</option>
                        <option>1952</option>
                        <option>1953</option>
                        <option>1954</option>
                        <option>1955</option>
                        <option>1956</option>
                        <option>1957</option>
                        <option>1958</option>
                        <option>1959</option>
                        <option>1960</option>
                        <option>1961</option>
                        <option>1962</option>
                        <option>1963</option>
                        <option>1964</option>
                        <option>1965</option>
                        <option>1966</option>
                        <option>1967</option>
                        <option>1968</option>
                        <option>1969</option>
                        <option>1970</option>
                        <option>1971</option>
                        <option>1972</option>
                        <option>1973</option>
                        <option>1974</option>
                        <option>1975</option>
                        <option>1976</option>
                        <option>1977</option>
                        <option>1978</option>
                        <option>1979</option>
                        <option>1980</option>
                        <option>1981</option>
                        <option>1982</option>
                        <option>1983</option>
                        <option>1984</option>
                        <option>1985</option>
                        <option selected="selected">1986</option>
                        <option>1987</option>
                        <option>1988</option>
                        <option>1989</option>
                        <option>1990</option>
                        <option>1991</option>
                        <option>1992</option>
                        <option>1993</option>
                        <option>1994</option>
                        <option>1995</option>
                        <option>1996</option>
                        <option>1997</option>
                        <option>1998</option>
                        <option>1999</option>
                        <option>2000</option>
                        <option>2001</option>
                        <option>2002</option>
                        <option>2003</option>
                        <option>2004</option>
                        <option>2005</option>
                        <option>2006</option>
                        <option>2007</option>
                        <option>2008</option>
                        <option>2009</option>
                        <option>2010</option>
                        <option>2011</option>
                        <option>2012</option>
                        <option>2013</option>
                        <option>2014</option>
                        <option>2015</option>
                        <option>2016</option>
                        <option>2017</option>
                      </select>
                      <i class="hs-admin-angle-down g-absolute-centered--y g-right-0 g-color-gray-light-v6 ml-auto g-mr-15"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row g-mb-20">
              <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                <label class="mb-0" for="#email">Email</label>
              </div>

              <div class="col-md-9 align-self-center">
                <div class="form-group g-pos-rel mb-0">
                  <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                  <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                </span>
                  <input id="email" name="email" class="form-control h-100 form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-primary--error g-rounded-4 g-px-20 g-py-12" type="email" value="charlie.bailey@example.com" required="required" data-msg="This field is mandatory"
                  data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
                </div>
              </div>
            </div>

            <div class="row g-mb-20">
              <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                <label class="mb-0" for="#confirmEmail">Confirm Email</label>
              </div>

              <div class="col-md-9 align-self-center">
                <div class="form-group g-pos-rel mb-0">
                  <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                  <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                </span>
                  <input id="confirmEmail" name="confirmEmail" class="form-control h-100 form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-primary--error g-rounded-4 g-px-20 g-py-12" type="email" value="charlie.bailey@example.com" required="required"
                  data-msg="This field is mandatory" data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
                </div>
              </div>
            </div>

            <div class="row g-mb-20">
              <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                <label class="mb-0" for="#location">Your Location</label>
              </div>

              <div class="col-md-9 align-self-center">
                <div class="form-group g-pos-rel mb-0">
                  <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                  <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                </span>
                  <input id="location" name="location" class="form-control h-100 form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-primary--error g-rounded-4 g-px-20 g-py-12" type="text" value="London, UK" required="required" data-msg="This field is mandatory"
                  data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
                </div>
              </div>
            </div>

            <div class="row g-mb-20">
              <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                <label class="mb-0" for="#phone">Phone Number</label>
              </div>

              <div class="col-md-9 align-self-center">
                <div class="row g-mx-minus-10">
                  <div class="col-auto align-self-center g-width-270 g-px-10">
                    <div class="form-group g-pos-rel mb-0">
                      <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                      <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                    </span>
                      <input id="phone" name="phone" class="form-control h-100 form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-primary--error g-rounded-4 g-px-20 g-py-12" type="tel" value="+44 20 5031 2000" required="required" data-msg="This field is mandatory"
                      data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
                    </div>
                  </div>

                  <div class="col align-self-center g-hidden-md-down g-px-10">
                    <em class="d-flex align-self-center align-items-center g-font-style-normal g-color-gray-dark-v6">
                    <span class="g-pos-rel g-width-18 g-height-18 g-bg-secondary g-brd-around g-brd-secondary rounded-circle">
                      <i class="hs-admin-check g-absolute-centered g-font-weight-800 g-font-size-8 g-color-white" title="Confirmed"></i>
                    </span>
                    <span class="g-hidden-lg-down g-font-weight-300 g-font-size-default g-color-secondary g-ml-8">Confirmed</span>
                  </em>
                  </div>
                </div>
              </div>
            </div>

            <div class="row g-mb-20">
              <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                <label class="mb-0" for="#secondPhone">Phone Number</label>
              </div>

              <div class="col-md-9 align-self-center">
                <div class="row g-mx-minus-10">
                  <div class="col-auto align-self-center g-width-270 g-px-10">
                    <div class="form-group g-pos-rel mb-0">
                      <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                      <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                    </span>
                      <input id="secondPhone" name="secondPhone" class="form-control h-100 form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-primary--error g-rounded-4 g-px-20 g-py-12" type="tel" required="required" data-msg="This field is mandatory" data-error-class="u-has-error-v3"
                      data-success-class="has-success" aria-required="true">
                    </div>
                  </div>

                  <div class="col align-self-center g-hidden-md-down g-px-10">
                    <em class="d-flex align-self-center align-items-center g-font-style-normal g-color-gray-dark-v6">
                    <span class="g-pos-rel g-width-18 g-height-18 g-brd-around g-brd-gray-light-v7 rounded-circle">
                      <i class="hs-admin-check g-absolute-centered g-font-weight-800 g-font-size-8 g-color-gray-light-v7" title="Confirmed"></i>
                    </span>
                    <span class="g-hidden-lg-down g-font-weight-300 g-font-size-default g-color-gray-dark-v6 g-ml-8">Confirmed</span>
                  </em>
                  </div>
                </div>
              </div>
            </div>

            <div class="row g-mb-20">
              <div class="col-md-3 align-self-center"></div>

              <div class="col-md-9 align-self-center">
                <a class="btn btn-link d-flex align-self-center align-items-center u-link-v5 g-color-secondary g-color-secondary--hover  g-brd-none p-0" href="#!">
                  <i class="hs-admin-plus g-font-size-17"></i>
                  <span class="g-font-weight-300 g-ml-10">Add Phone Number</span>
                </a>
              </div>
            </div>

            <div class="row g-mb-20">
              <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                <label class="mb-0">Your Language</label>
              </div>

              <div class="col-md-9 align-self-center">
                <div class="row g-mx-minus-10">
                  <div class="col-auto align-self-center g-width-270 g-px-10">
                    <div class="form-group u-select--v2 g-pos-rel g-brd-gray-light-v7 g-rounded-4 mb-0">
                      <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                      <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                    </span>
                      <select name="language" class="js-select u-select--v2-select w-100" required="required" style="display: none;">
                        <option data-content='<span class="d-flex align-items-center"><img class="g-width-20 g-height-20 rounded-circle g-mr-8" src="{{url('/')}}/academy/assets/img/langs/us.png" alt="Image Description"><span class="g-line-height-1 g-color-black">English</span></span>'>English</option>
                        <option data-content='<span class="d-flex align-items-center"><img class="g-width-20 g-height-20 rounded-circle g-mr-8" src="{{url('/')}}/academy/assets/img/langs/de.png" alt="Image Description"><span class="g-line-height-1 g-color-black">Deutsche</span></span>'>Deutsche</option>
                        <option data-content='<span class="d-flex align-items-center"><img class="g-width-20 g-height-20 rounded-circle g-mr-8" src="{{url('/')}}/academy/assets/img/langs/ru.png" alt="Image Description"><span class="g-line-height-1 g-color-black">Русский</span></span>'>Русский</option>
                      </select>
                      <i class="hs-admin-angle-down g-absolute-centered--y g-right-0 g-color-gray-light-v6 ml-auto g-mr-15"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row g-mb-60">
              <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                <label class="mb-0">Default Currency</label>
              </div>

              <div class="col-md-9 align-self-center">
                <div class="row g-mx-minus-10">
                  <div class="col-auto align-self-center g-width-270 g-px-10">
                    <div class="btn-group justified-content">
                      <label class="u-check">
                        <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="currency" type="radio" checked="checked">
                        <span class="btn btn-md btn-block u-btn-outline-lightgray g-bg-secondary--checked g-font-size-16 g-color-white--checked g-rounded-0--top-right g-rounded-0--bottom-right g-py-10">$</span>
                      </label>
                      <label class="u-check">
                        <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="currency" type="radio">
                        <span class="btn btn-md btn-block u-btn-outline-lightgray g-bg-lightblue-v3--checked g-font-size-16 g-color-white--checked g-brd-left-none--md rounded-0 g-py-10">€</span>
                      </label>
                      <label class="u-check">
                        <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="currency" type="radio">
                        <span class="btn btn-md btn-block u-btn-outline-lightgray g-bg-lightblue-v3--checked g-font-size-16 g-color-white--checked g-brd-left-none--md rounded-0 g-py-10">£</span>
                      </label>
                      <label class="u-check">
                        <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="currency" type="radio">
                        <span class="btn btn-md btn-block u-btn-outline-lightgray g-bg-lightblue-v3--checked g-font-size-16 g-color-white--checked g-brd-left-none--md g-rounded-0--top-left g-rounded-0--bottom-left g-py-10">¥</span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <header>
              <h2 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">Change password</h2>
            </header>

            <hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-30--md">

            <div class="row g-mb-20">
              <div class="col-md-3">
                <label class="mb-0" for="#currentPassword">Current Password</label>
              </div>

              <div class="col-md-9 align-self-center">
                <div>
                  <div class="form-group g-pos-rel mb-0">
                    <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                    <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                  </span>
                    <input id="currentPassword" name="currentPassword" class="form-control h-100 form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-primary--error g-rounded-4 g-px-20 g-py-12" type="password" required="required" data-msg="This field is mandatory"
                    data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
                  </div>

                  <a class="form-text g-color-secondary" href="#!">
                    <small class="g-font-size-default g-mt-8">Forgot Your Password?</small>
                  </a>
                </div>
              </div>
            </div>

            <div class="row g-mb-20">
              <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                <label class="mb-0" for="#newPassword">New Password</label>
              </div>

              <div class="col-md-9 align-self-center">
                <div class="form-group g-pos-rel mb-0">
                  <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                  <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                </span>
                  <input id="newPassword" name="newPassword" class="form-control h-100 form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-primary--error g-rounded-4 g-px-20 g-py-12" type="password" required="required" data-msg="This field is mandatory"
                  data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
                </div>
              </div>
            </div>

            <div class="row g-mb-20">
              <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                <label class="mb-0" for="#confirmNewPassword">Confirm Password</label>
              </div>

              <div class="col-md-9 align-self-center">
                <div class="form-group g-pos-rel mb-0">
                  <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                  <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                </span>
                  <input id="confirmNewPassword" name="confirmNewPassword" class="form-control h-100 form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-primary--error g-rounded-4 g-px-20 g-py-12" type="password" required="required" data-msg="This field is mandatory"
                  data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
                </div>
              </div>
            </div>

            <hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-30--md">

            <div>
              <button class="btn btn-md btn-xl--md u-btn-secondary g-width-160--md g-font-size-12 g-font-size-default--md g-mb-10" type="submit">Save Changes</button>
              <button class="btn btn-md btn-xl--md u-btn-outline-gray-dark-v6 g-font-size-12 g-font-size-default--md g-mr-10 g-mb-10" type="reset">Cancel</button>
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
  <script src="{{url('/')}}/academy/assets/vendor/jquery/jquery.min.js"></script>
  <script src="{{url('/')}}/academy/assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>

  <script src="{{url('/')}}/academy/assets2/vendor/popper.min.js"></script>
  <script src="{{url('/')}}/academy/assets2/vendor/bootstrap/bootstrap.min.js"></script>

  <script src="{{url('/')}}/academy/assets2/vendor/cookiejs/jquery.cookie.js"></script>


  <script src="{{url('/')}}/academy/assets2/vendor/appear.js"></script>
  <script src="{{url('/')}}/academy/assets2/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

  <script src="{{url('/')}}/academy/assets/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
  <script src="{{url('/')}}/academy/assets/vendor/flatpickr/dist/js/flatpickr.min.js"></script>
  <script src="{{url('/')}}/academy/assets2/vendor/jquery-validation/dist/jquery.validate.min.js"></script>

  <script src="{{url('/')}}/academy/assets/vendor/chartist-js/chartist.min.js"></script>
  <script src="{{url('/')}}/academy/assets/vendor/fancybox/jquery.fancybox.min.js"></script>

  <!-- JS Unify -->
  <script src="{{url('/')}}/academy/assets2/js/hs.core.js"></script>

  <script src="{{url('/')}}/academy/assets2/js/components/hs.scrollbar.js"></script>

  <script src="{{url('/')}}/academy/assets2/js/components/hs.dropdown.js"></script>
  <script src="{{url('/')}}/academy/assets2/js/helpers/hs.hamburgers.js"></script>
  <script src="{{url('/')}}/academy/assets/js/components/hs.side-nav.js"></script>

  <script src="{{url('/')}}/academy/assets/js/components/hs.range-datepicker.js"></script>
  <script src="{{url('/')}}/academy/assets2/js/components/hs.validation.js"></script>

  <script src="{{url('/')}}/academy/assets/js/components/hs.bar-chart.js"></script>
  <script src="{{url('/')}}/academy/assets/js/components/hs.popup.js"></script>

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
  
      // initialization of range datepicker
      $.HSCore.components.HSRangeDatepicker.init('#rangeDatepicker');
  
      // initialization of form validation
      $.HSCore.components.HSValidation.init('.js-validate');
  
      // initialization of charts
      $.HSCore.components.HSBarChart.init('.js-bar-chart');
  
      // initialization of popups
      $.HSCore.components.HSPopup.init('.js-fancybox', {
        btnTpl: {
          smallBtn: '<button data-fancybox-close class="btn g-pos-abs g-top-25 g-right-30 g-line-height-1 g-bg-transparent g-font-size-16 g-color-gray-light-v6 g-brd-none p-0" title=""><i class="hs-admin-close"></i></button>'
        }
      });
    });
  </script>
@endsection