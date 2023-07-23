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
                            <h3 class="title text-center">Informations d'un compte utilisateur</h3>
                            <hr class="bg-dark">

                            <a href="/acces_utilisateurs" class="ud-btn btn-dark mb25 me-4">Liste des comptes</a>
                            <div class="row">
                                <div class="col-lg-12">
                                    <form>
                                        <div class="row mr-4 ml-4">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Nom et Prenom(s)</label>
                                                    <input disabled type="text"name="name"class="form-control"
                                                        value="{{ $User->name ?? '' }}"placeholder="Saisissez le nom et le prenoms de l'utilsateur">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input disabled
                                                        type="email"name="email"value="{{ $User->email ?? '' }}"class="form-control"placeholder="Saisissez l'adresse email de l'utilisateur">
                                                </div>
                                            </div>
                                            <div class="col-sm-12 text-center mt-2">
                                                <div class="form-group mt-1 ">
                                                    <a href="/acces_utilisateurs"
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
