@extends('layouts.academy')

@section('page')
  Dashboard
@endsection

@section('template_linked_css')
 <!-- BEGIN PAGE LEVEL PLUGINS -->


  <link rel="stylesheet" href="{{url('/')}}/academy/assets/vendor/hs-admin-icons/hs-admin-icons.css">

  <link rel="stylesheet" href="{{url('/')}}/academy/assets2/vendor/animate.css">
  <link rel="stylesheet" href="{{url('/')}}/academy/assets2/vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css">

  <link rel="stylesheet" href="{{url('/')}}/academy/assets/vendor/flatpickr/dist/css/flatpickr.min.css">
  <link rel="stylesheet" href="{{url('/')}}/academy/assets/vendor/bootstrap-select/css/bootstrap-select.min.css">

  <link rel="stylesheet" href="{{url('/')}}/academy/assets/vendor/chartist-js/chartist.min.css">
  <link rel="stylesheet" href="{{url('/')}}/academy/assets/vendor/chartist-js-tooltip/chartist-plugin-tooltip.css">
  <link rel="stylesheet" href="{{url('/')}}/academy/assets2/vendor/fancybox/jquery.fancybox.min.css">

  <link rel="stylesheet" href="{{url('/')}}/academy/assets2/vendor/hamburgers/hamburgers.min.css">

  <!-- CSS Unify -->
  <link rel="stylesheet" href="{{url('/')}}/academy/assets/css/unify-admin.css">

  <!-- CSS Customization -->
  <link rel="stylesheet" href="{{url('/')}}/academy/assets2/css/custom.css">
@endsection

