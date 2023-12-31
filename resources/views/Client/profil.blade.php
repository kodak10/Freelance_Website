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
                                <div class="row">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    @if(session('error'))
                                        <div class="alert alert-danger">
                                            {{ session('error') }}
                                        </div>
                                    @endif

                                    @if (session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif

                                    <form class="form-horizontal" method="POST" action="{{ route('update_profil_client') }}" enctype="multipart/form-data">
                                        {{ csrf_field() }}
    
                                                                           
                                        <!-- Nom -->
                                        <div class="form-group">
                                            <label for="nom" class="col-md-4 control-label">Nom</label>
                                            <div class="col-md-6">
                                                <input id="nom" type="text" class="form-control" name="name" value="{{ old('name', Auth::user()->client->name) }}" required autofocus>
                                            </div>
                                        </div>
    
                                        <!-- Prénoms -->
                                        <div class="form-group">
                                            <label for="prenom" class="col-md-4 control-label">Prénoms</label>
                                            <div class="col-md-6">
                                                <input id="prenom" type="text" class="form-control" name="prenoms" value="{{ old('prenoms', Auth::user()->client->prenoms) }}" required>
                                            </div>
                                        </div>
    
                                        <!-- telephone -->
                                        <div class="form-group">
                                            <label for="telephone" class="col-md-4 control-label">Téléphone</label>
                                            <div class="col-md-6">
                                                <input id="telephone" type="text" class="form-control" name="telephone" value="{{ old('telephone', Auth::user()->client->telephone) }}" required>
                                            </div>
                                        </div>
    
                                        <!-- Email -->
                                        <div class="form-group">
                                            <label for="mot_de_passe" class="col-md-4 control-label">Email</label>
                                            <div class="col-md-6">
                                                <input id=" email" type="email" class="form-control" value="{{ old('email', Auth::user()->email) }}" disabled>
                                            </div>
                                        </div>
    
                                       
    
                                       <!-- Acien Mot de passe -->
                                    <div class="form-group">
                                        <label for="mot_de_passe" class="col-md-4 control-label">Ancien mot de passe</label>
                                        <div class="col-md-6">
                                            <input id=" old_password" type="password" class="form-control" name="old_password">
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
                                            <input id="password" type="password" class="form-control" name="password_confirmation">
                                        </div>
                                    </div>
                                        <!-- Image -->
                                        <div class="form-group">
                                            <label for="image" class="col-md-4 control-label">Image de profil</label>
                                            <div class="col-md-6">
                                                <input id="image" type="file" class="form-control" name="image">
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


            </div>

            @include('Client.layouts.footer')

        </div>
    </div>
</div>

@endsection