@extends('layouts.app')
@section('content')

<style>
    .header{
        margin-bottom: 2rem !important;
    }
   
  .nice-select .option{
      text-transform: uppercase !important;
    }
    .nice-select .option.selected{
        color: var(--color-bleu) !important;
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
    .blog-style1:hover p{
        color: var(--color-jaune) !important;
    }
</style>


<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

{{-- <section class="breadcumb-section mt40 mt-5">
    <div class="cta-about-v1 mx-auto maxw1700 pt120 pb120 bdrs16 position-relative overflow-hidden d-flex align-items-center mx20-lg">
      <div class="container">
        <div class="row">
          <div class="col-xl-5">
            <div class="position-relative">
              <h2 class="text-white">TROUVEZ UN SERVICE</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}


    <section class=" stc1 mt-2">
        <div class="tf-container">
        <div class="job-search-form inner-form-map st1">
            <form method="get" action="{{route('services.search')}}">
                
                <div class="row-group-search">
                    <div class="form-group-1">
                        <input type="text" name="keyword" id="keyword" class="input-filter-search" placeholder="Quel est le service que vous rechercher ?">
                        <span class="icon-search search-job"></span>
                    </div>
                    <div class="form-group-2">

                        <select name="category" id="category select-location" class="select-location">
                            <option value="">TOUTES LES CATEGORIES</option>
                            @foreach ($categories as $categorie )
                                <option class="text-uppercase" value="{{ $categorie->id }}">{{$categorie->libelle}}</option>
                            @endforeach
                        </select>

                    </div>

                    <div class="form-group-4">
                        <button class="btn btn-find">Rechercher</button>
                    </div>
                </div>

            </form>

            <div class="row mt-5">
                @forelse ($services as $service )
                    <div class="col-lg-3 mt-3 mb-3 m-auto">
                        
                        {{-- <div class="card blog-style1 w-100 ">
                            <img src="{{$service->image}}" class=" w-100" alt="..." style="height: 200px !important">
                            <div class="card-body p-2 mb-3">
                              <p class="card-text"><a href="{{ route('services_entreprises', $service) }}">{{$service->libelle}}</a></p>
                            </div>
                          </div> --}}

                          <div class="blog-style1">
                            <div class="blog-img"><img class="w-100" style="height:250px" src="{{$service->image}}" alt=""></div>
                            <div class="blog-content">
                                <p class="text mb-0"><a href="{{ route('services_entreprises', $service) }}">{{$service->libelle}}</a></p>
                            </div>
                        </div>

                    </div>

                    @empty
                    <span>Aucun résultat trouvé</span>
                @endforelse

                <div class="d-flex justify-content-center mb-5 mt-5">
                    {{ $services->links() }}
                </div>


            </div>
        </div>
        </div>
    </section>

@endsection
