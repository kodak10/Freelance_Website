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
                            <h2>Demande de service client</h2>
                            <p class="text">Les demandes de service reçu sont affichés ici avec les détails</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @foreach ($demandes as $demande )
                        <div class="col-lg-3">
                            <div class="card w-100">
                                <img class="card-img-top" src="..." alt="Image du service">
                                <div class="card-body">
                                <h5 class="card-title">Création de boulangerie</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est quidem temporibus deserunt vel harum sapiente maiores, magni eat in</p>
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