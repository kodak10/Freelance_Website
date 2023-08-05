<!-- Main Header Nav -->
<header class="header-nav nav-homepage-style stricky main-menu">
    <!-- Ace Responsive Menu -->
    <nav class="posr">
      <div class="container-fluid posr menu_bdrt1 px30">
        <div class="row align-items-center justify-content-between">
          <div class="col-auto px-0">
            <div class="d-flex align-items-center justify-content-between">
              <div class="logos br-white-light pr30 pr5-xl">
                <a class="header-logo logo1" href="/"><img src="" alt="Logo"></a>
                <a class="header-logo logo2" href="/"><img src="" alt="Logo"></a>
              </div>

              <div class="home1_style">

                <!-- Categorie list Mega Dropdown-->
                <div id="mega-menu">
                  <a class="btn-mega fw500" href="#"><span class="pl30 pl10-xl pr5 fz15 vam flaticon-menu"></span> Categories</a>
                  <ul class="menu ps-0">
                    @foreach ($categories as $categorie )
                        <li> <a class="dropdown" href="#"> <span class="menu-icn flaticon-developer"></span> <span class="menu-title">{{$categorie->libelle}}</span> </a>
                            <div class="drop-menu d-flex justify-content-between">
                                @foreach ($categorie->secteurs as $secteur )
                                <div class="one-third">

                                        <div class="h6 cat-title">{{$secteur->libelle}}</div>
                                        <ul class="ps-0 mb40">
                                            @foreach ($secteur->services as $service )
                                                <li><a href="#">{{$service->libelle}}</a></li>
                                            @endforeach
                                        </ul>

                                </div>
                                @endforeach
                            </div>
                        </li>
                    @endforeach
                  </ul>
                </div>
                <!-- End -->

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

                    <!-- <li class="visible_list"> <a class="list-item" href="#"><span class="title">Users</span></a>
                    <ul>
                      <li> <a href="#"><span class="title">Dashboard</span></a>
                        <ul>
                          <li><a href="page-dashboard.html">Dashboard</a></li>
                          <li><a href="page-dashboard-proposal.html">Proposal</a></li>
                          <li><a href="page-dashboard-save.html">Saved</a></li>
                          <li><a href="page-dashboard-message.html">Message</a></li>
                          <li><a href="page-dashboard-reviews.html">Reviews</a></li>
                          <li><a href="page-dashboard-invoice.html">Invoice</a></li>
                          <li><a href="page-dashboard-payouts.html">Payouts</a></li>
                          <li><a href="page-dashboard-statement.html">Statement</a></li>
                          <li><a href="page-dashboard-manage-service.html">Manage Service</a></li>
                          <li><a href="page-dashboard-add-service.html">Add Services</a></li>
                          <li><a href="page-dashboard-manage-jobs.html">Manage Jobs</a></li>
                          <li><a href="page-dashboard-manage-project.html">Manage Project</a></li>
                          <li><a href="page-dashboard-create-project.html">Create Project</a></li>
                          <li><a href="page-dashboard-profile.html">My Profile</a></li>
                        </ul>
                      </li>
                      <li> <a href="#"><span class="title">Employee</span></a>
                        <ul>
                          <li><a href="page-employee-v1.html">Employee V1</a></li>
                          <li><a href="page-employee-v2.html">Employee V2</a></li>
                          <li><a href="page-employee-single.html">Employee Single</a></li>
                        </ul>
                      </li>
                      <li> <a href="#"><span class="title">Freelancer</span></a>
                        <ul>
                          <li><a href="page-freelancer-v1.html">Freelancer V1</a></li>
                          <li><a href="page-freelancer-v2.html">Freelancer V2</a></li>
                          <li><a href="page-freelancer-v3.html">Freelancer V3</a></li>
                          <li><a href="page-freelancer-single.html">Freelancer Single</a></li>
                        </ul>
                      </li>
                      <li> <a href="page-become-seller.html"><span class="title">Become Seller</span></a></li>
                    </ul>
                  </li> -->

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

            <a class="mobile_logo" href="/"><img src="{{asset('assets/images/header-logo.svg')}}" alt=""></a>


            <div class="right-side text-end">
              <a class="text-white" href="/register">Nous Réjoindre</a>
              <a class="menubar ml30" href="#menu"><img src="" alt=""></a>
            </div>
          </div>
        </div>
        <div class="posr"><div class="mobile_menu_close_btn"><span class="far fa-times"></span></div></div>
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
      </ul>
    </nav>
  </div>