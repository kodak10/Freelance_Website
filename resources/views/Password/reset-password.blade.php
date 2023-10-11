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
    .mobilie_header_nav{
        background-color: #5BBB7B !important;
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

    <!-- LogIn -->
    <section class="our-login">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 m-auto wow fadeInUp" data-wow-delay="300ms">
            <div class="main-title text-center">
              <h2 class="title ">Rénistialliser le mot de passe</h2>
            </div>
          </div>
        </div>
        <div class="row wow fadeInRight" data-wow-delay="300ms">
          <div class="col-xl-6 mx-auto">
            <div class="log-reg-form search-modal form-style1 bgc-white p50 p30-sm default-box-shadow1 bdrs12">

                <div class="row">
                    @if(session('success') === false)
                        <div class="alert alert-danger">
                            {{ session('message') }}
                        </div>
                    @endif

                    @if(session('success') === true)
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif

                </div>

                <form method="post" action="{{route('send_mail')}}">

                    @csrf
                    <div class="mb20">
                        <label class="form-label fw600 dark-color">Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="email" required>
                    </div>

                    <div class="d-grid mb20">
                        <button class="ud-btn btn-thm" type="submit">Reinistialliser le mot de passe <i class="fal fa-arrow-right-long"></i></button>
                    </div>
                </form>


            </div>
          </div>
        </div>
      </div>
    </section>

@endsection