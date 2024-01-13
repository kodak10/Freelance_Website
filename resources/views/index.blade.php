@extends('layouts.app')
@section('content')

<style>
  
    .features-job .job-archive-header h3 a{
        font-weight: 600 !important;
    }
    .bgc-thm2 {
        background-color: var(--color-bleu) !important;
    }
    .tf-slider.sl3 {

        /* background: var(--color-bleu) !important; */
        background: linear-gradient(to right, #3498db, #f39c12) !important;

    }
    .btn-category-job{
        color: var(--color-jaune) !important;
    }
    .job-category-header h1 a{
        color: var(--color-bleu) !important;
    }

    .tf-button{
        border-color: var(--color-jaune) !important;
    }
    .tf-iconbox path{
        color: var(--color-bleu) !important;
    }
    .position{
        color: var(--color-bleu) !important;
    }
    .box-header path{
        color: var(--color-jaune) !important;
    }
    .wd-list-icon path{
        color: var(--color-jaune) !important;
    }
    .nice-select .option{
      text-transform: uppercase !important;
    }
    .nice-select .option.selected{
        color: var(--color-bleu) !important;
    }
    #header.style-absolute #main-nav #menu-primary-menu>li>a:hover{
      color: var(--color-jaune) !important;
    }
    #header.style-absolute #main-nav #menu-primary-menu>li.current-item>a{
      color: var(--color-jaune) !important ;
    }
   
