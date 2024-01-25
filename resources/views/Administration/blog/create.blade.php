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
                            <h3 class="title text-center">Ajouter un article</h3>
                            <hr class="bg-dark">
                            <a href="/administration/blogs" class="ud-btn btn-dark mb25 me-4">Liste des articles</a>
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
                                    <form action="{{ route('blogs.store') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row mr-4 ml-4">

                                            <div class="col-lg-6 col-xl-6">
                                                <div class="form-group">
                                                    <label class="form-label fw500 fz16 dark-color">Status</label>
                                                    <select name="status" class="form-select form-select-md mb-3 form-control" aria-label=".form-select-lg example" >
                                                        <option value="">Sélectionner le status</option>
                                                        <option value="active">Publier</option>
                                                        <option value="non actie">Ne pas publié</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-xl-6">
                                                <div class="form-group">
                                                    <label class="form-label fw500 fz16 dark-color">Couverture</label>
                                                    <input type="file" class="form-control" name="couverture" id="couverture" accept="image/*">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-xl-6">
                                                <div class="form-group">
                                                    <label class="form-label fw500 fz16 dark-color">Libellé</label>
                                                    <input required type="text"name="libelle"class="form-control"placeholder="Saisissez le libellé de l'article">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-xl-6">
                                                <div class="form-group">
                                                    <label class="form-label fw500 fz16 dark-color">Description</label>
                                                    <input required type="text"name="description"class="form-control"placeholder="Saisissez les details concernant l'article">
                                                </div>
                                            </div>
                                           
                                            <div class="col-lg-6 col-xl-6">
                                                <div class="form-group">
                                                    <label class="form-label fw500 fz16 dark-color">Importer les images</label>
                                                    <div class="bootselect-multiselect">
                                                        <input type="file" class="form-control" name="images[]" id="images" multiple accept="image/*">
                                                    </div>
                                                </div>
                                            </div>

                                           


                                            <center>
                                                <div class="col-sm-3 mt-3">
                                                    <div class="form-group mt-3 ">
                                                        <button
                                                            type="submit"class="btn btn-success text-white p-2 ">Valider</button>
                                                        <a href="/administration/blogs"class="btn btn-danger text-white p-2 ">Retour</a>
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
