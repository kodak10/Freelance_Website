<!DOCTYPE html>
<html lang="fr">

<head>

    <title>Elbara Africa Group</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">


    <!-- Font -->
    <link rel="stylesheet" href="{{asset('assets/website/fonts/fonts.css')}}" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/website/stylesheets/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/website/stylesheets/boostrap-select.min.css')}}" />

    <!-- swiper slider -->
    <link rel="stylesheet" href="{{asset('assets/website/stylesheets/swiper-bundle.min.css')}}" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/website/stylesheets/shortcodes.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/website/stylesheets/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/website/stylesheets/jquery.fancybox.min.css')}}">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/website/stylesheets/colors/color1.css')}}" id="colors">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="{{asset('assets/website/images/favicon.png')}}">

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/website/stylesheets/responsive.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/flaticon.css')}}" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <style>
        :root {

--headings-color: #222222;
--body-text-color: #6B7177 ;
--color-bleu: #102a87;
--color-jaune:#fc950d ;
}
a:hover{
    color: var(--color-jaune);
}
.tf-button.style-1:hover {
    background: var(--color-jaune);
    color: #fff;
}
.features-job .job-archive-header h3 a:hover{
    color: var(--color-jaune)
}

        /* Définir l'animation */
        @keyframes zoomRotate {
            0% {
                transform: scale(1) rotate(0deg);
            }
            50% {
                transform: scale(1.1) rotate(10deg);
            }
            100% {
                transform: scale(1) rotate(0deg);
            }
        }

        /* Appliquer l'animation à l'image */
        .zoomRotateImage {
            transition: transform 0.5s ease-in-out;
        }
        /* Ajoutez l'effet au survol */
        .zoomRotateImage:hover {
            transform: scale(1.1) rotate(10deg);
        }
        .switcher-container{
            display: none;
        }
        .btn{
            background-color: var(--color-jaune) !important;

        }
        .btn:hover{
            background-color: var(--color-bleu) !important;
        }
        #scroll-top{
            background-color: var(--color-jaune) !important;
        }
        .header i{
            color: var(--color-jaune) !important;
        }
        .header.style-absolute .nav-filter .nav-mobile span{
            background-color: #000000 !important;
        }
        .header.style-absolute .nav-filter .nav-mobile::before{
            background-color: #000000 !important;
        }
        .nav-filter .nav-mobile span {
            background-color: #000000 !important;
        }
        .nav-filter .nav-mobile span:before {
            background-color: #000000 !important;
        }
        .sticky-area-wrap .header-ct-right .button:first-child{
            background-color: var(--color-jaune) !important;
            margin-right: 20px;
        }
       
        .sticky-area-wrap .header-ct-right .button a{
        border-color: var(--color-jaune) !important;
        }
        .sticky-area-wrap .header-ct-right .button a:hover{
        background-color: var(--color-bleu) !important;
        border-color: var(--color-bleu) !important;

        }
        #header.style-absolute #main-nav #menu-primary-menu>li:hover>a{
            color: var(--color-jaune) !important;
        }
        #menu-primary-menu>li>a:hover{
            color: var(--color-jaune) !important;
        }
        .btn_registration a{
            color: #000000 !important;
        }
        .tf-iconbox .box-content p {
            text-transform: none;
        }
    </style>
</head>

<body class="tf-popup-auto">

    <a id="scroll-top" ></a>

    <div class="preload preload-container">
        <div class="preload-logo">
            <div class="spinner"></div>
        </div>
    </div>

    {{-- <div class="wd-popup-form">

        <div class="modal-menu__backdrop"></div>
        <div class="content">
            <div class="content-left">
                <div class="thumb">
                    <img src="{{asset('assets/images/review/bg-popup.jpg')}}" alt="images">
                </div>
            </div>
            <div class="content-right">
                <a class="title-button-group">
                    <i class="icon-close"></i>
                </a>
                <h6>Bienvenue sur Elbaragroup Africa</h6>
                <p>Inscrivez-vous pour recevoir toutes les dernières offres et les promotions.</p>
                <form action="" class="mb-5">
                    <input type="text" placeholder="Email">
                    <div class="group-radio">
                        <input type="radio"><label>Eviter le message</label>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}

    @include('layouts.navbar-mobile')

    <div class="boxed">

        @include('layouts.header')

        @yield('content')

        @include('layouts.footer')

    </div>


    <script src="{{asset('assets/website/javascript/jquery.min.js')}}"></script>
    <script src="{{asset('assets/website/javascript/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/website/javascript/bootstrap.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

    <script src="{{asset('assets/website/javascript/boostrap-select.min.js')}}"></script>
    <script src="{{asset('assets/website/javascript/jquery.fancybox.js')}}"></script>
    <script src="{{asset('assets/website/javascript/parallax.js')}}"></script>
    <script src="{{asset('assets/website/javascript/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('assets/website/javascript/countto.js')}}"></script>
    <script src="{{asset('assets/website/javascript/wow.min.js')}}"></script>
    <script src="{{asset('assets/website/javascript/swiper.js')}}"></script>
    <script src="{{asset('assets/website/javascript/plugin.min.js')}}"></script>
    <script src="{{asset('assets/website/javascript/jquery.cookie.js')}}"></script>
    <script src="{{asset('assets/website/javascript/switcher.js')}}"></script>
    <script src="{{asset('assets/website/javascript/main.js')}}"></script>
    <script src="{{asset('assets/website/javascript/messages.js')}}"></script>
    <script src="{{asset('assets/website/javascript/password-addon.js')}}"></script>




</body>

</html>
