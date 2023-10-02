@extends('layouts.app')
@section('content')

<style>
    .mobilie_header_nav{
        background-color: #5BBB7B !important;
    }
    header.nav-homepage-style {
        position: relative;
    }
    header.nav-homepage-style a{
        color: #000000 !important;
    }
    .title {
        color: #000000 !important;
        font-weight: 600;
        text-transform: uppercase;
    }




</style>

    <section class="p-0 ">
        <div class="container">
            <h3 class="title mb-5 mt-5">Les entreprises offrant le service choisi</h3>
            <div class="row">
                @forelse($serviceEntreprises as $serviceEntreprise)
                    <div class="col-lg-3">
                        <div class="listing-style1">
                            <div class="list-thumb">
                                <img class="w-100" src="{{$serviceEntreprise->image}}" alt="Image">
                                <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                            </div>
                            <div class="list-content">
                                <h4 class="fw-bold; text-uppercase">{{$serviceEntreprise->name}}</h4>
                                <p class="list-text body-color fz14 mb-1"><a href="{{ route('serviceDetail.show', ['entreprise_nom' => $serviceEntreprise->name]) }}">{{$serviceEntreprise->description}}</a></p>
                            </div>
                        </div>
                    </div>


                    @empty
                        <span class="mb-5">Aucune entreprise trouvé concernant ce service</span>

                @endforelse
            </div>

        </div>
    </section>

@endsection