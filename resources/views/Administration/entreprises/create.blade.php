@extends('Administration.layouts.app')

@section('content')
    <!-- right content -->
    @if (session()->has('deleted'))
        <script>
            Swal.fire(
                'Effectué!',
                'suppression effectuée avec succès!',
                'success'
            );
            // alert('suppression effectuee avec succes')
        </script>
    @elseif(session()->has('added'))
        <script>
            Swal.fire(
                'Effectué!',
                'Ajout effectué avec succès!',
                'success'
            );
            // alert('Ajout effectue avec succes')
        </script>
    @elseif(session()->has('updated'))
        <script>
            Swal.fire(
                'Effectué!',
                'Mise a jour effectuée avec succès!',
                'success'
            );
            // alert('Mise a jour effectuee avec succes')
        </script>
    @elseif(session()->has('nothing'))
        <script>
            Swal.fire(
                'Erreur!',
                'Oups ,une erreur s\'est produite!',
                'danger'
            );
            // alert('Oups ,une erreur s\'est produite')
        </script>
    @endif
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
                            <h3 class="title text-center">Ajouter une Entreprise</h3>
                            <hr class="bg-dark">
                            <a href="/administration/entreprises" class="ud-btn btn-dark mb25 me-4">Liste des Entreprises</a>
                            <div class="row">
                                @if(Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>
                                @endif
    
                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="{{ route('entreprises.store') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row mr-4 ml-4">

                                            <div class="col-lg-6 col-xl-6">
                                                <div class="form-group">
                                                    <label class="form-label fw500 fz16 dark-color">Type D'entreprise</label>
                                                    <select name="type_entreprise" class="form-select form-select-md mb-3 form-control" aria-label=".form-select-lg example" >
                                                        <option value="">Sélectionner le type d'entreprise</option>
                                                        <option value="Nationale">Nationale</option>
                                                        <option value="Multinationale">Multinationale</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-xl-6">
                                                <div class="form-group">
                                                    <label class="form-label fw500 fz16 dark-color">Nom de l'entreprise</label>
                                                    <input required type="text"name="name"class="form-control"placeholder="Saisissez le Nom de l'entreprise">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-xl-6">
                                                <div class="form-group">
                                                    <label class="form-label fw500 fz16 dark-color">Email</label>
                                                    <input required type="email"name="email"class="form-control"placeholder="Saisissez le Nom de l'entreprise">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-xl-6">
                                                <div class="form-group">
                                                    <label class="form-label fw500 fz16 dark-color">Nationalité</label>
                                                    <input required type="text"name="nationalite"class="form-control"placeholder="Saisissez la nationalité">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-xl-6">
                                                <div class="form-group">
                                                    <label class="form-label fw500 fz16 dark-color">Téléphone</label>
                                                    <input required type="phone"name="telephone"class="form-control"placeholder="Saisissez le Numéro de téléphone">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-xl-6">
                                                <div class="form-group">
                                                    <label class="form-label fw500 fz16 dark-color">Régime Social</label>
                                                    <input required type="text"name="regime"class="form-control"placeholder="Saisissez le Régime Social">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-xl-6">
                                                <div class="form-group">
                                                    <label class="form-label fw500 fz16 dark-color">Localisation</label>
                                                    <input required type="text"name="localisation"class="form-control"placeholder="Saisissez le regime social">
                                                </div>
                                            </div>

                                           


                                            <center>
                                                <div class="col-sm-3 mt-3">
                                                    <div class="form-group mt-3 ">
                                                        <button
                                                            type="submit"class="btn btn-success text-white p-2 ">Valider</button>
                                                        <a href="/administration/entreprises"class="btn btn-danger text-white p-2 ">Retour</a>
                                                    </div>
                                                </div>
                                            </center>

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
