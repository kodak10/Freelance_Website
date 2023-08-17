<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <!-- css file -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/ace-responsive-menu.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/menu.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slider.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/ud-custom-spacing.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/dashbord_navitaion.css')}}">

    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

    <!-- Title -->
    <title>ElBaraGroup</title>

    <!-- Favicon -->
    <link href="{{asset('assets/images/favicon.png')}}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />

    <!-- Apple Touch Icon -->
    <link href="{{asset('assets/images/apple-touch-icon.png')}}" sizes="60x60" rel="apple-touch-icon">

</head>

<body>

    <div class="wrapper ovh">

        <div class="preloader"></div>

        <!-- Header -->
        @include('layouts.navbar')

        <div class="body_content">

            <!-- Contenu -->
            @yield('content')

            <!-- Footer -->
            @include('layouts.footer')

            <a class="scrollToHome" href="#"><i class="fas fa-angle-up"></i></a> <!-- Top -->

        </div>

    </div>


    <!-- Vendor End -->
    <script src="{{asset('assets/js/jquery-3.6.4.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-migrate-3.0.0.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.mmenu.all.js')}}"></script>
    <script src="{{asset('assets/js/ace-responsive-menu.js')}}"></script>
    <script src="{{asset('assets/js/jquery-scrolltofixed-min.js')}}"></script>
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.js')}}"></script>
    <script src="{{asset('assets/js/parallax.js')}}"></script>

    <!-- Script -->
    <script src="{{asset('assets/js/script.js')}}"></script>
</body>

</html>