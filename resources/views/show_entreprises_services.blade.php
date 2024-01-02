@extends('layouts.app')
@section('content')
<style>
    .header{
        margin-bottom: 2rem !important;
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
{{-- <section class="p-0 ">
    <div class="container">
        <h3 class="title mb-5 mt-5">Les entreprises offrant le service choisi</h3>
        <div class="row">
            @forelse($serviceEntreprises as $serviceEntreprise)
                <div class="col-lg-3">
                    <div class="listing-style1">
                        <div class="list-thumb">
                            <img class="w-100" src="{{$serviceEntreprise->image}}" alt="Image">
                            <a href="{{ route('serviceDetail.show', ['entreprise_nom' => $serviceEntreprise->name]) }}" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                        </div>
                        <div class="list-content">
                            <h4 class="fw-bold; text-uppercase"><a href="{{ route('serviceDetail.show', ['entreprise_nom' => $serviceEntreprise->name]) }}">{{$serviceEntreprise->name}}</a></h4>

                        </div>
                    </div>
                </div>


                @empty
                    <span class="mb-5">Aucune entreprise trouvé concernant ce service</span>

            @endforelse
        </div>

    </div>
</section> --}}
<section class="blog-section mt-5">
    <div class="tf-container">
        <div class="row">

            <div class="col-md-12">
                <div class="group-category-job wow fadeInUp">
                    @forelse ($serviceEntreprises as $serviceEntreprise)
                        <div class="job-category-box">
                            <div class="logo">
                                <img class="img-fluid" src="{{asset('assets/website/images/dashboard/logo-company-4.png')}}" alt="image">

                            </div>
                            <div class="job-category-header">
                                <h1><a href="{{ route('serviceDetail.show', ['entreprise_nom' => $serviceEntreprise->name]) }}">{{$serviceEntreprise->name}}</a></h1>
                            </div>
                            <a href="{{ route('serviceDetail.show', ['entreprise_nom' => $serviceEntreprise->name]) }}" class="btn-category-job">En savoir plus <span class="icon-keyboard_arrow_right"></span></a>
                        </div>
                        @empty
                        Aucune Entreprise ne propose ce service
                    @endforelse
                    <div class="d-flex justify-content-center mb-5 mt-5">
                        {{ $serviceEntreprises->links() }}
                    </div>

                </div>
            </div>
        </div>

      

  </section>
@endsection
