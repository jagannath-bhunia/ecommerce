<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="{{URL::asset('admins/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{URL::asset('admins/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{URL::asset('admins/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{URL::asset('admins/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{URL::asset('admins/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Data Tables -->
    <link rel="stylesheet" href="{{URL::asset('admins/vendor/dataTables/dataTables.bootstrap.min.css') }}">

    <!-- Vendor CSS-->
    <link href="{{URL::asset('padmin/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{URL::asset('admins/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{URL::asset('admins/vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{URL::asset('admins/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{URL::asset('admins/vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{URL::asset('admins/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{URL::asset('admins/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{URL::asset('admins/css/theme.css') }}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        @include("admin.common.menu")
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        @include("admin.common.menu")
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            @include("admin.common.header")
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            @yield("body")
            
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

   <!-- Jquery JS-->
   <script src="{{URL::asset('admins/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{URL::asset('admins/vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{URL::asset('admins/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{URL::asset('admins/vendor/slick/slick.min.js') }}">
    </script>
    <script src="{{URL::asset('admins/vendor/wow/wow.min.js') }}"></script>
    <script src="{{URL::asset('admins/vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{URL::asset('admins/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
    </script>
    <script src="{{URL::asset('admins/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{URL::asset('admins/vendor/counter-up/jquery.counterup.min.js') }}">
    </script>
    <script src="{{URL::asset('admins/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{URL::asset('admins/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{URL::asset('admins/vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{URL::asset('admins/vendor/select2/select2.min.js') }}">
    </script>

     <!-- Main JS-->
     <script src="{{URL::asset('admins/js/main.js"></script>

    <!-- Data Tables JS -->
    <script src="{{URL::asset('admins/vendor/dataTables/datatables.min.js"></script>
    <script src="{{URL::asset('admins/vendor/dataTables/dataTables.bootstrap.min.js"></script>
    <script src="{{URL::asset('admins/vendor/dataTables/datatables-init.js"></script>
</body>

</html>
<!-- end document-->
