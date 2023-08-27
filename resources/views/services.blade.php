@extends('layouts.app')
@section('content')

<style>
    .mobilie_header_nav{
        background-color: #5BBB7B !important;
    }
    header.nav-homepage-style {
        position: relative !important;
    }
    header.nav-homepage-style a{
        color: #000000 !important;
    }


</style>

    <!-- Property Half Map V1 -->
    <section class="p-0 ">
        <div class="container">
            <div class="row wow fadeInUp mt-5" data-wow-delay="300ms">
                <div class="col-lg-12">
                    <div class="half_map_area_content mt30">
                        <div class="text-center text-sm-start">
                            <h4 class="fw700 mb20">Les Services</h4>
                        </div>
                        <div class="row align-items-center mb20">
                            <div class="col-sm-6 col-xxl-8">
                                <div class="text-center text-sm-start">
                                    <div class="dropdown-lists">
                                        <ul class="p-0 mb-0 text-center text-sm-start">
                                            <li class="list-inline-item position-relative d-none d-xl-inline-block">
                                                <button class="open-btn mb10 dropdown-toggle" type="button" data-bs-toggle="dropdown">Toutes les catégories<i class="fa fa-angle-down ms-2"></i></button>
                                                <div class="dropdown-menu">
                                                    <div class="widget-wrapper pb25 mb0">

                                                        <div class="radio-element">
                                                            @foreach ($categories as $categorie )
                                                                <div class="form-check d-flex align-items-center mb10">
                                                                    <input class="form-check-input" type="radio" name="categorie" id="">
                                                                    <label class="form-check-label" for="">{{$categorie->libelle}}</label>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    <button class="done-btn ud-btn btn-thm drop_btn">Appliquer<i class="fal fa-arrow-right-long"></i></button>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xxl-4">
                                <div class="page_control_shorting mb10 d-flex align-items-center justify-content-center justify-content-sm-end">
                                    <input type="text" placeholder="Rechercher un service" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach ($services as $service )
                                <div class="col-lg-3">
                                    <div class="listing-style1">
                                        <div class="list-thumb">
                                            <img class="w-100" src="{{asset('assets/images/listings/g-1.jpg')}}" alt="Image">
                                            <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                                        </div>
                                        <div class="list-content">
                                            <li></li>
                                            <p class="list-text body-color fz14 mb-1"><a href="{{ route('EntrepriseService.show', ['slug' => $service->id]) }}">{{$service->libelle}}</a></p>

                                        </div>
                                    </div>
                                </div>

                            @endforeach

                            <div class="d-flex justify-content-center mb-5 ">
                                {{ $services->links() }}
                            </div>


                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection