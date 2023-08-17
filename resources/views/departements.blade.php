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
                            <h4 class="fw700 mb20">Les Catégories</h4>
                        </div>
                        <div class="row align-items-center mb20">

                            <div class="col-sm-6 col-xxl-4">
                                <div class="page_control_shorting mb10 d-flex  justify-content-center justify-content-sm-end">
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
                        <div class="row d-block d-lg-flex wow fadeInUp">
                            @foreach ($categories as $categorie )
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="iconbox-style1">
                                    <div class="icon"><span class="flaticon-developer"></span></div>
                                    <div class="details mt20">
                                        <p class="text mb5">Nombre Services</p>
                                        <h4 class="title">{{$categorie->libelle}}</h4>
                                        @foreach ($categorie->secteurs as $service )
                                            <p class="mb-0">{{$service->libelle}}</p>
                                        @endforeach
                                        <p class="mb-0">& autres</p>

                                    </div>
                                </div>
                              </div>
                            @endforeach
                          </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection