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
                        <div class="col-lg-12">
                            <div class="dashboard_title_area">
                                <h2>Menu Général</h2>
                                <p class="text"></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ui-content">
                                <hr class="bg-dark">
                                <h3 class="title text-center">Liste de vos demandes de service  (
                                    <b>{{ $demandes->count() }}<b> au total)
                                </h3>
                                <hr class="bg-dark">

                                <div class="table-style1 table-responsive mb-4 mb-lg-5">
                                    <table id="maintable"
                                        class="display compact cell-border table table-striped table-bordered"
                                        cellspacing="0" width="100%"
                                        style="overflow-x: auto;    overflow-x: auto !important;">

                                        <thead class="thead-light">
                                            <tr class="text-center">
                                                <th class="fz15 fw500" scope="col">N°</th>
                                                <th class="fz15 fw500" scope="col">Date de demande</th>
                                                <th class="fz15 fw500" scope="col">Adressé A</th>
                                                <th class="fz15 fw500" scope="col">Le Service demandé</th>
                                                <th width="20%"class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($demandes as $demande)
                                                <tr class="text-center">
                                                    <td>{{ $counter++ }}</td>
                                                    <td>{{ $demande->created_at->format('d/m/Y') }}</td>
                                                    <td>
                                                        @if ($demande->compagny)
                                                            {{ $demande->compagny->name }}
                                                        @else
                                                            Entreprise non spécifiée
                                                        @endif
                                                    </td>
                                                    
                                                    <td>{{ $demande->service->libelle }}</td>

                                                    <td width="20%">
                                                        <center>
                                                            <div class="row mr-0 text-white">
                                                                

                                                                <div class="col-md-6">

                                                                    <form
                                                                        method="POST"action={{ route('destroy_demande', $demande->id) }}>
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button
                                                                            type="submit"class="btn btn-danger"title="Supprimer"><i
                                                                                class="fa fa-trash text-white"></i></button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </center>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="5"class="text-center">Aucune demande trouvée;
                                                    </td>
                                                </tr>
                                            @endforelse
                                           
                                                {{ $demandes->links() }}
                                            
                                        </tbody>
                                    </table>
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
