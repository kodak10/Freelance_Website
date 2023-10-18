@extends('layouts.app')
@section('content')

<style>
    .mobilie_header_nav{
        background-color: #5BBB7B !important;
    }
    header.nav-homepage-style {
        position: relative !important;
    }
    header.nav-homepage-style a{
        color: #000000 !important;
    }


</style>
<style>

    .btn_search{
        color: #000000;
        border: 1px solid #5BBB7B !important;
    }
    .btn_search:hover{
        color: #000000 !important;
    }
</style>

    <!-- Breadcumb Sections -->
    <section class="breadcumb-section mt40">
        <div class="cta-about-v1 mx-auto maxw1700 pt120 pb120 bdrs16 position-relative overflow-hidden d-flex align-items-center mx20-lg">
          <div class="container">
            <div class="row">
              <div class="col-xl-5">
                <div class="position-relative">
                  <h2 class="text-white">Les Services</h2>
                  <span><a href="/">Elbaragroup -></a>Les services</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    <!-- Property Half Map V1 -->
    <section class="p-0 ">
        <div class="container">
            <div class="row wow fadeInUp mt-5" data-wow-delay="300ms">
                <div class="col-lg-12">
                    <div class="half_map_area_content mt30">
                        <div class="text-center text-sm-start">
                            <h4 class="fw700 mb20">Les Services</h4>
                        </div>

                        <form action="{{ route('services.search') }}" method="GET" class="row g-3 mb-5 mt-3">
                            <div class="col-lg-6">
                                <label for="category" class="form-label">Catégorie de Service :</label>
                                <select name="category" id="category" class="form-select form-control">
                                    <option value="">Toutes les catégories</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->libelle }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label for="keyword" class="form-label">Mot-clé :</label>
                                <input type="text" name="keyword" id="keyword" class="form-control" placeholder="Entrez un mot-clé">
                            </div>
                            <div class="col-lg-2">
                                <label type="hidden" for=""></label>
                                <button type="submit" class="btn btn-primary btn_search form-control" style="background: #5BBB7B">Rechercher</button>
                            </div>
                        </form>

                        <div class="row">
                            @forelse ($services as $service )
                                <div class="col-lg-3">
                                    <div class="listing-style1">
                                        <div class="list-thumb">
                                            <img class="w-100" src="{{$service->image}}" alt="Image">
                                            <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                                        </div>
                                        <div class="list-content">
                                            <p class="list-text body-color fz14 mb-1"><a href="{{ route('EntrepriseService.show', ['slug' => $service->libelle]) }}">{{$service->libelle}}</a></p>
                                        </div>
                                    </div>
                                </div>

                                @empty
                                <span>Aucun résultat trouvé</span>
                            @endforelse

                            <div class="d-flex justify-content-center mb-5 ">
                                {{ $services->links() }}
                            </div>


                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection