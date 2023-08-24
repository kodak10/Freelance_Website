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
                        <div class="row d-block d-lg-flex wow fadeInUp">
                            @foreach ($categories as $categorie )
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="iconbox-style1">
                                    <div class="icon"><span class="flaticon-developer"></span></div>
                                    <div class="details mt20">
                                        <h4 class="title"><strong>{{$categorie->libelle}}</strong></h4>
                                        @foreach ($categorie->services as $service )
                                            <p class="mb-0"><a href="{{ route('serviceDetail.show', ['slug' => $service->libelle]) }}">{{$service->libelle}}</a></p>
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