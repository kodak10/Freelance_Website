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

    <!-- Blog Section -->
    <section class="breadcumb-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="breadcumb-style1">
              <div class="breadcumb-list">
                <a href="#">Accueil</a>
                <a href="#">Blog</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="pt40 pb0">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="main-title mb50">
              <h2 class="title">Projet en cours ... Blog</h2>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Blog Section Area -->
    <section class="our-blog pt-0">
      <div class="container">
        <div class="row wow fadeInUp" data-wow-delay="300ms">
          <div class="col-xl-12">
            <div class="navtab-style1 blog-page-style">
              <nav>
                <div class="nav nav-tabs mb30" id="nav-tab2" role="tablist">
                  <button class="nav-link active fw600" id="nav-item1-tab" data-bs-toggle="tab" data-bs-target="#nav-item1" type="button" role="tab" aria-controls="nav-item1" aria-selected="true">All</button>
                  <button class="nav-link fw600" id="nav-item2-tab" data-bs-toggle="tab" data-bs-target="#nav-item2" type="button" role="tab" aria-controls="nav-item2" aria-selected="false">Freelancer</button>
                  <button class="nav-link fw600" id="nav-item3-tab" data-bs-toggle="tab" data-bs-target="#nav-item3" type="button" role="tab" aria-controls="nav-item3" aria-selected="false">Graphics Design</button>
                  <button class="nav-link fw600" id="nav-item4-tab" data-bs-toggle="tab" data-bs-target="#nav-item4" type="button" role="tab" aria-controls="nav-item4" aria-selected="false">App Developer</button>
                  <button class="nav-link fw600" id="nav-item5-tab" data-bs-toggle="tab" data-bs-target="#nav-item5" type="button" role="tab" aria-controls="nav-item5" aria-selected="false">Digital Marketing</button>
                  <button class="nav-link fw600" id="nav-item6-tab" data-bs-toggle="tab" data-bs-target="#nav-item6" type="button" role="tab" aria-controls="nav-item6" aria-selected="false">Music & Audio</button>
                  <button class="nav-link fw600" id="nav-item7-tab" data-bs-toggle="tab" data-bs-target="#nav-item7" type="button" role="tab" aria-controls="nav-item7" aria-selected="false">Video & Audio</button>
                </div>
              </nav>
            </div>
            <div class="navtab-style1">
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active fz15 text" id="nav-item1" role="tabpanel" aria-labelledby="nav-item1-tab">
                  <div class="row">
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-1.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">Start an online business and work from home</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-2.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">Front becomes an official Instagram Marketing Partner</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-3.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">Engendering a culture of professional development</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-4.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">Increasing engagement with Instagram</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-5.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">11 Tips to Help You Get New Clients Through Cold Calling</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-6.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">How to “Woo” a Recruiter and Land Your Dream Job</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-7.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">Hey Job Seeker, It’s Time To Get Up And Get Hired</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-8.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1 line-clamp2"><a href="#">4 Learning Management System Design Tips For Better eLearning</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-9.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">A Better Alternative To Grading Student Writing</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-10.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">Exactly How Technology Can Make Reading Better</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-11.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1 line-clamp2"><a href="#">Why Public Schools Should Continue To Use Remote Learning</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-12.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">The Benefits Of Using Technology In Learning</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade fz15 text" id="nav-item2" role="tabpanel" aria-labelledby="nav-item2-tab">
                  <div class="row">
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-1.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">Start an online business and work from home</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-2.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">Front becomes an official Instagram Marketing Partner</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-3.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">Engendering a culture of professional development</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-4.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">Increasing engagement with Instagram</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-5.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">11 Tips to Help You Get New Clients Through Cold Calling</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-6.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">How to “Woo” a Recruiter and Land Your Dream Job</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-7.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">Hey Job Seeker, It’s Time To Get Up And Get Hired</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-8.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1 line-clamp2"><a href="#">4 Learning Management System Design Tips For Better eLearning</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-9.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">A Better Alternative To Grading Student Writing</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-10.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">Exactly How Technology Can Make Reading Better</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-11.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1 line-clamp2"><a href="#">Why Public Schools Should Continue To Use Remote Learning</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-12.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">The Benefits Of Using Technology In Learning</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade fz15 text" id="nav-item3" role="tabpanel" aria-labelledby="nav-item3-tab">
                  <div class="row">
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-1.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">Start an online business and work from home</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-2.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">Front becomes an official Instagram Marketing Partner</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-3.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">Engendering a culture of professional development</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-4.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">Increasing engagement with Instagram</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-5.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">11 Tips to Help You Get New Clients Through Cold Calling</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-6.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">How to “Woo” a Recruiter and Land Your Dream Job</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-7.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">Hey Job Seeker, It’s Time To Get Up And Get Hired</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-8.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1 line-clamp2"><a href="#">4 Learning Management System Design Tips For Better eLearning</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-9.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">A Better Alternative To Grading Student Writing</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-10.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">Exactly How Technology Can Make Reading Better</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-11.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1 line-clamp2"><a href="#">Why Public Schools Should Continue To Use Remote Learning</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-12.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">The Benefits Of Using Technology In Learning</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade fz15 text" id="nav-item4" role="tabpanel" aria-labelledby="nav-item4-tab">
                  <div class="row">
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-1.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">Start an online business and work from home</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-2.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">Front becomes an official Instagram Marketing Partner</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-3.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">Engendering a culture of professional development</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-4.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">Increasing engagement with Instagram</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-5.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">11 Tips to Help You Get New Clients Through Cold Calling</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-6.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">How to “Woo” a Recruiter and Land Your Dream Job</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-7.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">Hey Job Seeker, It’s Time To Get Up And Get Hired</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-8.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1 line-clamp2"><a href="#">4 Learning Management System Design Tips For Better eLearning</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-9.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">A Better Alternative To Grading Student Writing</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-10.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">Exactly How Technology Can Make Reading Better</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-11.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1 line-clamp2"><a href="#">Why Public Schools Should Continue To Use Remote Learning</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-12.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">The Benefits Of Using Technology In Learning</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade fz15 text" id="nav-item5" role="tabpanel" aria-labelledby="nav-item5-tab">
                  <div class="row">
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-1.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">Start an online business and work from home</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-2.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">Front becomes an official Instagram Marketing Partner</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-3.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">Engendering a culture of professional development</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-4.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">Increasing engagement with Instagram</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-5.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">11 Tips to Help You Get New Clients Through Cold Calling</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-6.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">How to “Woo” a Recruiter and Land Your Dream Job</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-7.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">Hey Job Seeker, It’s Time To Get Up And Get Hired</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-8.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1 line-clamp2"><a href="#">4 Learning Management System Design Tips For Better eLearning</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-9.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">A Better Alternative To Grading Student Writing</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-10.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">Exactly How Technology Can Make Reading Better</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-11.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1 line-clamp2"><a href="#">Why Public Schools Should Continue To Use Remote Learning</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-12.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">The Benefits Of Using Technology In Learning</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade fz15 text" id="nav-item6" role="tabpanel" aria-labelledby="nav-item6-tab">
                  <div class="row">
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-1.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">Start an online business and work from home</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-2.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">Front becomes an official Instagram Marketing Partner</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-3.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">Engendering a culture of professional development</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-4.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">Increasing engagement with Instagram</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-5.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">11 Tips to Help You Get New Clients Through Cold Calling</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-6.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">How to “Woo” a Recruiter and Land Your Dream Job</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-7.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">Hey Job Seeker, It’s Time To Get Up And Get Hired</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-8.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1 line-clamp2"><a href="#">4 Learning Management System Design Tips For Better eLearning</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-9.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">A Better Alternative To Grading Student Writing</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-10.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">Exactly How Technology Can Make Reading Better</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-11.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1 line-clamp2"><a href="#">Why Public Schools Should Continue To Use Remote Learning</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-12.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">The Benefits Of Using Technology In Learning</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade fz15 text" id="nav-item7" role="tabpanel" aria-labelledby="nav-item7-tab">
                  <div class="row">
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-1.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">Start an online business and work from home</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-2.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">Front becomes an official Instagram Marketing Partner</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-3.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">Engendering a culture of professional development</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-4.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">Increasing engagement with Instagram</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-5.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">11 Tips to Help You Get New Clients Through Cold Calling</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-6.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">How to “Woo” a Recruiter and Land Your Dream Job</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-7.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">Hey Job Seeker, It’s Time To Get Up And Get Hired</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-8.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1 line-clamp2"><a href="#">4 Learning Management System Design Tips For Better eLearning</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-9.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">A Better Alternative To Grading Student Writing</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-10.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">Exactly How Technology Can Make Reading Better</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-11.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1 line-clamp2"><a href="#">Why Public Schools Should Continue To Use Remote Learning</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-12.jpg" alt=""></div>
                        <div class="blog-content">
                          <a class="date" href="#">December 2, 2022</a>
                          <h4 class="title mt-1"><a href="#">The Benefits Of Using Technology In Learning</a></h4>
                          <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="mbp_pagination text-center">
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
              <li class="page-item"><a class="page-link" href="#">5</a></li>
              <li class="page-item"><a class="page-link" href="#">...</a></li>
              <li class="page-item"><a class="page-link" href="#">20</a></li>
              <li class="page-item">
                <a class="page-link" href="#"><span class="fas fa-angle-right"></span></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

@endsection