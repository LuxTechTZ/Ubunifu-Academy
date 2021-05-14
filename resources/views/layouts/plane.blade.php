<!-- set bodyTheme = "u-card-v1" -->
<!DOCTYPE html>
<html lang="en">

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

  <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>



<!-- Mirrored from htmlstream.com/preview/unify-v2.6/admin-template/dashboards/dashboard-v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Feb 2021 07:25:31 GMT -->
<head>
  <!-- Title -->
  <title>@hasSection('template_title')@yield('template_title') | @endif @yield('page') | {{ config('app.name', Lang::get('titles.app')) }}</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{url('/')}}/favicon.ico" />
  <!-- Google Fonts -->
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans%3A400%2C300%2C500%2C600%2C700%7CPlayfair+Display%7CRoboto%7CRaleway%7CSpectral%7CRubik">


  @yield('template_linked_css')


</head>

<body>
  <!-- Header -->
    @include('academy.partials.header')
  <!-- End Header -->


  <main class="container-fluid px-0 g-pt-65">
    <div class="row no-gutters g-pos-rel g-overflow-x-hidden">
      <!-- Sidebar Nav -->
        @include('academy.partials.sidebar')
      <!-- End Sidebar Nav -->


      <div class="col g-pb-65--md">

        @yield('breadcrumb')

        @yield('content')

        <!-- Footer -->
          @include('academy.partials.footer')

        <!-- End Footer -->
      </div>
    </div>
  </main>

   <script>
       ClassicEditor
           .create( document.querySelector( '#editor' ) )
           .catch( error => {
               console.error( error );
           } );
   </script>

  @yield('footer_scripts')


</body>


<!-- Mirrored from htmlstream.com/preview/unify-v2.6/admin-template/dashboards/dashboard-v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Feb 2021 07:25:31 GMT -->
</html>
