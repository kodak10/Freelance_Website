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
                                    <form action="{{ route('blogs.update', $blogs->id) }}" method="post" enctype="multipart/form-data">
                                        @method('PATCH')
                                        @csrf
                                   
                                        <div class="row mr-4 ml-4">

                                            <div class="col-lg-6 col-xl-6">
                                                <div class="form-group">
                                                    <label class="form-label fw500 fz16 dark-color">Status</label>
                                                    <select name="status" class="form-select form-select-md mb-3 form-control" aria-label=".form-select-lg example" >
                                                        <option value="{{$blogs->status}}">{{$blogs->status}}</option>
                                                        <option value="active">Active</option>
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
                                                    <input required type="text"name="libelle"class="form-control" value="{{ $blogs->libelle ?? '' }}" placeholder="Saisissez le libellé de l'article">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-xl-6">
                                                <div class="form-group">
                                                    <label class="form-label fw500 fz16 dark-color">Description</label>
                                                    <input required type="text"name="description"class="form-control"value="{{ $blogs->description ?? '' }}" placeholder="Saisissez les details concernant l'article">
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
                                                            type="submit"class="btn btn-success text-white p-2 ">Modifier</button>
                                                        <a href="/administration/blogs"class="btn btn-danger text-white p-2 ">Retour</a>
                                                    </div>
                                                </div>
                                            </center>



                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-12">
                                    <div class="form-group d-flex justify-content-center align-items-center">
                                        @foreach ($images as $image)
                                        <img style="width: 100px; height: 100px; margin: 10px 20px;" src="/{{ $image->file_path }}" alt="Image Réalisation">
                                        <form method="POST" action="{{ route('blog_image_destroy', $image->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn" title="Supprimer">
                                                <i class="fa-solid fa-circle-xmark"></i>
                                            </button>
                                        </form>
                                        
                                            
                                        @endforeach
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
