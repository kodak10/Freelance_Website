<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- css file -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/ace-responsive-menu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/ud-custom-spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashbord_navitaion.css') }}">
    <link rel="stylesheet" href="{{ asset('sweetalert/sweetalert.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('datatables/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('datatables/css/dataTables.bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('datatables/css/buttons.dataTables.min.css') }}">
    <script src="{{ asset('sweetalert/swal2.min.js') }}"></script>
    <!-- Responsive -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    <!-- Title -->
    <title>ElBaraGroup</title>

    <!-- Favicon -->
    <link href="{{ asset('assets/images/favicon.png') }}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />

    <!-- Apple Touch Icon -->
    <link href="{{ asset('assets/images/apple-touch-icon.png') }}" sizes="60x60" rel="apple-touch-icon">

</head>

<body>

    <div class="wrapper">

        <div class="preloader"></div>

        @include('Administration.layouts.navbar')

        @yield('content')

        <a class="scrollToHome" href="#"><i class="fas fa-angle-up"></i></a>

    </div>

    <!-- Wrapper End -->
    <script src="{{ asset('assets/js/jquery-3.6.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-migrate-3.0.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.mmenu.all.js') }}"></script>
    <script src="{{ asset('assets/js/ace-responsive-menu.js') }}"></script>
    <script src="{{ asset('assets/js/chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/chart-custome.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-scrolltofixed-min.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard-script.js') }}"></script>

    <!-- Custom script for all pages -->
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script type="text/javascript" src="{{ asset('datatables/js/jquery-2.2.4.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('datatables/js/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('datatables/js/dataTables.buttons.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('datatables/js/jszip.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('datatables/js/pdfmake.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('datatables/js/vfs_fonts.js') }}"></script>
    <script type="text/javascript" src="{{ asset('datatables/js/buttons.html5.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('datatables/js/buttons.print.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('datatables/js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('datatables/js/jquery.mark.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('datatables/js/datatables.mark.js') }}"></script>
    <script type="text/javascript" src="{{ asset('datatables/js/buttons.colVis.min.js') }}"></script>
    @yield('script1')

</body>

</html>
