@extends('Client.layouts.app')

@section('content')


<div class="dashboard_content_wrapper">

    <div class="dashboard dashboard_wrapper pr30 pr0-xl">

        @include('Client.layouts.sidebar')

        <div class="dashboard__main pl0-md">
            <div class="dashboard__content hover-bgc-color">


                <div class="row pb40">
                    <div class="col-lg-12">
                        @include('Client.layouts.sidebar-mobile')
                    </div>
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">Modifier le profil</div>

                            <div class="panel-body">
                                <form class="form-horizontal" method="POST" action="{{ route('update_profil') }}">
                                    {{ csrf_field() }}

                                    <div class="form-group">
                                        <label for="nom" class="col-md-4 control-label">Type d'entreprise</label>
                                        <div class="col-md-6">
                                            <select name="type_entreprise" class="form-select form-select-md mb-3 form-control" aria-label=".form-select-lg example" >
                                                <option value="{{ old('name', Auth::user()->compagny->name) }}" disabled>{{ old('name', Auth::user()->compagny->name) }}</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Nom -->
                                    <div class="form-group">
                                        <label for="nom" class="col-md-4 control-label">Nom</label>
                                        <div class="col-md-6">
                                            <input id="nom" type="text" class="form-control" name="name" value="{{ old('name', Auth::user()->compagny->name) }}" required autofocus>
                                        </div>
                                    </div>

                                    <!-- Prénoms -->
                                    <div class="form-group">
                                        <label for="prenom" class="col-md-4 control-label">N</label>
                                        <div class="col-md-6">
                                            <input id="prenom" type="text" class="form-control" name="prenoms" value="{{ old('prenoms', Auth::user()->compagny->prenoms) }}" required>
                                        </div>
                                    </div>

                                    <!-- Date de naissance -->
                                    <div class="form-group">
                                        <label for="date_naissance" class="col-md-4 control-label">Date de naissance</label>
                                        <div class="col-md-6">
                                            <input id="date_naissance" type="date" class="form-control" name="date_naissance" value="{{ old('date_de_naissance', Auth::user()->compagny->date_naissance) }}">
                                        </div>
                                    </div>

                                    <!-- Mot de passe -->
                                    <div class="form-group">
                                        <label for="mot_de_passe" class="col-md-4 control-label">Nouveau mot de passe</label>
                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control" name="password">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password" class="col-md-4 control-label">Confirmer le mot de passe</label>
                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control" name="confirm-password">
                                        </div>
                                    </div>

                                    <!-- Téléphone -->
                                    <div class="form-group">
                                        <label for="telephone" class="col-md-4 control-label">Téléphone</label>
                                        <div class="col-md-6">
                                            <input id="telephone" type="text" class="form-control" name="telephone" value="{{ old('telephone', Auth::user()->compagny->telephone) }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <button type="submit" class="btn btn-primary">
                                                Enregistrer les modifications
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            @include('Client.layouts.footer')

        </div>
    </div>
</div>

@endsection