@extends('layouts.app')
@section('content')
<style>
  .header{
      margin-bottom: 2rem !important;
  }
  
 
  .btn-thm{
        background-color: var(--color-jaune) !important;
        border-color: var(--color-jaune) !important;
        color: #ffffff !important;
    }
    .btn-thm-border{
      border-color: var(--color-jaune) !important;
      color: var(--color-jaune) !important;
    }
    #header.style-absolute #main-nav #menu-primary-menu>li>a{
      color: #000000 !important;
    }
    #header.style-absolute #main-nav #menu-primary-menu>li>a:hover{
      color: var(--color-jaune) !important;
    }
    #header.style-absolute #main-nav #menu-primary-menu>li.current-item>a{
      color: var(--color-jaune) !important ;
    }
    .iconbox-style9{
      padding: 20px !important;
    }
    .image-departement{
      width: 80% !important; 
      height:80% !important;
      margin:auto;"

    }
    .fa-check{
      margin-right: 10px;
    }
    @media (max-width:768px){
      .image-departement{
        width: 100% !important;
        height: 100% !important;
      }
     
    }
</style>

<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">


<div class="body_content">
    <!-- Breadcumb Sections -->
    <section class="breadcumb-section mt40 mt-5">
      <div class="cta-about-v1 mx-auto maxw1700 pt120 pb120 bdrs16 position-relative overflow-hidden d-flex align-items-center mx20-lg">
        <div class="container">
          <div class="row">
            <div class="col-xl-5">
              <div class="position-relative">
                <h2 class="text-white">A propos</h2>
                <span><a class="text-white" href="/">Elbaragroup -></a>A Propos</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="pb30">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 m-auto wow fadeInUp" data-wow-delay="300ms">
              <div class="main-title text-center">
                <h2 class="title">Qui sommes-nous ?</h2>
                {{-- <p class="paragraph mt10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi nostrum, in optio, architecto quis ex cumque explicabo neque reprehenderit quaerat ab placeat deserunt ipsa mollitia officia eos incidunt vel! Inventore!</p> --}}
              </div>
            </div>
          </div>
          <div class="row wow fadeInUp" data-wow-delay="300ms">
            <div class="col-lg-10 mx-auto">
              <div class="ui-content">
                <div class="accordion-style1 faq-page">
                  <div class="accordion" id="accordionExample">
                    <div class="accordion-item active">
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><strong>Principes et Missions</strong></button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>E-BAG</strong> est une Corporation novatrice et dynamique basée en Côte d'Ivoire .dont la vision principale se présente comme étant un partenaire d’accompagnement des entreprises dans divers secteurs d’activité.
                            En resumé E-BAG est une plateforme autour de laquelle gravite <strong>Offre et Demande</strong>; une corporation englobant plusieurs secteurs d'activité.

                            <strong>E-BAG</strong> l'une des actions serait d'apporter son expertise auprès des entreprises et particuliers en Afrique afin de maximiser leur rendement ( Indice de performance) .

                            Pour les Entrepreneurs africains, la corporation vise à apporter sa pierre à cette édifice qui contribue au développement du continent africain pour un mieux être de sa population.
                            Car nous porterons écoute et assistante...

                            Elle vise à révolutionner les différentes prestations d'entreprises afin de les rendre plus adaptées au besoin des populations...

                         {{--  Nous sommes <strong>ELBARA-AFRICA GROUP</strong> en abrégé <strong>E-BAG.</strong><br>
                          E-BAG est une corporation novatrice et dynamique basée en Côte d'Ivoire,
                          dont la mission principale est une vision de partenariat à savoir:
                          <ul>
                            <li><i class="fa-solid fa-angle-right"></i> L'accompagnement des entreprises dans divers secteurs d'activité pour l’atteinte de leur objectif;</li>
                            <li><i class="fa-solid fa-angle-right"></i> Apporte son expertise auprès des entreprises et particulier en Afrique afin de maximiser leur rendement.</li>
                          </ul> --}}

                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><strong>Notre Vision</strong></button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="accordion-body" style="size: 18px; line-height:2.0">
                            Notre vision est de devenir le partenaire privilégié des principaux secteurs d’activité dont dispose le monde.
                            En proposant des solutions avant-gardiste qui répondent aux besoins constamment changeant de nos collaborateurs.
                            Nous aspirons à être reconnus pour notre engagement indéfectible envers l'excellence, l'innovation et la satisfaction de nos partenaires.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><strong>Nos Départements</strong></button>
                      </h2>
                      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="accordion-body">
                            Nous déployons une gamme diversifiée de prestation aupres de nos partenaires ,
                            englobant une expertise a la fois intérieur et extérieur, des outils adaptés selon le
                            secteur d’activité et selon le besoin; visant à améliorer la sécurité et le confort de conduite.
                            <img src="{{asset('assets/website/images/departement.jpg')}}"  class=" d-flex img-fluid w-100 mt-5 image-departement" alt="image">
                        </div>
                      </div>
                    </div>

                    {{-- <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix"><strong>Notre structuration au niveau national</strong></button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                          <div class="accordion-body">

                          </div>
                        </div>
                    </div> --}}

                    {{-- <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSeven">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven"><strong>Notre structuration au niveau international</strong></button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                          <div class="accordion-body">

                          </div>
                        </div>
                    </div> --}}

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFor">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFor" aria-expanded="false" aria-controls="collapseFor"><strong>Nos Avantages</strong></button>
                        </h2>
                        <div id="collapseFor" class="accordion-collapse collapse" aria-labelledby="headingFor" data-parent="#accordionExample">
                          <div class="accordion-body">
                            <ul>
                                <li><i class="fa-solid fa-angle-right"></i> Être prioritaire en cas d'appel d'offre.</li>
                                <li><i class="fa-solid fa-angle-right"></i> Beneficie d'une réduction pour tous les produits et services en tant que membre.</li>
                                <li><i class="fa-solid fa-angle-right"></i> L'aide à l'atteinte de vos objectifs.</li>
                                <li><i class="fa-solid fa-angle-right"></i> La communication</li>
                                <li><i class="fa-solid fa-angle-right"></i> Une carte passe-partout de membre.</li>
                                <li><i class="fa-solid fa-angle-right"></i> Une assistance 24h/24</li>


                            </ul>
                          </div>
                        </div>
                    </div>




                  </div>
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
              <h2 class="mb25">Rejoignez notre plateforme de mise en relation client-entreprise grâce à nos services de premier ordre.</h2>

              <p class="text mb25">Vous avez désormais l'opportunité de vous connecter avec les entreprises du monde entier.
                Nous mettons à votre disposition un réseau d'entreprise dotés d'une solide expérience commerciale.
                Profitez de la meilleure qualité de service de plus de 200 services d'entreprises.</p>
              <div class="list-style2">
                <ul class="mb20">
                  <li><i class="fa-solid fa-check mr-3"></i>Connectez-vous à des entreprises ayant une expérience commerciale approuvée.</li>
                  <li><i class="fa-solid fa-check mr-3"></i>Entrer en contact avec les meilleurs entreprises pour votre service.</li>
                  <li><i class="fa-solid fa-check mr-3"></i>Accompagnement personnalisé.</li>
                </ul>
              </div>
              <a href="/services" class="ud-btn btn-thm-border ">Trouver votre service<i class="fa-solid fa-arrow-right"></i></a>
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
                  <li><div class="timer">+ 234</div></li>
                  {{-- <li><span>M</span></li> --}}
                </ul>
                <p class="text mb-0">Entreprises enregistrés</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="funfact_one text-center">
              <div class="details">
                <ul class="ps-0 mb-0 d-flex justify-content-center">
                  <li><div class="timer">+ 02</div></li>
                  <li><span>M</span></li>
                </ul>
                <p class="text mb-0">Avis positifs</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="funfact_one text-center">
              <div class="details">
                <ul class="ps-0 mb-0 d-flex justify-content-center">
                  <li><div class="timer">+ 03</div></li>
                  <li><span>M</span></li>
                </ul>
                <p class="text mb-0">Clients inscrits</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="funfact_one text-center">
              <div class="details">
                <ul class="ps-0 mb-0 d-flex justify-content-center">
                  <li><div class="timer">+ 16</div></li>
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
    {{-- <section class="p-0">
      <div class="cta-banner mx-auto maxw1600 pt120 pt60-lg pb90 pb60-lg position-relative overflow-hidden mx20-lg">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 col-xl-5 pl30-md pl15-xs wow fadeInRight" data-wow-delay="500ms">
              <div class="mb30">
                <div class="main-title">
                  <h2 class="title">De nombreuses entreprises à <br class="d-none d-lg-block"> portée de doigts</h2>
                </div>
              </div>
              <div class="why-chose-list">
                <div class="list-one d-flex align-items-start mb30">
                  <span class="list-icon flex-shrink-0 flaticon-badge"></span>
                  <div class="list-content flex-grow-1 ml20">
                    <h4 class="mb-1">Preuve de qualité</h4>
                    <p class="text mb-0 fz15">Examinez les échantillons de travail des entreprises, consultez les avis de nos clients et bénéficiez de notre procédure de vérification d'identité.</p>
                  </div>
                </div>
                <div class="list-one d-flex align-items-start mb30">
                  <span class="list-icon flex-shrink-0 flaticon-money"></span>
                  <div class="list-content flex-grow-1 ml20">
                    <h4 class="mb-1">Zéro frais avant satisfaction</h4>
                    <p class="text mb-0 fz15">Conversez avec les entreprises potentiels pour votre projet, négociez les tarifs, et ne rémunérez que lorsque le travail est approuvé par vos soins.</p>
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
    </section> --}}
    <section class="wd-iconbox flat-row background1">
      <div class="tf-container">
      <div class="title-iconbox">
          <h1>Les avantages d'Elbara Africa Group ?</h1>
          {{-- <p>Rationalisez votre processus de recherche afin atteindre des entreprises qualifiées pour vos projets.</p> --}}
      </div>
      <div class="row">
          <div class="col-lg-4 col-sm-6 wow fadeInUp">
          <!-- tf-iconbox -->
          <div class="tf-iconbox">
              <div class="box-header">
              <div class="icon">
                  <svg width="42" height="43" viewBox="0 0 42 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                      d="M10.1242 26.6601C12.2169 26.6601 13.9133 24.9714 13.9133 22.8883C13.9133 20.8052 12.2169 19.1165 10.1242 19.1165C8.03144 19.1165 6.33496 20.8052 6.33496 22.8883C6.33496 24.9714 8.03144 26.6601 10.1242 26.6601Z"
                      stroke="#14A077" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                      stroke-linejoin="round" />
                  <path
                      d="M8.59724 31.9404L10.1242 35.9951C10.5767 37.1832 11.7078 37.9753 12.9897 37.9753H18.3624C19.2484 37.9753 19.9648 37.2586 19.9648 36.3723C19.9648 35.5613 19.3616 34.8824 18.5509 34.7881L14.4036 34.2789C14.1019 34.2412 13.838 34.0337 13.7626 33.732C13.5175 32.8079 12.952 30.8277 12.3676 29.6962C11.6135 28.1874 10.8594 26.6787 8.20135 26.6787C4.78919 26.6787 4.03512 28.9418 3.28106 31.9592C2.52699 34.9767 1 41.0116 1 41.0116"
                      stroke="#14A077" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                      stroke-linejoin="round" />
                  <path d="M10.8778 37.221L10.1426 40.9928" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                      stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M15.4209 37.9753H39.5511" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                      stroke-linecap="round" stroke-linejoin="round" />
                  <path
                      d="M24.452 8.55534C25.7117 8.55534 26.733 7.54212 26.733 6.29226C26.733 5.04239 25.7117 4.02917 24.452 4.02917C23.1922 4.02917 22.1709 5.04239 22.1709 6.29226C22.1709 7.54212 23.1922 8.55534 24.452 8.55534Z"
                      stroke="#14A077" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                      stroke-linejoin="round" />
                  <path
                      d="M20.7002 13.8358V12.9871C20.7002 9.66792 22.4346 8.55524 24.0935 8.55524H24.8476C26.5065 8.55524 28.2409 9.66792 28.2409 12.9871V13.8358"
                      stroke="#14A077" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                      stroke-linejoin="round" />
                  <path d="M11.6504 10.0641V3.2748C11.6504 2.03011 12.6684 1.01172 13.9126 1.01172H23.7155"
                      stroke="#14A077" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                      stroke-linejoin="round" />
                  <path
                      d="M11.6504 10.0641V14.5902C11.6504 15.8349 12.6684 16.8533 13.9126 16.8533H28.2399L32.7643 21.3795V16.8533H35.7806C37.0248 16.8533 38.0428 15.8349 38.0428 14.5902V3.2748C38.0428 2.03011 37.0248 1.01172 35.7806 1.01172H23.7155"
                      stroke="#14A077" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                      stroke-linejoin="round" />
                  <path d="M22.208 34.2035L25.9783 24.3969H40.3056L36.5353 34.2035H22.208Z" stroke="#14A077"
                      stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M28.9951 37.9753V34.2035" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
              </div>
              </div>
              <div class="box-content">
              <h1 class="box-title">
                  <a href="">Interagissez directement avec des entreprises qualifiées.</a>
              </h1>
              <p>Établissez un contact direct avec des entreprises qualifiées, facilitez les échanges et les opportunités professionnelles tout en évitant les intermédiaires.            </div>
          </div>
          </div>
          <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
          <!-- tf-iconbox -->
          <div class="tf-iconbox">
              <div class="box-header">
              <div class="icon">
                  <svg width="38" height="43" viewBox="0 0 38 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                      d="M18.7024 27.3992C20.2963 27.3992 21.5883 26.1138 21.5883 24.5282C21.5883 22.9426 20.2963 21.6572 18.7024 21.6572C17.1085 21.6572 15.8164 22.9426 15.8164 24.5282C15.8164 26.1138 17.1085 27.3992 18.7024 27.3992Z"
                      stroke="#14A077" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                      stroke-linejoin="round" />
                  <path d="M21.959 31.334V41.0114" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                      stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M15.5098 41.0114V31.334" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                      stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M7.77148 41.0114V31.334" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                      stroke-linecap="round" stroke-linejoin="round" />
                  <path
                      d="M18.7358 27.415H17.2848C15.2856 27.415 12.9316 28.1086 12.9316 31.3344V36.157C12.9316 37.2054 13.8023 38.0602 14.8664 38.0602H15.3501"
                      stroke="#14A077" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                      stroke-linejoin="round" />
                  <path
                      d="M10.6907 27.3992C12.2845 27.3992 13.5766 26.1138 13.5766 24.5282C13.5766 22.9426 12.2845 21.6572 10.6907 21.6572C9.09679 21.6572 7.80469 22.9426 7.80469 24.5282C7.80469 26.1138 9.09679 27.3992 10.6907 27.3992Z"
                      stroke="#14A077" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                      stroke-linejoin="round" />
                  <path
                      d="M10.9472 27.415H9.51231C7.52921 27.415 5.19141 28.1086 5.19141 31.3344V36.157C5.19141 37.2054 6.04592 38.0602 7.11002 38.0602H7.5937"
                      stroke="#14A077" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                      stroke-linejoin="round" />
                  <path d="M29.6992 41.0114V31.334" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                      stroke-linecap="round" stroke-linejoin="round" />
                  <path
                      d="M26.8118 27.3992C28.4056 27.3992 29.6977 26.1138 29.6977 24.5282C29.6977 22.9426 28.4056 21.6572 26.8118 21.6572C25.2179 21.6572 23.9258 22.9426 23.9258 24.5282C23.9258 26.1138 25.2179 27.3992 26.8118 27.3992Z"
                      stroke="#14A077" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                      stroke-linejoin="round" />
                  <path
                      d="M26.5215 27.415H27.9564C29.9395 27.415 32.2773 28.1086 32.2773 31.3344V36.157C32.2773 37.2054 31.4228 38.0602 30.3587 38.0602H29.875"
                      stroke="#14A077" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                      stroke-linejoin="round" />
                  <path
                      d="M18.7344 27.415H20.1854C22.1846 27.415 24.5386 28.1086 24.5386 31.3344V36.157C24.5386 37.2054 23.6679 38.0602 22.6038 38.0602H22.1202"
                      stroke="#14A077" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                      stroke-linejoin="round" />
                  <path d="M18.7344 41.0112V38.0596" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                      stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M27.7642 10.6895L18.7355 19.0765L13.5762 15.2056" stroke="#14A077" stroke-width="2"
                      stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M18.7344 3.59277V4.8831" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                      stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M26.475 5.67285L25.8301 6.78576" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                      stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M32.134 11.334L31.0215 11.9791" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                      stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M34.2136 19.0762H32.9238" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                      stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M3.25781 19.0762H4.54763" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                      stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M5.33789 11.334L6.45037 11.9791" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                      stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M10.9961 5.673L11.641 6.78591" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                      stroke-linecap="round" stroke-linejoin="round" />
                  <path
                      d="M34.745 26.3827C35.8413 24.0762 36.4701 21.4956 36.4701 18.7537C36.4701 8.9472 28.5377 1.01172 18.735 1.01172C8.9324 1.01172 1 8.9472 1 18.7537C1 21.4795 1.61266 24.0601 2.72513 26.3827"
                      stroke="#14A077" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                      stroke-linejoin="round" />
                  </svg>
              </div>
              </div>
              <div class="box-content">
              <h1 class="box-title">
                  <a href="">Promotion des services à un ensemble de clientèle bien définis</a>
              </h1>
              <p>
                les entreprises inscritent sur E-BAG pourront bénéficier d'une assistance comptable et de gestion d'entreprise 
assistance en terme de technique de communication.
              </p>
              </div>
          </div>
          </div>
          <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
          <!-- tf-iconbox -->
          <div class="tf-iconbox">
              <div class="box-header">
              <div class="icon">
                  <svg width="40" height="43" viewBox="0 0 40 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                      d="M19.6145 4.3812C16.8264 4.33283 14.5863 6.49325 14.5218 9.21796C14.4896 10.6206 15.0697 11.6363 15.8433 12.6843C16.5202 13.6033 17.0198 13.7 17.3099 15.0704"
                      stroke="#14A077" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                      stroke-linejoin="round" />
                  <path
                      d="M19.6143 4.3812C22.4024 4.33283 24.6425 6.49325 24.707 9.21796C24.7392 10.6206 24.159 11.6363 23.3855 12.6843C22.7086 13.6033 22.0962 13.7 21.8222 15.0704"
                      stroke="#14A077" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                      stroke-linejoin="round" />
                  <path d="M21.8226 15.0545H21.8065H17.3906" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                      stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M19.6143 18.4241H20.8069L21.8222 16.7312V15.0545" stroke="#14A077" stroke-width="2"
                      stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M21.1943 7.0412C21.8873 7.42814 22.3869 8.07304 22.532 8.8308" stroke="#14A077"
                      stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M17.3105 15.0543V16.731L18.4387 18.4239H19.5668" stroke="#14A077" stroke-width="2"
                      stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M19.5654 1.01172V2.1403" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                      stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M13.6035 3.47858L14.3932 4.26858" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                      stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M11.1211 9.44366H12.2492" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                      stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M13.6035 15.3929L14.3932 14.6029" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                      stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M25.5451 15.3929L24.7393 14.6029" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                      stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M28.011 9.44366H26.8828" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                      stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M25.5451 3.47858L24.7393 4.26858" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                      stroke-linecap="round" stroke-linejoin="round" />
                  <path
                      d="M8.73595 28.7426C10.5161 28.7426 11.9592 27.2989 11.9592 25.5181C11.9592 23.7372 10.5161 22.2935 8.73595 22.2935C6.95579 22.2935 5.5127 23.7372 5.5127 25.5181C5.5127 27.2989 6.95579 28.7426 8.73595 28.7426Z"
                      stroke="#14A077" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                      stroke-linejoin="round" />
                  <path
                      d="M7.44651 33.2568L8.75192 36.7231C9.13872 37.7388 10.1057 38.416 11.1855 38.416H15.7464C16.5038 38.416 17.1163 37.8033 17.1163 37.0456C17.1163 36.3523 16.6005 35.7719 15.9237 35.6913L12.3942 35.256C12.1363 35.2237 11.9268 35.0464 11.8462 34.7884C11.6367 33.9984 11.1532 32.2894 10.6698 31.3221C10.0251 30.0323 9.38046 28.7425 7.12418 28.7425C4.22325 28.7425 3.5786 30.6772 2.93395 33.2568C2.2893 35.8364 1 40.9956 1 40.9956"
                      stroke="#14A077" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                      stroke-linejoin="round" />
                  <path d="M8.73645 37.1262L8.0918 40.9956" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                      stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M30.5088 37.1262L31.2985 40.9956" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                      stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M13.249 38.4161H19.6955" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                      stroke-linecap="round" stroke-linejoin="round" />
                  <path
                      d="M30.6539 28.7426C32.4341 28.7426 33.8772 27.2989 33.8772 25.5181C33.8772 23.7372 32.4341 22.2935 30.6539 22.2935C28.8738 22.2935 27.4307 23.7372 27.4307 25.5181C27.4307 27.2989 28.8738 28.7426 30.6539 28.7426Z"
                      stroke="#14A077" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                      stroke-linejoin="round" />
                  <path
                      d="M19.6949 28.7426C21.4751 28.7426 22.9182 27.2989 22.9182 25.5181C22.9182 23.7372 21.4751 22.2935 19.6949 22.2935C17.9148 22.2935 16.4717 23.7372 16.4717 25.5181C16.4717 27.2989 17.9148 28.7426 19.6949 28.7426Z"
                      stroke="#14A077" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                      stroke-linejoin="round" />
                  <path
                      d="M31.9432 33.2569L30.6378 36.7233C30.251 37.739 29.284 38.4161 28.2042 38.4161H23.6433C22.8859 38.4161 22.2734 37.8035 22.2734 37.0457C22.2734 36.3524 22.7892 35.772 23.466 35.6914L26.9955 35.2561C27.2534 35.2239 27.4629 35.0465 27.5435 34.7886C27.753 33.9986 28.2365 32.3057 28.7199 31.3383C29.3646 30.0485 30.0092 28.7587 32.2655 28.7587C35.1665 28.7587 35.8111 30.6934 36.4558 33.273C37.1004 35.8526 38.3897 41.0119 38.3897 41.0119"
                      stroke="#14A077" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                      stroke-linejoin="round" />
                  <path d="M26.1418 38.4161H19.6953" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                      stroke-linecap="round" stroke-linejoin="round" />
                  <path
                      d="M14.5381 35.1915V33.2568C14.5381 30.7578 16.8427 28.7425 19.6953 28.7425C22.5479 28.7425 24.8525 30.7578 24.8525 33.2568V35.1915"
                      stroke="#14A077" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                      stroke-linejoin="round" />
                  </svg>
              </div>
              </div>
              <div class="box-content">
                <h1 class="box-title">
                  <a href="#">Un large réseau de clientèle</a>
                  
              </h1>
              <br>
              <p>
                Accéder à notre large réseau de clientèle présente dans toute la diaspora africaine afin de bénéficier d'un grand réseau d'entreprise mais aussi de bénéficier des offres et des opportunités que d'autres entreprises qui sont déjà présentes à E-BAG.  
              </p>
              
              </div>
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
                <h2 class="cta-title mb25">Trouvez les entreprises nécessaires pour <br class="d-none d-lg-block">faire croître votre activité.</h2>
                <p class="text-thm2 fz15 mb25">Des entreprises de qualité qui sont <br class="d-none d-md-block"> en adequation avec votre vision.</p>
                <a href="#" class="ud-btn btn-thm ">Commencer <i class="fal fa-arrow-right-long"></i></a>
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
                    <p class="fz15 dark-color">Les clients évaluent  <br>les entreprises sur Elbara Africa Group</p>
                  </div>
                  <div class="funfact-style1 bdrs16 text-center ms-md-auto">
                    <ul class="ps-0 mb-0 d-flex justify-content-center">
                      <li><div class="timer title mb15">96</div></li>
                      <li><span>%</span></li>
                    </ul>
                    <p class="fz15 dark-color">95% des clients sont satisfaits des services des <br>entreprises</p>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="funfact-style1 bdrs16 text-center">
                    <ul class="ps-0 mb-0 d-flex justify-content-center">
                      <li><div class="title mb15">100</div></li>
                      <li><span>%</span></li>
                    </ul>
                    <p class="fz15 dark-color">des entreprises bénéficient d'un accompagnement. <br></p>
                  </div>
                </div>


              </div>
            </div>
          </div>
        </div>
      </section>


     <!-- Our Testimonials -->
     {{-- <section class="our-testimonial">
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
    </section> --}}
    <section class="testimonials-section">
        <div class="wrap-testimonials over-flow-hidden">
        <div class="tf-container">
            <div class="row">
            <div class="col-lg-12">
                <div class="tf-title style-2">
                <div class="group-title">
                    <h1>Ce que disent nos clients</h1>
                    <!-- <p>Showing companies based on reviews and recent job openings</p> -->
                </div>
                </div>
            </div>
            <div class="col-lg-12 wow fadeInUp">
                <div class="swiper-container tes-slider">
                    <div class="swiper-wrapper">
                    <div class="swiper-slide">
                    <div class="wd-testimonials">
                        <p class="description">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”</p>
                        <div class="author-group">
                        <div class="avatar">
                            <img src="{{asset('assets/website/images/review/testimonials.jpg')}}" alt="images">
                        </div>
                        <div class="infor">
                            <h6>Pete Jones</h6>
                            <div class="position">Head of Marketing Build</div>
                            <ul class="rating">
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                    fill="#FFB321" />
                                </svg></li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                    fill="#FFB321" />
                                </svg></li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                    fill="#FFB321" />
                                </svg></li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                    fill="#FFB321" />
                                </svg></li>
                            <li class="inactive"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14"
                                viewBox="0 0 13 14" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                    fill="#FFB321" />
                                </svg></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="swiper-slide">
                    <div class="wd-testimonials">
                        <p class="description">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”</p>

                        <div class="author-group">
                        <div class="avatar">
                            <img src="{{asset('assets/website/images/review/testimonials.jpg')}}" alt="images">
                        </div>
                        <div class="infor">
                            <h6>Pete Jones</h6>
                            <div class="position">Head of Marketing Build</div>
                            <ul class="rating">
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                    fill="#FFB321" />
                                </svg></li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                    fill="#FFB321" />
                                </svg></li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                    fill="#FFB321" />
                                </svg></li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                    fill="#FFB321" />
                                </svg></li>
                            <li class="inactive"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14"
                                viewBox="0 0 13 14" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                    fill="#FFB321" />
                                </svg></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="swiper-slide">
                    <div class="wd-testimonials">
                        <p class="description">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”</p>

                        <div class="author-group">
                        <div class="avatar">
                            <img src="{{asset('assets/website/images/review/testimonials.jpg')}}" alt="images">
                        </div>
                        <div class="infor">
                            <h6>Pete Jones</h6>
                            <div class="position">Head of Marketing Build</div>
                            <ul class="rating">
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                    fill="#FFB321" />
                                </svg></li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                    fill="#FFB321" />
                                </svg></li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                    fill="#FFB321" />
                                </svg></li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                    fill="#FFB321" />
                                </svg></li>
                            <li class="inactive"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14"
                                viewBox="0 0 13 14" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                    fill="#FFB321" />
                                </svg></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="swiper-slide">
                    <div class="wd-testimonials">
                        <p class="description">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”</p>

                        <div class="author-group">
                        <div class="avatar">
                            <img src="{{asset('assets/website/images/review/testimonials.jpg')}}" alt="images">
                        </div>
                        <div class="infor">
                            <h6>Pete Jones</h6>
                            <div class="position">Head of Marketing Build</div>
                            <ul class="rating">
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                    fill="#FFB321" />
                                </svg></li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                    fill="#FFB321" />
                                </svg></li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                    fill="#FFB321" />
                                </svg></li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                    fill="#FFB321" />
                                </svg></li>
                            <li class="inactive"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14"
                                viewBox="0 0 13 14" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                    fill="#FFB321" />
                                </svg></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    </div>
                    </div>
                <div class="swiper-pagination tes-bullet"></div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>

    <section class="">
      <div class="wd-partner">
      <div class="tf-container">
          <h1 class="title-partner">
         Nos partenaires
          </h1>
          <div class="swiper partner-type-6">
          <div class="swiper-wrapper">
              <div class="swiper-slide">
              <a class="logo-partner" href="#">
                  <img src="{{asset('assets/website/images/partners/01.png')}}" alt="Logo.png">
              </a>
              </div>
              <div class="swiper-slide">
              <a href="#" class="logo-partner">
                <img class="img-fluid" src="{{asset('assets/website/images/partners/02.jpeg')}}" alt="Logo.png">
              </a>
              </div>
              <div class="swiper-slide">
              <a href="#" class="logo-partner">
                  <img  src="{{asset('assets/website/images/partners/Logo-2.png')}}" alt="Logo.png">
              </a>
              </div>
              <div class="swiper-slide">
              <a href="#" class="logo-partner">
                  <img src="{{asset('assets/website/images/partners/Logo-3.png')}}" alt="images/partners/Logo.png">
              </a>
              </div>
              <div class="swiper-slide">
              <a href="#" class="logo-partner">
                  <img  src="{{asset('assets/website/images/partners/Logo-4.png')}}" alt="images/partners/Logo.png">
              </a>
              </div>
              <div class="swiper-slide">
              <a href="#" class="logo-partner">
                  <img src="{{asset('assets/website/images/partners/Logo-5.png')}}" alt="images/partners/Logo.png">
              </a>
              </div>
              <div class="swiper-slide">
              <a href="#" class="logo-partner">
                  <img src="{{asset('assets/website/images/partners/Logo.png')}}" alt="images/partners/Logo.png">
              </a>
              </div>
              <div class="swiper-slide">
              <a href="#" class="logo-partner">
                  <img src="{{asset('assets/website/images/partners/Logo-1.png')}}" alt="images/partners/Logo.png">
              </a>
              </div>
              <div class="swiper-slide">
              <a href="#" class="logo-partner">
                  <img src="{{asset('assets/website/images/partners/Logo-2.png')}}" alt="images/partners/Logo.png">
              </a>
              </div>
              <div class="swiper-slide">
              <a href="#" class="logo-partner">
                  <img src="{{asset('assets/website/images/partners/Logo-3.png')}}" alt="images/partners/Logo.png">
              </a>
              </div>
              <div class="swiper-slide">
              <a href="#" class="logo-partner">
                  <img src="{{asset('assets/website/images/partners/Logo-4.png')}}" alt="images/partners/Logo.png">
              </a>
              </div>
              <div class="swiper-slide">
              <a href="#" class="logo-partner">
                  <img src="{{asset('assets/website/images/partners/Logo-5.png')}}" alt="images/partners/Logo.png">
              </a>
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
              <p class="text">Vous êtes à la recherche d'une entreprise pour réaliser vos projets ?</p>
            </div>
          </div>
        </div>
        <div class="row wow fadeInDown" data-wow-delay="400ms">
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="iconbox-style9 default-box-shadow1 bgc-white p40 bdrs12 position-relative mb30">
              <span class="icon fz40 flaticon-cv"></span>

              <h4 class="iconbox-title mt20"><strong>Sélectionner un service</strong></h4>
              <p class="text mb-0">
                Vous êtes à la recherche d'une entreprise pour réaliser vos projets ? Notre plateforme simplifie votre choix
                Sélectionnez votre service parmi une variété de catégories.
              </p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="iconbox-style9 default-box-shadow1 bgc-white p40 bdrs12 position-relative mb30">
              <span class="icon fz40 flaticon-web-design"></span>
              <h4 class="iconbox-title mt20"><strong>Choisissez l'entreprise offrant le service</strong></h4>
              <p class="text mb-0">Consultez les avis et réalisations des entreprises proposant ce service, et faites un choix éclairé pour la réalisation de votre projet</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="iconbox-style9 default-box-shadow1 bgc-white p40 bdrs12 position-relative mb30">
              <span class="icon fz40 flaticon-secure"></span>
              <h4 class="iconbox-title mt20"><strong>Discuter avec l'entreprise sur la plateforme</strong></h4>
              <p class="text mb-0">Veuillez compléter le formulaire en renseignant vos besoins, et l'entreprise vous contactera pour en discuté.</p>
            </div>
          </div>

        </div>
      </div>
    </section>

@endsection
