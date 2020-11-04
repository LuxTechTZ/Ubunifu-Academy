<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.ansonika.com/udema/admin_section/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Oct 2020 22:34:28 GMT -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Felix Mgeni">
  <title>@yield('page') | {{ config('app.name', Lang::get('titles.app')) }}</title>
	
  <!-- Favicons-->
  <link rel="shortcut icon" href="{{url('/')}}/back_assets/img/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" type="image/x-icon" href="{{url('/')}}/back_assets/img/apple-touch-icon-57x57-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{url('/')}}/back_assets/img/apple-touch-icon-72x72-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{url('/')}}/back_assets/img/apple-touch-icon-114x114-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{url('/')}}/back_assets/img/apple-touch-icon-144x144-precomposed.png">

  <!-- GOOGLE WEB FONT -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
	
  <!-- Bootstrap core CSS-->
  <link href="{{url('/')}}/back_assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Main styles -->
  <link href="{{url('/')}}/back_assets/css/admin.css" rel="stylesheet">
  <!-- Icon fonts-->
  <link href="{{url('/')}}/back_assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Plugin styles -->
  <link href="{{url('/')}}/back_assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <link href="{{url('/')}}/back_assets/vendor/dropzone.css" rel="stylesheet">
  <!-- Your custom styles -->
  <link href="{{url('/')}}/back_assets/css/custom.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer" id="page-top">
    @include('jasiri.back.partials.header')

    @yield('content')
    <!-- /.container-wrapper-->
    @include('jasiri.back.partials.footer')
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="{{url('/')}}/back_assets/vendor/jquery/jquery.min.js"></script>
    <script src="{{url('/')}}/back_assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{url('/')}}/back_assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="{{url('/')}}/back_assets/vendor/chart.js/Chart.js"></script>
    <script src="{{url('/')}}/back_assets/vendor/datatables/jquery.dataTables.js"></script>
    <script src="{{url('/')}}/back_assets/vendor/datatables/dataTables.bootstrap4.js"></script>
	<script src="{{url('/')}}/back_assets/vendor/jquery.selectbox-0.2.js"></script>
	<script src="{{url('/')}}/back_assets/vendor/retina-replace.min.js"></script>
	<script src="{{url('/')}}/back_assets/vendor/jquery.magnific-popup.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{url('/')}}/back_assets/js/admin.js"></script>
	<!-- Custom scripts for this page-->
    <script src="{{url('/')}}/back_assets/js/admin-charts.js"></script>
	
</body>

<!-- Mirrored from www.ansonika.com/udema/admin_section/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Oct 2020 22:34:57 GMT -->
</html>
