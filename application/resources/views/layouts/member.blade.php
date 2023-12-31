<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- loader-->
  <link href="{{asset('member/assets/assets/css/pace.min.css')}}" rel="stylesheet" />
  <script src="{{asset('member/assets/js/pace.min.js')}}"></script>

  <!--plugins-->
  <link href="{{asset('member/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
  <link href="{{asset('member/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
  <link href="{{asset('member/assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />

  <!-- CSS Files -->
  <link href="{{asset('member/assets/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('member/assets/css/bootstrap-extended.css')}}" rel="stylesheet">
  <link href="{{asset('member/assets/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('member/assets/css/icons.css')}}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

  <!--Theme Styles-->
  <link href="{{asset('member/assets/css/dark-theme.css')}}" rel="stylesheet" />
  <link href="{{asset('member/assets/css/semi-dark.css')}}" rel="stylesheet" />
  <link href="{{asset('member/assets/css/header-colors.css')}}" rel="stylesheet" />

  <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />

  <title>Freham | We listen, We Care, We Partner</title>
</head>

<body>


  <!--start wrapper-->
  <div class="wrapper">

    <!--start sidebar -->

@include('partials.membermenu')

    <!--end sidebar -->

    <!--start top header-->
@include('partials.memberheader')
    <!--end top header-->


    <!-- start page content wrapper-->
    <div class="page-content-wrapper">
        @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
@if(session()->has('success'))
<div class="alert alert-success">
    {{ session()->get('success') }}
</div>
@endif
@if(session()->has('error'))
<div class="alert alert-danger">
    {{ session()->get('error') }}
</div>
@endif
      <!-- start page content-->
     @yield('content')
      <!-- end page content-->
    </div>
    <!--end page content wrapper-->


    <!--start footer-->
    <footer class="footer">
      <div class="footer-text">
        Copyright © 2023. All right reserved.
      </div>
    </footer>
    <!--end footer-->


    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top">
      <ion-icon name="arrow-up-outline"></ion-icon>
    </a>
    <!--End Back To Top Button-->



    <!--start overlay-->
    <div class="overlay nav-toggle-icon"></div>
    <!--end overlay-->

  </div>
  <!--end wrapper-->


  <!-- JS Files-->
  <script src="{{asset('member/assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('member/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
  <script src="{{asset('member/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
  <script src="{{asset('member/assets/js/bootstrap.bundle.min.js')}}"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <!--plugins-->
  <script src="{{asset('member/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
  <script src="{{asset('member/assets/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>
  <script src="{{asset('member/assets/plugins/easyPieChart/jquery.easypiechart.js')}}"></script>
  <script src="{{asset('member/assets/plugins/chartjs/chart.min.js')}}"></script>
  <script src="{{asset('member/assets/js/index.js')}}"></script>
  <!-- Main JS-->
  <script src="{{asset('member/assets/js/main.js')}}"></script>

  <script src="{{asset('member/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('member/assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
  <script src="{{asset('member/assets/js/table-datatable.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
  <script>
     Dropzone.autoDiscover = false;
  </script>


</body>

</html>
