@extends('layouts.app')
@section('content')

<style>
  .header{
      margin-bottom: 2rem !important;
  }
  
 
  #header.style-absolute #main-nav #menu-primary-menu>li>a{
      color: #000000 !important;
    }
    .btn-thm{
      background-color: var(--color-jaune) !important;
      border-color: var(--color-jaun) !important;
    }
    #header.style-absolute #main-nav #menu-primary-menu>li>a:hover{
      color: var(--color-jaune) !important;
    }
    #header.style-absolute #main-nav #menu-primary-menu>li.current-item>a{
      color: var(--color-jaune) !important ;
    }
</style>

<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/googlemap.css')}}">


 <!-- Breadcumb Sections -->
 <section class="breadcumb-section wow fadeInUp mt40">
    <div class="cta-commmon-v1 cta-banner bgc-thm2 mx-auto maxw1700 pt120 pb120 bdrs16 position-relative overflow-hidden d-flex align-items-center mx20-lg">
      <img class="left-top-img wow zoomIn" src="{{asset('assets/images/vector-img/left-top.png')}}" alt="">
      <img class="right-bottom-img wow zoomIn" src="{{asset('assets/images/vector-img/right-bottom.png')}}" alt="">
      <div class="container">
        <div class="row">
          <div class="col-xl-5">
            <div class="position-relative wow fadeInUp" data-wow-delay="300ms">
              <h2 class="text-white">Contactez-nous</h2>
              <p class="text mb0 text-white">Nous serions ravis de discuter de la manière dont nous pouvons vous aider.</p>
              <span><a class="text-white" href="/">Elbaragroup -> </a>Contact</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Our Contact Info -->
  <section class="pt-0">
    <div class="container">
      <div class="row wow fadeInUp" data-wow-delay="300ms">
        <div class="col-lg-6">
          <div class="position-relative mt40">
            <div class="main-title">
              <h4 class="form-title mb25">Restez en contact avec nous.</h4>
              <p class="text">Si vous avez besoin de quoi que ce soit d'autre, n'hésitez pas à nous contacter. Notre équipe est toujours à votre disposition pour vous aider de la meilleure façon possible..</p>
            </div>
            <div class="iconbox-style1 contact-style d-flex align-items-start mb30">
              <div class="icon flex-shrink-0"><span class="flaticon-tracking"></span></div>
              <div class="details">
                <h5 class="title">Adresse</h5>
                <p class="mb-0 text">Yopougon</p>
              </div>
            </div>
            <div class="iconbox-style1 contact-style d-flex align-items-start mb30">
              <div class="icon flex-shrink-0"><span class="flaticon-call"></span></div>
              <div class="details">
                <h5 class="title">Tel</h5>
                <p class="mb-0 text">+(225) 0758265650 </p>
              </div>
            </div>
            <div class="iconbox-style1 contact-style d-flex align-items-start mb30">
              <div class="icon flex-shrink-0"><span class="flaticon-mail"></span></div>
              <div class="details">
                <h5 class="title">Email</h5>
                <p class="mb-0 text">infos@Elbaragroup.com</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="contact-page-form default-box-shadow1 bdrs8 bdr1 p50 mb30-md bgc-white p-3">
            <h4 class="form-title mb25">Parlez nous de vous</h4>
            <p class="text mb30">Que vous ayez des questions ou que vous souhaitiez simplement dire bonjour, contactez-nous.</p>
            <form action="#" class="form-style1">
              <div class="row">
                <div class="col-md-6">
                  <div class="mb20">
                    <label class="heading-color ff-heading fw500 mb10" for="">Nom</label>
                    <input type="text" class="form-control" placeholder="Votre Nom">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb20">
                    <label class="heading-color ff-heading fw500 mb10" for="">Email</label>
                    <input type="email" class="form-control" placeholder="Votre Email">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="mb20">
                    <label class="heading-color ff-heading fw500 mb10" for="">Message</label>
                    <textarea name="" id="" cols="30" rows="6" placeholder="Laissez nous votre message"></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="">
                    <a class="ud-btn btn-thm" href="#">Envoyer<i class="fal fa-arrow-right-long"></i></a>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Google Map -->
  <section class="p-0 wow fadeInUp mb-5" data-wow-delay="300ms">
    <div class="mx-auto maxw1700 bdrs16 position-relative mx20-lg">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.841647296339!2d-3.965226925366187!3d5.28739159469083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1ef4f28d7281f%3A0xa2324ced14932932!2sAGORA%20KOUMASSI!5e0!3m2!1sfr!2sci!4v1690083652291!5m2!1sfr!2sci" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </section>

  <!-- Faq -->
 {{--  <section class="pb70">
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
  </section> --}}


@endsection
