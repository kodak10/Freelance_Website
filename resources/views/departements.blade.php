@extends('layouts.app')
@section('content')
<style>

  .nav-mobile{
    background-color: var(--color-bleu) !important;
  }
</style>
<style>
  .features-job .job-archive-header h3 a{
      font-weight: 600 !important;
  }
  .bgc-thm2 {
      background-color: var(--color-bleu) !important;
  }
  .tf-slider.sl3 {

      background: var(--color-bleu) !important;
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
  #header.style-absolute #main-nav #menu-primary-menu>li>a{
      color: #000000 !important;
    }
    #header.style-absolute #main-nav #menu-primary-menu>li>a:hover{
      color: var(--color-jaune) !important;
    }
    #header.style-absolute #main-nav #menu-primary-menu>li.current-item>a{
      color: var(--color-jaune) !important ;
    }
</style>


  <section class="account-section">
    <div class="tf-container">
      <div class="row">
        <section class="page-title-dashboard">
            <div class="themes-container">
              <div class="row">
                <div class="col-lg-12 col-md-12 ">
                  <div class="title-dashboard">
                    <div class="title-dash flex2">Catégories</div>
                  </div>
                </div>
              </div>
            </div>
          </section>
      </div>
    </div>
  </section>
  <section class="job-category-section">
    <div class="tf-container">
        <div class="row">

            <div class="col-md-12">
                <div class="group-category-job wow fadeInUp">
                    @foreach($categories as $categorie)
                        <div class="job-category-box">
                            <div class="job-category-header">
                                <h1><a href="">{{$categorie->libelle}}</a></h1>
                                {{-- <p>120 services disponible</p> --}}
                            </div>
                            <a href="/services?keyword=&category={{$categories_small->id}}" class="btn-category-job">Voir les services <span class="icon-keyboard_arrow_right"></span></a>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
