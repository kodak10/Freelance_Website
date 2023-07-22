@extends('layouts.app')
@section('content')

<style>

    header.nav-homepage-style {
        background-color: transparent;
        border-bottom: 1px solid rgba(255, 255, 255, 0.07);
        padding: 7px 0;
        position: relative;
        width: 100%;
        z-index: 3;
        color: #000000 !important;
    }
    header.nav-homepage-style a{
        color: #000000 !important;
    }
    header.nav-homepage-style.stricky.stricky-fixed{
        background-color: #ffffff;
        border-bottom: 1px solid #E9E9E9;
        -webkit-box-shadow: 0px 5px 20px rgba(91, 187, 123, 0.15);
        -moz-box-shadow: 0px 5px 20px rgba(91, 187, 123, 0.15);
        -o-box-shadow: 0px 5px 20px rgba(91, 187, 123, 0.15);
        box-shadow: 0px 5px 20px rgba(91, 187, 123, 0.15);
        z-index: 9;
    }
    .btn-white, .btn-white2 {
        background-color: #ffffff;
        border: 2px solid #000000;
    }
    header.nav-homepage-style .sidemenu-btn, header.nav-homepage-style .login-info {
        color: #000000 !important;
        font-weight: 600;
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
                            <div class="col-lg-3">
                                <div class="listing-style1">
                                    <div class="list-thumb">
                                        <img class="w-100" src="{{asset('assets/images/listings/g-1.jpg')}}" alt="">
                                        <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                                    </div>
                                    <div class="list-content">
                                        <p class="list-text body-color fz14 mb-1">Web & App Design</p>
                                        <h5 class="list-title"><a href="/services/details">I will design modern websites in figma or adobe xd</a></h5>
                                        <hr class="my-2">
                                        <div class="list-meta d-flex justify-content-between align-items-center mt15">
                                            <a href="#">
                                                <span class="position-relative mr10">
                                                <img class="rounded-circle" src="assets/images/team/fl-s-1.png" alt="Freelancer Photo">
                                                <span class="online-badge"></span>
                                                </span>
                                                <span class="fz14">Kodak Tech</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="listing-style1">
                                    <div class="list-thumb">
                                        <div class="listing-thumbIn-slider position-relative navi_pagi_bottom_center slider-1-grid owl-carousel owl-theme">
                                            <div class="item">
                                                <img class="w-100" src="{{asset('assets/images/listings/g-2.jpg')}}" alt="">
                                                <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                                            </div>
                                            <div class="item">
                                                <img class="w-100" src="{{asset('assets/images/listings/g-3.jpg')}}" alt="">
                                                <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                                            </div>
                                            <div class="item">
                                                <img class="w-100" src="{{asset('assets/images/listings/g-4.jpg')}}" alt="">
                                                <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                                            </div>
                                            <div class="item">
                                                <img class="w-100" src="{{asset('assets/images/listings/g-5.jpg')}}" alt="">
                                                <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-content">
                                        <p class="list-text body-color fz14 mb-1">Art & Illustration</p>
                                        <h5 class="list-title"><a href="/services/details">I will create modern flat design illustration</a></h5>
                                        <hr class="my-2">
                                        <div class="list-meta d-flex justify-content-between align-items-center mt15">
                                            <a href="#">
                                                <span class="position-relative mr10">
                                                <img class="rounded-circle" src="assets/images/team/fl-s-2.png" alt="Freelancer Photo">
                                                <span class="online-badge"></span>
                                                </span>
                                                <span class="fz14">Kodak Tech</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="listing-style1">
                                    <div class="list-thumb">
                                        <img class="w-100" src="{{asset('assets/images/listings/g-3.jpg')}}" alt="">
                                        <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                                    </div>
                                    <div class="list-content">
                                        <p class="list-text body-color fz14 mb-1">Design & Creative</p>
                                        <h5 class="list-title line-clamp2"><a href="/services/details">I will build a fully responsive design in HTML,CSS, bootstrap, and javascript</a></h5>
                                        <hr class="my-2">
                                        <div class="list-meta d-flex justify-content-between align-items-center mt15">
                                            <a href="#">
                                                <span class="position-relative mr10">
                                                <img class="rounded-circle" src="assets/images/team/fl-s-3.png" alt="Freelancer Photo">
                                                <span class="online-badge"></span>
                                                </span>
                                                <span class="fz14">Kodak Tech</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="listing-style1">
                                    <div class="list-thumb">
                                        <img class="w-100" src="{{asset('assets/images/listings/g-4.jpg')}}" alt="">
                                        <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                                    </div>
                                    <div class="list-content">
                                        <p class="list-text body-color fz14 mb-1">Web & App Design</p>
                                        <h5 class="list-title"><a href="/services/details">I will do mobile app development for ios and android</a></h5>
                                        <hr class="my-2">
                                        <div class="list-meta d-flex justify-content-between align-items-center mt15">
                                            <a href="#">
                                                <span class="position-relative mr10">
                                                <img class="rounded-circle" src="assets/images/team/fl-s-4.png" alt="Freelancer Photo">
                                                <span class="online-badge"></span>
                                                </span>
                                                <span class="fz14">Kodak Tech</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mbp_pagination mt30 text-center">
                                <ul class="page_navigation">
                                    <li class="page-item">
                                        <a class="page-link" href="#"> <span class="fas fa-angle-left"></span></a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active" aria-current="page">
                                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item d-inline-block d-sm-none"><a class="page-link" href="#">...</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item d-none d-sm-inline-block"><a class="page-link" href="#">...</a></li>
                                    <li class="page-item d-none d-sm-inline-block"><a class="page-link" href="#">20</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#"><span class="fas fa-angle-right"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection