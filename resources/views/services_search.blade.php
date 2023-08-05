<!-- resources/views/services/search.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('services.search') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="category">Catégorie</label>
                        <select name="category" id="category" class="form-control">
                            <option value="">Toutes les catégories</option>
                            @foreach ($categories as $cat)
                                <option value="{{ $cat }}" @if($category == $cat) selected @endif>{{ $cat }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="search">Recherche</label>
                        <input type="text" name="search" id="search" class="form-control" placeholder="Rechercher un service" value="{{ $searchQuery }}">
                    </div>
                </div>

                <div class="col-lg-3">
                    <button type="submit" class="btn btn-primary">Rechercher</button>
                </div>
            </div>
        </form>

        <h4 class="mb-5 mt-5">Résultats de la recherche</h4>

        @foreach ($services as $service)
            <div class="col-lg-3">
                <div class="listing-style1">
                    <div class="list-thumb">
                        <img class="w-100" src="{{asset('assets/images/listings/g-1.jpg')}}" alt="Image">
                        <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                    </div>
                    <div class="list-content">
                        <p class="list-text body-color fz14 mb-1">{{$service->libelle}}</p>
                        <h5 class="list-title"><a href="/services/{{$service->libelle}}">{{$service->description}}</a></h5>
                        <hr class="my-2">
                        <div class="list-meta d-flex justify-content-between align-items-center mt15">
                            <a href="#">
                                <span class="position-relative mr10">
                                <img class="rounded-circle" src="" alt="Photo">
                                <span class="online-badge"></span>
                                </span>

                                {{-- <span class="fz14">{{$service->entreprise->name}}</span> --}}
                                <span class="fz14">Kodak Tech</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
