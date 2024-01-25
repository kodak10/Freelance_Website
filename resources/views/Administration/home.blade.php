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
                                <h2>Menu Général</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-xxl-3">
                            <div class="d-flex align-items-center justify-content-between statistics_funfact">
                                <div class="details">
                                    <div class="fz15"><strong>Services Proposés</strong></div>
                                    <div class="title">{{ $services->count() }}</div>
                                </div>
                                <div class="icon text-center"><i class="flaticon-contract"></i></div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xxl-3">
                            <div class="d-flex align-items-center justify-content-between statistics_funfact">
                                <div class="details">
                                    <div class="fz15"><strong>Entreprises Inscrites</strong></div>
                                    <div class="title">{{ $entreprises->count() }}</div>
                                </div>
                                <div class="icon text-center"><i class="flaticon-success"></i></div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xxl-3">
                            <div class="d-flex align-items-center justify-content-between statistics_funfact">
                                <div class="details">
                                    <div class="fz15"><strong>Clients Inscrits</strong></div>
                                    <div class="title">{{ $clients->count() }}</div>
                                </div>
                                <div class="icon text-center"><i class="flaticon-review"></i></div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xxl-3">
                            <div class="d-flex align-items-center justify-content-between statistics_funfact">
                                <div class="details">
                                    <div class="fz15"><strong>Demandes Envoyées</strong></div>
                                    <div class="title">{{ $demandes->count() }}</div>
                                </div>
                                <div class="icon text-center"><i class="flaticon-review-1"></i></div>
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
                            url: "{{ url('demandes_inscription') }}" + '/' + id,
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
                            url: "{{ url('demandes_inscription') }}" + '/' + id,
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
