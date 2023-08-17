@extends('layouts.app')
@section('content')

<style>
    .mobilie_header_nav{
        background-color: #000000 !important;
    }
</style>

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



    <!-- Breadcumb Sections -->
    <section class="breadcumb-section">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-lg-10">
            <div class="breadcumb-style1 mb10-xs">
              <div class="breadcumb-list">
                <a href="/">Accueil</a>
                <a href="/services">Services</a>
                <a href="#">{{$serviceDetail->libelle}}</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-lg-2">
            <div class="d-flex align-items-center justify-content-sm-end">
              <div class="share-save-widget d-flex align-items-center">
                <span class="icon flaticon-share dark-color fz12 mr10"></span>
                <div class="h6 mb-0">Partager</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Breadcumb Sections -->
    <section class="breadcumb-section pt-0">
      <div class="cta-service-single cta-banner mx-auto maxw1700 pt120 pt60-sm pb120 pb60-sm bdrs16 position-relative overflow-hidden d-flex align-items-center mx20-lg px30-lg">
        <img class="left-top-img wow zoomIn" src="{{asset('assets/images/vector-img/left-top.png')}}" alt="">
        <img class="right-bottom-img wow zoomIn" src="{{asset('assets/images/vector-img/right-bottom.png')}}" alt="">
        <img class="service-v1-vector bounce-y d-none d-xl-block" src="{{asset('assets/images/vector-img/vector-service-v1.png')}}" alt="">
        <div class="container">
          <div class="row wow fadeInUp">
            <div class="col-xl-7">
              <div class="position-relative">
                <h2>Je vais concevoir des sites Web modernes en figma ou adobe xd</h2>
                <div class="list-meta mt30">
                  <a class="list-inline-item mb5-sm" href="#">
                    <span class="position-relative mr10">
                      <img class="rounded-circle" src="{{asset('assets/images/team/fl-d-1.png')}}" alt="Freelancer Photo">
                      <span class="online-badge"></span>
                    </span>
                    <span class="fz14">Kodak Tech</span>
                  </a>
                  <p class="mb-0 dark-color fz14 list-inline-item ml25 ml15-sm mb5-sm ml0-xs"><i class="fas fa-star vam fz10 review-color me-2"></i> 4.82 ;4 Commentaires</p>
                  <p class="mb-0 dark-color fz14 list-inline-item ml25 ml15-sm mb5-sm ml0-xs"><i class="flaticon-website vam fz20 me-2"></i> 90 visiteur</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Service Details -->
    <section class="pt10 pb90 pb30-md">
      <div class="container">
        <div class="row wrap">
          <div class="col-lg-8">
            <div class="column">
              <div class="row">
                <div class="col-sm-6 col-md-4">
                  <div class="iconbox-style1 contact-style d-flex align-items-start mb30">
                    <div class="icon flex-shrink-0"><span class="flaticon-calendar"></span></div>
                    <div class="details">
                      <h5 class="title">Livrer dans </h5>
                      <p class="mb-0 text">1-3 Semaine</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4">
                  <div class="iconbox-style1 contact-style d-flex align-items-start mb30">
                    <div class="icon flex-shrink-0"><span class="flaticon-goal"></span></div>
                    <div class="details">
                      <h5 class="title">Type d'entreprise</h5>
                      <p class="mb-0 text">Nationale</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4">
                  <div class="iconbox-style1 contact-style d-flex align-items-start mb30">
                    <div class="icon flex-shrink-0"><span class="flaticon-tracking"></span></div>
                    <div class="details">
                      <h5 class="title">Localisation</h5>
                      <p class="mb-0 text">Grand-Bassam</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="service-single-sldier vam_nav_style slider-1-grid owl-carousel owl-theme mb60">
                <div class="item">
                  <div class="thumb p50 p30-sm"><img src="assets/images/listings/service-details-1.jpg" alt="" class="w-100"></div>
                </div>
                <div class="item">
                  <div class="thumb p50 p30-sm"><img src="assets/images/listings/service-details-1.jpg" alt="" class="w-100"></div>
                </div>
                <div class="item">
                  <div class="thumb p50 p30-sm"><img src="assets/images/listings/service-details-1.jpg" alt="" class="w-100"></div>
                </div>
              </div>
              <div class="service-about">
                <h4>Detail du service</h4>
                <p>
                    {{$serviceDetail->description}}
                </p>

                <hr class="opacity-100 mb15">
                <div class="product_single_content mb50">
                  <div class="mbp_pagination_comments">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="total_review mb30 mt45">
                          <h4>1 Commentaire</h4>
                        </div>
                        <div class="d-md-flex align-items-center mb30">
                          <div class="total-review-box d-flex align-items-center text-center mb30-sm">
                            <div class="wrapper mx-auto">
                              <div class="t-review mb15">4.96</div>
                              <h5>Exceptionnelle</h5>
                              <p class="text mb-0">3,014 Evaluation</p>
                            </div>
                          </div>
                          <div class="wrapper ml60 ml0-sm">
                            <div class="review-list d-flex align-items-center mb10">
                              <div class="list-number">5 Etoiles</div>
                                <div class="progress">
                                  <div class="progress-bar" style="width: 90%;" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              <div class="value text-end">58</div>
                            </div>
                            <div class="review-list d-flex align-items-center mb10">
                              <div class="list-number">4 Etoiles</div>
                                <div class="progress">
                                  <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              <div class="value text-end">20</div>
                            </div>
                            <div class="review-list d-flex align-items-center mb10">
                              <div class="list-number">3 Etoiles</div>
                                <div class="progress">
                                  <div class="progress-bar w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              <div class="value text-end">15</div>
                            </div>
                            <div class="review-list d-flex align-items-center mb10">
                              <div class="list-number">2 Etoiles</div>
                                <div class="progress">
                                  <div class="progress-bar" style="width: 30%;" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              <div class="value text-end">2</div>
                            </div>
                            <div class="review-list d-flex align-items-center mb10">
                              <div class="list-number">1 Etoile</div>
                                <div class="progress">
                                  <div class="progress-bar" style="width: 20%;" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              <div class="value text-end">1</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="mbp_first position-relative d-flex align-items-center justify-content-start mb30-sm">
                          <img src="assets/images/blog/comments-2.png" class="mr-3" alt="comments-2.png">
                          <div class="ml20">
                            <h6 class="mt-0 mb-0">Bessie Cooper</h6>
                            <div><span class="fz14">12 March 2022</span></div>
                          </div>
                        </div>
                        <p class="text mt20 mb20">Je tiens à exprimer toute ma satisfaction pour le service exceptionnel que j'ai reçu aujourd'hui de la part du designer Kodak. Le professionnalisme, l'efficacité et la gentillesse de Kodak ont été remarquables. Chaque détail de mon projet de design a été pris en compte, et le résultat est tout simplement parfait. Je recommande vivement les services de Kodak à tous ceux qui recherchent une expérience client de haut niveau dans le domaine du design. Merci encore à Kodak pour ce travail remarquable !</p>
                        <div class="review_cansel_btns d-flex">
                          <a href="#"><i class="fas fa-thumbs-up"></i>J'aime</a>
                          <a href="#"><i class="fas fa-thumbs-down"></i>Je n'aime pas</a>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="position-relative bdrb1 pb50">
                          <a href="#" class="ud-btn btn-light-thm mt-3">Voir Plus<i class="fal fa-arrow-right-long"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="bsp_reveiw_wrt">
                  <h6 class="fz17">Ajourter une note</h6>
                  <p class="text">Votre adresse email ne sera pas publiée. Tous les champs sont obligatoires</p>
                  <h6>Votre évaluation</h6>
                  <div class="d-flex">
                    <i class="fas fa-star review-color"></i>
                    <i class="far fa-star review-color ms-2"></i>
                    <i class="far fa-star review-color ms-2"></i>
                    <i class="far fa-star review-color ms-2"></i>
                    <i class="far fa-star review-color ms-2"></i>
                  </div>
                  <form class="comments_form mt30 mb30-md">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="mb-4">
                          <label class="fw500 fz16 ff-heading dark-color mb-2">Commentaire</label>
                          <textarea class="pt15" rows="4" placeholder="Votre commentaire"></textarea>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="mb20">
                          <label class="fw500 ff-heading dark-color mb-2">Nom & prénoms</label>
                          <input type="text" class="form-control" placeholder="Votre nom complet">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="mb20">
                          <label class="fw500 ff-heading dark-color mb-2">Email</label>
                          <input type="email" class="form-control" placeholder="Votre Email">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <a href="#" class="ud-btn btn-thm">Commenter<i class="fal fa-arrow-right-long"></i></a>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="column">
              <div class="blog-sidebar ms-lg-auto">

                <div class="freelancer-style1 service-single mb-0">
                    <div class="d-grid mt30">
                        <button type="button" class="btn btn-primary p-3" data-toggle="modal" data-target="#exampleModal">
                            Contactez l'entreprise <i class="fal fa-arrow-right-long"></i>
                        </button>
                    </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Listings -->
    <section class="pt30 pb90 pb30-md">
        <div class="container">
            <div class="row wow fadeInUp">
                <div class="col-lg-12">
                    <div class="main-title mb35">
                        <h2>Les personnes qui ont consulté ce service ont également consulté </h2>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInUp">
                <div class="col-sm-6 col-lg-3">
                    <div class="listing-style1">
                        <div class="list-thumb">
                            <img class="w-100" src="assets/images/listings/g-1.jpg" alt="">
                            <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                        </div>
                        <div class="list-content">
                            <p class="list-text body-color fz14 mb-1">Web & App Design</p>
                            <h5 class="list-title"><a href="#">Je vais concevoir des sites Web modernes en figma ou adobe xd</a></h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="listing-style1">
                        <div class="list-thumb">
                            <div class="listing-thumbIn-slider position-relative navi_pagi_bottom_center slider-1-grid owl-carousel owl-theme">
                                <div class="item">
                                    <img class="w-100" src="assets/images/listings/g-2.jpg" alt="">
                                    <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                                </div>
                                <div class="item">
                                    <img class="w-100" src="assets/images/listings/g-3.jpg" alt="">
                                    <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                                </div>
                                <div class="item">
                                    <img class="w-100" src="assets/images/listings/g-4.jpg" alt="">
                                    <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                                </div>
                                <div class="item">
                                    <img class="w-100" src="assets/images/listings/g-5.jpg" alt="">
                                    <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="list-content">
                            <p class="list-text body-color fz14 mb-1">Art & Illustration</p>
                            <h5 class="list-title"><a href="#">Je vais créer une illustration de design plat moderne</a></h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="listing-style1">
                    <div class="list-thumb">
                        <img class="w-100" src="assets/images/listings/g-3.jpg" alt="">
                        <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                    </div>
                    <div class="list-content">
                        <p class="list-text body-color fz14 mb-1">Design & Creative</p>
                        <h5 class="list-title line-clamp2"><a href="#">Je vais créer un design entièrement réactif en HTML, CSS, bootstrap et javascript</a></h5>
                    </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="listing-style1">
                    <div class="list-thumb">
                        <img class="w-100" src="assets/images/listings/g-4.jpg" alt="">
                        <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                    </div>
                    <div class="list-content">
                        <p class="list-text body-color fz14 mb-1">Web & App Design</p>
                        <h5 class="list-title"><a href="#">Je ferai du développement d'applications mobiles pour iOS et Android</a></h5>
                    </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <script>
    //  Fixed sidebar Custom Script For That
    $(function() {
    var cols = $('.wrap .column');
    var enabled = true;
    var scrollbalance = new ScrollBalance(cols, {
        minwidth: 1199
    });
    // bind to scroll and resize events
    scrollbalance.bind();
    });
    </script>

@endsection
