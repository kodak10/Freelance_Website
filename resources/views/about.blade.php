@extends('layouts.app')
@section('content')

<style>

    header.nav-homepage-style {
        background-color: transparent;
        border-bottom: 1px solid rgba(255, 255, 255, 0.07);
        padding: 7px 0;
        position: relative;
        width: 100%;
        z-index: 3;
        color: #000000 !important;
    }
    header.nav-homepage-style a{
        color: #000000 !important;
    }
    header.nav-homepage-style.stricky.stricky-fixed{
        background-color: #ffffff;
        border-bottom: 1px solid #E9E9E9;
        -webkit-box-shadow: 0px 5px 20px rgba(91, 187, 123, 0.15);
        -moz-box-shadow: 0px 5px 20px rgba(91, 187, 123, 0.15);
        -o-box-shadow: 0px 5px 20px rgba(91, 187, 123, 0.15);
        box-shadow: 0px 5px 20px rgba(91, 187, 123, 0.15);
        z-index: 9;
    }
    .btn-white, .btn-white2 {
        background-color: #ffffff;
        border: 2px solid #000000;
    }
    header.nav-homepage-style .sidemenu-btn, header.nav-homepage-style .login-info {
        color: #000000 !important;
        font-weight: 600;
    }

</style>

  <div class="body_content">
    <!-- Breadcumb Sections -->
    <section class="breadcumb-section mt40">
      <div class="cta-about-v1 mx-auto maxw1700 pt120 pb120 bdrs16 position-relative overflow-hidden d-flex align-items-center mx20-lg">
        <div class="container">
          <div class="row">
            <div class="col-xl-5">
              <div class="position-relative">
                <h2 class="text-white">A propos</h2>
                <p class="text-white mb30">Offrez à votre visiteur une expérience en ligne fluide avec un design UX solide</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About Section Area -->
    <section class="our-about pb0 pt60-lg">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 col-xl-6">
            <div class="about-img mb30-sm wow fadeInRight" data-wow-delay="300ms">
              <img class="w100" src="{{asset('assets/images/about/about-1.jpg')}}" alt="">
            </div>
          </div>
          <div class="col-md-6 col-xl-5 offset-xl-1">
            <div class="position-relative wow fadeInLeft" data-wow-delay="300ms">
              <h2 class="mb25">rejoignez la meilleure place de marché au monde <br class="d-none d-xl-block">pour les travailleurs</h2>
              <p class="text mb25">C'est un fait établi depuis longtemps qu'un lecteur sera distrait par le contenu lisible d'une page lorsqu'il regarde sa mise en page. L'intérêt d'utiliser Lorem Ipsum est qu'il a une distribution plus ou moins normale des lettres, par opposition à l'utilisation de "Contenu ici, contenu ici", ce qui donne l'impression qu'il est lisible en anglais..</p>
              <div class="list-style2">
                <ul class="mb20">
                  <li><i class="far fa-check"></i>Connectez-vous à des pigistes ayant une expérience commerciale éprouvée</li>
                  <li><i class="far fa-check"></i>Faites-vous associer au talent parfait par un responsable de la réussite client</li>
                  <li><i class="far fa-check"></i>Qualité inégalée des emplois à distance, hybrides et flexibles</li>
                </ul>
              </div>
              <a href="#" class="ud-btn btn-thm-border">Trouver des talents<i class="fal fa-arrow-right-long"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Funfact -->
    <section class="pb0 pt60">
      <div class="container maxw1600 bdrb1 pb60">
        <div class="row justify-content-center wow fadeInUp" data-wow-delay="300ms">
          <div class="col-6 col-md-3">
            <div class="funfact_one text-center">
              <div class="details">
                <ul class="ps-0 mb-0 d-flex justify-content-center">
                  <li><div class="timer">834</div></li>
                  <li><span>M</span></li>
                </ul>
                <p class="text mb-0">Total Freelancer</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="funfact_one text-center">
              <div class="details">
                <ul class="ps-0 mb-0 d-flex justify-content-center">
                  <li><div class="timer">732</div></li>
                  <li><span>M</span></li>
                </ul>
                <p class="text mb-0">Avis positif</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="funfact_one text-center">
              <div class="details">
                <ul class="ps-0 mb-0 d-flex justify-content-center">
                  <li><div class="timer">90</div></li>
                  <li><span>M</span></li>
                </ul>
                <p class="text mb-0">Ordre reçu</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="funfact_one text-center">
              <div class="details">
                <ul class="ps-0 mb-0 d-flex justify-content-center">
                  <li><div class="timer">236</div></li>
                  <li><span>M</span></li>
                </ul>
                <p class="text mb-0">Projets terminés</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Banner -->
    <section class="p-0">
      <div class="cta-banner mx-auto maxw1600 pt120 pt60-lg pb90 pb60-lg position-relative overflow-hidden mx20-lg">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 col-xl-5 pl30-md pl15-xs wow fadeInRight" data-wow-delay="500ms">
              <div class="mb30">
                <div class="main-title">
                  <h2 class="title">De nombreux freelancers de <br class="d-none d-lg-block"> talent à portée de doigts</h2>
                </div>
              </div>
              <div class="why-chose-list">
                <div class="list-one d-flex align-items-start mb30">
                  <span class="list-icon flex-shrink-0 flaticon-badge"></span>
                  <div class="list-content flex-grow-1 ml20">
                    <h4 class="mb-1">Preuve de qualité</h4>
                    <p class="text mb-0 fz15">Vérifiez les échantillons de travail de n'importe quel pro, les avis des clients et la vérification <br class="d-none d-lg-block"> d'identité .</p>
                  </div>
                </div>
                <div class="list-one d-flex align-items-start mb30">
                  <span class="list-icon flex-shrink-0 flaticon-money"></span>
                  <div class="list-content flex-grow-1 ml20">
                    <h4 class="mb-1">Aucun frais jusqu'à ce que vous embauchiez</h4>
                    <p class="text mb-0 fz15">Interviewez les candidats potentiels pour votre travail, négociez les tarifs et ne payez que <br class="d-none d-lg-block"> pour le travail que vous approuvez.</p>
                  </div>
                </div>
                <div class="list-one d-flex align-items-start mb30">
                  <span class="list-icon flex-shrink-0 flaticon-security"></span>
                  <div class="list-content flex-grow-1 ml20">
                    <h4 class="mb-1">Sûr et sécurisé</h4>
                    <p class="text mb-0 fz15">Concentrez-vous sur votre travail en sachant que nous aidons à protéger vos données et votre vie privée. Nous sommes là avec une assistance 24h/24 et 7j/7 si vous en avez besoin.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-6 offset-xl-1 wow fadeInLeft" data-wow-delay="500ms">
              <div class="about-img"><img class="w100" src="{{asset('assets/images/about/about-6.jpg')}}" alt=""></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Funfact -->
    <section class="bgc-light-yellow pb90 pb30-md overflow-hidden maxw1700 mx-auto bdrs4">
      <img class="left-top-img wow zoomIn d-none d-lg-block" src="{{asset('assets/images/vector-img/left-top.png')}}" alt="">
      <img class="right-bottom-img wow zoomIn d-none d-lg-block" src="{{asset('assets/images/vector-img/right-bottom.png')}}" alt="">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 col-xl-4 offset-xl-1 wow fadeInRight" data-wow-delay="100ms">
            <div class="cta-style6 mb30-sm">
              <h2 class="cta-title mb25">Trouvez les talents nécessaires pour <br class="d-none d-lg-block">faire croître votre entreprise.</h2>
              <p class="text-thm2 fz15 mb25">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed <br class="d-none d-md-block"> do eiusmod tempor incididunt.</p>
              <a href="#" class="ud-btn btn-thm">Commencer <i class="fal fa-arrow-right-long"></i></a>
            </div>
          </div>
          <div class="col-md-6 col-xl-6 offset-xl-1 wow fadeInLeft" data-wow-delay="300ms">
            <div class="row align-items-center">
              <div class="col-sm-6">
                <div class="funfact-style1 bdrs16 text-center ms-md-auto">
                  <ul class="ps-0 mb-0 d-flex justify-content-center">
                    <li><div class="timer title mb15">4</div></li>
                    <li><span>.9/5</span></li>
                  </ul>
                  <p class="fz15 dark-color">Les clients évaluent  <br>les professionnels sur Freeio</p>
                </div>
                <div class="funfact-style1 bdrs16 text-center ms-md-auto">
                  <ul class="ps-0 mb-0 d-flex justify-content-center">
                    <li><div class="timer title mb15">96</div></li>
                    <li><span>%</span></li>
                  </ul>
                  <p class="fz15 dark-color">95% des clients sont satisfaits de voir leurs <br>freelances</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="funfact-style1 bdrs16 text-center">
                  <ul class="ps-0 mb-0 d-flex justify-content-center">
                    <li><div class="title mb15">Prix</div></li>
                  </ul>
                  <p class="fz15 dark-color">G2’s 2023 Meilleures <br>Récompenses logicielles</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Testimonials -->
    <section class="our-testimonial">
      <div class="container wow fadeInUp" data-wow-delay="300ms">
        <div class="row">
          <div class="col-lg-6 m-auto">
            <div class="main-title text-center">
              <h2 class="title">Ce que nos étudiants ont à dire</h2>
              <p class="paragraph mt10">Découvrez votre programme parfait dans nos cours.</p>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-xl-10 mx-auto">
            <div class="home2_testimonial_tabs position-relative">
              <div class="tab-content" id="pills-tabContent2">
                <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                  <div class="testimonial-style2 at-about2 text-center">
                    <div class="testi-content text-center">
                      <span class="icon fas fa-quote-left"></span>
                      <h4 class="testi-text">"Notre famille voyageait en train à grande vitesse entre les villes du Japon avec nos bagages - l'emplacement de cet hôtel a rendu cela si facile. Le prix Agoda était fantastique. "</h4>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                  <div class="testimonial-style2 at-about2 text-center">
                    <div class="testi-content text-center">
                      <span class="icon fas fa-quote-left"></span>
                      <h4 class="testi-text">"Notre famille voyageait en train à grande vitesse entre les villes du Japon avec nos bagages - l'emplacement de cet hôtel a rendu cela si facile. Le prix Agoda était fantastique. "</h4>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                  <div class="testimonial-style2 at-about2 text-center">
                    <div class="testi-content text-center">
                      <span class="icon fas fa-quote-left"></span>
                      <h4 class="testi-text">"Notre famille voyageait en train à grande vitesse entre les villes du Japon avec nos bagages - l'emplacement de cet hôtel a rendu cela si facile. Le prix Agoda était fantastique. "</h4>
                    </div>
                  </div>
                </div>
              </div>
              <ul class="nav justify-content-center" id="pills-tab2" role="tablist">
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                    <div class="thumb d-flex align-items-center">
                      <img class="rounded-circle" src="{{asset('assets/images/testimonials/1.jpg')}}" alt="1.jpg">
                      <h6 class="title ml30 ml15-xl mb-0">Albert Cole<br><small>Designer</small></h6>
                    </div>
                  </a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                    <div class="thumb d-flex align-items-center">
                      <img class="rounded-circle" src="{{asset('assets/images/testimonials/2.jpg')}}" alt="2.jpg">
                      <h6 class="title ml30 ml15-xl mb-0">Alison Dawn<br><small>WP Developer</small></h6>
                    </div>
                  </a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">
                    <div class="thumb d-flex align-items-center">
                      <img class="rounded-circle" src="{{asset('assets/images/testimonials/3.jpg')}}" alt="3.jpg">
                      <h6 class="title ml30 ml15-xl mb-0">Daniel Parker<br><small>Front-end Developer</small></h6>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Banner -->
    <section class="cta-banner-about2 mx-auto maxw1700 position-relative mx20-lg pt60-lg pb60-lg">
      <img class="cta-about2-img d-none d-xl-block" src="{{asset('assets/images/about/about-7.png')}}" alt="">
      <div class="container">
        <div class="row">
          <div class="col-md-11 wow fadeInUp" data-wow-delay="200ms">
            <div class="main-title">
              <h2 class="title text-capitalize">Besoin de faire quelque chose?</h2>
              <p class="text">Services les plus consultés et les plus vendus de tous les temps</p>
            </div>
          </div>
        </div>
        <div class="row wow fadeInDown" data-wow-delay="400ms">
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="iconbox-style9 default-box-shadow1 bgc-white p40 bdrs12 position-relative mb30">
              <span class="icon fz40 flaticon-cv"></span>
              <h4 class="iconbox-title mt20">Publier une offre d'emploi</h4>
              <p class="text mb-0">C'est gratuit et facile de publier une offre d'emploi.<br class="d-none d-md-block"> Remplissez simplement un titre, une description.</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="iconbox-style9 default-box-shadow1 bgc-white p40 bdrs12 position-relative mb30">
              <span class="icon fz40 flaticon-web-design"></span>
              <h4 class="iconbox-title mt20">Choisissez des freelancers</h4>
              <p class="text mb-0">C'est gratuit et facile de publier une offre d'emploi.<br class="d-none d-md-block"> Remplissez simplement un titre, une description.</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="iconbox-style9 default-box-shadow1 bgc-white p40 bdrs12 position-relative mb30">
              <span class="icon fz40 flaticon-secure"></span>
              <h4 class="iconbox-title mt20">payer en toute sécurité</h4>
              <p class="text mb-0">C'est gratuit et facile de publier une offre d'emploi.<br class="d-none d-md-block"> Remplissez simplement un titre, une description.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="pb70">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 m-auto wow fadeInUp" data-wow-delay="300ms">
            <div class="main-title text-center">
              <h2 class="title">Questions fréquemment posées</h2>
              <p class="paragraph mt10">Lorem ipsum dolor sit amet, consectetur.</p>
            </div>
          </div>
        </div>
        <div class="row wow fadeInUp" data-wow-delay="300ms">
          <div class="col-lg-8 mx-auto">
            <div class="ui-content">
              <div class="accordion-style1 faq-page">
                <div class="accordion" id="accordionExample">
                  <div class="accordion-item active">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Quels modes de paiement sont pris en charge?</button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="accordion-body">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus minus nemo ex omnis cumque, tempora recusandae ratione, dignissimos, commodi fuga quisquam et ad ut rem.</div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Puis-je annuler à tout moment?</button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="accordion-body">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia, nobis quas voluptate placeat aperiam obcaecati modi minima iure quae magni consequatur, assumenda sequi rem expedita..</div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Comment obtenir un reçu pour mon achat?</button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                      <div class="accordion-body">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia, nobis quas voluptate placeat aperiam obcaecati modi minima iure quae magni consequatur, assumenda sequi rem expedita..</div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">De quelle licence ai-je besoin?</button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                      <div class="accordion-body">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia, nobis quas voluptate placeat aperiam obcaecati modi minima iure quae magni consequatur, assumenda sequi rem expedita..</div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Comment accéder à un thème que j'ai acheté?</button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                      <div class="accordion-body">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia, nobis quas voluptate placeat aperiam obcaecati modi minima iure quae magni consequatur, assumenda sequi rem expedita..</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection