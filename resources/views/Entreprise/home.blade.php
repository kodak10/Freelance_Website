@extends('entreprise.layouts.app')
@section('content')


<div class="dashboard_content_wrapper">

    <div class="dashboard dashboard_wrapper pr30 pr0-xl">

        @include('entreprise.layouts.sidebar')

        <div class="dashboard__main pl0-md">
            <div class="dashboard__content hover-bgc-color">
                <div class="row pb40">
                    <div class="col-lg-12">
                        @include('entreprise.layouts.sidebar-mobile')

                    </div>
                    <div class="col-lg-12">
                        <div class="dashboard_title_area">
                            <h2>Bienvenue</h2>
                            <p class="text">{{Auth::user()->compagny->name}}</p>
                        </div>
                    </div>
                </div>

                <div class="row pb40">
                    <div class="col-lg-8">
                        <h4>Historique récentes des demandes de vos services</h4>
                        <table id="maintable"
                        class="display compact cell-border table table-striped table-bordered"
                        cellspacing="0" width="100%"
                        style="overflow-x: auto;    overflow-x: auto !important;">

                        <thead class="thead-light">
                            <tr class="text-center">
                                <th class="fz15 fw500" scope="col"></th>
                                <th class="fz15 fw500" scope="col">Nom de l'entreprise</th>
                                <th class="fz15 fw500" scope="col">Service</th>
                                <th class="fz15 fw500" scope="col">Delais d'execution</th>
                                <th width="20%"class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($demandes as $val)
                                <tr class="text-center">
                                    <td>{{ $Counter++ }}</td>
                                    <td>
                                        @forelse ($service as $val2)
                                            {{ $val2['id'] == $val['service_id'] ? mb_strtoupper($val2->libelle) : '' }}
                                        @empty
                                            {{ 'AUCUNE DEMANDE DE SERVICE ENREGISTRE' }}
                                        @endforelse
                                    </td>
                                    <td>{{ ucwords($val->libelle) }}</td>
                                    <td>{{ ucwords($val->delais_execution) }}</td>
                                    <td>{{ ucwords($val->description) }}</td>

                                    <td width="20%">
                                        <center>
                                            <div class="row mr-0 text-white">


                                                <div class="col-md-12">
                                                    <button type="submit"class="btn btn-danger"title="Supprimer">Contacter</button>

                                                </div>
                                        </center>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5"class="text-center">AUCUNE DEMANDE DE SERVICE ENREGISTRE
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    </div>

                    <div class="col-lg-4">
                        <h4>Vos services récemment ajoutés</h4>
                        <table id="maintable"
                        class="display compact cell-border table table-striped table-bordered"
                        cellspacing="0" width="100%"
                        style="overflow-x: auto;    overflow-x: auto !important;">

                        <thead class="thead-light">
                            <tr class="text-center">
                                <th class="fz15 fw500" scope="col"></th>
                                <th class="fz15 fw500" scope="col">Services</th>
                                <th class="fz15 fw500" scope="col">Libellé</th>

                            </tr>
                        </thead>
                        <tbody>
                            @forelse($services as $val)
                                <tr class="text-center">
                                    <td>{{ $Counter++ }}</td>
                                    <td>
                                        @forelse ($service as $val2)
                                            {{ $val2['id'] == $val['service_id'] ? mb_strtoupper($val2->libelle) : '' }}
                                        @empty
                                            {{ 'AUCUNE DEMANDE DE SERVICE ENREGISTRE' }}
                                        @endforelse
                                    </td>
                                    <td>{{ ucwords($val->libelle) }}</td>

                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5"class="text-center">AUCUN SERVICE ENREGISTRE
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    </div>
                </div>


            </div>

            @include('entreprise.layouts.footer')

        </div>
    </div>
</div>

@endsection