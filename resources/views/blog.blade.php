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

      .blog-style1:hover .title, .blog-style1:hover .title a {
          color: var(--color-bleu) !important;
          text-decoration: underline;
      }
  </style>
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<div class="body_content">
   
  <section class="breadcumb-section mt40 mt-5">
    <div class="cta-about-v1 mx-auto maxw1700 pt120 pb120 bdrs16 position-relative overflow-hidden d-flex align-items-center mx20-lg">
      <div class="container">
        <div class="row">
          <div class="col-xl-5">
            <div class="position-relative">
              <h2 class="text-white">BLOG</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- <section class="account-section">
    <div class="tf-container">
      <div class="row">
        <section class="page-title-dashboard">
            <div class="themes-container">
              <div class="row">
                <div class="col-lg-12 col-md-12 ">
                  <div class="title-dashboard">
                    <div class="title-dash flex2">Blog</div>
                  </div>
                </div>
              </div>
            </div>
          </section>
      </div>
    </div>
  </section> --}}

    <section class="our-blog">
        <div class="container">
            <div class="row">
              @forelse ($blogs as $blog)
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                      <div class="blog-img"><img class="w-100" style="height:250px" src="{{ asset('assets/images/blog/couverture/' . $blog->image_path) }}" alt=""></div>
                      <div class="blog-content">
                          <a class="date" href="#"><span class="icon-calendar"></span> {{ $blog->created_at->format('d/m/Y') }}</a>
                          <h4 class="title mt-1"><a href="{{ route('blog.details', ['id' => $blog->id]) }}">{{$blog->libelle}}</a></h4>
                          <p class="text mb-0">{{ (strlen($blog->description) > 100) ? substr($blog->description, 0, 100) . '...' : $blog->description }}</p>
                      </div>
                  </div>
                </div>
                
              @empty
                <div class="container">
                  <span>Rien à affiché pour le moment</span>
                </div>

              @endforelse
               
            </div>
            <div class="row">
              {{ $blogs->links() }}
            </div>
        </div>
    </section>

  </div>

  @endsection
