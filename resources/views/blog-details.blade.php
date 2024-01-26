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

  <section class="blog-detail-01 page-title" style="background-image: url('{{ asset('assets/images/blog/couverture/' . $blog->image_path) }}') !important;"></section>

  <section>
        <div class="tf-container ">
          <div class="wrap-blog-detail blog-detail-01 blog-detail-side-bar-content" >               
            
                <div class="widget-blog-1 style-1">
                    <div class="content">
                        {{-- <span class="sub-title">Business</span> --}}
                        <h3 class="main-heading">{{ $blog->libelle }}</h3>
                        <ul class="meta">
                          {{-- <li class="author"><span>by</span>Avitex</li> --}}
                          <li class="time"><span class="icon-calendar"></span> Date de publication:  {{ $blog->created_at->format('d/m/Y') }}</li>
                        </ul>
                    </div>
                </div>
                <p>
                  {{ $blog->description }}
                </p>
                <div class="row">
                  <div class="col-lg-8">
                    <div class="video-thumb">
                
                      <ul class="thumb-menu menu-tab2 mt-3">
                        @foreach ($images as $image)
                        <li class="ct-tab2"> <a class="lightbox-gallery" href="/{{$image->file_path }}"><img src="/{{$image->file_path }}" alt="images"></a> </li>
                        @endforeach
            
                      </ul>
                  </div>
                  </div>
                  
                </div>
                <div class="tag-social">
                    
                    <div class="wd-social d-flex aln-center">
                      <span>Partager le post sur:</span>
                      <ul class="list-social d-flex aln-center">
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-pinterest"></i></a></li>
                        <li><a href="#"><i class="icon-instagram1"></i></a></li>
                        <li><a href="#"><i class="icon-youtube"></i></a></li>
                      </ul>
                    </div>
                </div>
                <div class="nav-links stc">
                  <div class="post-navigation previous-post">
                      @if($previousBlog)
                          <div class="title-post">
                              <a href="{{ route('blog.details', ['id' => $previousBlog->id]) }}" rel="prev">Précédent</a>
                          </div>
                          <p>{{ $previousBlog->libelle }}</p>
                      @endif
                  </div>
              
                  <div class="post-navigation next-post">
                      @if($nextBlog)
                          <div class="title-post text-end">
                              <a href="{{ route('blog.details', ['id' => $nextBlog->id]) }}" rel="next">Suivant</a>
                          </div>
                          <p>{{ $nextBlog->libelle }}</p>
                      @endif
                  </div>
              </div>
                
                
            </div>
            
        </div>
        
  </section>

  <section class="inner-jobs-section">
    <div class="tf-container">
   
    </div>
    </section>
  
@endsection