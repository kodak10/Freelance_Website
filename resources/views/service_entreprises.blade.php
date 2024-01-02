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
                    <div class="title-dash flex2">Les Services</div>
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

            @forelse ( $services as $service)
            <div class="col-lg-6 ">
                <div class="features-job">
                    <div class="job-archive-header">
                        <div class="row">
                            <div class="inner-box">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="logo-company">
                                            <img class="img-fluid w-100" src="{{$service->image}}"
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
                        </div>

                    </div>

                    <a href="" class="jobtex-link-item" tabindex="0"></a>
                </div>
            </div>
            @empty
                <span>Cette entreprise ne propose aucun service</span>
            @endforelse 
            <div class="d-flex justify-content-center mb-5 mt-5">
                {{ $services->links() }}
            </div>
                   
              


           
        </div>
    </div>
</section>
@endsection
