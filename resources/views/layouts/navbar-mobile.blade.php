<style>
    
    .tf-tab .menu-tab .active{
        background-color: var(--color-bleu) !important;
    }
    .icon-call-calling{
        color: var(--color-bleu) !important;
    }
</style>
<div class="menu-mobile-popup">
    <div class="modal-menu__backdrop"></div>
    <div class="widget-filter">

        <div class="mobile-header">
            <div >
                <a href="/">
                    <img class="site-logo" style="width: 80px !important; height:80px !important;" src="{{asset('assets/images/logo-white.png')}}" alt="Logo"/>
                </a>
            </div>

        <a class="title-button-group"><i class="icon-close"></i></a>

        </div>

        <div class="tf-tab">
            <div class="menu-tab">
                <div class="user-tag active">Menu</div>
                <div class="user-tag">Categories</div>
            </div>

            <div class="content-tab">

                <div class="header-ct-center menu-moblie">
                    <div class="nav-wrap">
                        <nav class="main-nav mobile">
                            <ul id="menu-primary-menu" class="menu">
                                @auth
                                    <li class="menu-item menu-item-mobile">
                                        <a href="/">Accueil</a>
                                    </li>
                                    <li class="menu-item menu-item-mobile">
                                        <a href="/about">A Propos</a>
                                    </li>
                                    <li class="menu-item menu-item-mobile">
                                        <a href="/services">Trouvez un service</a>
                                    </li>
                                    <li class="menu-item menu-item-mobile">
                                        <a href="#">Blog</a>
                                    </li>
                                    <li class="menu-item menu-item-mobile">
                                        <a href="/contact">Contact</a>
                                    </li>
                                @endauth

                                @guest
                                    <li class="menu-item menu-item-mobile">
                                        <a href="/">Accueil</a>
                                    </li>
                                    <li class="menu-item menu-item-mobile">
                                        <a href="/about">A Propos</a>
                                    </li>
                                    <li class="menu-item menu-item-mobile">
                                        <a href="/services">Trouvez un service</a>
                                    </li>
                                    <li class="menu-item menu-item-mobile">
                                        <a href="/contact">Contact</a>
                                    </li>
                                    <li class="menu-item menu-item-mobile">
                                        <a href="/login">Se Connecter</a>
                                    </li>
                                    <li class="menu-item menu-item-mobile">
                                        <a href="/inscription">S'inscrire</a>
                                    </li>
                                @endguest




                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="categories">
                    <div class="sub-categorie-mobile">
                        <ul class="pop-up">
                            @foreach ($categories as $categorie )
                            <li style="font-size: 18px;" class="mb-3">
                                <a class="text-uppercase" href="#"><i class="{{$categorie->icones}}" style="margin-right: 10px; color:#fc950d !important;"></i>{{$categorie->libelle}}</a>
                            </li>
                        @endforeach
                        </ul>
                    </div>

                </div>

            </div>

        </div>





    <div class="mobile-footer">
        <div class="icon-infor d-flex aln-center">
        <div class="icon">
            <span class="icon-call-calling"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
        </div>
        <div class="content">
            <p>Besoin de nous ?</p>
            <h6><a href="tel:0758265650">(+225) 0758265650</a></h6>
        </div>
    </div>
        <div class="wd-social d-flex aln-center">
        <ul class="list-social d-flex aln-center">
            <li><a href="#"><i class="icon-facebook"></i></a></li>
            <li><a href="#"><i class="icon-twitter"></i></a></li>
            <li><a href="#"><i class="icon-youtube"></i></a></li>
        </ul>
    </div>
    </div>
    </div>

</div>
