@extends('layouts.app')
@section('content')

<style>
    .mobilie_header_nav{
        background-color: #5BBB7B !important;
    }
    header.nav-homepage-style {
        position: relative;
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
                            <h4 class="fw700 mb20">Les Catégories de services</h4>
                        </div>
                        <div class="row align-items-center mb20">
                            <div class="col-sm-6 col-xxl-8">
                                <div class="text-center text-sm-start">
                                    <div class="dropdown-lists">
                                        <ul class="p-0 mb-0 text-center text-sm-start">
                                            <li class="list-inline-item position-relative d-none d-xl-inline-block">
                                                <button class="open-btn mb10 dropdown-toggle" type="button" data-bs-toggle="dropdown">Sélectionner la Catégorie<i class="fa fa-angle-down ms-2"></i></button>
                                                <div class="dropdown-menu">
                                                    <div class="widget-wrapper pb25 mb0">
                                                        <div class="radio-element">
                                                            <div class="form-check d-flex align-items-center mb10">
                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                                <label class="form-check-label" for="flexRadioDefault1">Catégorie 1</label>
                                                            </div>
                                                            <div class="form-check d-flex align-items-center mb10">
                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked="checked">
                                                                <label class="form-check-label" for="flexRadioDefault2">Catégorie 2</label>
                                                            </div>
                                                            <div class="form-check d-flex align-items-center mb10">
                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                                                <label class="form-check-label" for="flexRadioDefault3">Catégorie 3</label>
                                                            </div>
                                                            <div class="form-check d-flex align-items-center">
                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                                                                <label class="form-check-label" for="flexRadioDefault4">Catégorie 4</label>
                                                            </div>
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
                                    <div class="pcs_dropdown dark-color pr10"><span>Trier par</span>
                                        <select class="selectpicker show-tick">
                                            <option>Recommandation</option>
                                            <option>Ordre Alphabetique</option>
                                            <option>Nouveau Service</option>
                                        </select>
                                    </div>
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
                                            <p class="list-text body-color fz14 mb-1">{{$service->libelle}}</p>
                                            <h5 class="list-title"><a href="{{ route('serviceDetail.show', ['slug' => $service->libelle]) }}">{{$service->description}}</a></h5>
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