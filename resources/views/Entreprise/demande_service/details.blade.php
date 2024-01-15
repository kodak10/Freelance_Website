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
                            <h2>Détails</h2>
                        </div>
                    </div>
                </div>

                <div class="row ">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="nom" class="col-md-4 control-label">Description</label>
                                    <div class="col-md-6">
                                        <input style="text-transform: uppercase" value="{{ $demandes_details->description }}"  type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="nom" class="col-md-4 control-label">Duréee d'exécution</label>
                                    <div class="col-md-6">
                                        <input style="text-transform: uppercase"value="{{ $demandes_details->delais_execution }}"  type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="nom" class="col-md-4 control-label">Cahier de charge</label>
                                    <div class="col-md-6">
                                        <input style="text-transform: uppercase"  type="file" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                       
                        
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <button><a href="/compagny/demandes">Retour</a></button>
                        <button><a href="#">Conatez le client</a></button>

                    </div>
                </div>

            </div>

            @include('Entreprise.layouts.footer')

        </div>
    </div>
</div>

@endsection