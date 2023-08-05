@extends('Administration.layouts.app')
@section('content')
    <div class="dashboard_content_wrapper">

        <div class="dashboard dashboard_wrapper pr30 pr0-xl">

            @include('Administration.layouts.sidebar')

            <div class="dashboard__main pl0-md">
                <div class="dashboard__content hover-bgc-color">
                    <div class="row pb40">
                        <div class="col-lg-12">
                            @include('Administration.layouts.sidebar-mobile')

                        </div>
                        <div class="col-lg-12">
                            <div class="dashboard_title_area">
                                <h2>Dashboard</h2>
                                <p class="text">Lorem ipsum dolor sit amet, consectetur.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="ui-content">
                            <hr class="bg-dark">
                            <h3 class="title text-center">Informations d'un departement</h3>
                            <hr class="bg-dark">

                            <a href="/departements" class="ud-btn btn-dark mb25 me-4">Liste des departements</a>
                            <div class="row">
                                <div class="col-lg-12">
                                    <form>
                                        <div class="row mr-4 ml-4">
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <input disabled required value="{{ $departements->libelle ?? '' }}"
                                                        type="text" name="libelle" class="form-control"
                                                        placeholder="Saisissez le Libelle du departement">
                                                </div>
                                            </div>
                                            <div class="col-sm-3 mt-1">
                                                <div class="form-group mt-1 ">
                                                    <a href="/departements"
                                                        class="btn btn-danger text-white p-2 ">Retour</a>

                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @include('Administration.layouts.footer')

            </div>
        </div>
    </div>
@endsection
