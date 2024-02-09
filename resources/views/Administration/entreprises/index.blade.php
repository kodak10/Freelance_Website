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
                                <h2>Liste des entreprises</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ui-content">
                                <hr class="bg-dark">
                                <h3 class="title text-center">Liste des Entreprises (<b>{{ $entreprises->count() }}<b> au total)
                                </h3>
                                <hr class="bg-dark">

                                <a href="{{ route('entreprises.create') }}" class="ud-btn btn-dark mb25 me-4">Ajouter</a>
                                <div class="table-style1 table-responsive mb-4 mb-lg-5">
                                    <table id="maintable"
                                        class="display compact cell-border table table-striped table-bordered"
                                        cellspacing="0" width="100%"
                                        style="overflow-x: auto;    overflow-x: auto !important;">

                                        <thead class="thead-light">
                                            <tr class="text-center">
                                                <th class="fz15 fw500" scope="col">Date D'inscription</th>
                                                <th class="fz15 fw500" scope="col">Status</th>
                                                <th class="fz15 fw500" scope="col">Nom de l'entreprise</th>
                                                <th class="fz15 fw500" scope="col">Nationnalité</th>
                                                <th class="fz15 fw500" scope="col">Téléphone</th>
                                                <th class="fz15 fw500" scope="col">Email</th>
                                                <th class="fz15 fw500" scope="col">Régime</th>
                                                <th class="fz15 fw500" scope="col">Site Web</th>
                                                <th class="fz15 fw500" scope="col">Page Facebook</th>
                                                <th class="fz15 fw500" scope="col">Logo</th>
                                                <th width="20%"class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($entreprises as $entreprise)
                                                <tr class="text-center"id="tr{{ $entreprise->id }}">
                                                    <td>{{ $entreprise->created_at->format('d/m/Y') }}</td>
                                                    <td style="color: {{ $entreprise->approve == 1 ? 'green' : 'red' }}">
                                                        {{ $entreprise->approve == 1 ? 'Approuvé' : 'Pas encore approuvé' }}
                                                    </td>
                                                    <td> {{ mb_strtoupper($entreprise->name) }}</td>
                                                    <td>{{ $entreprise->nationalite }}</td>
                                                    <td>{{ $entreprise->telephone }}</td>
                                                    <td>{{ $entreprise->user->email }}</td>
                                                    <td>{{ $entreprise->regime }}</td>
                                                    <td>{{ $entreprise->site_web }}</td>
                                                    <td>{{ $entreprise->facebook }}</td>
                                                    <td><img src="{{ asset('assets/images/profil/' . $entreprise->photo) }}" alt="Logo" srcset="" style="height: 100px !important; width:100px !important;"></td>
                                                    <td width="20%">
                                                        <center>
                                                            <div class="row mr-0 text-white">
                                                                
                                                                <div class="col-md-12">
                                                                    {{-- <a type="submit"onclick="Disapprove({{ $client->id }})"class="btn btn-danger"title="Clôturer le compte"><i
                                                                            class="fa fa-close text-white"></i></a> --}}
                                                                            <a class="btn btn-danger"title="Clôturer le compte"><i
                                                                                class="fa fa-close text-white"></i></a>                
                                                                    </form>
                                                                </div>
                                                               
                                                            </div>
                                                        </center>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="7"class="text-center">Aucun enregistrement trouv&eacute;
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
    @section('script1')
        <script type="text/javascript">
            function Approve(id) {
                var csrf_token = $('meta[name="csrf-token"]').attr('content');
                Swal.fire({
                    title: 'Etes vous sur d\'approuver cette demande?',
                    text: "il est a noter que cette action est irreversible!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: 'green',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'OUI, Valider!',
                    cancelButtonText: 'NON, Annuler!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "{{ url('/administration/demandes_inscription') }}" + '/' + id,
                            type: "POST",
                            data: {
                                '_method': 'PATCH',
                                '_token': csrf_token
                            },
                            success: function(data) {
                                console.log(data)
                                Swal.fire(
                                    'Approuvée!',
                                    'Demande Approuvée avec succès.',
                                    'success'
                                )
                                $('#tr' + id).remove();
                            },
                            error: function() {
                                Swal.fire(
                                    'Oups!',
                                    'Une erreur s\'est produite.',
                                    'error'
                                )
                            }
                        })
                    } else {
                        Swal.fire(
                            'Annulee!',
                            'Operation d\'approbation non confirmee.',
                            'info'
                        )
                    }
                })

            }

            function Disapprove(id) {
                var csrf_token = $('meta[name="csrf-token"]').attr('content');
                Swal.fire({
                    title: 'Voulez vous clôturer le compte ?',
                    text: "il est a noter que cette action est irreversible!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: 'green',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'OUI, Valider!',
                    cancelButtonText: 'NON, Annuler!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "{{ url('/administration/demandes_inscription') }}" + '/' + id,
                            type: "POST",
                            data: {
                                '_method': 'DELETE',
                                '_token': csrf_token
                            },
                            success: function(data) {
                                console.log(data)
                                Swal.fire(
                                    'Desapprouvée!',
                                    'Demande desapprouvée avec succès.',
                                    'success'
                                )
                                $('#tr' + id).remove();
                            },
                            error: function() {
                                Swal.fire(
                                    'Oups!',
                                    'Une erreur s\'est produite.',
                                    'error'
                                )
                            }
                        })
                    } else {
                        Swal.fire(
                            'Annulee!',
                            'Operation de desapprobation non confirmee.',
                            'info'
                        )
                    }
                })

            }
        </script>
    @endsection
@endsection
