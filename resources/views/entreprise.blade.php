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
                    <div class="title-dash flex2">Les Entreprises</div>
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

            @foreach ($entreprises as $entreprise )
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="employer-block">
                <div class="inner-box">
                    <div class="logo-company">
                    <img src="{{asset('assets/website/images/logo-company/cty11.png')}}"
                        alt="logo" />
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
            <div class="d-flex justify-content-center mb-5 mt-5">
                {{ $entreprises->links() }}
            </div>
                   
              


           
        </div>
    </div>
</section>
@endsection
