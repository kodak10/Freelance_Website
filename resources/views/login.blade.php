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
              <h2 class="title ">Connexion</h2>
            </div>
          </div>
        </div>
        <div class="row wow fadeInRight" data-wow-delay="300ms">
          <div class="col-xl-6 mx-auto">
            <div class="log-reg-form search-modal form-style1 bgc-white p50 p30-sm default-box-shadow1 bdrs12">
                <div class="mb30">
                    <h4>Nous sommes heureux de vous revoir!</h4>
                    <p class="text">Vous n'avez pas de compte ? <a href="/register" class="text-thm fw-bold">S'inscrire</a></p>
                </div>
                <div class="row">
                    @if(session('success') === false)
                        <div class="alert alert-danger">
                            {{ session('message') }}
                        </div>
                    @endif

                </div>

                <form method="post" action="{{route('postLogin')}}">

                    @csrf
                    <div class="mb20">
                        <label class="form-label fw600 dark-color">Email</label>
                        <input type="email" class="form-control" placeholder="elbaragroup@gmail.com" name="email">
                    </div>
                    <div class="mb15">
                        <label class="form-label fw600 dark-color">Mot de passe</label>
                        <input type="password" class="form-control" placeholder="*******" name="password">
                    </div>
                    <div class="checkbox-style1 d-block d-sm-flex align-items-center justify-content-between mb20">
                        <label class="custom_checkbox fz14 ff-heading">Se souvenir de moi
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                        </label>
                        <a class="fz14 ff-heading" href="#">Mot de passe oublié ?</a>
                    </div>
                    <div class="d-grid mb20">
                        <button class="ud-btn btn-thm" type="submit">Se Connecter <i class="fal fa-arrow-right-long"></i></button>
                    </div>
                </form>

                <div class="hr_content mb20"><hr><span class="hr_top_text">OU</span></div>

                <div class="d-md-flex justify-content-between">
                    <button class="ud-btn btn-google fz14 fw400 mb-2 mb-md-0" type="button"><i class="fab fa-google"></i> Avec Gmail</button>
                    <button class="ud-btn btn-fb fz14 fw400 mb-2 mb-md-0" type="button"><i class="fab fa-facebook-f pr10"></i> Avec Facebook</button>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection