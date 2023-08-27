@extends('layouts.app')

<style>
    header.nav-homepage-style {
        position: relative !important;
    }
    .mobilie_header_nav{
        background-color: #5BBB7B !important;
        margin-bottom: 50px
    }

</style>
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


</style>
@section('content')
    <div class="container">

        <h4 class="">Résultats de la recherche</h4>

        <div class="row mt-5">
            @forelse ($services as $service)
                <div class="col-lg-3">
                    <div class="listing-style1">
                        <div class="list-thumb">
                            <img class="w-100" src="{{asset('assets/images/listings/g-1.jpg')}}" alt="Image">
                            <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                        </div>
                        <div class="list-content">
                            <li></li>
                            <p class="list-text body-color fz14 mb-1"><a href="{{ route('EntrepriseService.show', ['slug' => $service->id]) }}">{{$service->libelle}}</a></p>
                        </div>
                    </div>
                </div>
                @empty
                    <span>Aucun résultat pour votre recherche</span>
            @endforelse
        </div>

    </div>
@endsection
