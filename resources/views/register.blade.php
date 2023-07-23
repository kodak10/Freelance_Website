
@extends('layouts.app')
@section('content')

<style>
    .nav-pills .active{
        background: #5BBB7B !important;
        color: #ffffff !important;
    }
    .nav-pills a{
        color: #000000 !important;
    }

</style>

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

    <!-- SignUp  -->
    <section class="our-register">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 m-auto wow fadeInUp" data-wow-delay="300ms">
            <div class="main-title text-center">
              <h2 class="title">Inscrivez-vous</h2>
            </div>
          </div>
        </div>
        <div class="row wow fadeInRight" data-wow-delay="300ms">
          <div class="col-xl-6 mx-auto">
            <div class="log-reg-form search-modal form-style1 bgc-white p50 p30-sm default-box-shadow1 bdrs12">
              <div class="mb30">
                <h4>Créons votre compte !</h4>
                <p class="text mt20">Vous avez déjà un compte ? <a href="/login" class="text-thm fw-bold">Connexion</a></p>
              </div>


              <ul class="nav nav-pills mb-3 mt-3 d-flex justify-content-between" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <a class="nav-link active" id="pills-client-tab" data-bs-toggle="pill" href="#pills-client" role="tab" aria-controls="pills-client" aria-selected="true">Je suis Client</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="pills-entreprise-tab" data-bs-toggle="pill" href="#pills-entreprise" role="tab" aria-controls="pills-entreprise" aria-selected="false">Je suis une Entreprise</a>
                </li>

              </ul>


              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-client" role="tabpanel" aria-labelledby="pills-client-tab">
                    <form action="">

                        <div class="mb20">
                            <label class="form-label fw600 dark-color">Nom</label>
                            <input type="text" class="form-control" placeholder="Kouassi">
                        </div>
                        <div class="mb20">
                            <label class="form-label fw600 dark-color">Prenoms</label>
                            <input type="text" class="form-control" placeholder="Jean-Dubois">
                        </div> 
                    </form>
                </div>


                <div class="tab-pane fade" id="pills-entreprise" role="tabpanel" aria-labelledby="pills-entreprise-tab">
                    <form action="">

                            <div class="mb20">
                               <label class="form-label fw600 dark-color">Nom d'entreprise</label>
                               <input type="text" class="form-control" placeholder="Holding industries">
                            </div>
                            <select class="form-select form-select-md mb-3 form-control" aria-label=".form-select-lg example">
                                <option selected>Selectionner le type d'entreprise</option>
                                <option value="nationale">Nationale</option>
                                <option value="multinationale">Multi Nationale</option>
                            </select>
                        </div>
                        <div class="mb20">
                            <label class="form-label fw600 dark-color">Email</label>
                            <input type="email" class="form-control" placeholder="projetencours@gmail.com">
                        </div>
                        <div class="mb15">
                            <label class="form-label fw600 dark-color">Mot de passe</label>
                            <input type="password" class="form-control" placeholder="*******">
                        </div>
                        <div class="d-grid mb20">
                            <a href="/administration" >
                              <button class="ud-btn btn-thm default-box-shadow2" type="button" style=" text-align :center; width :100%">S'Inscrire <i class="fal fa-arrow-right-long"></i></button>
                            </a>
                        </div>   
                    </form>
                </div>

              </div>

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