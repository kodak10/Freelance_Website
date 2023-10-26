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

    .breadcumb-section span {
    margin-top: 20px;
    font-size: 21px;
    color: #5BBB7B;
    }
    .breadcumb-section span a {
    color: #E9E9E9;
    }
    .breadcumb-section span a:hover{
        color: #5BBB7B;
        transition: all 0.3s
    }


</style>

    <!-- Breadcumb Sections -->
    <section class="breadcumb-section mt40">
        <div class="cta-about-v1 mx-auto maxw1700 pt120 pb120 bdrs16 position-relative overflow-hidden d-flex align-items-center mx20-lg">
        <div class="container">
            <div class="row">
            <div class="col-xl-5">
                <div class="position-relative">
                    <h2 class="text-white">Les Départements</h2>
                    <span><a href="/">Elbaragroup -></a>Départements</span>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Property Half Map V1 -->
    <section class="p-0 ">
        <div class="container">
            <div class="row wow fadeInUp mt-5" data-wow-delay="300ms">
                <div class="col-lg-12">
                    <div class="half_map_area_content mt30">
                        <div class="row d-block d-lg-flex wow fadeInUp">
                            @foreach ($categories as $categorie )
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="iconbox-style1">
                                        <div class="icon"><i class="{{$categorie->icones}}"></i></div>
                                    <div class="details mt20">
                                        <h4 class="title"><strong>{{$categorie->libelle}}</strong></h4>
                                        @foreach ($categorie->services as $service )
                                            <p class="mb-0"><a href="{{ route('EntrepriseService.show', ['slug' => $service->id]) }}">{{$service->libelle}}</a></p>
                                        @endforeach
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