<!-- Main Header Nav -->
<style>
    i.fa-solid.fa-bars {
        font-size: 25px;
        color: #ffff;
    }
    .logo{
        width: 100px;
        height: 100px;
    }
    .ace-responsive-menu li a:hover{
        color: #5BBB7B !important;
    }
    #login_link:hover{
        color: #5BBB7B !important;
    }
</style>
<header class="header-nav nav-homepage-style stricky main-menu">
    <nav class="posr">
        <div class="container-fluid posr menu_bdrt1 px30">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto px-0">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="logos br-white-light pr30 pr5-xl">
                            <a class="header-logo logo1" href="/"><img src="{{asset('assets/images/header-logo.png')}}" class="logo" alt="Logo"></a>
                            <a class="header-logo logo2" href="/"><img src="{{asset('assets/images/header-logo.png')}}" class="logo" alt="Logo"></a>
                        </div>
                        <div class="home1_style">

                            <div id="mega-menu">
                                <a class="btn-mega fw500" href="#"><span class="pl30 pl10-xl pr5 fz15 vam flaticon-menu"></span> Categories</a>
                                <ul class="menu ps-0">
                                    @foreach ($categories as $categorie )
                                        <li> <a class="dropdown" href="#"> <span class="menu-icn flaticon-developer"></span> <span class="menu-title">{{$categorie->libelle}}</span> </a>
                                            <div class="drop-menu d-flex justify-content-between">
                                                <div class="one-third">
                                                    <ul class="ps-0 mb40">
                                                        @foreach ($categorie->services as $service )
                                                            <li><a href="{{ route('EntrepriseService.show', ['slug' => $service->id]) }}">{{$service->libelle}}</a></li>

                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-auto px-0">
                    <div class="d-flex align-items-center">

                        <!-- nav Items -->
                        <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                            <li><a href="/">Accueil</a></li>
                            <li><a href="/about"><span class="title">A Propos</span></a>
                            <li><a href="/services">Touver un service</a></li>
                            <li><a class="list-item" href="/contact">Contact</a></li>

                        </ul>
                        @auth

                            @if (auth()->user()->hasRole('user'))
                                <li><a href="/user" class="list-item">Aller au tableau de bord</a></li>
                             @elseif(auth()->user()->hasRole('compagny'))
                                <li><a href="/compagny" class="list-item">Aller au tableau de bord</a></li>
                            @elseif(auth()->user()->hasRole('serviceClient'))
                                <li><a href="/administration" class="list-item">Aller au tableau de bord</a></li>
                            @else
                                <p>Erreur d'authentification</p>
                            @endif

                            @else

                                <li><a class="login-info mr15-lg mr30" href="/login" id="login_link"><strong>Se Connecter</strong></a></li>
                                <li><a class="ud-btn btn-white add-joining" href="/register"><strong>Nous Rejoindre</strong></a></li>

                        @endauth

                    </div>
                </div>
            </div>
        </div>
    </nav>
  </header>


  <div class="hiddenbar-body-ovelay"></div>

  <!-- Mobile Nav  -->
  <div id="page" class="mobilie_header_nav stylehome1">
    <div class="mobile-menu">
      <div class="header bb-white-light">
        <div class="menu_and_widgets">
          <div class="mobile_menu_bar d-flex justify-content-between align-items-center">

            <a class="mobile_logo" href="/"><img src="{{asset('assets/images/header-logo.png')}}" class="logo" alt="Logo"></a>


            <div class="right-side text-end">
              <a class="text-white" href="/register">Nous Rejoindre</a>
              <a class="menubar ml30" href="#menu"><i class="fa-solid fa-bars"></i></a>
            </div>
          </div>
        </div>
        <div class="posr"><div class="mobile_menu_close_btn"><span class="far fa-times" style="font-size: 21px; color:#ffffff !important;"></span></div></div>
      </div>
    </div>

    <!-- /.mobile-menu -->
    <nav id="menu" class="">
      <ul>


            <li><a href="/">Accueil</a></li>
            <li><a href="/about"><span class="title">A Propos</span></a></li>
            <li><a href="/services">Touver un service</a></li>
            <li><a class="list-item" href="/contact">Contact</a></li>

            @auth
                @if(auth()->user()->hasRole('user'))
                    <li><a href="/user">Aller au tableau de bord</a></li>
                @elseif(auth()->user()->hasRole('compagny'))
                    <li><a href="/compagny">Aller au tableau de bord</a></li>
                @elseif(auth()->user()->hasRole('serviceClient'))
                    <li><a href="/administration">Aller au tableau de bord</a></li>
                @else
                    <p>Erreur d'authentification</p>
                @endif

                @else
                <li> <a class="list-item" href="/login">Se Connecter</a></li>
                <li> <a class="list-item" href="/register">S'inscrire</a></li>
            @endauth




      </ul>
    </nav>
  </div>