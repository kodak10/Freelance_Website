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


</style>

    <section class="p-0 ">
        <div class="container">
            <div class="row">
                @foreach ($serviceEntreprises as $serviceEntreprise )
                    <div class="col-lg-3">
                        <div class="listing-style1">
                            <div class="list-thumb">
                                <img class="w-100" src="{{$serviceEntreprise->image}}" alt="Image">
                                <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                            </div>
                            <div class="list-content">
                                <h5><a href="{{ route('serviceDetail.show', ['libelle' => $serviceEntreprise->libelle]) }}">{{$serviceEntreprise->libelle}}</a></h5>
                                <p class="list-text body-color fz14 mb-1"><a href="{{ route('serviceDetail.show', ['libelle' => $serviceEntreprise->libelle]) }}">{{$serviceEntreprise->description}}</a></p>
                            </div>
                        </div>
                    </div>


                @endforeach
            </div>

        </div>
    </section>

@endsection