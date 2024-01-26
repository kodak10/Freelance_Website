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
                                <h2>Liste des articles</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ui-content">
                                <hr class="bg-dark">
                                <h3 class="title text-center">(<b>{{ $blogs->count() }}<b> articles au total sur le Blog)
                                </h3>
                                <hr class="bg-dark">

                                <a href="{{ route('blogs.create') }}" class="ud-btn btn-dark mb25 me-4">Ajouter</a>
                                <div class="table-style1 table-responsive mb-4 mb-lg-5">
                                    <table id="maintable"
                                        class="display compact cell-border table table-striped table-bordered"
                                        cellspacing="0" width="100%"
                                        style="overflow-x: auto;    overflow-x: auto !important;">

                                        <thead class="thead-light">
                                            <tr class="text-center">
                                                <th class="fz15 fw500" scope="col">Status</th>
                                                <th class="fz15 fw500" scope="col">Couverture</th>
                                                <th class="fz15 fw500" scope="col">Libellé</th>
                                                <th class="fz15 fw500" scope="col">Description</th>
                                                <th width="20%"class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($blogs as $blog)
                                                <tr class="text-center"id="tr{{ $blog->id }}">
                                                    <td style="color: {{ $blog->status == 'active' ? 'green' : 'red' }}">
                                                        {{ $blog->status == 'active' ? 'Active' : 'Non Activé' }}
                                                    </td>
                                                    <td>
                                                        <img style="width: 60px; height:60px" src="{{ asset('assets/images/blog/couverture/'. $blog->image_path) }}" alt="Couverture" srcset="">
                                                    </td>
                                                    <td>
                                                        {{ (strlen($blog->libelle) > 60) ? substr($blog->libelle, 0, 60) . '...' : $blog->libelle }}
                                                    </td>
                                                    
                                                    <td>
                                                        {{ (strlen($blog->description) > 100) ? substr($blog->description, 0, 100) . '...' : $blog->description }}
                                                    </td>
                                                    
                                                    
                                                    <td width="20%">
                                                        <center>
                                                            <div class="row mr-0 text-white">
                                                                <div class="col-md-3">
                                                                   
                                                                </div>

                                                                <div class="col-md-3">
                                                                    
                                                                    <a
                                                                        href="{{ route('blogs.edit', $blog->id) }}"class="btn btn-warning text-white"title="Modifier l'article"><i
                                                                            class="fa fa-edit"></i>
                                                                    </a>
                                                                </div>

                                                                <div class="col-md-3">
                                                                    <form
                                                                        method="POST"action={{ route('blogs.destroy', $blog->id) }}>
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button
                                                                            type="submit"class="btn btn-danger"title="Supprimer l'article"><i
                                                                                class="fa fa-trash text-white"></i></button>
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
   
@endsection
