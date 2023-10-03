@extends('layouts.app')
@section('content')

<style>
    .mobilie_header_nav{
        background-color: #000000 !important;
    }
    .btn_search{
        color: #000000;
        border: 1px solid #5BBB7B !important;
    }
    .btn_search:hover{
        color: #000000 !important;
    }
    li img{
        width : 100px !important;
        height : 90px !important;
        border-radius : 100px;
    }
</style>

    <!-- Home Banner -->
    <section class="home-one p-0 space-maintain-1">

        <!-- Hero Slide -->
        <div class="container-fluid px-0">
          <div class="row">
            <div class="col-lg-12">
              <div class="main-banner-wrapper home1_style">
                <div class="banner-style-one dots_none nav_none owl-theme owl-carousel">
                  <div class="slide slide-one" style="background-image: url({{asset('assets/images/home/home-1.jpg')}});"></div>
                  <div class="slide slide-one" style="background-image: url({{asset('assets/images/home/home-2.jpg')}});"></div>
                </div>
                <div class="carousel-btn-block banner-carousel-btn">
                  <span class="carousel-btn left-btn"><i class="fas fa-chevron-left left"></i></span>
                  <span class="carousel-btn right-btn"><i class="fas fa-chevron-right right"></i></span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="home1-banner-content">
          <div class="container">
            <div class="row">
              <div class="col-xl-10 col-xxl-7">
                <div class="position-relative">
                  <h3 class="banner-title">Trouvez des <span style="color:#5BBB7B !important;">entreprises qualifiées</span> pour vos services.</h3>
                  <p class="banner-text text-white ff-heading mb25">Des centaines de personnes utilisent <strong>ElbaraGroup</strong> pour concrétiser leurs idées en réalité.</p>
                  <div class="advance-search-tab bgc-white bgct-sm p10 p0-md bdrs4 banner-btn position-relative zi9">
                    <div class="row">

                        <form action="{{ route('services.search') }}" method="GET" class="row">
                            <div class="col-lg-5">
                                <div class="box-search">
                                    <input type="text" name="keyword" id="keyword" class="form-control" placeholder="Quel est le service que vous rechercher ?">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="bselect-style1">
                                    <select name="category" id="category" class="form-select form-control " data-live-search="true"
                                    data-width="100%">
                                        <option value="">Toutes les catégories</option>
                                            @foreach ($categories as $categorie)
                                                <option value="{{ $categorie->id }}">{{ $categorie->libelle }}</option>
                                            @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-center text-xl-end">
                                    <button type="submit" class="btn btn-primary w-100 form-control btn_search" style="background: #5BBB7B !important">Rechercher</button>
                                </div>
                            </div>
                        </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

    </section>

    <!-- Browse talent by category -->
    <section class="pb40-md pb90">
        <div class="container">
          <div class="row align-items-center wow fadeInUp" data-wow-delay="300ms">
            <div class="col-lg-9">
              <div class="main-title2">
                <h2 class="title">Recherchez des services par catégorie</h2>
                <!-- <p class="paragraph">Get some Inspirations from 1800+ skills</p> -->
              </div>
            </div>
            <div class="col-lg-3">
              <div class="text-start text-lg-end mb-4 mb-lg-2">
                <a class="ud-btn2" href="/departements">Toutes les catégories<i class="fal fa-arrow-right-long"></i></a>
              </div>
            </div>
          </div>
          <div class="row d-block d-lg-flex wow fadeInUp">
            @foreach ($categories_min as $categorie )
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="iconbox-style1">
                        <div class="icon"><i class="{{$categorie->icones}}"></i></div>
                        <div class="details mt20">
                            <h4 class="title"><strong>{{$categorie->libelle}}</strong></h4>
                            @foreach ($categorie->services as $service )
                                <p class="mb-0"><a href="{{ route('EntrepriseService.show', ['slug' => $service->libelle]) }}">{{$service->libelle}}</a></p>
                            @endforeach
                            <p class="mb-0">& autres</p>

                        </div>
                    </div>
              </div>
            @endforeach
          </div>
        </div>
    </section>



    <!-- Services tendance-->
    <section class="pb90 pb30-md bgc-thm3">
        <div class="container">
          <div class="row align-items-center wow fadeInUp">
            <div class="col-lg-9">
              <div class="main-title">
                <h2 class="title">Services tendance</h2>
                <p class="paragraph">Services les plus consultés actuellement</p>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="text-start text-lg-end mb-4 mb-lg-2">
                <a class="ud-btn2" href="/services">Tous les services<i class="fal fa-arrow-right-long"></i></a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="slider-outer-dib vam_nav_style dots_none slider-4-grid2 owl-carousel owl-theme wow fadeInUp" data-wow-delay="300ms">

                @foreach ( $tendances as $tendance )

                <div class="item">
                  <div class="listing-style1">
                    <div class="list-thumb">
                      <img class="w-100" src="{{$tendance->image}}" alt="">
                      <a href="" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                    </div>
                    <div class="list-content">
                      <p class="list-text body-color fz14 mb-1"><a href="{{ route('EntrepriseService.show', ['slug' => $tendance->libelle]) }}"><strong>{{$tendance->libelle}}</strong></a> </p>
                    </div>
                  </div>
                </div>
                @endforeach

              </div>
            </div>
          </div>
        </div>
    </section>

    <!-- Need something -->
    <section class="our-features pb90">

        <div class="container wow fadeInUp">
          <div class="row">
            <div class="col-lg-12">
              <div class="main-title text-center">
                <h2>Vous êtes une entreprise et vous avez des services à proposer ?</h2>
                <!-- <p class="text">Most viewed and all-time top-selling services</p> -->
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6 col-lg-4">
                <div class="iconbox-style1 border-less p-0">
                  <div class="icon before-none"><span class="flaticon-cv"></span></div>
                  <div class="details">
                    <h4 class="title mt10 mb-3">Inscrivez-vous</h4>
                    <p class="text">Inscrivez vous pour promouvoir votre activitée.</p>
                  </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="iconbox-style1 border-less p-0">
                <div class="icon before-none"><span class="flaticon-web-design"></span></div>
                <div class="details">
                  <h4 class="title mt10 mb-3">Poster vos services</h4>
                  <p class="text">Selectionner votre service parmis une dizaine de catégorie.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="iconbox-style1 border-less p-0">
                <div class="icon before-none"><span class="flaticon-secure"></span></div>
                <div class="details">
                  <h4 class="title mt10 mb-3">Discuter avec les prospects</h4>
                  <p class="text">Une mise en relation Client Entreprise la plus simple possible pour vous aider à prospérer</p>
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

    <!-- About Section Area -->
    <section class="our-about bgc-thm2">
        <div class="container">
          <div class="row align-items-center">
            <h2 class="title" style =" color : #FFFFFF;">Pourquoi nous faire confiance ?</h2>

            <div class="col-xl-6">
              <div class="position-relative mb30-lg">
                <div class="iconbox-small1 at-home1 d-none d-md-block wow fadeInRight">
                  <span class="icon flaticon-review"></span>
                  <div class="details">
                    {{-- <h6>4.9/5</h6>
                    <p class="text fz13 mb-0">Touts les entreprises sont vérifier</p> --}}
                  </div>
                </div>
                <div class="iconbox-small2 d-none d-md-block wow fadeInLeft">
                  <span class="icon flaticon-review"></span>
                  <div class="details">

                  </div>
                </div>
                <div class="about-img wow fadeInRight" data-wow-delay="300ms">
                  <img class="w100" src="{{asset('assets/images/about/about-1.jpg')}}" alt="">
                </div>
                <div class="imgbox-1 default-box-shadow1 text-center wow fadeInUp">
                  <img class="img-1 bounce-y" src="{{asset('assets/images/about/happy-client.png')}}" alt="">
                </div>
              </div>
            </div>
            <div class="col-xl-5 offset-xl-1">
              <div class="position-relative wow fadeInLeft" data-wow-delay="300ms">
                <h2 class="text-white mb35">Rejoignez la meilleure place de marché au monde <br class="d-none d-lg-block"> pour donner vie à vos projet ou ceux des autres</h2>
                <p class="text text-white mb35">C'est un fait établi depuis longtemps qu'un lecteur sera distrait par le contenu lisible d'une page lorsqu'il regarde sa mise en page. L'intérêt d'utiliser Lorem Ipsum est qu'il a une distribution plus ou moins normale des lettres, par opposition à l'utilisation de "Contenu ici, contenu ici", ce qui donne l'impression qu'il est lisible en anglais ...</p>
                <div class="list-style2 light-style">
                  <ul class="mb30">
                    <li><i class="far fa-check"></i>Connectez-vous et recherché vos services</li>
                    <li><i class="far fa-check"></i>Une mise en relation Client Entreprise très simple et sécurisé</li>
                    <li><i class="far fa-check"></i>Un service client disponible 24H/24H, 7j/7</li>
                  </ul>
                </div>
                <a href="#" class="ud-btn btn-thm">Trouver votre service<i class="fal fa-arrow-right-long"></i></a>
              </div>
            </div>
          </div>
        </div>
    </section>

    <!-- Our Blog -->
   {{--  <section class="pb90 pb20-md">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="00ms">
              <div class="main-title">
                <h2 class="title">Blog</h2>
              </div>
            </div>
          </div>
          <div class="row wow fadeInUp" data-wow-delay="300ms">
            <div class="col-sm-6 col-xl-3">
              <div class="blog-style1">
                <div class="blog-img"><img class="w-100" src="{{asset('assets/images/blog/blog-1.jpg')}}" alt=""></div>
                <div class="blog-content">
                  <a class="date" href="#">December 2, 2022</a>
                  <h4 class="title mt-1"><a href="#">Start an online business and work from home</a></h4>
                  <p class="text mb-0">A complete guide to starting a small business online</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-3">
              <div class="blog-style1">
                <div class="blog-img"><img class="w-100" src="{{asset('assets/images/blog/blog-2.jpg')}}" alt=""></div>
                <div class="blog-content">
                  <a class="date" href="#">December 2, 2022</a>
                  <h4 class="title mt-1"><a href="#">Front becomes an official Instagram Marketing Partner</a></h4>
                  <p class="text mb-0">A complete guide to starting a small business online</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-3">
              <div class="blog-style1">
                <div class="blog-img"><img class="w-100" src="{{asset('assets/images/blog/blog-3.jpg')}}" alt=""></div>
                <div class="blog-content">
                  <a class="date" href="#">December 2, 2022</a>
                  <h4 class="title mt-1"><a href="#">Engendering a culture of professional development</a></h4>
                  <p class="text mb-0">A complete guide to starting a small business online</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-3">
              <div class="blog-style1">
                <div class="blog-img"><img class="w-100" src="{{asset('assets/images/blog/blog-4.jpg')}}" alt=""></div>
                <div class="blog-content">
                  <a class="date" href="#">December 2, 2022</a>
                  <h4 class="title mt-1"><a href="#">Increasing engagement with Instagram</a></h4>
                  <p class="text mb-0">A complete guide to starting a small business online</p>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section> --}}

    <!-- Our CTA -->
    <section class="our-cta bgc-thm4 pt90 pb90 pt60-md pb60-md mt100 mt0-lg">
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-md-6 col-lg-7 col-xl-5 wow fadeInLeft">
              <div class="cta-style3">
                <h2 class="cta-title">Trouvez une entreprise  pour mettre sur pied vos projets.</h2>
                <a href="" class="ud-btn btn-thm2">Les Entreprises <i class="fal fa-arrow-right-long"></i></a>
              </div>
            </div>
            <div class="col-md-6 col-lg-5 col-xl-5 position-relative wow zoomIn">
              <div class="cta-img">
                <img class="w-100" src="{{asset('assets/images/about/about-3.png')}}" alt="">
              </div>
            </div>
          </div>
        </div>
    </section>


@endsection