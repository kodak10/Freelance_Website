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
              <h2 class="mb25">Rejoignez la meilleure place de marché au monde <br class="d-none d-xl-block">pour les travailleurs</h2>
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
                  <h2 class="title">De nombreuses personnes de <br class="d-none d-lg-block"> talent à portée de doigts</h2>
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
              <p class="text-thm2 fz15 mb25">Des services de qualité qui sont <br class="d-none d-md-block"> en adequation avec votre vision.</p>
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
        <div class="container">
          <div class="row">
            <div class="col-lg-6 mx-auto wow fadeInUp" data-wow-delay="300ms">
              <div class="main-title text-center">
                <h2>Témoignages</h2>
                <p class="paragraph"> Découvrez ce qu'une multitude ont écrit jusqu'ici, et partagez votre propre expérience..</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-8 m-auto wow fadeInUp" data-wow-delay="500ms">
              <div class="testimonial-style2">
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade" id="pills-1st" role="tabpanel" aria-labelledby="pills-1st-tab">
                    <div class="testi-content text-md-center">
                      <span class="icon fas fa-quote-left"></span>
                      <h4 class="testi-text">"Travailler avec Kodak a été une expérience incroyable ! Sa créativité, son professionnalisme et sa réactivité ont été inestimables pour mon projet. Je suis extrêmement satisfait des résultats obtenus et je le recommande vivement. Un grand merci . "</h4>
                      <h6 class="name">Donald merise</h6>
                      <p class="design">Product Manager, Apple Inc</p>
                    </div>
                  </div>
                  <div class="tab-pane fade show active" id="pills-2nd" role="tabpanel" aria-labelledby="pills-2nd-tab">
                    <div class="testi-content text-md-center">
                      <span class="icon fas fa-quote-left"></span>
                      <h4 class="testi-text">"Angislad est un vrai professionnel ! Il a su capturer l'essence de mon projet et l'a transformé en quelque chose d'extraordinaire. Son expertise et son dévouement ont été essentiels pour atteindre mes objectifs. Je suis ravi du résultat et je le recommande sans hésitation. Merci pour un travail exceptionnel . "</h4>
                      <h6 class="name">Valish Trick</h6>
                      <p class="design">Product Manager, Apple Inc</p>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="pills-3rd" role="tabpanel" aria-labelledby="pills-3rd-tab">
                    <div class="testi-content text-md-center">
                      <span class="icon fas fa-quote-left"></span>
                      <h4 class="testi-text">"Je tiens à exprimer ma profonde gratitude envers Skyson pour son travail remarquable. Il a su faire preuve d'une grande compétence et d'une réelle passion pour mon projet. Les délais ont été respectés et le résultat final a dépassé toutes mes attentes. Je recommande vivement Harden à quiconque cherche un professionnel talentueux et fiable. Un grand merci pour cette collaboration fructueuse . "</h4>
                      <h6 class="name"> Drew clack</h6>
                      <p class="design">Product Manager, Apple Inc</p>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="pills-4th" role="tabpanel" aria-labelledby="pills-4th-tab">
                    <div class="testi-content text-md-center">
                      <span class="icon fas fa-quote-left"></span>
                      <h4 class="testi-text">"Wow ! Walker a été absolument fantastique ! Sa créativité, son expertise et son professionnalisme ont été la clé du succès de mon projet. Il a su comprendre mes besoins dès le départ et a livré un travail d'une qualité exceptionnelle. Je suis enchanté du résultat et je ne peux que le recommander chaudement. Merci Walker pour cette expérience incroyable . "</h4>
                      <h6 class="name">Brandom fish</h6>
                      <p class="design">Product Manager, Apple Inc</p>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="pills-5th" role="tabpanel" aria-labelledby="pills-5th-tab">
                    <div class="testi-content text-md-center">
                      <span class="icon fas fa-quote-left"></span>
                      <h4 class="testi-text">"Je suis comblé par le travail de Maurane ! Son talent et son engagement ont rendu mon projet non seulement possible, mais également exceptionnel. Sa communication fluide et sa disponibilité ont été très appréciées tout au long du processus. Je suis enchanté des résultats obtenus et je recommande vivement Maurane à quiconque cherche un expert compétent et dévoué. Un grand merci pour cette collaboration fructueuse. "</h4>
                      <h6 class="name">Alex Fresh</h6>
                      <p class="design">Product Manager, Apple Inc</p>
                    </div>
                  </div>
                </div>
                <div class="tab-list position-relative">
                  <ul class="nav nav-pills justify-content-md-center" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link ps-0" id="pills-1st-tab" data-bs-toggle="pill" data-bs-target="#pills-1st" type="button" role="tab" aria-controls="pills-1st" aria-selected="true"><img src="{{asset('assets/images/testimonials/testi-1.png')}}" alt=""></button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="pills-2nd-tab" data-bs-toggle="pill" data-bs-target="#pills-2nd" type="button" role="tab" aria-controls="pills-2nd" aria-selected="false"><img src="{{asset('assets/images/testimonials/testi-2.png')}}" alt=""></button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-3rd-tab" data-bs-toggle="pill" data-bs-target="#pills-3rd" type="button" role="tab" aria-controls="pills-3rd" aria-selected="false"><img src="{{asset('assets/images/testimonials/testi-3.png')}}" alt=""></button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-4th-tab" data-bs-toggle="pill" data-bs-target="#pills-4th" type="button" role="tab" aria-controls="pills-4th" aria-selected="false"><img src="{{asset('assets/images/testimonials/testi-4.png')}}" alt=""></button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link pe-0" id="pills-5th-tab" data-bs-toggle="pill" data-bs-target="#pills-5th" type="button" role="tab" aria-controls="pills-5th" aria-selected="false"><img src="{{asset('assets/images/testimonials/testi-5.png')}}" alt=""></button>
                    </li>
                  </ul>
                </div>
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
              <p class="text mb-0">Avant de chercher des freelancers, assurez-vous de comprendre clairement vos besoins et objectifs pour le projet. Cela vous aidera à trouver des freelancers<br class="d-none d-md-block"> dont les compétences correspondent à vos attentes...</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="iconbox-style9 default-box-shadow1 bgc-white p40 bdrs12 position-relative mb30">
              <span class="icon fz40 flaticon-secure"></span>
              <h4 class="iconbox-title mt20">payer en toute sécurité</h4>
              <p class="text mb-0">Toutes les transactions sont effectuées sur la plateforme freeio. Qu'un client utilise une carte de crédit, PayPal ou un autre moyen de paiement, nous nous occupons de tout et assurons<br class="d-none d-md-block">  la sécurité de vos informations personnelles....</p>
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
              <p class="paragraph mt10">En quête de savoir ? Nos questions vous guideront vers les réponses.</p>
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
                      <div class="accordion-body">Votre satisfaction, notre priorité. Payez en toute facilité avec nos multiples options : cartes, PayPal, virements... Profitez de notre plateforme pour un service clientèle de premier ordre et des paiements sécurisés à chaque étape de votre projet avec nos freelances experts </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Puis-je annuler à tout moment?</button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="accordion-body">Sur Freeio, quand une commande est annulée les fonds sont crédités sur le solde Freeio du client. Freeio ne traite pas automatiquement les remboursements au prestataire de paiement après l'annulation d'une commande.</div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Comment obtenir un reçu pour mon achat?</button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                      <div class="accordion-body">La copie de la facture est disponible sur la page de commande et en cliquant sur l'onglet "détails". À partir de là vous tombez sur le lien "afficher la facture" qui permet d'ouvrir la facture correspondant à cet achat. Si vous n'arrivez pas à trouver votre facture, vous pouvez contacter notre service client.</div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">De quelle licence ai-je besoin?</button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                      <div class="accordion-body">En achetant une « Licence d'utilisation commerciale » sur Freeio, le prestataire vous octroie une licence perpétuelle, exclusive, non transférable, mondiale pour utiliser la livraison achetée à des fins commerciales permises. Sauf indication contraire sur la page / description du service du prestataire, tous les droits de propriété intellectuelle de la livraison achetée vous sont par la présente attribués.</div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Comment accéder à un thème que j'ai acheté?</button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                      <div class="accordion-body">Un simple clic pour accéder à votre thème premium ! Connectez-vous à votre compte sur notre plateforme de freelance, trouvez votre thème acheté et téléchargez-le en un instant pour donner vie à votre site web de rêve </div>
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