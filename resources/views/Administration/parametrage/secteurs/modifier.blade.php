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
                            <h3 class="title text-center">Modifier un secteur</h3>
                            <hr class="bg-dark">

                            <a href="/secteurs" class="ud-btn btn-dark mb25 me-4">Liste des secteurs</a>
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="{{ route('secteurs.update', $secteurs->id) }}" method="post">
                                        @method('PATCH')
                                        @csrf
                                        <div class="row mr-4 ml-4">
                                            <div class="col-lg-6 col-xl-6">
                                                <div class="form-group">
                                                    <label class="form-label fw500 fz16 dark-color">Saisissez le
                                                        Libell&eacute; du secteur</label>
                                                    <div class="bootselect-multiselect">
                                                        <input required type="text"name="libelle"
                                                            value="{{ $secteurs->libelle ?? '' }}"
                                                            class="form-control"placeholder="Saisissez le Libelle du departement">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-xl-6">
                                                <div class="form-group">
                                                    <label class="form-label fw500 fz16 dark-color">Selectionnez le
                                                        departement appartenant</label>
                                                    <div class="bootselect-multiselect">
                                                        <select class="selectpicker"
                                                            name="idDepartement"data-live-search="true" data-width="100%">
                                                            <option>Selectionner ici...</option>
                                                            @forelse ($departements as $val)
                                                                <option
                                                                    {{ $val->id == $secteurs->idDepartement ? 'selected ' : '' }}
                                                                    value="{{ $val->id }}"data-tokens="{{ $val->libelle }}">
                                                                    {{ mb_strtoupper($val->libelle) }}</option>
                                                            @empty
                                                                <option>Aucun departement trouv&eacute;
                                                                </option>
                                                            @endforelse
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <center>
                                                <div class="col-sm-3 mt-3">
                                                    <div class="form-group mt-3 ">
                                                        <button
                                                            type="submit"class="btn btn-success text-white p-2 ">Valider</button>
                                                        <a href="/secteurs"class="btn btn-danger text-white p-2 ">Retour</a>

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
