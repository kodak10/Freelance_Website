@extends('Entreprise.layouts.app')
@section('content')


<div class="dashboard_content_wrapper">

    <div class="dashboard dashboard_wrapper pr30 pr0-xl">

        @include('Entreprise.layouts.sidebar')

        <div class="dashboard__main pl0-md">
            <div class="dashboard__content hover-bgc-color">
                <div class="row pb40">
                    <div class="col-lg-12">
                        @include('Entreprise.layouts.sidebar-mobile')

                    </div>
                    <div class="col-lg-12">
                        <div class="dashboard_title_area">
                            <h3 style="font-family: poppins">Demande de service client reçu</h3>
                            {{-- <p class="text">Les demandes de service reçu sont affichés ici avec les détails....</p> --}}
                        </div>
                    </div>
                </div>

                <div class="row">
                    @foreach ($demandes as $demande )
                        <div class="col-lg-3">
                            <div class="card w-100">
                                <img class="card-img-top img-fluid" src="/{{ $demande->service->image }}" alt="Image du service" style="height: 200px !important; width:100% !important">
                                <div class="card-body">
                                    <h5 class="card-title">{{$demande->service->libelle}}</h5>
                                    <p class="card-text">{{$demande->description}}</p>
                                </div>
                                <div class="row p-2 text-center">
                                    <div class="col-lg-6">

                                        <button class="btn btn-success"><a class="ud-btn2" href="tel:{{ $demande->client->telephone }}">Contactez le client</a></button>
                                    </div>
                                    <div class="col-lg-6">
                                       <button class="btn btn-danger"><a class="ud-btn2" href="{{ route('demande.details', ['id' => $demande->id]) }}">Plus de details</a></button> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>

            @include('Entreprise.layouts.footer')

        </div>
    </div>
</div>

@endsection