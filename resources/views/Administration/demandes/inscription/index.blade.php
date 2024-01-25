@extends('Administration.layouts.app')

@section('content')

    <!-- right content -->
    @if (session()->has('deleted'))
        <script>
            Swal.fire(
                'Effectué!',
                'Demande annulée avec succès!',
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
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ui-content">
                                <hr class="bg-dark">
                                <h3 class="title text-center">Listes des Demandes d'inscription (
                                    <b>{{ $enterprisesToApprove->count() }}<b> au total)
                                </h3>
                                <hr class="bg-dark">

                                {{-- <a href="{{ route('demandes_inscriprion.create') }}" class="ud-btn btn-dark mb25 me-4">Ajouter</a> --}}
                                <div class="table-style1 table-responsive mb-4 mb-lg-5">
                                    <table id="maintable"
                                        class="display compact cell-border table table-striped table-bordered"
                                        cellspacing="0" width="100%"
                                        style="overflow-x: auto;    overflow-x: auto !important;">

                                        <thead class="thead-light">
                                            <tr class="text-center">
                                                <th class="fz15 fw500" scope="col">Numéro d'Inscription</th>
                                                <th class="fz15 fw500" scope="col">Date</th>
                                                <th class="fz15 fw500" scope="col">Nom</th>
                                                <th class="fz15 fw500" scope="col">Email</th>
                                                <th width="20%"class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($enterprisesToApprove as $val)
                                                <tr class="text-center"id="tr{{ $val->id }}">
                                                    <td>{{ $val->num_inscription }}</td>
                                                    <td>
                                                        {{ $val->created_at->format('d/m/Y') }}
                                                    </td>
                                                    <td>{{ mb_strtoupper($val->name) }}</td>
                                                    <td>
                                                        {{ $val->email }}
                                                    </td>
                                                    <td width="20%">
                                                        <center>
                                                            <div class="row mr-0 text-white">
                                                                <div class="col-md-4">
                                                                </div>

                                                                <div class="col-md-2">
                                                                    <a
                                                                        onclick="Approve({{ $val->id }})"class="btn btn-success"title="Approuver"><i
                                                                            class="fa fa-check text-white"></i></a>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <a
                                                                        type="submit"onclick="Disapprove({{ $val->id }})"class="btn btn-danger"title="Annuler cette demande"><i
                                                                            class="fa fa-close text-white"></i></a>
                                                                    </form>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <a
                                                                        class="btn btn-success"title="Annuler cette demande"><i
                                                                            class="fa fa-eye text-white"></i></a>
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
                    title: 'Etes vous sur de desapprouver cette demande?',
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
