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
                                <h2>Dashboard</h2>
                                <p class="text">Lorem ipsum dolor sit amet, consectetur.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ui-content">
                                <hr class="bg-dark">
                                <h3 class="title text-center">Liste des services (
                                    <b>{{ $services->count() }}<b> au total)
                                </h3>
                                <hr class="bg-dark">

                                <a href="{{ route('services.create') }}" class="ud-btn btn-dark mb25 me-4">Ajouter</a>
                                <div class="table-style1 table-responsive mb-4 mb-lg-5">
                                    <table id="maintable"
                                        class="display compact cell-border table table-striped table-bordered"
                                        cellspacing="0" width="100%"
                                        style="overflow-x: auto;    overflow-x: auto !important;">

                                        <thead class="thead-light">
                                            <tr class="text-center">
                                                <th class="fz15 fw500" scope="col">#</th>
                                                <th class="fz15 fw500" scope="col">Libelle</th>
                                                <th width="20%"class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($services as $val)
                                                <tr class="text-center">
                                                    <td>{{ $Counter++ }}</td>
                                                    <td>{{ mb_strtoupper($val->libelle) }}</td>
                                                    <td width="20%">
                                                        <center>
                                                            <div class="row mr-0 text-white">
                                                                <div class="col-md-3">
                                                                    <a
                                                                        href="{{ route('services.show', $val->id) }}"class="btn btn-info text-white"title="Informations supplementaires sur cet Enregistrement"><i
                                                                            class="fa fa-eye"></i></a>
                                                                </div>

                                                                <div class="col-md-3">
                                                                    
                                                                    <a
                                                                        href="{{ route('services.edit', $val->id) }}"class="btn btn-warning text-white"title="Modifier cet Enregistrement"><i
                                                                            class="fa fa-edit"></i>
                                                                    </a>
                                                                </div>

                                                                <div class="col-md-3">
                                                                    <form
                                                                        method="POST"action={{ route('services.destroy', $val->id) }}>
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button
                                                                            type="submit"class="btn btn-danger"title="Supprimer cet Enregistrement"><i
                                                                                class="fa fa-trash text-white"></i></button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </center>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="5"class="text-center">Aucun enregistrement trouv&eacute;
                                                    </td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
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
