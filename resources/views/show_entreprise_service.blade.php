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
            <h4>Ici est afficher les entreprises proposant le services selectionner</h4>
            <div class="row wow fadeInUp mt-5" data-wow-delay="300ms">
                @foreach ($serviceEntreprises as $serviceEntreprise )
                <div class="col-lg-4">
                    <div class="card w-100">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">{{$serviceEntreprise->libelle}}</h5>
                          <p class="card-text">{{ Str::limit($serviceEntreprise->description, 100, '...') }}</p>
                          <a href="#" class="btn btn-primary">Consulter</a>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </section>

@endsection