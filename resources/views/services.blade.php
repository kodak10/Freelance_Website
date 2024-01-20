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
</style>



    <section class=" stc1 mt-5">
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
                        <div class="card w-100">
                            <img src="{{$service->image}}" class="card-img-top zoomRotateImage img-fluid w-100" alt="..." style="height: 200px !important">
                            <div class="card-body p-2 mb-3">
                              <p class="card-text"><a href="{{ route('services_entreprises', $service) }}">{{$service->libelle}}</a></p>
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
