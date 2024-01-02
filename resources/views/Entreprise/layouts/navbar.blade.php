<style>
    .logo{
        width: 100px;
        height: 100px;
    }
    .photo{
        width: 60px;
        height: 60px;
        border-radius: 100px;

    }
</style>

<header class="header-nav nav-innerpage-style menu-home4 dashboard_header main-menu">
    <!-- Ace Responsive Menu -->
    <nav class="posr">
        <div class="container-fluid pr30 pr15-xs pl30 posr menu_bdrt1">
            <div class="row align-items-center justify-content-between">
                <div class="col-6 col-lg-auto">
                    <div class="text-center text-lg-start d-flex align-items-center">
                        <div class="dashboard_header_logo position-relative me-2 me-xl-5">
                            <a href="/" class="logo"><img src="{{asset('assets/website/images/logo-white.png')}}" class="logo" alt=""></a>
                        </div>
                        <div class="fz20 ml90">
                            <a href="#" class="dashboard_sidebar_toggle_icon vam"><img src="{{asset('assets/images/dashboard-navicon.svg')}}" alt="ElBaraGroup"></a>
                        </div>
                        <a class="login-info d-block d-xl-none ml40 vam" data-bs-toggle="modal" href="#exampleModalToggle" role="button"><span class="flaticon-loupe"></span></a>
                        <div class="ml40 d-none d-xl-block">
                            <div class="search_area dashboard-style">
                                <input type="text" class="form-control border-0" placeholder="Rechercher vous quelque chose">
                                <label><span class="flaticon-loupe"></span></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-auto">
                    <div class="text-center text-lg-end header_right_widgets">
                        <ul class="dashboard_dd_menu_list d-flex align-items-center justify-content-center justify-content-sm-end mb-0 p-0">
                            <li class="d-none d-sm-block">
                                <a class="text-center mr5 text-thm2 dropdown-toggle fz20" type="button" data-bs-toggle="dropdown" href="#"><span class="flaticon-notification"></span></a>
                                <div class="dropdown-menu">
                                    <div class="dboard_notific_dd px30 pt10 pb15">
                                        <div class="notif_list d-flex align-items-center bdrb1 pb15 mb10">
                                            <img src="{{asset('assets/images/resource/notif-1.png')}}" alt="">
                                            <div class="details ml10">
                                                <p class="text mb-0">Information de profil</p>
                                                <p class="text mb-0">Mise à jour</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </li>
                            <li class="d-none d-sm-block">
                                <a class="text-center mr5 text-thm2 dropdown-toggle fz20" type="button" data-bs-toggle="dropdown" href="#"><span class="flaticon-mail"></span></a>
                                <div class="dropdown-menu">
                                    <div class="dboard_notific_dd px30 pt20 pb15">
                                        <div class="notif_list d-flex align-items-start bdrb1 pb25 mb10">
                                            <img class="img-2" src="images/testimonials/testi-1.png" alt="">
                                            <div class="details ml15">
                                            <p class="dark-color fw500 mb-2">Douffi Alexandre</p>
                                            <p class="text mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                            <p class="mb-0 text-thm">Il y' a 4 heures</p>
                                            </div>
                                        </div>

                                        <div class="d-grid">
                                            <a href="#" class="ud-btn btn-thm w-100">Voir tous les messages<i class="fal fa-arrow-right-long"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="user_setting">
                                <div class="dropdown">
                                    <a class="btn" href="#" data-bs-toggle="dropdown">
                                       
                                        
                                        <img src="{{ asset('storage/assets/images/profil/' . Auth::user()->compagny->photo) }}" alt="Photo de profil" class="photo">

                                        
                                    </a>
                                    <div class="dropdown-menu">
                                        <div class="user_setting_content">
                                            <a class="dropdown-item" href="javascript:void(0)"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
                                                    <i class="flaticon-logout mr15"></i>Se Déconnecter</a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="">
                                                        @csrf
                                                    </form>


                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>


<!-- Mobile Nav  -->
<div id="page" class="mobilie_header_nav stylehome1">
    <div class="mobile-menu">
        <div class="header bdrb1">
            <div class="menu_and_widgets">
                <div class="mobile_menu_bar d-flex justify-content-between align-items-center">
                    <a class="mobile_logo" href="#"><img src="{{asset('assets/images/header-logo.png')}}" class="logo" alt=""></a>
                </div>
            </div>
        </div>
    </div>


</div>