</style>


    <section class="tf-slider sl3 over-flow-hidden " style="min-height: 70vh !important; ">
        <div class="tf-container ">
          <div class="row" style="margin: 5% auto;">
            <div class="col-lg-8 col-md-12">
              <div class="content wow fadeInUp ">
                <div class="heading">
                  <h3 class="text-white">Trouvez l'entreprise qui correspond à vos besoins.</h3>
                  <p class="text-white">Des millions de personnes utilisent Elbara Africa Group pour concrétiser leurs idées à travers une multitude d'entreprises qui proposent des services.</p>
                </div>
                <div class="form-sl">
                  <form method="get" action="{{route('services.search')}}">
                    @csrf
                    <div class="row-group-search home1 st">
                      <div class="form-group-1">
                        <span class="icon-search search-job"></span>
                        <input type="text" name="keyword" id="keyword" class="input-filter-search" placeholder="Quel est le service que vous rechercher ?" />
                      </div>
                      <div class="form-group-2">
                        <select name="category" id="category select-location" class="select-location">
                            <option value="">TOUTES LES CATEGORIES</option>
                            @foreach ($categories as $categorie )
                                <option class="uppercase" value="{{ $categorie->id }}">{{$categorie->libelle}}</option>
                            @endforeach
                        </select>
                      </div>
                      <div class="form-group-4">
                        <button type="submit" class="btn btn-find">Trouver le service</button>
                    </div>
                    </div>
                  </form>
                </div>

              </div>
            </div>
            <div class="col-lg-4">
              <div class="wd-review-job thumb2 widget-counter tf-sl3">
                <div class="thumb">
                  <div class="box1">
                    <img src="{{asset('assets/website/images/review/thumb5.png')}}" alt="images" />
                    <div class="markk ani3">
                      <img src="{{asset('assets/website/images/review/shape3.png')}}" alt="images" />
                    </div>
                  </div>
                  <div class="box2">
                    <img src="{{asset('assets/website/images/review/thumb6.png')}}" alt="images" />
                    <div class="markk ani3">
                      <img src="{{asset('assets/website/images/review/shape4.png')}}" alt="images" />
                    </div>
                  </div>
                </div>
                <div class="tes-box ani5">
                  <div class="client-box">
                    <div class="avt">
                      <img src="{{asset('assets/website/images/review/client.jpg')}}" alt="images" />
                      <div class="badge"></div>
                    </div>
                    <div class="content">
                      <h6 class="number wrap-counter">+10M clients</h6>
                      <div class="des">sont satisfaits</div>
                    </div>
                  </div>
                </div>
                <div class="icon1 ani3">
                  <img src="{{asset('assets/website/images/review/icon2.png')}}" alt="images" />
                </div>
                <div class="icon2 ani4">
                  <img src="{{asset('assets/website/images/review/icon3.png')}}" alt="images" />
                </div>
                <div class="icon3 ani6">
                  <img src="{{asset('assets/website/images/review/icon11.png')}}" alt="images" />
                </div>
                <!-- bug counter -->
                <div class="chart-box counter">
                  <h6>Demandes</h6>
                  <div class="chart" data-percent="93" data-size="83" data-withh="10" data-barcolor="#44e720"
                    data-trackcolor="#ecf7ea" data-text="traiter">
                    <div class="inner">
                      <div class="percent"></div>
                      <div class="text"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
    <!-- END SILDER -->
    <!-- Job-category -->
    <section class="job-category-section">
        <div class="tf-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tf-title">
                        <div class="group-title">
                            <h1>Parcourez par catégorie.</h1>

                        </div>
                        <a href="/departements" class="tf-button">
                            Toutes les catégories
                            <span class="icon-arrow-right2"></span>
                        </a>
                    </div>
                </div>
                <!-- wd-job-category -->
                <div class="col-md-12">
                    <div class="group-category-job wow fadeInUp">
                        @foreach($categories_smalls as $categories_small)
                            <div class="job-category-box">
                                <div class="job-category-header">
                                    <h1><a href="">{{$categories_small->libelle}}</a></h1>
                                    {{-- <p>{{ $count ++ }}</p> --}}
                                </div>
                                <a href="/services?keyword=&category={{$categories_small->id}}" class="btn-category-job">Voir les services <span class="icon-keyboard_arrow_right"></span></a>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Job-category -->
    <!-- WD-JOB -->
    <section class="jobs-section-three">
        <div class="tf-container">
        <div class="tf-title style-2">
            <div class="group-title ">
            <h1>Services en vedette</h1>
            <p>Trouvez l'entreprise qui vous convient parfaitement. Environ 200+ services sur Elbara Africa Group .</p>
            </div>
        </div>
        <div class="row wow fadeInUp">

                @foreach ($services as $service)
                    <div class="col-lg-6 ">
                        <div class="features-job">
                            <div class="job-archive-header">
                              <div class="row">
                                <div class="col-lg-4">
                                  <div class="logo-company">
                                    <img class="img-fluid w-100" src="/{{$service->image}}"
                                        alt="image" />
                                </div>
                                </div>
                                <div class="col-lg-8">
                                  <div class="box-content">

                                    <h3>
                                        <a href="{{ route('EntrepriseService.show', ['slug' => $service->libelle]) }}">{{$service->libelle}} </a>
                                        <span class="icon-bolt"></span>
                                    </h3>


                                </div>
                                </div>
                              </div>
                                
                                    
                                

                            </div>

                            <a href="" class="jobtex-link-item" tabindex="0"></a>
                        </div>
                    </div>
                @endforeach






            <div class="col-md-12">
                <div class="wrap-button">
                    <a href="/services" class="tf-button style-1">
                    Voir tous les services
                    <span class="icon-keyboard_arrow_right"></span>
                    </a>
                </div>

            </div>
        </div>
        </div>
    </section>
    <!--END WD-JOB -->
    <!-- WD-icon-box  -->
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
                  les entreprises inscritent sur E-BAG pourront bénéficier d'une assistance comptable et de gestion la d'entreprise 
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
    <!--End wd-icon-box  -->
    <!-- WD-employer -->
    <section class="employer-section">
        <div class="tf-container">
        <div class="wd-employer">
            <div class="tf-title">
            <div class="group-title">
                <h1>Entreprises</h1>
                <!-- <p>Consulter les entreprises en fonction des offres d'emploi récentes</p> -->
            </div>
            <a href="/entreprise" class="tf-button">
                Toutes les Entreprises
                <span class="icon-arrow-right2"></span>
            </a>
            </div>
            <div class="row wow fadeInUp">
                @foreach ($entreprises as $entreprise )
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="employer-block">
                        <div class="inner-box">
                            <div class="logo-company">
                              <img src="{{ asset('assets/images/profil/' . $entreprise->photo) }}" alt="logo" />


                            </div>
                            <div class="box-content">
                            {{-- <div class="star">
                                <span class="icon-star-full"></span>
                                <span class="icon-star-full"></span>
                                <span class="icon-star-full"></span>
                                <span class="icon-star-full"></span>
                                <span class="icon-star-full"></span>
                            </div> --}}
                            <h3>
                                <a href="/entreprise/{{$entreprise->id}}">{{$entreprise->name}}</a>
                                {{-- <span class="icon-bolt"></span> --}}
                            </h3>
                            <p class="info">
                                <span class="icon-map-pin"></span>
                                {{$entreprise->localisation}}
                            </p>
                            </div>
                        </div>
                        <a href="/entreprise/{{$entreprise->id}}" class="jobtex-link-item" tabindex="0"></a>
                        </div>
                    </div>

                @endforeach

        </div>
        </div>
    </section>
    <!-- End-WD-employer -->
    <!-- WD-testimonials -->
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
    <!--End testimonials -->
    <!-- wd-partner -->

    <section class="wd-iconbox style-1 bgc-thm2 p-3">
        <div class="tf-container">
          <div class="row">
            <div class="box">
              <div class="column-6">
                <div class="img-iconbox">
                  <img src="{{asset('assets/website/images/about/about-7.jpg')}}" alt="image" />
                </div>
              </div>
              <div class="column-6">
                <div class="group-iconbox">
                  <div class="title-iconbox">
                    <h3 class="text-white">Rejoignez notre plateforme de mise en relation client-entreprise grâce à nos services de premier ordre.</h3>
                    <p class="text-white">
                        Vous avez désormais l'opportunité de vous connecter avec les entreprises du monde entier.
                        Nous mettons à votre disposition un réseau d'entreprise dotés d'une solide expérience commerciale.
                        Profitez de la meilleure qualité de service de plus de 200 services d'entreprises.
                    </p>
                  </div>
                  <div class="text-iconbox wow fadeInRight">
                    <!-- tf-iconbox -->
                    <div class="tf-iconbox style-1">
                      <div class="box-header">
                        <div class="icon">
                          <svg width="43" height="43" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                              d="M6.15866 20.2094C7.94844 20.2094 9.39931 18.7652 9.39931 16.9836C9.39931 15.2021 7.94844 13.7578 6.15866 13.7578C4.36888 13.7578 2.91797 15.2021 2.91797 16.9836C2.91797 18.7652 4.36888 20.2094 6.15866 20.2094Z"
                              stroke="#148160" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                              stroke-linejoin="round" />
                            <path
                              d="M10.1094 27.9033C10.8671 27.6129 11.3508 26.9033 11.3508 26.0968V25.371C11.3508 21.5 8.98078 20.2097 6.69134 20.2097H5.65946C3.37003 20.2097 1 21.5 1 25.371V26.0968C1 26.9033 1.4998 27.6129 2.24144 27.9033C3.1282 28.242 4.48249 28.5968 6.17538 28.5968C7.86827 28.5968 9.20649 28.242 10.1094 27.9033Z"
                              stroke="#148160" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                              stroke-linejoin="round" />
                            <path
                              d="M21.0571 33.1127C22.8468 33.1127 24.2977 31.6685 24.2977 29.8869C24.2977 28.1054 22.8468 26.6611 21.0571 26.6611C19.2673 26.6611 17.8164 28.1054 17.8164 29.8869C17.8164 31.6685 19.2673 33.1127 21.0571 33.1127Z"
                              stroke="#148160" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                              stroke-linejoin="round" />
                            <path
                              d="M24.9902 40.8059C25.748 40.5155 26.2317 39.8059 26.2317 38.9994V38.2736C26.2317 34.4026 23.8616 33.1123 21.5722 33.1123H20.5403C18.2509 33.1123 15.8809 34.4026 15.8809 38.2736V38.9994C15.8809 39.8059 16.3807 40.5155 17.1223 40.8059C18.0091 41.1446 19.3634 41.4994 21.0562 41.4994C22.7491 41.4994 24.0873 41.1446 24.9902 40.8059Z"
                              stroke="#148160" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                              stroke-linejoin="round" />
                            <path
                              d="M21.0571 7.95161C22.8468 7.95161 24.2977 6.50737 24.2977 4.72581C24.2977 2.94424 22.8468 1.5 21.0571 1.5C19.2673 1.5 17.8164 2.94424 17.8164 4.72581C17.8164 6.50737 19.2673 7.95161 21.0571 7.95161Z"
                              stroke="#148160" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                              stroke-linejoin="round" />
                            <path
                              d="M24.9902 15.6447C25.748 15.3544 26.2317 14.6447 26.2317 13.8383V13.1125C26.2317 9.24149 23.8616 7.95117 21.5722 7.95117H20.5403C18.2509 7.95117 15.8809 9.24149 15.8809 13.1125V13.8383C15.8809 14.6447 16.3807 15.3544 17.1223 15.6447C18.0091 15.9834 19.3634 16.3383 21.0562 16.3383C22.7491 16.3383 24.0873 15.9834 24.9902 15.6447Z"
                              stroke="#148160" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                              stroke-linejoin="round" />
                            <path
                              d="M35.8247 20.2094C37.6145 20.2094 39.0653 18.7652 39.0653 16.9836C39.0653 15.2021 37.6145 13.7578 35.8247 13.7578C34.0349 13.7578 32.584 15.2021 32.584 16.9836C32.584 18.7652 34.0349 20.2094 35.8247 20.2094Z"
                              stroke="#148160" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                              stroke-linejoin="round" />
                            <path
                              d="M39.7754 27.9033C40.5331 27.6129 41.0168 26.9033 41.0168 26.0968V25.371C41.0168 21.5 38.6468 20.2097 36.3574 20.2097H35.3255C33.036 20.2097 30.666 21.5 30.666 25.371V26.0968C30.666 26.9033 31.1658 27.6129 31.9075 27.9033C32.7942 28.242 34.1485 28.5968 35.8414 28.5968C37.5343 28.5968 38.8725 28.242 39.7754 27.9033Z"
                              stroke="#148160" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                              stroke-linejoin="round" />
                            <path d="M34.2767 31.5645C32.8095 33.5483 30.9232 35.1935 28.7305 36.3548" stroke="#148160"
                              stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M8.28711 11.4188C10.0445 9.27366 12.3178 7.59624 14.9297 6.54785" stroke="#148160"
                              stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M13.3177 36.3548C11.125 35.1935 9.23866 33.5483 7.77148 31.5645" stroke="#148160"
                              stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M27.1191 6.54785C29.731 7.59624 32.0043 9.27366 33.7617 11.4188" stroke="#148160"
                              stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                          </svg>
                        </div>
                      </div>
                      <div class="box-content">
                        <h1 class="box-title">
                          <a href="#" class="text-white">Connectez-vous à des entreprises ayant une expérience commerciale approuvée.</a>
                        </h1>

                      </div>
                    </div>
                    <!-- tf-iconbox -->
                    <div class="tf-iconbox style-1">
                      <div class="box-header">
                        <div class="icon">
                          <svg width="42" height="43" viewBox="0 0 42 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                              d="M6.24304 32.3201C8.06215 32.3201 9.53681 30.8522 9.53681 29.0414C9.53681 27.2306 8.06215 25.7627 6.24304 25.7627C4.42392 25.7627 2.94922 27.2306 2.94922 29.0414C2.94922 30.8522 4.42392 32.3201 6.24304 32.3201Z"
                              stroke="#148160" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                              stroke-linejoin="round" />
                            <path
                              d="M10.2587 40.7947C11.0289 40.4997 11.5205 39.7784 11.5205 38.9587V37.5652C11.5205 33.6308 9.11161 32.3193 6.78464 32.3193H5.73585C3.40888 32.3193 1 33.6308 1 37.5652V38.9587C1 39.7784 1.50799 40.4997 2.2618 40.7947C3.16309 41.139 4.53958 41.4997 6.26023 41.4997C7.98087 41.4997 9.34102 41.139 10.2587 40.7947Z"
                              stroke="#148160" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                              stroke-linejoin="round" />
                            <path
                              d="M35.0848 32.3201C36.9039 32.3201 38.3786 30.8522 38.3786 29.0414C38.3786 27.2306 36.9039 25.7627 35.0848 25.7627C33.2657 25.7627 31.791 27.2306 31.791 29.0414C31.791 30.8522 33.2657 32.3201 35.0848 32.3201Z"
                              stroke="#148160" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                              stroke-linejoin="round" />
                            <path
                              d="M31.086 40.7947C30.3158 40.4997 29.8242 39.7784 29.8242 38.9587V37.5652C29.8242 33.6308 32.2331 32.3193 34.5601 32.3193H35.6089C37.9358 32.3193 40.3447 33.6308 40.3447 37.5652V38.9587C40.3447 39.7784 39.8367 40.4997 39.0829 40.7947C38.1816 41.139 36.8051 41.4997 35.0845 41.4997C33.3638 41.4997 31.9873 41.139 31.086 40.7947Z"
                              stroke="#148160" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                              stroke-linejoin="round" />
                            <path
                              d="M20.6649 8.05738C22.484 8.05738 23.9587 6.58946 23.9587 4.77869C23.9587 2.96792 22.484 1.5 20.6649 1.5C18.8458 1.5 17.3711 2.96792 17.3711 4.77869C17.3711 6.58946 18.8458 8.05738 20.6649 8.05738Z"
                              stroke="#148160" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                              stroke-linejoin="round" />
                            <path
                              d="M24.6786 16.533C25.4488 16.2379 25.9404 15.5166 25.9404 14.697V13.3035C25.9404 9.36909 23.5315 8.05762 21.2046 8.05762H20.1558C17.8288 8.05762 15.4199 9.36909 15.4199 13.3035V14.697C15.4199 15.5166 15.9279 16.2379 16.6817 16.533C17.583 16.8773 18.9595 17.2379 20.6801 17.2379C22.4008 17.2379 23.7609 16.8773 24.6786 16.533Z"
                              stroke="#148160" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                              stroke-linejoin="round" />
                            <path d="M20.6641 28.2219V19.6973" stroke="#148160" stroke-width="2" stroke-miterlimit="10"
                              stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M20.8611 28.4344L28.2353 32.6967" stroke="#148160" stroke-width="2"
                              stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M20.5656 28.5L13.1914 32.7623" stroke="#148160" stroke-width="2" stroke-miterlimit="10"
                              stroke-linecap="round" stroke-linejoin="round" />
                          </svg>
                        </div>
                      </div>
                      <div class="box-content">
                        <h1 class="box-title">
                          <a href="#" class="text-white">Entrer en contact avec les meilleurs entreprises pour votre service.</a>
                        </h1>

                      </div>
                    </div>
                    <!-- tf-iconbox -->
                    <div class="tf-iconbox style-1">
                      <div class="box-header">
                        <div class="icon">
                          <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                              d="M24.6022 17.4097C26.8874 19.6775 26.8874 23.3718 24.6022 25.6396C22.317 27.9074 18.6241 27.9074 16.3389 25.6396C14.0537 23.3718 14.0537 19.6775 16.3389 17.4097C17.8563 15.8918 20.0135 15.398 21.9514 15.9101"
                              stroke="#148160" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                              stroke-linejoin="round" />
                            <path
                              d="M29.4277 12.6188C34.3637 17.5385 34.3637 25.5123 29.4277 30.4319C24.4917 35.3516 16.4661 35.3516 11.5301 30.4319C6.59412 25.5123 6.59412 17.5385 11.5301 12.6188C15.7532 8.41242 22.2248 7.80889 27.106 10.8082"
                              stroke="#148160" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                              stroke-linejoin="round" />
                            <path
                              d="M28.7514 3.96788C21.5302 0.602766 12.6636 1.88297 6.70384 7.80849C-0.901279 15.38 -0.901279 27.6517 6.70384 35.2232C14.309 42.7947 26.649 42.7947 34.2541 35.2232C40.9634 28.5295 41.7496 18.1782 36.6124 10.6432"
                              stroke="#148160" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                              stroke-linejoin="round" />
                            <path d="M30.6152 11.4297L31.2368 10.8262" stroke="#148160" stroke-width="2"
                              stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M29.4279 12.6182L24.6016 17.4098" stroke="#148160" stroke-width="2"
                              stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M24.6005 17.4102L20.2129 21.7811" stroke="#148160" stroke-width="2"
                              stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M31.2383 10.8267L33.2127 8.85156" stroke="#148160" stroke-width="2"
                              stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M29.428 12.6186L30.6163 11.4299" stroke="#148160" stroke-width="2"
                              stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M30.5254 10.7344L30.6169 11.4294" stroke="#148160" stroke-width="2"
                              stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M35.8086 6.27291V5.23047" stroke="#148160" stroke-width="2" stroke-miterlimit="10"
                              stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M32.6816 4.18744L35.8078 1.09668V5.22991" stroke="#148160" stroke-width="2"
                              stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M31.4021 5.48589L32.6818 4.18738" stroke="#148160" stroke-width="2"
                              stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M31.4022 5.48535L30.0859 6.78384L30.5247 10.7342" stroke="#148160" stroke-width="2"
                              stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M30.6152 11.43L35.277 11.9603L36.5933 10.6436" stroke="#148160" stroke-width="2"
                              stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M36.8507 6.27246H35.8086" stroke="#148160" stroke-width="2" stroke-miterlimit="10"
                              stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M36.5938 10.6435L40.9996 6.27246H36.8497" stroke="#148160" stroke-width="2"
                              stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M30.5254 10.7344L31.2384 10.8258" stroke="#148160" stroke-width="2"
                              stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                          </svg>
                        </div>
                      </div>
                      <div class="box-content">
                        <h1 class="box-title">
                          <a href="#" class="text-white">Accompagnement personnalisé.</a>
                        </h1>

                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
          {{-- <!--count  -->
          <div class="wrap-count align-item-center">
            <div class="row">
              <div class="col-lg-3 col-md-6 wow fadeInUp">
                <div class="wd-counter widget-counter">
                  <div class="inner wrap-counter">
                    <h2>
                      <span class="counter-number" data-speed="2000" data-to="25"></span><span>M+</span>
                    </h2>
                  </div>
                  <p class="description">Jobs Available</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="wd-counter widget-counter">
                  <div class="inner wrap-counter">
                    <h2>
                      <span class="counter-number" data-speed="2000" data-to="177"></span><span>k+</span>
                    </h2>
                  </div>
                  <p class="description">New Jobs This Week!</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="wd-counter widget-counter">
                  <div class="inner wrap-counter">
                    <h2>
                      <span class="counter-number" data-speed="2000" data-to="298"></span><span>k+</span>
                    </h2>
                  </div>
                  <p class="description">Companies Hiring</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="wd-counter widget-counter">
                  <div class="inner wrap-counter">
                    <h2>
                      <span class="counter-number" data-speed="2000" data-to="5"></span><span>M+</span>
                    </h2>
                  </div>
                  <p class="description">Candidates</p>
                </div>
              </div>
            </div>
          </div> --}}
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
                    <img src="{{asset('assets/website/images/partners/Logo-1.png')}}" alt="Logo.png">
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

    <section class="review-job-section-two">
        <div class="tf-container">
          <div class="row">
            <div class="col-lg-6 col-md-12">
              <div class="wd-review-job contentbox1 padding">
                <h3>Trouvez une entreprise  pour mettre sur pied vos projets.</h3>
                <p>
                    Recherchez des entreprise certifié et qualifiées afin de repondre à vos besoins.
                </p>
                <ul class="wd-list-icon wow fadeInLeft">
                  <li>
                    <span class="icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M0 8.79492C0 13.2061 3.5888 16.7949 8 16.7949C12.4112 16.7949 16 13.2061 16 8.79492C16 4.38372 12.4112 0.794922 8 0.794922C3.5888 0.794922 0 4.38372 0 8.79492ZM12.1657 7.36061C12.4781 7.04819 12.4781 6.54166 12.1657 6.22924C11.8533 5.91682 11.3467 5.91682 11.0343 6.22924L7.2 10.0636L5.36569 8.22924C5.05327 7.91682 4.54673 7.91682 4.23431 8.22924C3.9219 8.54166 3.9219 9.04819 4.23431 9.36061L6.63432 11.7606C6.94673 12.073 7.45327 12.073 7.76569 11.7606L12.1657 7.36061Z"
                          fill="#14A077" />
                      </svg> </span>Accès à des millions de demandeurs de service.
                  </li>
                  <li>
                    <span class="icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M0 8.79492C0 13.2061 3.5888 16.7949 8 16.7949C12.4112 16.7949 16 13.2061 16 8.79492C16 4.38372 12.4112 0.794922 8 0.794922C3.5888 0.794922 0 4.38372 0 8.79492ZM12.1657 7.36061C12.4781 7.04819 12.4781 6.54166 12.1657 6.22924C11.8533 5.91682 11.3467 5.91682 11.0343 6.22924L7.2 10.0636L5.36569 8.22924C5.05327 7.91682 4.54673 7.91682 4.23431 8.22924C3.9219 8.54166 3.9219 9.04819 4.23431 9.36061L6.63432 11.7606C6.94673 12.073 7.45327 12.073 7.76569 11.7606L12.1657 7.36061Z"
                          fill="#14A077" />
                      </svg> </span>Contacter directement avec les entreprises.
                  </li>
                  <li>
                    <span class="icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M0 8.79492C0 13.2061 3.5888 16.7949 8 16.7949C12.4112 16.7949 16 13.2061 16 8.79492C16 4.38372 12.4112 0.794922 8 0.794922C3.5888 0.794922 0 4.38372 0 8.79492ZM12.1657 7.36061C12.4781 7.04819 12.4781 6.54166 12.1657 6.22924C11.8533 5.91682 11.3467 5.91682 11.0343 6.22924L7.2 10.0636L5.36569 8.22924C5.05327 7.91682 4.54673 7.91682 4.23431 8.22924C3.9219 8.54166 3.9219 9.04819 4.23431 9.36061L6.63432 11.7606C6.94673 12.073 7.45327 12.073 7.76569 11.7606L12.1657 7.36061Z"
                          fill="#14A077" />
                      </svg> </span>Publiez gratuitement un nombre illimité d'offres de service, le tout à partir d'un seul endroit
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-6 col-md-12">
              <div class="wd-review-job thumb2 widget-counter">
                <div class="thumb">
                  <img src="{{asset('assets/website/images/review/thumb2.png')}}" alt="images" />
                </div>
                <div class="trader-box">
                  <div class="content">
                    <h3 class="number wrap-counter">
                      <span class="number counter-number" data-speed="200" data-to="2500"></span>
                    </h3>
                    <div class="des">Services disponibles</div>
                  </div>
                  <div class="shape ani7">
                    <img src="{{asset('assets/website/images/review/shape.png')}}" alt="images" />
                  </div>
                </div>
                <div class="tes-box ani5">
                  <div class="client-box">
                    <div class="avt">
                      <img src="{{asset('assets/website/images/review/client.jpg')}}" alt="images" />
                      <div class="badge"></div>
                    </div>
                    <div class="content">
                      <h6 class="number wrap-counter">
                        <span>+</span><span class="number counter-number" data-speed="2000" data-to="20"></span><span>M</span>
                      </h6>
                      <div class="des">Client satistaits</div>
                    </div>
                  </div>
                </div>
                <div class="icon1 ani3">
                  <img src="{{asset('assets/website/images/review/icon1.png')}}" alt="images" />
                </div>
                <div class="icon2 ani1">
                  <img src="{{asset('assets/website/images/review/icon2.png')}}" alt="images" />
                </div>
                <div class="icon3 ani6">
                  <img src="{{asset('assets/website/images/review/icon3.png')}}" alt="images" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

@endsection
