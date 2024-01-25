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
                                <h2>Menu Général</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="ui-content">
                            <hr class="bg-dark">
                            <h3 class="title text-center">Ajouter un Compte(SERVICE CLIENT)</h3>
                            <hr class="bg-dark">
                            <a href="/acces_utilisateurs" class="ud-btn btn-dark mb25 me-4">Liste des comptes utilsateurs</a>
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="{{ route('acces_utilisateurs.store') }}" method="post">
                                        @csrf
                                        <div class="row mr-4 ml-4">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <input required
                                                        type="text"name="name"class="form-control"placeholder="Saisissez le nom et le prenoms de l'utilsateur">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 mt-2">
                                                <div class="form-group">
                                                    <input required
                                                        type="email"name="email"class="form-control"placeholder="Saisissez l'adresse email de l'utilisateur">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 mt-2">
                                                <div class="form-group">
                                                    <input required
                                                        type="password"name="password"class="form-control"placeholder="Saisissez le mot de passe de l'utilisateur">
                                                </div>
                                            </div>
                                            <div class="col-sm-3 mt-3 ">
                                                <div class="form-group mt-1 ">
                                                    <button
                                                        type="submit"class="btn btn-success text-white p-2 ">Valider</button>
                                                    <a href="/acces_utilisateurs"class="btn btn-danger text-white p-2 ">Retour</a>

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
