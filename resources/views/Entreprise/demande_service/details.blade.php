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
                            <h2>Menu Général</h2>
                        </div>
                    </div>
                </div>
                
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nom" class="col-md-4 control-label">Description</label>
                            <div class="col-md-6">
                                <textarea disabled>{{ $demandes_details->description }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nom" class="col-md-4 control-label">Durée d'exécution</label>
                            <div class="col-md-6">
                                <input style="text-transform: uppercase" value="{{ $demandes_details->delais_execution }}"  type="text" class="form-control" disabled>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <a href="/compagny/demandes" class="btn btn-success text-white p-2">Retour</a>
                </div>
                
    
            </div>
    
            @include('Entreprise.layouts.footer')
    
        </div>
    </div>

   
</div>

@endsection