@section('content')
<div class="g-pa-20">
  <div class="row">
    <div class="col-sm-6 col-lg-6 col-xl-3 g-mb-30">
      <!-- Panel -->
      <div class="card h-100 g-brd-gray-light-v7 rounded">
        <div class="card-block g-pa-20">
          <h4 class="media g-font-size-16 g-mb-10">
          <span class="d-flex align-self-center g-font-weight-400 g-color-gray-dark-v6">Income</span>

          <span class="media-body align-self-center text-right">
            <a class="u-link-v5 g-font-size-16 g-font-size-18--md g-color-gray-light-v6 g-color-secondary--hover" href="#!">
              <i class="hs-admin-reload"></i>
            </a>
          </span>
        </h4>

          <div class="d-flex align-items-center">
            <span class="g-font-weight-300 g-font-size-24 g-color-black">0 TZS</span>
            <span class="d-flex align-self-center g-font-size-0 g-ml-5 g-ml-10--md">
            <i class="g-fill-gray-dark-v9">
              <svg width="12px" height="20px" viewbox="0 0 12 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g transform="translate(-21.000000, -751.000000)">
                  <g transform="translate(0.000000, 64.000000)">
                    <g transform="translate(20.000000, 619.000000)">
                      <g transform="translate(1.000000, 68.000000)">
                        <polygon points="6 20 0 13.9709049 0.576828937 13.3911999 5.59205874 18.430615 5.59205874 0 6.40794126 0 6.40794126 18.430615 11.4223552 13.3911999 12 13.9709049"></polygon>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </i>
            <i class="g-fill-lightblue-v3">
              <svg width="12px" height="20px" viewbox="0 0 12 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g transform="translate(-33.000000, -751.000000)">
                  <g transform="translate(0.000000, 64.000000)">
                    <g transform="translate(20.000000, 619.000000)">
                      <g transform="translate(1.000000, 68.000000)">
                        <polygon
                          transform="translate(18.000000, 10.000000) scale(1, -1) translate(-18.000000, -10.000000)"
                          points="18 20 12 13.9709049 12.5768289 13.3911999 17.5920587 18.430615 17.5920587 0 18.4079413 0 18.4079413 18.430615 23.4223552 13.3911999 24 13.9709049"></polygon>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </i>
          </span>
          </div>
        </div>

        <div class="js-area-chart u-area-chart--v1 g-pos-rel g-line-height-0" data-height="72px" data-high="2420" data-low="0" data-offset-x="0" data-offset-y="0" data-postfix=" m" data-is-show-area="true" data-is-show-line="true" data-is-show-point="true" data-is-full-width="true"
        data-is-stack-bars="true" data-is-show-axis-x="false" data-is-show-axis-y="false" data-is-show-tooltips="true" data-tooltip-description-position="left" data-tooltip-custom-class="u-tooltip--v2 g-font-weight-300 g-font-size-default g-color-gray-dark-v6"
        data-align-text-axis-x="center" data-fill-opacity=".1" data-fill-colors='["#1cc9e4"]' data-stroke-width="2px" data-stroke-color="#1cc9e4" data-stroke-dash-array="0" data-text-size-x="14px" data-text-color-x="#000000" data-text-offset-top-x="0"
        data-text-size-y="14px" data-text-color-y="#53585e" data-points-colors='["#1cc9e4"]' data-series='[
             [
               {"meta": "$", "value": 900},
               {"meta": "$", "value": 1700},
               {"meta": "$", "value": 1000},
               {"meta": "$", "value": 2420},
               {"meta": "$", "value": 800}
             ]
           ]' data-labels='["2013", "2014", "2015", "2016", "2017"]'></div>
      </div>
      <!-- End Panel -->
    </div>

    <div class="col-sm-6 col-lg-6 col-xl-3 g-mb-30">
      <!-- Panel -->
      <div class="card h-100 g-brd-gray-light-v7 rounded">
        <div class="card-block g-pa-20">
          <h4 class="media g-font-size-16 g-mb-10">
          <span class="d-flex align-self-center g-font-weight-400 g-color-gray-dark-v6">Courses</span>

          <span class="media-body align-self-center text-right">
            <a class="u-link-v5 g-font-size-16 g-font-size-18--md g-color-gray-light-v6 g-color-secondary--hover" href="#!">
              <i class="hs-admin-reload"></i>
            </a>
          </span>
        </h4>

        <div class="d-flex align-items-center">
            <span class="g-font-weight-300 g-font-size-24 g-color-black">{{count(App\Models\Jasiri\Course::get())}}</span>
            <span class="d-flex align-self-center g-font-size-0 g-ml-5 g-ml-10--md">
            <i class="g-fill-red">
              <svg width="12px" height="20px" viewbox="0 0 12 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g transform="translate(-21.000000, -751.000000)">
                  <g transform="translate(0.000000, 64.000000)">
                    <g transform="translate(20.000000, 619.000000)">
                      <g transform="translate(1.000000, 68.000000)">
                        <polygon points="6 20 0 13.9709049 0.576828937 13.3911999 5.59205874 18.430615 5.59205874 0 6.40794126 0 6.40794126 18.430615 11.4223552 13.3911999 12 13.9709049"></polygon>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </i>
            <i class="g-fill-gray-dark-v9">
              <svg width="12px" height="20px" viewbox="0 0 12 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g transform="translate(-33.000000, -751.000000)">
                  <g transform="translate(0.000000, 64.000000)">
                    <g transform="translate(20.000000, 619.000000)">
                      <g transform="translate(1.000000, 68.000000)">
                        <polygon
                          transform="translate(18.000000, 10.000000) scale(1, -1) translate(-18.000000, -10.000000)"
                          points="18 20 12 13.9709049 12.5768289 13.3911999 17.5920587 18.430615 17.5920587 0 18.4079413 0 18.4079413 18.430615 23.4223552 13.3911999 24 13.9709049"></polygon>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </i>
          </span>
          </div>
        </div>

        <div class="js-area-chart u-area-chart--v1 g-pos-rel g-line-height-0" data-height="72px" data-high="2420" data-low="0" data-offset-x="0" data-offset-y="0" data-postfix=" m" data-is-show-area="true" data-is-show-line="true" data-is-show-point="true" data-is-full-width="true"
        data-is-stack-bars="true" data-is-show-axis-x="false" data-is-show-axis-y="false" data-is-show-tooltips="true" data-tooltip-description-position="left" data-tooltip-custom-class="u-tooltip--v2 g-font-weight-300 g-font-size-default g-color-gray-dark-v6"
        data-align-text-axis-x="center" data-fill-opacity=".1" data-fill-colors='["#15d3b2"]' data-stroke-width="2px" data-stroke-color="#15d3b2" data-stroke-dash-array="0" data-text-size-x="14px" data-text-color-x="#000000" data-text-offset-top-x="0"
        data-text-size-y="14px" data-text-color-y="#53585e" data-points-colors='["#15d3b2"]' data-series='[
               [
                 {"meta": "$", "value": 900},
                 {"meta": "$", "value": 1700},
                 {"meta": "$", "value": 1000},
                 {"meta": "$", "value": 2420},
                 {"meta": "$", "value": 800}
               ]
             ]' data-labels='["2013", "2014", "2015", "2016", "2017"]'></div>
      </div>
      <!-- End Panel -->
    </div>

    <div class="col-sm-6 col-lg-6 col-xl-3 g-mb-30">
      <!-- Panel -->
      <div class="card h-100 g-brd-gray-light-v7 rounded">
        <div class="card-block g-pa-20">
          <h4 class="media g-font-size-16 g-mb-10">
          <span class="d-flex align-self-center g-font-weight-400 g-color-gray-dark-v6">Teachers</span>

          <span class="media-body align-self-center text-right">
            <a class="u-link-v5 g-font-size-16 g-font-size-18--md g-color-gray-light-v6 g-color-secondary--hover" href="#!">
              <i class="hs-admin-reload"></i>
            </a>
          </span>
        </h4>

          <div class="d-flex align-items-center">
            <span class="g-font-weight-300 g-font-size-24 g-color-black">
              {{
              count(App\Models\User::whereHas(
                  'roles', function($q){
                      $q->where('name', 'Teacher');
                  }
              )->get())
            }}
            </span>
            <span class="d-flex align-self-center g-font-size-0 g-ml-5 g-ml-10--md">
            <i class="g-fill-red">
              <svg width="12px" height="20px" viewbox="0 0 12 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g transform="translate(-21.000000, -751.000000)">
                  <g transform="translate(0.000000, 64.000000)">
                    <g transform="translate(20.000000, 619.000000)">
                      <g transform="translate(1.000000, 68.000000)">
                        <polygon points="6 20 0 13.9709049 0.576828937 13.3911999 5.59205874 18.430615 5.59205874 0 6.40794126 0 6.40794126 18.430615 11.4223552 13.3911999 12 13.9709049"></polygon>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </i>
            <i class="g-fill-gray-dark-v9">
              <svg width="12px" height="20px" viewbox="0 0 12 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g transform="translate(-33.000000, -751.000000)">
                  <g transform="translate(0.000000, 64.000000)">
                    <g transform="translate(20.000000, 619.000000)">
                      <g transform="translate(1.000000, 68.000000)">
                        <polygon
                          transform="translate(18.000000, 10.000000) scale(1, -1) translate(-18.000000, -10.000000)"
                          points="18 20 12 13.9709049 12.5768289 13.3911999 17.5920587 18.430615 17.5920587 0 18.4079413 0 18.4079413 18.430615 23.4223552 13.3911999 24 13.9709049"></polygon>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </i>
          </span>
          </div>
        </div>

        <div class="js-area-chart u-area-chart--v1 g-pos-rel g-line-height-0" data-height="72px" data-high="2420" data-low="0" data-offset-x="0" data-offset-y="0" data-postfix=" m" data-is-show-area="true" data-is-show-line="true" data-is-show-point="true" data-is-full-width="true"
        data-is-stack-bars="true" data-is-show-axis-x="false" data-is-show-axis-y="false" data-is-show-tooltips="true" data-tooltip-description-position="left" data-tooltip-custom-class="u-tooltip--v2 g-font-weight-300 g-font-size-default g-color-gray-dark-v6"
        data-align-text-axis-x="center" data-fill-opacity=".1" data-fill-colors='["#1d75e5"]' data-stroke-width="2px" data-stroke-color="#1d75e5" data-stroke-dash-array="0" data-text-size-x="14px" data-text-color-x="#000000" data-text-offset-top-x="0"
        data-text-size-y="14px" data-text-color-y="#53585e" data-points-colors='["#1d75e5"]' data-series='[
               [
                 {"meta": "$", "value": 900},
                 {"meta": "$", "value": 1700},
                 {"meta": "$", "value": 1000},
                 {"meta": "$", "value": 2420},
                 {"meta": "$", "value": 800}
               ]
             ]' data-labels='["2013", "2014", "2015", "2016", "2017"]'></div>
      </div>
      <!-- End Panel -->
    </div>

    <div class="col-sm-6 col-lg-6 col-xl-3 g-mb-30">
      <!-- Panel -->
      <div class="card h-100 g-brd-gray-light-v7 rounded">
        <div class="card-block g-pa-20">
          <h4 class="media g-font-size-16 g-mb-10">
          <span class="d-flex align-self-center g-font-weight-400 g-color-gray-dark-v6">Students</span>

          <span class="media-body align-self-center text-right">
            <a class="u-link-v5 g-font-size-16 g-font-size-18--md g-color-gray-light-v6 g-color-secondary--hover" href="#!">
              <i class="hs-admin-reload"></i>
            </a>
          </span>
        </h4>

          <div class="d-flex align-items-center">
            <span class="g-font-weight-300 g-font-size-24 g-color-black">
            <!-- Count Students -->
            {{
              count(App\Models\User::whereHas(
                  'roles', function($q){
                      $q->where('name', 'Student');
                  }
              )->get())
            }}
          </span>
            <span class="d-flex align-self-center g-font-size-0 g-ml-5 g-ml-10--md">
            <i class="g-fill-gray-dark-v9">
              <svg width="12px" height="20px" viewbox="0 0 12 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g transform="translate(-21.000000, -751.000000)">
                  <g transform="translate(0.000000, 64.000000)">
                    <g transform="translate(20.000000, 619.000000)">
                      <g transform="translate(1.000000, 68.000000)">
                        <polygon points="6 20 0 13.9709049 0.576828937 13.3911999 5.59205874 18.430615 5.59205874 0 6.40794126 0 6.40794126 18.430615 11.4223552 13.3911999 12 13.9709049"></polygon>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </i>
            <i class="g-fill-lightblue-v3">
              <svg width="12px" height="20px" viewbox="0 0 12 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g transform="translate(-33.000000, -751.000000)">
                  <g transform="translate(0.000000, 64.000000)">
                    <g transform="translate(20.000000, 619.000000)">
                      <g transform="translate(1.000000, 68.000000)">
                        <polygon
                          transform="translate(18.000000, 10.000000) scale(1, -1) translate(-18.000000, -10.000000)"
                          points="18 20 12 13.9709049 12.5768289 13.3911999 17.5920587 18.430615 17.5920587 0 18.4079413 0 18.4079413 18.430615 23.4223552 13.3911999 24 13.9709049"></polygon>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </i>
          </span>
          </div>
        </div>

        <div class="js-area-chart u-area-chart--v1 g-pos-rel g-line-height-0" data-height="72px" data-high="2420" data-low="0" data-offset-x="0" data-offset-y="0" data-postfix=" m" data-is-show-area="true" data-is-show-line="true" data-is-show-point="true" data-is-full-width="true"
        data-is-stack-bars="true" data-is-show-axis-x="false" data-is-show-axis-y="false" data-is-show-tooltips="true" data-tooltip-description-position="left" data-tooltip-custom-class="u-tooltip--v2 g-font-weight-300 g-font-size-default g-color-gray-dark-v6"
        data-align-text-axis-x="center" data-fill-opacity=".1" data-fill-colors='["#e62154"]' data-stroke-width="2px" data-stroke-color="#e62154" data-stroke-dash-array="0" data-text-size-x="14px" data-text-color-x="#000000" data-text-offset-top-x="0"
        data-text-size-y="14px" data-text-color-y="#53585e" data-points-colors='["#e62154"]' data-series='[
             [
               {"meta": "$", "value": 900},
               {"meta": "$", "value": 1700},
               {"meta": "$", "value": 1000},
               {"meta": "$", "value": 2420},
               {"meta": "$", "value": 800}
             ]
           ]' data-labels='["2013", "2014", "2015", "2016", "2017"]'></div>
      </div>
      <!-- End Panel -->
    </div>

    <!-- User Card -->
    <div class="col-xl-4">
      <!-- User Card -->
      <div class="card g-brd-gray-light-v7 text-center g-pt-40 g-pt-60--md g-mb-30">
        <header class="g-mb-30">
          <img class="img-fluid rounded-circle g-width-125 g-height-125 g-mb-14" src="@if (Auth::user()->profile && Auth::user()->profile->avatar_status == 1) {{ Auth::user()->profile->avatar }} @else {{ Gravatar::get(Auth::user()->email) }} @endif" alt="Image description">
          <h3 class="g-font-weight-300 g-font-size-22 g-color-black g-mb-2">{{Auth::user()->first_name}} {{Auth::user()->last_name}}</h3>
          <em class="g-font-style-normal g-font-weight-300 g-color-gray-dark-v6">
            @foreach (Auth::user()->roles as $user_role)
                @if ($user_role->name == 'User')
                    @php $badgeClass = 'primary' @endphp
                @elseif ($user_role->name == 'Admin')
                    @php $badgeClass = 'warning' @endphp
                @elseif ($user_role->name == 'Unverified')
                    @php $badgeClass = 'danger' @endphp
                @else
                    @php $badgeClass = 'default' @endphp
                @endif
                <span class="badge badge-{{$badgeClass}}">{{ $user_role->name }}</span>
            @endforeach
          </em>
        </header>

        <section class="row no-gutters g-brd-top g-brd-gray-light-v4">
          <div class="col-6 g-py-10 g-py-25--md">
            <strong class="d-block g-font-weight-500 g-font-size-18 g-color-black">349</strong>
            <span class="g-font-weight-300 g-color-gray-dark-v6">Connections</span>
          </div>

          <div class="col-6 g-brd-left--md g-brd-gray-light-v4 g-py-10 g-py-25--md">
            <strong class="d-block g-font-weight-500 g-font-size-18 g-color-black">124</strong>
            <span class="g-font-weight-300 g-color-gray-dark-v6">Friends</span>
          </div>
        </section>
      </div>
      <!-- End User Card -->
    </div>
    <!-- End User Card -->

    <!-- About Card -->
    <div class="col-xl-8">
      <!-- About Card -->
      <div class="card g-brd-gray-light-v7 g-pa-15 g-pa-25-30--md g-mb-30">
        <section class="g-mb-20">
          <h3 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black g-mb-20">About me</h3>

          <div class="g-font-weight-300 g-color-gray-dark-v6 g-mb-20">
            <span class="g-font-size-40 g-color-black">9.8</span>
            <span class="g-font-size-18 g-mr-6">/ 10.0</span>
            Overall Rating
          </div>

          <p class="g-font-weight-300 g-color-gray-dark-v6 mb-0">A Pocket PC is a handheld computer, which features many of the same capabilities as a modern PC. These handy little devices allow individuals to retrieve and store e-mail messages, create a contact file, appointments, surf the internet,
            exchange text messages and more. Every product that is labeled as a Pocket PC must be accompanied with specific software to operate the unit and must feature a touchscreen.</p>
        </section>

        <section class="row">
          <div class="col-md-6 g-mb-20 g-mb-0--md">
            <h3 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black g-mb-20">Skills</h3>

            <ul class="u-list-inline mb-0">
              <li class="list-inline-item g-mb-6 g-mr-2">
                <a class="u-tags-v1 g-bg-lightblue-v3--hover g-color-gray-dark-v6 g-color-white--hover g-brd-around g-brd-gray-light-v4 g-brd-lightblue-v3--hover g-rounded-50 g-px-10 g-px-20--md g-py-2" href="#!">developer</a>
              </li>
              <li class="list-inline-item g-mb-6 g-mr-2">
                <a class="u-tags-v1 g-bg-lightblue-v3--hover g-color-gray-dark-v6 g-color-white--hover g-brd-around g-brd-gray-light-v4 g-brd-lightblue-v3--hover g-rounded-50 g-px-10 g-px-20--md g-py-2" href="#!">html</a>
              </li>
              <li class="list-inline-item g-mb-6 g-mr-2">
                <a class="u-tags-v1 g-bg-lightblue-v3--hover g-color-gray-dark-v6 g-color-white--hover g-brd-around g-brd-gray-light-v4 g-brd-lightblue-v3--hover g-rounded-50 g-px-10 g-px-20--md g-py-2" href="#!">bootstrap</a>
              </li>
              <li class="list-inline-item g-mb-6 g-mr-2">
                <a class="u-tags-v1 g-bg-lightblue-v3--hover g-color-gray-dark-v6 g-color-white--hover g-brd-around g-brd-gray-light-v4 g-brd-lightblue-v3--hover g-rounded-50 g-px-10 g-px-20--md g-py-2" href="#!">php</a>
              </li>
              <li class="list-inline-item g-mb-6 g-mr-2">
                <a class="u-tags-v1 g-bg-lightblue-v3--hover g-color-gray-dark-v6 g-color-white--hover g-brd-around g-brd-gray-light-v4 g-brd-lightblue-v3--hover g-rounded-50 g-px-10 g-px-20--md g-py-2" href="#!">management</a>
              </li>
            </ul>
          </div>

          <div class="col-md-6">
            <h3 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black g-mb-20">50 Recommended</h3>

            <ul class="list-inline mb-0">
              <li class="list-inline-item g-mb-10 g-mb-0--sm">
                <img class="g-width-30 g-width-48--md g-height-30 g-height-48--md rounded-circle" src="{{url('/')}}/academy/assets2/img-temp/100x100/img5.jpg" alt="Image Description">
              </li>
              <li class="list-inline-item g-mb-10 g-mb-0--sm">
                <img class="g-width-30 g-width-48--md g-height-30 g-height-48--md rounded-circle" src="{{url('/')}}/academy/assets2/img-temp/100x100/img6.jpg" alt="Image Description">
              </li>
              <li class="list-inline-item g-mb-10 g-mb-0--sm">
                <img class="g-width-30 g-width-48--md g-height-30 g-height-48--md rounded-circle" src="{{url('/')}}/academy/assets2/img-temp/100x100/img14.jpg" alt="Image Description">
              </li>
              <li class="list-inline-item g-mb-10 g-mb-0--sm">
                <img class="g-width-30 g-width-48--md g-height-30 g-height-48--md rounded-circle" src="{{url('/')}}/academy/assets2/img-temp/100x100/img16.jpg" alt="Image Description">
              </li>
              <li class="list-inline-item g-mb-10 g-mb-0--sm">
                <div class="d-flex align-items-center justify-content-center g-width-30 g-width-48--md g-height-30 g-height-48--md g-bg-secondary g-font-size-14 g-font-size-16--md g-color-white rounded-circle">+42</div>
              </li>
            </ul>
          </div>
        </section>
      </div>
      <!-- End About Card -->

    </div>
    <!-- End About Card -->

    <!-- Income Card -->
    <div class="col-xl-12">
      <!-- Income Cards -->
      <div class="card g-brd-gray-light-v7 g-mb-30">
        <header class="media g-pa-15 g-pa-25-30-0--md g-mb-20">
          <div class="media-body align-self-center">
            <h3 class="text-uppercase g-font-size-default g-color-black g-mb-8">Total Income</h3>

            <div id="rangePickerWrapper3" class="u-datepicker-left u-datepicker--v3 g-pr-10">
              <input id="rangeDatepicker3" class="g-font-size-12 g-font-size-default--md" type="text" data-rp-wrapper="#rangePickerWrapper3" data-rp-type="range" data-rp-date-format="d M Y" data-rp-default-date='["01 Jan 2016", "31 Dec 2017"]'>
              <i class="hs-admin-angle-down g-absolute-centered--y g-right-0 g-color-gray-light-v3"></i>
            </div>
          </div>

          <div class="d-flex align-self-end align-items-center">
            <span class="g-line-height-1 g-font-weight-300 g-font-size-28 g-color-secondary">$48,200</span>
            <span class="d-flex align-self-center g-font-size-0 g-ml-10">
            <i class="g-fill-gray-dark-v9">
              <svg width="12px" height="20px" viewBox="0 0 12 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g transform="translate(-21.000000, -751.000000)">
                  <g transform="translate(0.000000, 64.000000)">
                    <g transform="translate(20.000000, 619.000000)">
                      <g transform="translate(1.000000, 68.000000)">
                        <polygon points="6 20 0 13.9709049 0.576828937 13.3911999 5.59205874 18.430615 5.59205874 0 6.40794126 0 6.40794126 18.430615 11.4223552 13.3911999 12 13.9709049"></polygon>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </i>
            <i class="g-fill-lightblue-v3">
              <svg width="12px" height="20px" viewBox="0 0 12 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g transform="translate(-33.000000, -751.000000)">
                  <g transform="translate(0.000000, 64.000000)">
                    <g transform="translate(20.000000, 619.000000)">
                      <g transform="translate(1.000000, 68.000000)">
                        <polygon transform="translate(18.000000, 10.000000) scale(1, -1) translate(-18.000000, -10.000000)" points="18 20 12 13.9709049 12.5768289 13.3911999 17.5920587 18.430615 17.5920587 0 18.4079413 0 18.4079413 18.430615 23.4223552 13.3911999 24 13.9709049"></polygon>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </i>
          </span>
          </div>
        </header>

        <div class="js-custom-scroll g-height-500 g-pa-15 g-pa-0-30-25--md">
          <table class="table table-responsive-sm w-100">
            <thead>
              <tr>
                <th class="g-font-weight-300 g-color-gray-dark-v6 g-brd-top-none g-pl-20">#</th>
                <th class="g-font-weight-300 g-color-gray-dark-v6 g-brd-top-none">Name</th>
                <th class="g-font-weight-300 g-color-gray-dark-v6 g-brd-top-none">Status</th>
                <th class="g-font-weight-300 g-color-gray-dark-v6 g-brd-top-none">Date</th>
                <th class="text-right g-font-weight-300 g-color-gray-dark-v6 g-brd-top-none">Price</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10 g-pl-20">1</td>
                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Business Cards</td>
                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">
                  <span class="u-tags-v1 text-center g-width-100 g-brd-around g-brd-lightblue-v3 g-bg-lightblue-v3 g-font-size-default g-color-white g-rounded-50 g-py-4 g-px-15">approved</span>
                </td>
                <td class="g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Aug 12, 2016</td>
                <td class="text-right g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">$2045</td>
              </tr>

              <tr>
                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10 g-pl-20">2</td>
                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Advertising Outdoors</td>
                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">
                  <span class="u-tags-v1 text-center g-width-100 g-brd-around g-brd-lightred-v2 g-bg-lightred-v2 g-font-size-default g-color-white g-rounded-50 g-py-4 g-px-15">pending</span>
                </td>
                <td class="g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Jun 6, 2016</td>
                <td class="text-right g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">$995</td>
              </tr>

              <tr>
                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10 g-pl-20">3</td>
                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Freelance Design</td>
                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">
                  <span class="u-tags-v1 text-center g-width-100 g-brd-around g-brd-teal-v2 g-bg-teal-v2 g-font-size-default g-color-white g-rounded-50 g-py-4 g-px-15">done</span>
                </td>
                <td class="g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Sep 8, 2016</td>
                <td class="text-right g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">$1025</td>
              </tr>

              <tr>
                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10 g-pl-20">4</td>
                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Music Improvement</td>
                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">
                  <span class="u-tags-v1 text-center g-width-100 g-brd-around g-brd-lightblue-v3 g-bg-lightblue-v3 g-font-size-default g-color-white g-rounded-50 g-py-4 g-px-15">approved</span>
                </td>
                <td class="g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Dec 20, 2016</td>
                <td class="text-right g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">$9562</td>
              </tr>

              <tr>
                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom--md g-brd-2 g-brd-gray-light-v4 g-py-10 g-pl-20">5</td>
                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom--md g-brd-2 g-brd-gray-light-v4 g-py-10">Truck Advertising</td>
                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom--md g-brd-2 g-brd-gray-light-v4 g-py-10">
                  <span class="u-tags-v1 text-center g-width-100 g-brd-around g-brd-teal-v2 g-bg-teal-v2 g-font-size-default g-color-white g-rounded-50 g-py-4 g-px-15">done</span>
                </td>
                <td class="g-valign-middle g-brd-top-none g-brd-bottom--md g-brd-2 g-brd-gray-light-v4 g-py-10">Dec 24, 2016</td>
                <td class="text-right g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom--md g-brd-2 g-brd-gray-light-v4 g-py-10">$5470</td>
              </tr>

              <tr>
                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10 g-pl-20">6</td>
                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Business Cards</td>
                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">
                  <span class="u-tags-v1 text-center g-width-100 g-brd-around g-brd-lightblue-v3 g-bg-lightblue-v3 g-font-size-default g-color-white g-rounded-50 g-py-4 g-px-15">approved</span>
                </td>
                <td class="g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Aug 12, 2016</td>
                <td class="text-right g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">$2045</td>
              </tr>

              <tr>
                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10 g-pl-20">7</td>
                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Advertising Outdoors</td>
                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">
                  <span class="u-tags-v1 text-center g-width-100 g-brd-around g-brd-lightred-v2 g-bg-lightred-v2 g-font-size-default g-color-white g-rounded-50 g-py-4 g-px-15">pending</span>
                </td>
                <td class="g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Jun 6, 2016</td>
                <td class="text-right g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">$995</td>
              </tr>

              <tr>
                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10 g-pl-20">8</td>
                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Freelance Design</td>
                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">
                  <span class="u-tags-v1 text-center g-width-100 g-brd-around g-brd-teal-v2 g-bg-teal-v2 g-font-size-default g-color-white g-rounded-50 g-py-4 g-px-15">done</span>
                </td>
                <td class="g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Sep 8, 2016</td>
                <td class="text-right g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">$1025</td>
              </tr>

              <tr>
                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10 g-pl-20">9</td>
                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Music Improvement</td>
                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">
                  <span class="u-tags-v1 text-center g-width-100 g-brd-around g-brd-lightblue-v3 g-bg-lightblue-v3 g-font-size-default g-color-white g-rounded-50 g-py-4 g-px-15">approved</span>
                </td>
                <td class="g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Dec 20, 2016</td>
                <td class="text-right g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">$9562</td>
              </tr>

              <tr>
                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom--md g-brd-2 g-brd-gray-light-v4 g-py-10 g-pl-20">10</td>
                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom--md g-brd-2 g-brd-gray-light-v4 g-py-10">Truck Advertising</td>
                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom--md g-brd-2 g-brd-gray-light-v4 g-py-10">
                  <span class="u-tags-v1 text-center g-width-100 g-brd-around g-brd-teal-v2 g-bg-teal-v2 g-font-size-default g-color-white g-rounded-50 g-py-4 g-px-15">done</span>
                </td>
                <td class="g-valign-middle g-brd-top-none g-brd-bottom--md g-brd-2 g-brd-gray-light-v4 g-py-10">Dec 24, 2016</td>
                <td class="text-right g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom--md g-brd-2 g-brd-gray-light-v4 g-py-10">$5470</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="js-area-chart u-area-chart--v1 g-pos-rel g-line-height-0" data-height="100px" data-high="2420" data-low="0" data-offset-x="0" data-offset-y="0" data-postfix=" m" data-is-show-area="true" data-is-show-line="false" data-is-show-point="true"
        data-is-full-width="true" data-is-stack-bars="true" data-is-show-axis-x="false" data-is-show-axis-y="false" data-is-show-tooltips="true" data-tooltip-description-position="left" data-tooltip-custom-class="u-tooltip--v2 g-font-weight-300 g-font-size-default g-color-gray-dark-v6"
        data-align-text-axis-x="center" data-fill-opacity=".3" data-fill-colors='["#1cc9e4"]' data-stroke-width="2px" data-stroke-color="#1cc9e4" data-stroke-dash-array="0" data-text-size-x="14px" data-text-color-x="#000000" data-text-offset-top-x="0"
        data-text-size-y="14px" data-text-color-y="#53585e" data-points-colors='["#1cc9e4"]' data-series='[
          [
            {"meta": "$", "value": 400},
            {"meta": "$", "value": 2400},
            {"meta": "$", "value": 700},
            {"meta": "$", "value": 2750},
            {"meta": "$", "value": 600},
            {"meta": "$", "value": 1840},
            {"meta": "$", "value": 320},
            {"meta": "$", "value": 2720},
            {"meta": "$", "value": 800}
          ]
        ]' data-labels='["2013", "2014", "2015", "2016", "2017"]'></div>
      </div>
      <!-- End Income Cards -->
    </div>
    <!-- End Income Card -->
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


  <!-- jQuery UI Core -->
  <script src="{{url('/')}}/academy/assets2/vendor/jquery-ui/ui/widget.js"></script>
  <script src="{{url('/')}}/academy/assets2/vendor/jquery-ui/ui/version.js"></script>
  <script src="{{url('/')}}/academy/assets2/vendor/jquery-ui/ui/keycode.js"></script>
  <script src="{{url('/')}}/academy/assets2/vendor/jquery-ui/ui/position.js"></script>
  <script src="{{url('/')}}/academy/assets2/vendor/jquery-ui/ui/unique-id.js"></script>
  <script src="{{url('/')}}/academy/assets2/vendor/jquery-ui/ui/safe-active-element.js"></script>

  <!-- jQuery UI Helpers -->
  <script src="{{url('/')}}/academy/assets2/vendor/jquery-ui/ui/widgets/menu.js"></script>
  <script src="{{url('/')}}/academy/assets2/vendor/jquery-ui/ui/widgets/mouse.js"></script>

  <!-- jQuery UI Widgets -->
  <script src="{{url('/')}}/academy/assets2/vendor/jquery-ui/ui/widgets/datepicker.js"></script>

  <!-- JS Plugins Init. -->
  <script src="{{url('/')}}/academy/assets2/vendor/appear.js"></script>
  <script src="{{url('/')}}/academy/assets/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
  <script src="{{url('/')}}/academy/assets/vendor/flatpickr/dist/js/flatpickr.min.js"></script>
  <script src="{{url('/')}}/academy/assets2/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="{{url('/')}}/academy/assets/vendor/chartist-js/chartist.min.js"></script>
  <script src="{{url('/')}}/academy/assets/vendor/chartist-js-tooltip/chartist-plugin-tooltip.js"></script>
  <script src="{{url('/')}}/academy/assets/vendor/fancybox/jquery.fancybox.min.js"></script>

  <!-- JS Unify -->
  <script src="{{url('/')}}/academy/assets2/js/hs.core.js"></script>
  <script src="{{url('/')}}/academy/assets/js/components/hs.side-nav.js"></script>
  <script src="{{url('/')}}/academy/assets2/js/helpers/hs.hamburgers.js"></script>
  <script src="{{url('/')}}/academy/assets/js/components/hs.range-datepicker.js"></script>
  <script src="{{url('/')}}/academy/assets2/js/components/hs.datepicker.js"></script>
  <script src="{{url('/')}}/academy/assets2/js/components/hs.dropdown.js"></script>
  <script src="{{url('/')}}/academy/assets2/js/components/hs.scrollbar.js"></script>
  <script src="{{url('/')}}/academy/assets/js/components/hs.area-chart.js"></script>
  <script src="{{url('/')}}/academy/assets/js/components/hs.donut-chart.js"></script>
  <script src="{{url('/')}}/academy/assets/js/components/hs.bar-chart.js"></script>
  <script src="{{url('/')}}/academy/assets2/js/helpers/hs.focus-state.js"></script>
  <script src="{{url('/')}}/academy/assets/js/components/hs.popup.js"></script>

  <!-- JS Custom -->
  <script src="{{url('/')}}/academy/assets2/js/custom.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
      // initialization of custom select
      $('.js-select').selectpicker();
  
      // initialization of hamburger
      $.HSCore.helpers.HSHamburgers.init('.hamburger');
  
      // initialization of charts
      $.HSCore.components.HSAreaChart.init('.js-area-chart');
      $.HSCore.components.HSDonutChart.init('.js-donut-chart');
      $.HSCore.components.HSBarChart.init('.js-bar-chart');
  
      // initialization of sidebar navigation component
      $.HSCore.components.HSSideNav.init('.js-side-nav', {
        afterOpen: function() {
          setTimeout(function() {
            $.HSCore.components.HSAreaChart.init('.js-area-chart');
            $.HSCore.components.HSDonutChart.init('.js-donut-chart');
            $.HSCore.components.HSBarChart.init('.js-bar-chart');
          }, 400);
        },
        afterClose: function() {
          setTimeout(function() {
            $.HSCore.components.HSAreaChart.init('.js-area-chart');
            $.HSCore.components.HSDonutChart.init('.js-donut-chart');
            $.HSCore.components.HSBarChart.init('.js-bar-chart');
          }, 400);
        }
      });
  
      // initialization of range datepicker
      $.HSCore.components.HSRangeDatepicker.init('#rangeDatepicker, #rangeDatepicker2, #rangeDatepicker3');
  
      // initialization of datepicker
      $.HSCore.components.HSDatepicker.init('#datepicker', {
        dayNamesMin: [
          'SU',
          'MO',
          'TU',
          'WE',
          'TH',
          'FR',
          'SA'
        ]
      });
  
      // initialization of HSDropdown component
      $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {dropdownHideOnScroll: false});
  
      // initialization of custom scrollbar
      $.HSCore.components.HSScrollBar.init($('.js-custom-scroll'));
  
      // initialization of popups
      $.HSCore.components.HSPopup.init('.js-fancybox', {
        btnTpl: {
          smallBtn: '<button data-fancybox-close class="btn g-pos-abs g-top-25 g-right-30 g-line-height-1 g-bg-transparent g-font-size-16 g-color-gray-light-v3 g-brd-none p-0" title=""><i class="hs-admin-close"></i></button>'
        }
      });
    });
  </script>
@endsection