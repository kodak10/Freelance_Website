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
                                                @foreach ($categorie->services as $service )
                                                <div class="one-third">

                                                    <div class="h6 cat-title"><a href="{{ route('serviceDetail.show', ['slug' => $service->libelle]) }}">{{$service->libelle}}</a></div>
                                                    {{-- <ul class="ps-0 mb40">
                                                        @foreach ($service->services as $service )
                                                            <li><a href="#">{{$service->libelle}}</a></li>
                                                        @endforeach
                                                    </ul> --}}
                                                </div>
                                                @endforeach
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
                            <li> <a href="/about"><span class="title">A Propos</span></a>
                            <li><a href="/services">Touver un service</a></li>
                            <li><a href="/blog">Blog</a></li>
                            <li><a href="#">Forum</a></li>
                            <li> <a class="list-item" href="/contact">Contact</a></li>

                        </ul>

                        <a class="login-info bdrl1 pl15-lg pl30"><span class="flaticon-loupe"></span></a>
                        <a class="login-info mr15-lg mr30" href="/login">Se Connecter</a>
                        <a class="ud-btn btn-white add-joining" href="/register">Nous Rejoindre</a>

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
        <li> <a href="/about"><span class="title">A Propos</span></a>
        <li><a href="/services">Touver un service</a></li>
        <li><a href="/blog">Blog</a></li>
        <li><a href="#">Forum</a></li>
        <li> <a class="list-item" href="/contact">Contact</a></li>
        <li> <a class="list-item" href="/login">Se Connecter</a></li>
        <li> <a class="list-item" href="/register">S'inscrire</a></li>

      </ul>
    </nav>
  </div>