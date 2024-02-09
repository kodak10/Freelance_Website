@extends('Entreprise.layouts.app')

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

            @include('Entreprise.layouts.sidebar')

            <div class="dashboard__main pl0-md">
                <div class="dashboard__content hover-bgc-color">
                    <div class="row pb40">
                        <div class="col-lg-12">
                            @include('Entreprise.layouts.sidebar-mobile')

                        </div>
                        <div class="col-lg-12">
                            <div class="dashboard_title_area">
                                <h2>Dashboard</h2>
                                <p class="text"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="ui-content">
                            <hr class="bg-dark">
                            <h3 class="title text-center">Ajouter un service</h3>
                            <hr class="bg-dark">
                            <a href="/compagny/service" class="ud-btn btn-dark mb25 me-4">Liste des services</a>
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="{{ route('service.store') }}" method="post"  enctype="multipart/form-data">

                                        @csrf
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
                                            @if(session('success'))
                                                <div class="alert alert-success">
                                                    {{ session('success') }}
                                                </div>
                                            @endif
                                        </div>

                                        <div class="row mr-4 ml-4">
                                            <input type="hidden" name="entreprise" value="{{ Auth::check() && Auth::user()->compagny ? Auth::user()->compagny->id : 0 }}">
                                            <div class="col-lg-6 col-xl-6">
                                                <div class="form-group">
                                                    <label class="form-label fw500 fz16 dark-color">Selectionnez le service</label>
                                                    <div class="bootselect-multiselect">
                                                        <select class="selectpicker" name="service"data-live-search="true"
                                                            data-width="100%">
                                                            <option>Selectionner ici...</option>
                                                            @forelse ($services as $val)
                                                                <option
                                                                    value="{{ $val->id }}"data-tokens="{{ $val->libelle }}">
                                                                    {{ mb_strtoupper($val->libelle) }}</option>
                                                            @empty
                                                                <option>Aucun secteur trouv&eacute;
                                                                </option>
                                                            @endforelse
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-xl-6">
                                                <div class="form-group">
                                                    <label class="form-label fw500 fz16 dark-color">Saisissez le
                                                        Libell&eacute; du service (Coute phrase d'accroche)</label>
                                                    <div class="bootselect-multiselect">
                                                        <input required
                                                            type="text"name="libelle"class="form-control"placeholder="Saisissez le Libelle du service">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-xl-6">
                                                <div class="form-group">
                                                    <label class="form-label fw500 fz16 dark-color">Delais de livraison Approximatif (en jours)
                                                       </label>
                                                    <div class="bootselect-multiselect">
                                                        <input required
                                                            type="number"name="delais"class="form-control"placeholder="Saisissez le nombre de jours">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-xl-6">
                                                <div class="form-group">
                                                    <label class="form-label fw500 fz16 dark-color">Importer vos réalisations
                                                       </label>
                                                    <div class="bootselect-multiselect">
                                                        <input type="file" class="form-control" name="images[]" id="images" multiple accept="image/*">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-label fw500 fz16 dark-color">Saisissez la description
                                                        du service</label>
                                                    <div class="bootselect-multiselect">
                                                        <textarea name="description" id="" cols="5" rows="2" placeholder="Saisissez la description du service"></textarea>

                                                    </div>
                                                </div>
                                            </div>





                                            <center>
                                                <div class="col-sm-3 mt-3">
                                                    <div class="form-group mt-3 ">
                                                        <button
                                                            type="submit"class="btn btn-success text-white p-2 ">Valider</button>
                                                        <a href="/compagny/service"class="btn btn-danger text-white p-2 ">Retour</a>
                                                    </div>
                                                </div>
                                            </center>

                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                @include('Entreprise.layouts.footer')

            </div>
        </div>
    </div>
@endsection
