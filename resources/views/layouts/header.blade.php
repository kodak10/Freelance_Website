<style>
    .fa-solid{
        font-size: 18px;
    }
    .sub-account-item a{
        font-weight: 800;
        font-size: 16px;
    }
   
</style>
<header id="header" class="header header-default style-absolute header-fixed">
    <div class="tf-container ct2">
    <div class="row">
        <div class="col-md-12">
        <div class="sticky-area-wrap">
            <div class="header-ct-left">
            <div >
                <a href="/">
                <img class="site-logo" style="width: 100px !important; height:100px !important;" src="{{asset('assets/images/logo-white.png')}}" alt="Logo"/>
                </a>
            </div>
            <div class="categories">
                <a href="#"><span class="icon-grid"></span>Categories</a>
                <div class="sub-categorie">
                <ul class="pop-up">
                    @foreach ($categories as $categorie )
                        <li>
                            <a class="text-uppercase" href="#"><i class="{{$categorie->icones}}" style="margin-right: 10px !important;"></i>{{$categorie->libelle}}</a>
                        </li>
                    @endforeach


                </ul>
                </div>
            </div>
            </div>

            <div class="header-ct-center">
                <div class="nav-wrap">
                    @include('layouts.navbar-desktop')
                </div>
            </div>

            <div class="header-ct-right">

                @auth

                <div class="header-customize-item account">
                    
                    @if (auth()->user()->hasRole('client'))
                    <img src="{{ asset('assets/images/profil/' . Auth::user()->client->photo) }} " style="width: 100px !important; " alt="logo profil" />
                        <div class="name">
                            {{Auth::user()->name}}<span class="icon-keyboard_arrow_down"></span>
                        </div>
                        <div class="sub-account">
                        <div class="sub-account-item">
                            <a href="/user"><span class="icon-dashboard"></span>Menu Général</a>
                        </div>

                        <div class="sub-account-item">
                            <a href="/user/profil/edit"><span class="icon-mypackage"></span>Parametrage du compte</a>
                        </div>

                        <div class="sub-account-item">
                            <a href="#"><span class="icon-chat"></span>Messages</a>
                        </div>

                        <div class="sub-account-item">
                            <a href="javascript:void(0)"  onclick="event.preventDefault(); document.getElementById('logout-form').submit()">

                                <span class="icon-log-out"></span> Se Déconnecter</a>
                                <form id="logout-form" action="{{route('logout')}}" method="POST" style="">
                                    @csrf
                                </form>
                        </div>

                    @elseif(auth()->user()->hasRole('compagny'))
                    <img src="{{ asset('assets/images/profil/' . Auth::user()->compagny->photo) }}" style="width: 100px !important; ;" alt="logo profil" />

                        <div class="name">
                            {{Auth::user()->name}}<span class="icon-keyboard_arrow_down"></span>
                        </div>
                        <div class="sub-account">
                        <div class="sub-account-item">
                            <a href="/compagny"><span class="icon-dashboard"></span>Menu Général</a>
                        </div>

                        <div class="sub-account-item">
                            <a href="/compagny/profil/edit"><span class="icon-mypackage"></span>Parametrage du compte</a>
                        </div>
                        <div class="sub-account-item">
                            <a href="/compagny/service/create"><span class="icon-submit"></span>Poster un service</a>
                        </div>
                        <div class="sub-account-item">
                            <a href="/compagny/service"><span class="icon-work"></span>Mes Services</a>
                        </div>
                        <div class="sub-account-item">
                            <a href="#"><span class="icon-chat"></span>Messages</a>
                        </div>

                        <div class="sub-account-item">
                            <a href="javascript:void(0)"  onclick="event.preventDefault(); document.getElementById('logout-form').submit()">

                                <span class="icon-log-out"></span> Se Déconnecter</a>
                                <form id="logout-form" action="{{route('logout')}}" method="POST" style="">
                                    @csrf
                                </form>
                            {{-- <a href="/dashboard-entreprise"><span class="icon-dashboard"></span>Menu Général</a> --}}
                        </div>
                    @elseif(auth()->user()->hasRole('serviceClient'))
                        <img src="{{ asset('assets/images/profil/' . Auth::user()->serviceClient->photo) }}" style="width: 100px !important;" alt="logo profil" />

                        <div class="name">
                            {{Auth::user()->name}}<span class="icon-keyboard_arrow_down"></span>
                        </div>
                        <div class="sub-account">
                        <div class="sub-account-item">
                            <a href="/administration"><span class="icon-dashboard"></span>Menu Général</a>
                        </div>                    
                        @else
                            <p>Erreur d'authentification</p>
                    @endif




                </div>
                @endauth

                @guest
                    <div class="header-customize-item button mr-3">
                        <a href="/login">Se Connecter</a>
                    </div>
                    <div class="header-customize-item button btn_registration">
                        <a href="/inscription">S'inscire</a>
                    </div>
                @endguest






            </div>

            <div class="nav-filter">
                <div class="nav-mobile"><span></span></div>
            </div>
        </div>
        </div>
    </div>
    </div>
</header>
