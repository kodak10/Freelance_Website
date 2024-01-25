@extends('layouts.app')
@section('content')
<style>
    .header{
        margin-bottom: 2rem !important;
    }
    
   
    .btn-thm{
          background-color: var(--color-jaune) !important;
          border-color: var(--color-jaune) !important;
          color: #ffffff !important;
      }
      .btn-thm-border{
        border-color: var(--color-jaune) !important;
        color: var(--color-jaune) !important;
      }
      #header.style-absolute #main-nav #menu-primary-menu>li>a{
        color: #000000 !important;
      }
      #header.style-absolute #main-nav #menu-primary-menu>li>a:hover{
        color: var(--color-jaune) !important;
      }
      #header.style-absolute #main-nav #menu-primary-menu>li.current-item>a{
        color: var(--color-jaune) !important ;
      }
      .iconbox-style9{
        padding: 20px !important;
      }
      .image-departement{
        width: 80% !important; 
        height:80% !important;
        margin:auto;"
  
      }
      .fa-check{
        margin-right: 10px;
      }
      @media (max-width:768px){
        .image-departement{
          width: 100% !important;
          height: 100% !important;
        }
       
      }
      span.icon{
            margin-right: 20px;
      }
  </style>
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<div class="body_content">
   
    <section class="pt40 pb0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-title mb50">
                        <h2 class="title">Blog Elbara Africa group</h2>
                        {{-- <p class="text mb-0">Give your visitor a smooth online experience with a solid UX design</p> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-blog">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xl-3">
                    <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="{{ asset('assets/images/about/about-1.jpg') }}" alt=""></div>
                        <div class="blog-content">
                            <a class="date" href="#">December 2, 2022</a>
                            <h4 class="title mt-1"><a href="">Start an online business and work from home</a></h4>
                            <p class="text mb-0">A complete guide to starting a small business online</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  </div>

  @endsection
