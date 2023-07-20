@extends('layouts.app')
@section('content')

    <!-- Property Half Map V1 -->
    <section class="p-0">
      <div class="container-fluid">
        <div class="row wow fadeInUp" data-wow-delay="300ms">
          <div class="col-xl-5">
            <div class="half_map_area_content mt30">
              <div class="text-center text-sm-start">
                <h4 class="fw700 mb20">Design & Creative</h4>
              </div>
              <div class="row align-items-center mb20">
                <div class="col-sm-6 col-xxl-8">
                  <div class="text-center text-sm-start">
                    <div class="dropdown-lists">
                      <ul class="p-0 mb-0 text-center text-sm-start">
                        <li class="list-inline-item">
                          <!-- Advance Features modal trigger -->
                          <button type="button" class="open-btn filter-btn-left mb10"> <img class="me-2" src="{{asset('assets/images/icon/all-filter-icon.svg')}}" alt=""> All Filter</button>
                        </li>
                        <li class="list-inline-item position-relative d-none d-xl-inline-block">
                          <button class="open-btn mb10 dropdown-toggle" type="button" data-bs-toggle="dropdown">Delivery Time <i class="fa fa-angle-down ms-2"></i></button>
                          <div class="dropdown-menu">
                            <div class="widget-wrapper pb25 mb0">
                              <div class="radio-element">
                                <div class="form-check d-flex align-items-center mb10">
                                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                  <label class="form-check-label" for="flexRadioDefault1">Express 24H</label>
                                </div>
                                <div class="form-check d-flex align-items-center mb10">
                                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked="checked">
                                  <label class="form-check-label" for="flexRadioDefault2">Up to 3 days</label>
                                </div>
                                <div class="form-check d-flex align-items-center mb10">
                                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                  <label class="form-check-label" for="flexRadioDefault3">Up to 7 days</label>
                                </div>
                                <div class="form-check d-flex align-items-center">
                                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                                  <label class="form-check-label" for="flexRadioDefault4">Anytime</label>
                                </div>
                              </div>
                            </div>
                            <button class="done-btn ud-btn btn-thm drop_btn">Apply<i class="fal fa-arrow-right-long"></i></button>
                          </div>
                        </li>
                        <li class="list-inline-item position-relative d-none d-xl-inline-block">
                          <button class="open-btn mb10 dropdown-toggle" type="button" data-bs-toggle="dropdown">Budget <i class="fa fa-angle-down ms-2"></i></button>
                          <div class="dropdown-menu dd3">
                            <div class="widget-wrapper pb25 mb0 pr0">
                              <!-- Range Slider Desktop Version -->
                              <div class="range-slider-style1">
                                <div class="range-wrapper">
                                  <div class="slider-range mb20"></div>
                                  <div class="text-center">
                                    <input type="text" class="amount" placeholder="$20"><span class="fa-sharp fa-solid fa-minus mx-1 dark-color"></span>
                                    <input type="text" class="amount2" placeholder="$70987">
                                  </div>
                                </div>
                              </div>
                            </div>
                            <button class="done-btn ud-btn btn-thm drop_btn3">Apply<i class="fal fa-arrow-right-long"></i></button>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xxl-4">
                  <div class="page_control_shorting mb10 d-flex align-items-center justify-content-center justify-content-sm-end">
                    <div class="pcs_dropdown dark-color pr10"><span>Sort by</span>
                      <select class="selectpicker show-tick">
                        <option>Best Selling</option>
                        <option>Recommended</option>
                        <option>New Arrivals</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="listing-style1">
                    <div class="list-thumb">
                      <img class="w-100" src="{{asset('assets/images/listings/g-1.jpg')}}" alt="">
                      <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                    </div>
                    <div class="list-content">
                      <p class="list-text body-color fz14 mb-1">Web & App Design</p>
                      <h5 class="list-title"><a href="/services/details">I will design modern websites in figma or adobe xd</a></h5>
                      <div class="review-meta d-flex align-items-center">
                        <i class="fas fa-star fz10 review-color me-2"></i>
                        <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                      </div>
                      <hr class="my-2">
                      <div class="list-meta d-flex justify-content-between align-items-center mt15">
                        <a href="#">
                          <span class="position-relative mr10">
                            <img class="rounded-circle" src="{{asset('assets/images/team/fl-s-1.png')}}" alt="Freelancer Photo">
                            <span class="online-badge"></span>
                          </span>
                          <span class="fz14">Wanda Runo</span>
                        </a>
                        <div class="budget">
                          <p class="mb-0 body-color">Starting at<span class="fz17 fw500 dark-color ms-1">$983</span></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
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
                      <div class="review-meta d-flex align-items-center">
                        <i class="fas fa-star fz10 review-color me-2"></i>
                        <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                      </div>
                      <hr class="my-2">
                      <div class="list-meta d-flex justify-content-between align-items-center mt15">
                        <a href="#">
                          <span class="position-relative mr10">
                            <img class="rounded-circle" src="{{asset('assets/images/team/fl-s-2.png')}}" alt="Freelancer Photo">
                            <span class="online-badge"></span>
                          </span>
                          <span class="fz14">Ali Tufan</span>
                        </a>
                        <div class="budget">
                          <p class="mb-0 body-color">Starting at<span class="fz17 fw500 dark-color ms-1">$983</span></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="listing-style1">
                    <div class="list-thumb">
                      <img class="w-100" src="{{asset('assets/images/listings/g-3.jpg')}}" alt="">
                      <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                    </div>
                    <div class="list-content">
                      <p class="list-text body-color fz14 mb-1">Design & Creative</p>
                      <h5 class="list-title line-clamp2"><a href="/services/details">I will build a fully responsive design in HTML,CSS, bootstrap, and javascript</a></h5>
                      <div class="review-meta d-flex align-items-center">
                        <i class="fas fa-star fz10 review-color me-2"></i>
                        <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                      </div>
                      <hr class="my-2">
                      <div class="list-meta d-flex justify-content-between align-items-center mt15">
                        <a href="#">
                          <span class="position-relative mr10">
                            <img class="rounded-circle" src="{{asset('assets/images/team/fl-s-3.png')}}" alt="Freelancer Photo">
                            <span class="online-badge"></span>
                          </span>
                          <span class="fz14">Wanda Runo</span>
                        </a>
                        <div class="budget">
                          <p class="mb-0 body-color">Starting at<span class="fz17 fw500 dark-color ms-1">$983</span></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="listing-style1">
                    <div class="list-thumb">
                      <img class="w-100" src="{{asset('assets/images/listings/g-4.jpg')}}" alt="">
                      <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                    </div>
                    <div class="list-content">
                      <p class="list-text body-color fz14 mb-1">Web & App Design</p>
                      <h5 class="list-title"><a href="/services/details">I will do mobile app development for ios and android</a></h5>
                      <div class="review-meta d-flex align-items-center">
                        <i class="fas fa-star fz10 review-color me-2"></i>
                        <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                      </div>
                      <hr class="my-2">
                      <div class="list-meta d-flex justify-content-between align-items-center mt15">
                        <a href="#">
                          <span class="position-relative mr10">
                            <img class="rounded-circle" src="{{asset('assets/images/team/fl-s-4.png')}}" alt="Freelancer Photo">
                            <span class="online-badge"></span>
                          </span>
                          <span class="fz14">Wanda Runo</span>
                        </a>
                        <div class="budget">
                          <p class="mb-0 body-color">Starting at<span class="fz17 fw500 dark-color ms-1">$983</span></p>
                        </div>
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
                  <p class="mt10 mb-0 pagination_page_count text-center">1 – 20 of 300+ property available</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-7 overflow-hidden position-relative">
            <div class="half_map_area">
              <div class="map-canvas half_style" id="map" data-map-zoom="7" data-map-scroll="true"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection